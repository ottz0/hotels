<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            //$table->foreign('category_id')->references('id')->on('categories');
            $table->string('type');
            $table->string('title');
            $table->integer('price');
            $table->string('processor_line_1');
            $table->string('processor_line_2');
            $table->string('memory');
            $table->string('storage_line_1');
            $table->string('storage_line_2');
            $table->string('data');
            $table->integer('benchmark');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servers');
    }
};
