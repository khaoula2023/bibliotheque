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
    
        Schema::create('Livre', function (Blueprint $table) {
            $table->id();
            $table->integer('code livre')->unique();
            $table->integer('code interne')->unique();
            $table->integer('code externe')->unique();
            $table->string('titre');
            $table->string('titre parallele');
            $table->string('Auteur');
            $table->string('classification');
            $table->string('classement');
            $table->string('categorie');
            $table->string('langue');
            $table->string('maison d edition');
            $table->string('nombre de pages');
            $table->string('Statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Livre');
    }
};
