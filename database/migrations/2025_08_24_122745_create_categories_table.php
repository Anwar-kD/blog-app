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
            Schema::create('categories', function (Blueprint $table) {
                $table->engine = 'InnoDB'; // Pour pouvoir utiliser les clés étrangères et les transactions
                $table->timestamps();
                $table->bigIncrements('id_categorie'); // Clé primaire automatiquement créée avec "bigIncrements()".
                // "usigned()" nécessaire pour éventuellement pouvoir définir une clé étrangère sur cette colonne.
                $table->string('categorie');
                $table->string('description');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
