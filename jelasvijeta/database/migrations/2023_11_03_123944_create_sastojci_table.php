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
        Schema::create('sastojci', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('korisnik_dodao');
            $table->timestamp('vrijeme_dodavanja');
            $table->string('jezik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sastojci');
    }
};
