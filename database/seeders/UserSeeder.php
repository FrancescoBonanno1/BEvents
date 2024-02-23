<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Lorenzo',
                'email'=> 'TheBoss@due.it'
            ],
            [
                'name' => 'argesio',
                'email'=> 'TheBossing@due.it'
            ]
            ];

    foreach ($users as $user) {
        $newuser= new User;
        $newuser->name=$user['name'];
        $newuser->email=$user['email'];
        $newuser->password = Hash::make('password');

        $newuser->save();
    }
}
}
