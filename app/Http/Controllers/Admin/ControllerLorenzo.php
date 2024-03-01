<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use App\Models\Specialization;
use App\Http\Requests\StoreOperatorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        
        $user_id = Auth::user()->id;
        $how_much_operator = DB::table('operators')->where('user_id', $user_id)->count();
        $there_is_operator = false;
        if($how_much_operator == 0){
            $there_is_operator = false;
        }else{
            $there_is_operator = true;
        }
        return view('admin.operators.create', compact("there_is_operator", 'operators', 'specializzations'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOperatorRequest $request)
    {
        /*$validati = $request->validated();

        $newOperator = new Operator();
        $newOperator->fill($validated);
        $newOperator->save();

        
        return redirect()->route("admin.operators.index");*/

        $data = $request->all();
        $new_operator = new Operator();
        $new_operator->user_id = Auth::user()->id;
        $new_operator->name = $data["name"];
        $new_operator->engagement_price = $data["engagement_price"];
        $new_operator->description = $data["description"];
        $new_operator->phone = $data["phone"];
        $new_operator->image = $data["image"];
        $new_operator->address = $data["address"];
        $new_operator->foundation_year = $data["foundation_year"];
        $new_operator->save();
        return redirect()->route("admin.dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show(Operator $operator)
    {
        return view('admin.operators.show', compact('operator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $operator = Operator::findOrFail($id);
        $specializzations = Specialization::all(); 
        
        $user_id = Auth::user()->id;
        $how_much_operator = DB::table('operators')->where('user_id', $user_id)->count();
        $operator_id = DB::table('operators')->select("id")->where('user_id', $user_id)->get();
        $there_is_operator = false;
        if($how_much_operator == 0){
            $there_is_operator = false;
        }else{
            $there_is_operator = true;
        }
        return view('admin.operators.edit', compact("there_is_operator", "operator_id", 'operator', 'specializzations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Operator $operator)
    {
        $request->validate([
            'name' => 'required|min:1|max:50',
            'engagement_price' => 'required|numeric|min:0|max:50',
            'description' => 'required|min:1|max:300',
            'phone' => 'required|min:1|max:50',
            'image' => 'required|min:1|max:50',
            'address' => 'required|min:1|max:50',
            'foundation_year' => 'required',


        ]);

        $operator->update($request->all());

        // Aggiorna le specializzazioni associate
        $operator->specializations()->sync($request->input('specializations', []));

        /*return redirect()->route('admin.operators.index')->with('success', ' aggiornato con successo.');*/
        return redirect()->route("admin.dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operator $operator)
    {
        $operator->delete();

        return redirect()->route('admin.operators.index')->with('success', 'Operatore eliminato con successo.');
    }
}
