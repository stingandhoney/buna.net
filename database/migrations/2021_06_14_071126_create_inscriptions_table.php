<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('organism_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('academic_year');
            $table->string('ufr');
            $table->string('level_of_study');
            $table->primary(['organism_id', 'person_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
