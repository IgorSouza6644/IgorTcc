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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeempresa');
            $table->string('localidadevaga');
            $table->string('nomevaga');
            $table->string('descricaovaga');
            $table->string('respvaga');
            $table->string('reqvaga');
            $table->string('infoadcvaga');
            $table->decimal('salariovaga');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vagas');
    }
};
