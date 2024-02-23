<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'operator_id' => 1,
                'text' => 'Ciao! Come posso aiutarti oggi?',
                'user_email' => 'utente1@example.com',
                'author' => 'Operatore 1'
            ],
            [
                'operator_id' => 2,
                'text' => 'Buongiorno! Sono qui per rispondere alle tue domande.',
                'user_email' => 'utente2@example.com',
                'author' => 'Operatore 2'
            ],
            
        ];
        foreach ($messages as $message) {
            $newmessage= new Message();
            $newmessage->operator_id=$message['operator_id'];
            $newmessage->text=$message['text'];
            $newmessage->user_email=$message['user_email'];
            $newmessage->author=$message['author'];

            $newmessage->save();
        }
    }
}
