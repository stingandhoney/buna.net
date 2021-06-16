<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('diploma_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('institution')->nullable();
            $table->date('diploma_obtaining_date')->nullable();

            $table->primary(['diploma_id','person_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduates');
    }
}
