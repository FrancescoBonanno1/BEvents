<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use App\Models\Specialization;
use App\Http\Requests\StoreOperatorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operators = Operator::all();
        return view('admin.operators.index', compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $operators = Operator::all();
        $specializzations = Specialization::all();
        return view('admin.operators.create', compact('operators', 'specializzations'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOperatorRequest $request)
    {
        $user = auth()->user();
    
        // Verifica se l'utente ha già un operatore associato
        if ($user->operator) {
            return redirect()->back()->with('error', 'Hai già un operatore associato. Non puoi crearne un altro.');
        }
    
        // Se l'utente non ha un operatore associato, procedi con la creazione del nuovo operatore
        $validated = $request->validated();

        $file = "";
        $fileName = "";
        $filePath = "";

        if(isset($_FILES['file_upload']) && $_FILES["file_upload"]["size"] > 0){
            $file = $request->file('file_upload');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->store('uploads', 'public');
        }
    
        // Creazione di un nuovo operatore associato all'utente corrente
        $data = $request->all();
        $newOperator = new Operator();
        $newOperator->user_id = Auth::user()->id;
        $newOperator->name = $data["name"];
        $newOperator->engagement_price = $data["engagement_price"];
        $newOperator->description = $data["description"];
        $newOperator->phone = $data["phone"];
        $newOperator->filename = $fileName;
        $newOperator->original_name = $fileName;
        $newOperator->file_path = $filePath;
        $newOperator->address = $data["address"];
        $newOperator->foundation_year = $data["foundation_year"];
        $newOperator->save();
    
        // Se sono state fornite delle specializzazioni, le associate all'operatore appena creato
        if ($request->has('specializations')) {
            $newOperator->specializations()->attach($request->input('specializations'));
        }
    
        return redirect()->route("admin.operators.index")->with('success', 'Operatore creato con successo.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Operator $operator)
    {
        $user = auth()->user();
    
        // Verifica se l'operatore appartiene all'utente corrente
        if ($user->id !== $operator->user_id) {
            return abort(403, 'Non hai il permesso per visualizzare questo operatore.');
        }
    
        return view('admin.operators.show', compact('operator'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = auth()->user();
        $operator = Operator::findOrFail($id);
        $specializzations = Specialization::all();

        // Verifica se l'utente autenticato sta modificando il suo operatore, se l'id non corrisponde a quello dell'utente loggato porta alla pagina d'errore
        if ($user->operator->id !== $operator->id) {
            return redirect()->route('admin.error'); 
        }

        return view('admin.operators.edit', compact('operator', 'specializzations'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:1|max:50',
            'engagement_price' => 'required|numeric|min:0',
            'description' => 'required|min:1|max:300',
            'phone' => 'required|min:1|max:50',
            "file_upload" => "mimes:jpg,png|max:2048",
            'address' => 'required|min:1|max:50',
            'foundation_year' => 'required',
        ]);

        $operator = Operator::find($id);
        $data = $request->all();

        $file = "";
        $fileName = "";
        $filePath = "";

        if(!(isset($data["not_file"]))){
            if(strlen($operator->file_path) > 0){
                unlink("storage/".$operator->file_path);
            }

            $file = $operator->filename;
            $fileName = $operator->original_name;
            $filePath = $operator->file_path;

            if(isset($_FILES['file_upload']) && $_FILES["file_upload"]["size"] > 0){
                $file = $request->file('file_upload');
                $fileName = $file->getClientOriginalName();
                $filePath = $file->store('uploads', 'public');
            }
        }else{
            if(strlen($operator->file_path) > 0){
                unlink("storage/".$operator->file_path);
            }
        }

        $operator->user_id = Auth::user()->id;
        $operator->name = $data["name"];
        $operator->engagement_price = $data["engagement_price"];
        $operator->description = $data["description"];
        $operator->phone = $data["phone"];
        $operator->filename = $fileName;
        $operator->original_name = $fileName;
        $operator->file_path = $filePath;
        $operator->address = $data["address"];
        $operator->foundation_year = $data["foundation_year"];
        $operator->update();

        $operator->update($request->all());

       
        $operator->specializations()->sync($request->input('specializations', []));

        return redirect()->route('admin.operators.show', $operator)->with('success', 'Operatore aggiornato con successo.');
    }

    public function destroy(Operator $operator)
    {
        if(strlen($operator->file_path) > 0){
            unlink("storage/".$operator->file_path);
        }
        $operator->delete();

        return redirect()->route('admin.operators.index')->with('success', 'Operatore eliminato con successo.');
    }

}

