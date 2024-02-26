<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operators', function (Blueprint $field) {
            $field->id();
            $field->unsignedBigInteger("user_id")->nullable();
            $field->foreign("user_id")->references("id")->on("users")->nullOnDelete();
            $field->string ("name", 20);
            $field->decimal("engagement_price")->nullable();
            $field->text("description");
            $field->string("phone",20);
            $field->string("image");
            $field->string("address", 50);
            $field->year("foundation_year")->nullable();
            $field->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operators');
    }
};
