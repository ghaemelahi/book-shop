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
        Schema::create('book__images', function (Blueprint $table) {
            $table->id();
            $table->string('path_image')->comment('عکس های کتاب');
            // $table->unsignedBigInteger('books_id')->nullable();
            // $table->foreign('books_id')->references('id')->on('books');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book__images');
    }
};
