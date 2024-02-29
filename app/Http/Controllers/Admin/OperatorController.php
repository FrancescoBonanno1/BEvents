<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Operator;
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
        return view('admin.operators.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOperatorRequest $request)
    {
        $validati = $request->validated();

        $newOperator = new Operator();
        $newOperator->fill($validati);
        $newOperator->save();


        return redirect()->route("admin.operators.index");
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
            'name' => 'required|min:1|max:50',
            'engagement_price' => 'required|numeric|min:0|max:50',
            'description' => 'required|min:1|max:300',
            'phone' => 'required|min:1|max:50',
            'image' => 'required|min:1|max:50',
            'address' => 'required|min:1|max:50',
            'foundation_year' => 'required',


        ]);

        $operator->update($request->all());

        return redirect()->route('admin.operators.index')->with('success', ' aggiornato con successo.');
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
