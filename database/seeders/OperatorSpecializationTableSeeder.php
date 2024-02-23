<?php

namespace Database\Seeders;

use App\Models\Operator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperatorSpecializationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $operator=Operator::find(1);
        $operator->specializations()->sync([1,2]);

        $operator=Operator::find(2);
        $operator->specializations()->sync([3,4,5]);
    }
}
