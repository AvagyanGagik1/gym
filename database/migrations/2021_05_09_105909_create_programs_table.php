<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('program_category_id')->unsigned();
            $table->bigInteger('trainer_id')->unsigned();
            $table->bigInteger('subscription_id')->unsigned();
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('name_blr');
            $table->string('image');
            $table->enum('type',['Hall','home']);
            $table->string('duration');
            $table->string('intensity_ru');
            $table->string('intensity_en');
            $table->string('intensity_blr');
            $table->text('description_en');
            $table->text('description_ru');
            $table->text('description_blr');
            $table->timestamps();

            $table->foreign('program_category_id')
                ->references('id')
                ->on('program_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('trainer_id')
                ->references('id')
                ->on('trainers')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('subscription_id')
                ->references('id')
                ->on('subscriptions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
