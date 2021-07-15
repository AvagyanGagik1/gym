<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_news', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('quote_en');
            $table->string('quote_ru');
            $table->string('quote_blr');
            $table->text('text_en');
            $table->text('text_ru');
            $table->text('text_blr');
            $table->string('text_title_en');
            $table->string('text_title_ru');
            $table->string('text_title_blr');
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
        Schema::dropIfExists('main_news');
    }
}
