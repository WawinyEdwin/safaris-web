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
        Schema::create('accomodations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('slug')->unique();
            $table->string("category");
            $table->string("image");
            $table->string("image2");
            $table->string("image3");
            $table->string("image4");
            $table->string("location");
            $table->string("rates");
            $table->text("description");
            $table->integer('user_id');
            $table->integer('published')->default(0);
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
        Schema::dropIfExists('accomodations');
    }
};
