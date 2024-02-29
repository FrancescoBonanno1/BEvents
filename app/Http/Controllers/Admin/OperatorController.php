<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Operator;
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
        return view('admin.operators.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( StoreOperatorRequest $request)
    {
        /*$validati = $request->validated();

        $newOperator = new Operator();
        $newOperator->fill($validati);
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
    public function edit(Operator $operator)
    {
        return view('admin.operators.edit', compact('operator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Operator $operator)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'engagement_price'=> 'required',
            'address'=> 'required',
            'foundation_year'=> 'required',

            
        ]);

        $operator->update($request->all());

        /*return redirect()->route('admin.operators.index')->with('success', ' aggiornato con successo.');*/
        return redirect()->route("admin.dashboard");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operator $operator)
    {
        $operator->delete();

        return redirect()->route('admin.operators.index') ->with('success', 'Operatore eliminato con successo.');
    }
}
