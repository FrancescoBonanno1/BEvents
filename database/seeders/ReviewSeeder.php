<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'operator_id' => 1,
                'vote_id' => 5,
                'comment' => 'Servizio eccezionale! Consiglio vivamente.',
                'author' => 'Cliente soddisfatto',
                'user_email' => 'cliente1@example.com',
                
            ],
            [
                'operator_id' => 2,
                'vote_id' => 3,
                'comment' => 'Buona esperienza complessiva. Potrebbe migliorare in alcune aree.',
                'author' => 'Utente anonimo',
                'user_email' => 'utente2@example.com',
                
            ],
        ];
            foreach ($reviews as $review) {
                $newreview= new Review;
                $newreview->operator_id=$review['operator_id'];
                $newreview->vote_id=$review['vote_id'];
                $newreview->comment=$review['comment'];
                $newreview->author=$review['author'];
                $newreview->user_email=$review['user_email'];
                
                $newreview->save();
        }


    }
}
