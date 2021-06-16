<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('people');
            $table->foreignId('jury_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('category_id')->constrained();
            $table->mediumText('theme');
            $table->string('academic_year');
            $table->string('mention')->nullable();
            $table->string('speciality');
            $table->string('note')->nullable();
            $table->string('document_type');
            $table->date('defense_date');
            $table->mediumText('keywords');
            $table->mediumText('abstract_fr');
            $table->mediumText('abstract_en')->nullable();
            $table->string('symbol');
            $table->primary(['jury_id', 'author_id'], 'jury_author_id');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
