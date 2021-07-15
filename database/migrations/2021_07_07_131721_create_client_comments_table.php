<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_comments', function (Blueprint $table) {
            $table->id();
            $table->text('user_name_en');
            $table->text('user_name_ru');
            $table->text('user_name_blr');
            $table->string('image');
            $table->text('text_en');
            $table->text('text_ru');
            $table->text('text_blr');
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
        Schema::dropIfExists('client_comments');
    }
}
