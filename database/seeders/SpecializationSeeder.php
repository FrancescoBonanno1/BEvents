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
            ['name' => 'Pianoforte', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Chitarra', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Violino', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Canto', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Batteria', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Musicista', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Fonico', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Produttore', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Tecnico del suono', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Tecnico Luci', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Tastierista', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Violoncellista', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Saxofonista', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'Trombettista', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            ['name' => 'DJ', 'background_image' => 'https://www.bettermusic.com.au/media/catalog/product/p/-/p-225b_corner_angle_with_musicrest.jpg?optimize=high&fit=bounds&height=&width='],
            
        ];

        foreach ($specializations as $specialization) {
            $newspecialization= new Specialization;
            $newspecialization->name=$specialization['name'];
            $newspecialization->background_image=$specialization['background_image'];

            $newspecialization->save();
        }
    }
    }
