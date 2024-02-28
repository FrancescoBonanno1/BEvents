<?php

namespace App\Http\Controllers;

use App\Models\OperatorSponsorship;
use App\Http\Requests\StoreOperatorSponsorshipRequest;
use App\Http\Requests\UpdateOperatorSponsorshipRequest;


class OperatorSponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreOperatorSponsorshipRequest $request)
    {

        // $operatorSponsorship = new OperatorSponsorship();
        // $operatorSponsorship->operator_id = 1; 
        // $operatorSponsorship->sponsorship_id = 1; 
        // $operatorSponsorship->start_date = now();

        // $sponsorship = Sponsorship::find(1); // Recupera la sponsorizzazione dal database
        // $operatorSponsorship->end_date = $operatorSponsorship->start_date->addHours($sponsorship->duration);

        // // Salva il record
        // $operatorSponsorship->save();

        // Restituisci una risposta o reindirizza come necessario
    }

    /**
     * Display the specified resource.
     */
    public function show(OperatorSponsorship $operatorSponsorship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OperatorSponsorship $operatorSponsorship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOperatorSponsorshipRequest $request, OperatorSponsorship $operatorSponsorship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OperatorSponsorship $operatorSponsorship)
    {
        //
    }
}
