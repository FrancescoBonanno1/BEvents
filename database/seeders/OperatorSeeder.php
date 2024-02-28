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
                    'name' => 'Federico Rossi',
                    'engagement_price' => 80.00,
                    'description' => 'Pianista classico con una passione per le composizioni contemporanee.',
                    'phone' => '111-222-3333',
                    'image' => 'cantante-1.jpg',
                    'address' => 'Via Quercia 789',
                    'foundation_year' => 2013,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 2,
                    'name' => 'Giulia Bianchi',
                    'engagement_price' => 60.00,
                    'description' => 'Violoncellista esperta con un repertorio che spazia dal classico al pop.',
                    'phone' => '444-555-6666',
                    'image' => 'cantante-2.jpg',
                    'address' => 'Via Frassino 456',
                    'foundation_year' => 2016,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 3,
                    'name' => 'Luca Moretti',
                    'engagement_price' => 70.00,
                    'description' => 'Chitarrista poliedrico con una predilezione per la musica latina.',
                    'phone' => '777-888-9999',
                    'image' => 'cantante-3.jpg',
                    'address' => 'Via Abete 234',
                    'foundation_year' => 2010,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 4,
                    'name' => 'Martina Ferrari',
                    'engagement_price' => 75.00,
                    'description' => 'Violinista eclettica che unisce tradizione e sperimentazione.',
                    'phone' => '123-987-6543',
                    'image' => 'cantante-4.jpg',
                    'address' => 'Via Cedro 567',
                    'foundation_year' => 2014,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 5,
                    'name' => 'Nicola De Santis',
                    'engagement_price' => 55.00,
                    'description' => 'Sassofonista appassionato di jazz moderno e improvvisazione libera.',
                    'phone' => '876-543-2109',
                    'image' => 'cantante-5.jpg',
                    'address' => 'Via Pino 789',
                    'foundation_year' => 2017,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 6,
                    'name' => 'Bob Marley',
                    'engagement_price' => 70.00,
                    'description' => 'Chitarrista appassionato con esperienza in rock e blues.',
                    'phone' => '123-456-7890',
                    'image' => 'cantante-6.jpg',
                    'address' => 'Via Acero 789',
                    'foundation_year' => 2012,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 7,
                    'name' => 'Francesco BuonAnimo',
                    'engagement_price' => 75.00,
                    'description' => 'Violinista addestrato classicamente, eccellente nelle performance orchestrali.',
                    'phone' => '456-789-0123',
                    'image' => 'cantante-7.jpg',
                    'address' => 'Via Olmo 321',
                    'foundation_year' => 2011,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 8,
                    'name' => 'Davide Salerno',
                    'engagement_price' => 65.00,
                    'description' => 'Sassofonista versatile esperto in jazz, funk e R&B.',
                    'phone' => '789-012-3456',
                    'image' => 'cantante-8.jpg',
                    'address' => 'Via Betulla 567',
                    'foundation_year' => 2014,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 9,
                    'name' => 'Eva Francellini',
                    'engagement_price' => 55.00,
                    'description' => 'Pianista talentuosa focalizzata su jazz e stili contemporanei.',
                    'phone' => '555-555-5555',
                    'image' => 'cantante-9.jpg',
                    'address' => 'Via Pino 123',
                    'foundation_year' => 2015,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 10,
                    'name' => 'Giulia Cavalieri',
                    'engagement_price' => 190.00,
                    'description' => 'Cantautrice e ballerina,vincitrice di amici e di Sanremo.',
                    'phone' => '555-555-5555',
                    'image' => 'cantante-10.jpg',
                    'address' => 'Via delle scuderie 123',
                    'foundation_year' => 2001,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 11,
                    'name' => 'Olivia Romano',
                    'engagement_price' => 65.00,
                    'description' => 'Flautista con una predilezione per la musica barocca e le sonorità eteree.',
                    'phone' => '234-567-8901',
                    'image' => 'cantante-11.jpg',
                    'address' => 'Via Castagno 123',
                    'foundation_year' => 2018,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 12,
                    'name' => 'Paolo Esposito',
                    'engagement_price' => 75.00,
                    'description' => 'Trombettista virtuoso con una passione per il jazz e le improvvisazioni energetiche.',
                    'phone' => '345-678-9012',
                    'image' => 'cantante-12.jpg',
                    'address' => 'Via Faggio 456',
                    'foundation_year' => 2015,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 13,
                    'name' => 'Quirino Martini',
                    'engagement_price' => 70.00,
                    'description' => 'Contrabbassista che spazia dal jazz al folk, con un tocco distintivo.',
                    'phone' => '567-890-1234',
                    'image' => 'cantante-13.jpg',
                    'address' => 'Via Salice 789',
                    'foundation_year' => 2013,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 14,
                    'name' => 'Rosa Marchetti',
                    'engagement_price' => 60.00,
                    'description' => 'Violista appassionata di musica da camera, con un repertorio diversificato.',
                    'phone' => '789-012-3456',
                    'image' => 'cantante-14.jpg',
                    'address' => 'Via Tiglio 234',
                    'foundation_year' => 2016,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 15,
                    'name' => 'Salvatore Ricci',
                    'engagement_price' => 55.00,
                    'description' => 'Chitarrista acustico con un approccio contemporaneo e influenze folk.',
                    'phone' => '901-234-5678',
                    'image' => 'cantante-15.jpg',
                    'address' => 'Via Rovere 567',
                    'foundation_year' => 2014,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 16,
                    'name' => 'Teresa Morelli',
                    'engagement_price' => 80.00,
                    'description' => 'Pianista virtuosa, esperta in repertori classici e contemporanei.',
                    'phone' => '123-456-7890',
                    'image' => 'cantante-16.jpg',
                    'address' => 'Via Abete 789',
                    'foundation_year' => 2011,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 17,
                    'name' => 'Umberto Rossi',
                    'engagement_price' => 65.00,
                    'description' => 'Trombonista appassionato di musica latina e fusion jazz.',
                    'phone' => '456-789-0123',
                    'image' => 'cantante-17.jpg',
                    'address' => 'Via Ontano 123',
                    'foundation_year' => 2017,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 18,
                    'name' => 'Valentina de lellis',
                    'engagement_price' => 70.00,
                    'description' => 'Violoncellista con un interesse speciale per la musica contemporanea sperimentale.',
                    'phone' => '789-012-3456',
                    'image' => 'cantante-18.jpg',
                    'address' => 'Via Pino 456',
                    'foundation_year' => 2012,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 19,
                    'name' => 'Walter White',
                    'engagement_price' => 75.00,
                    'description' => 'Tastierista esperto con una passione per la musica progressiva e il rock sinfonico.',
                    'phone' => '234-567-8901',
                    'image' => 'cantante-19.jpg',
                    'address' => 'Via Tiglio 789',
                    'foundation_year' => 2014,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => 20,
                    'name' => 'Nello Taver',
                    'engagement_price' => 55.00,
                    'description' => 'Nello Taver, nome d arte di Vincenzo Siciliano, è uno dei creator di YouTube e Twitch più apprezzati in Italia',
                    'phone' => '901-234-5678',
                    'image' => 'cantante-20.jpg',
                    'address' => 'Via Quercia 234',
                    'foundation_year' => 2016,
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

