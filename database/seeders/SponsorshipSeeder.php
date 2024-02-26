<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sponsorships = [
            ['duration' => '24:00:00', 'price' => 1.00],
            ['duration' => '48:00:00', 'price' => 5.00],
            ['duration' => '72:00:00', 'price' => 10.00],
        ];
        foreach ($sponsorships as $sponsorship) {
            $newsponsorship= new Sponsorship;
            $newsponsorship->duration=$newsponsorship['duration'];
            $newsponsorship->price=$newsponsorship['price'];

    
            $newsponsorship->save();
        }
    }

}
