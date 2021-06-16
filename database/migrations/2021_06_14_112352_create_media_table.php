<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('medium_type');
            $table->string('location');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('jury_id');
            $table->foreign(['jury_id', 'author_id'])->references(['jury_id', 'author_id'])->on('documents')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();

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
        Schema::dropIfExists('media');
    }
}
