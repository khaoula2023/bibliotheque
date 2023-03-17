<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('Livres', function (Blueprint $table) {
            $table->id();
            $table->integer('Code_interne')->unique();
            $table->integer('Code_externe')->unique();
            $table->integer('ISBN')->unique();
            $table->string('Titre');
            $table->string('Auteur');
            $table->string('Classement');
            $table->string('Classification');
            $table->string('Nom_edition');
            $table->string('Lieu_edition');
            $table->date('Date_edition');
            $table->integer('Nombre_de_pages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Livres');
    }
};
