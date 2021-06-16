<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuriesDirecteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juries_directeurs', function (Blueprint $table) {
            $table->unsignedBigInteger('directeur_id');
            $table->foreign('directeur_id')->references('id')->on('people')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('jury_id');
            $table->foreign('jury_id')->references('id')->on('juries')->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['jury_id', 'directeur_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juries_directeurs');
    }
}
