<?php

namespace Database\Seeders;

use App\Models\OperatorSponsorship;
use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperatorSponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $operators_sponsorships = [
            [
                "operator_id" => 1,
                "sponsorship_id" => 1,
            ],
            [
                "operator_id" => 2,
                "sponsorship_id" => 2,
            ],
            [
                "operator_id" => 3,
                "sponsorship_id" => 3,
            ],
            [
                "operator_id" => 4,
                "sponsorship_id" => 1,
            ],
            [
                "operator_id" => 5,
                "sponsorship_id" => 2,
            ],
            [
                "operator_id" => 6,
                "sponsorship_id" => 3,
            ]
        ];

        date_default_timezone_set('Europe/Rome');

        foreach($operators_sponsorships as $operator_sponsorship){
            $new_operator_sponsorship = new OperatorSponsorship;
            $new_operator_sponsorship->operator_id = $operator_sponsorship["operator_id"];
            $new_operator_sponsorship->sponsorship_id = $operator_sponsorship["sponsorship_id"];
            $new_operator_sponsorship->start_date = date("Y-m-d H:i:s");

            $sponsorship = Sponsorship::find($operator_sponsorship["sponsorship_id"]);
            $duration = $sponsorship->duration;
            $date = date_create(date("Y-m-d H:i:s"));
            $result = date_add($date,date_interval_create_from_date_string($duration));
            $new_operator_sponsorship->end_date = $result;

            $new_operator_sponsorship->save();
        }
    }
}
