<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('food_category_id')->unsigned();
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('name_blr');
            $table->text('description_en');
            $table->text('description_ru');
            $table->text('description_blr');
            $table->bigInteger('calories');
            $table->bigInteger('protein');
            $table->bigInteger('fats');
            $table->bigInteger('carbohydrates');
            $table->string('image');
            $table->timestamps();

            $table->foreign('food_category_id')
                ->references('id')
                ->on('food_categories')
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
        Schema::dropIfExists('dishes');
    }
}
