<?php


use Illuminate\Database\Seeder;
use App\Models\OperatorSponsorship;
use Carbon\Carbon;

class OperatorSponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ottieni l'operatore con ID 1 e la sponsorizzazione con ID 1
        $operator1 = \App\Models\Operator::find(1);
        $sponsorship1 = \App\Models\Sponsorship::find(1);

        // Verifica che entrambi esistano
        if ($operator1 && $sponsorship1) {
            // Calcola le date di inizio e fine con uno scarto di 24 ore
            $startDate1 = now();
            $endDate1 = now()->addHours(24);

            // Crea un nuovo record nella tabella ponte
            OperatorSponsorship::create([
                'operator_id' => $operator1->id,
                'sponsorship_id' => $sponsorship1->id,
                'start_date' => $startDate1,
                'end_date' => $endDate1,
            ]);
        } else {
            $this->command->info('Operatore o Sponsorizzazione non trovati. Assicurati di aver eseguito i seeder di Operator e Sponsorship.');
        }

        // Ottieni l'operatore con ID 1 e la sponsorizzazione con ID 2
        $operator2 = \App\Models\Operator::find(1);
        $sponsorship2 = \App\Models\Sponsorship::find(2);

        // Verifica che entrambi esistano
        if ($operator2 && $sponsorship2) {
            // Calcola le date di inizio e fine con uno scarto di 48 ore
            $startDate2 = now();
            $endDate2 = now()->addHours(48);

            // Crea un nuovo record nella tabella ponte
            OperatorSponsorship::create([
                'operator_id' => $operator2->id,
                'sponsorship_id' => $sponsorship2->id,
                'start_date' => $startDate2,
                'end_date' => $endDate2,
            ]);
        } else {
            $this->command->info('Operatore o Sponsorizzazione non trovati. Assicurati di aver eseguito i seeder di Operator e Sponsorship.');
        }
    }
}
