<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuriesEncadreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juries_encadreurs', function (Blueprint $table) {
            $table->unsignedBigInteger(' encadreur_id');
            $table->foreign(' encadreur_id')->references('id')->on('people')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('jury_id');
            $table->foreign('jury_id')->references('id')->on('juries')->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['jury_id', ' encadreur_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juries_encadreurs');
    }
}
