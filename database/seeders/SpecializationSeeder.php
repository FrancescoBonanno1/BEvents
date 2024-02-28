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
            ['name' => 'Pianoforte', 'background_image' => 'config/img/specializzazioni/IMG_1191.jpg'],
            ['name' => 'Chitarra', 'background_image' => 'config/img/specializzazioni/IMG_1191.jpg'],
            ['name' => 'Violino', 'background_image' => 'config\img\specializzazioni\IMG_1190.jpg'],
            ['name' => 'Canto', 'background_image' => 'config\img\specializzazioni\IMG_1192.jpg'],
            ['name' => 'Batteria', 'background_image' => 'config\img\specializzazioni\IMG_1194.jpg'],
            ['name' => 'Musicista', 'background_image' => 'config\img\specializzazioni\IMG_1195.jpg'],
            ['name' => 'Fonico', 'background_image' => 'config\img\specializzazioni\IMG_1196.jpg'],
            ['name' => 'Produttore', 'background_image' => 'config\img\specializzazioni\IMG_1197.jpg'],
            ['name' => 'Tecnico del suono', 'background_image' => 'config\img\specializzazioni\IMG_1198.jpg'],
            ['name' => 'Tecnico Luci', 'background_image' => 'config\img\specializzazioni\IMG_1199.jpg'],
            ['name' => 'Tastierista', 'background_image' => 'config\img\specializzazioni\IMG_1200.jpg'],
            ['name' => 'Violoncellista', 'background_image' => 'config\img\specializzazioni\IMG_1201.jpg'],
            ['name' => 'Saxofonista', 'background_image' => 'config\img\specializzazioni\IMG_1202.jpg'],
            ['name' => 'Trombettista', 'background_image' => 'config\img\specializzazioni\IMG_1203.jpg'],
            ['name' => 'DJ', 'background_image' => 'config\img\specializzazioni\IMG_1206.jpg'],
            
        ];

        foreach ($specializations as $specialization) {
            $newspecialization= new Specialization;
            $newspecialization->name=$specialization['name'];
            $newspecialization->background_image=$specialization['background_image'];

            $newspecialization->save();
        }
    }
    }
