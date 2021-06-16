<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliates', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('organism_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('affiliates');
    }
}
