<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHwoWeAreDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwo_we_are_descriptions', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('hwo_we_are_descriptions');
    }
}
