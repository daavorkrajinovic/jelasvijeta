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
        Schema::create('jela', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('jezik');
            $table->string('korisnik_dodao'); 
            $table->unsignedBigInteger('kategorija_id')->nullable();
            $table->unsignedBigInteger('tag_id');  
            $table->unsignedBigInteger('sastojci_id'); 
            $table->string('status')->default('aktivan'); // ako se neko jelo makne iz ponude da ima mogucnost ponovnog vraćanja u ponudu
            $table->timestamps(); 

            $table->foreign('kategorija_id')->references('id')->on('kategorija');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jela');
    }
};
