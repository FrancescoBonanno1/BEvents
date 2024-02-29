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
        $validated = $request->validated();

        $newOperator = new Operator();
        $newOperator->fill($validated);
        $newOperator->save();

       
        if ($request->has('specializations')) {
            $newOperator->specializations()->attach($request->input('specializations'));
        }

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
    public function edit($id)
    {
        $operator = Operator::findOrFail($id);
        $specializzations = Specialization::all(); 
        
        return view('admin.operators.edit', compact('operator', 'specializzations'));
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
