<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Specializationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specializations = [ 
                ['name' => 'Pianoforte', 'background_image' => 'piano.jpg'],
                ['name' => 'Chitarra', 'background_image' => 'guitar.jpg'],
                ['name' => 'Violino', 'background_image' => 'violin.jpg'],
                ['name' => 'Canto', 'background_image' => 'vocal.jpg'],
                ['name' => 'Batteria', 'background_image' => 'drums.jpg'],
            
        ];

        foreach ($specializations as $specialization) {
            $newspecialization= new Specialization;
            $newspecialization->name=$specialization['name'];
            $newspecialization->background_image=$specialization['background_image'];

            $newspecialization->save();
        }
    }
    }
