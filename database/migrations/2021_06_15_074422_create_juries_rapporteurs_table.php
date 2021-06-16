<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuriesRapporteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juries_rapporteurs', function (Blueprint $table) {
            $table->unsignedBigInteger('rapporteur_id');
            $table->foreign('rapporteur_id')->references('id')->on('people')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('jury_id');
            $table->foreign('jury_id')->references('id')->on('juries')->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['jury_id', 'rapporteur_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juries_rapporteurs');
    }
}
