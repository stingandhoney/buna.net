<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuriesExaminateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juries_examinateurs', function (Blueprint $table) {
            $table->unsignedBigInteger('examinateur_id');
            $table->foreign('examinateur_id')->references('id')->on('people')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('jury_id');
            $table->foreign('jury_id')->references('id')->on('juries')->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['jury_id', 'examinateur_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juries_examinateurs');
    }
}
