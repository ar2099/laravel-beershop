<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beer', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descrizione');
            $table->string('paese_di_provenienza');
            $table->float('prezzo');
            $table->float('gradazione_alcolica');
            $table->string('tipo');
            $table->string('quantità');
            $table->string('volume');
            $table->string('url');
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
        Schema::dropIfExists('beer');
    }
}
