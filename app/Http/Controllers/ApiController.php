<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Operator;
use App\models\Vote;
use App\models\Review;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* messaggi - voti - recensioni */
        $operators = Operator::all();
        $votes = Vote::all();
        $reviews = Review::all();
    
        $responseData = [
            'operators' => $operators,
            'votes' => $votes,
            'reviews' => $reviews,
        ];
    
        return response()->json($responseData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
