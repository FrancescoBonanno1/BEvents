<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOperatorSponsorshipRequest;
use App\Models\Operator;
use App\Models\Sponsorship;
use Illuminate\Http\Request;

class OperatorSponsorshipController extends Controller
{
    public function create($operator_id){
        $sponsorships = Sponsorship::all();
        return view("admin.operators.operatorSponsorship", compact("operator_id", "sponsorships"));
    }

    public function store(StoreOperatorSponsorshipRequest $request, $operator_id){
        date_default_timezone_set("Europe/Rome");
        $data = $request->all();
        $newOperator = Operator::find($operator_id);
        if($data["sponsorship"] != 0){
            $date = date("Y-m-d H:i:s");
            $sponsorship = Sponsorship::find($data["sponsorship"]);
            $duration = $sponsorship->duration;
            $object_date = date_create($date);
            $result = date_add($object_date, date_interval_create_from_date_string($duration));
            $newOperator->sponsorships()->attach($data["sponsorship"], [
                "start_date" => $date,
                "end_date" => $result
            ]);
        }
        return redirect()->route("admin.operators.show", $operator_id);
    }
}
