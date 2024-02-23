<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Operator;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $operators = [
            [
                'user_id' => 1,
                'name' => 'John Doe',
                'engagement_price' => 50.00,
                'description' => 'Talented musician with a passion for jazz.',
                'phone' => '123-456-7890',
                'image' => 'john_doe.jpg',
                'address' => '123 Main Street',
                'foundation_year' => 2005,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'name' => 'Alice Smith',
                'engagement_price' => 60.00,
                'description' => 'Versatile artist specializing in classical music and opera.',
                'phone' => '987-654-3210',
                'image' => 'alice_smith.jpg',
                'address' => '456 Oak Avenue',
                'foundation_year' => 2010,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($operators as $operator) {
            $newoperator= new Operator;
            $newoperator->user_id=$operator['user_id'];
            $newoperator->name=$operator['name'];
            $newoperator->engagement_price=$operator['engagement_price'];
            $newoperator->description=$operator['description'];
            $newoperator->phone=$operator['phone'];
            $newoperator->image=$operator['image'];
            $newoperator->address=$operator['address'];
            $newoperator->foundation_year=$operator['foundation_year'];

            $newoperator->save();
        }
    }
    }

