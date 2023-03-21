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
        
        Schema::create('Abonnes', function (Blueprint $table) {
            $table->id();
            $table->integer('Nom')->unique();
            $table->integer('Prenom')->unique();
            $table->integer('Nom_de_pere')->unique();
            $table->string('Date-de_naissance');
            $table->string('telephone');
            $table->string('Numero_CIN');
            $table->string('Email');
            $table->string('Prpfession');
            $table->string('Genre');
            $table->date('Adresse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Abonnes');
    }
};
