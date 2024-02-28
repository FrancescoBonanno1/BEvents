<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operator_sponsorships', function (Blueprint $table) {
            $table->unsignedBigInteger('operator_id');
            $table->foreign('operator_id')->references('id')->on('operators');

            $table->unsignedBigInteger('sponsorship_id');
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships');

            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->timestamps();
        });
        // DB::table('sponsorships')
        // ->join('operator_sponsorship', 'sponsorships.id', '=', 'operator_sponsorship.sponsorship_id')
        // ->update([
        //     'operator_sponsorship.end_date' => DB::raw('DATE_ADD(operator_sponsorship.start_date, INTERVAL sponsorships.duration HOUR')
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operator_sponsorship');
    }
};





//'DATE_ADD(operator_sponsorship.start_date, INTERVAL sponsorships.duration HOUR)'