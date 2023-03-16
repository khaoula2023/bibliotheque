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
            $table->integer('ISBN')->unique();
            $table->string('titre');
            $table->string('Auteur');
            $table->string('classement');
            $table->string('classification');
            $table->string(' edition');
            $table->string('nombre de pages');
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
