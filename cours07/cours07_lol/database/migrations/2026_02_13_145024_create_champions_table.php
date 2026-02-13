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
        Schema::create('champions', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50)->unique(); // Teemo
            $table->string('titre', 150); // The swift scout
            $table->text('description')->nullable();
            $table->integer('attaque');
            $table->integer('defense');
            $table->integer('magie');
            $table->integer('difficulte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champions');
    }
};
