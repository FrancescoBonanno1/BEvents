<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use App\Models\Specialization;
use App\Http\Requests\StoreOperatorRequest;
use Illuminate\Http\Request;

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
    
        // Creazione di un nuovo operatore associato all'utente corrente
        $newOperator = new Operator();
        $newOperator->fill($validated);
        $user->operator()->save($newOperator);
    
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
        $operator = Operator::findOrFail($id);
        $specializzations = Specialization::all(); 

        return view('admin.operators.edit', compact('operator', 'specializzations'));
    }


    public function update(Request $request, Operator $operator)
    {
        $request->validate([
            'name' => 'required|min:1|max:50',
            'engagement_price' => 'required|numeric|min:0',
            'description' => 'required|min:1|max:300',
            'phone' => 'required|min:1|max:50',
            'image' => 'required|min:1|max:50',
            'address' => 'required|min:1|max:50',
            'foundation_year' => 'required',
        ]);

        $operator->update($request->all());

       
        $operator->specializations()->sync($request->input('specializations', []));

        return redirect()->route('admin.operators.show', $operator)->with('success', 'Operatore aggiornato con successo.');
    }

    public function destroy(Operator $operator)
    {
        $operator->delete();

        return redirect()->route('admin.operators.index')->with('success', 'Operatore eliminato con successo.');
    }

}

