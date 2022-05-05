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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->text('full_name');
            $table->text('email_address');
            $table->text('phone_number');
            $table->text('destinations');
            $table->text('nationality');
            $table->text('travel_date');
            $table->text('adults');
            $table->text('kids');
            $table->text('budget');
            $table->text('medium');
            $table->text('luxury');
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
        Schema::dropIfExists('enquiries');
    }
};
