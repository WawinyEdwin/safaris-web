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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('hotel');
            $table->text('transport');
            $table->text('location');
            $table->text('category');
            $table->text('sub_category');
            $table->text('image');
            $table->text('image1');
            $table->text('image2');
            $table->text('per_person_sharing');
            $table->text('single_room');
            $table->text('meals');
            $table->text('additional_info')->nullable();
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
        Schema::dropIfExists('tours');
    }
};
