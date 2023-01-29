<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prestation');
            $table->longText('addressdepart');
            $table->longText('addressdestin');
            $table->date('date');
            $table->time('heure');
            $table->integer('passagers');
            $table->integer('bagages');
            $table->string('promo')->nullable();
            $table->string('nomfacture');
            $table->string('sex');
            $table->string('nom');
            $table->string('prenom');
            $table->string('phone');
            $table->string('email');
            $table->longText('comment');
            $table->string('gamme');
            $table->float('prix');
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
        Schema::dropIfExists('reservations');
    }
}
