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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('book_title');
            $table->string('book_writer');
            $table->string('status');
            $table->string('translator')->comment('مترجم')->nullable();
            $table->string('print_publisher')->comment('ناشر چاپی');
            $table->string('year_of_publication')->comment('سال انتشار');
            $table->string('format_book',100)->comment('فرمت کتاب');
            $table->bigInteger('electronic_price')->comment('قیمت نسخه الکترونیک');
            $table->text('description')->comment('توضیحات');
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
        Schema::dropIfExists('books');
    }
};
