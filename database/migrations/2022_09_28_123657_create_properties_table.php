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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_type');
            $table->string('sell_type');
            $table->string('title');
            $table->longText('address');
            $table->string('city');
            $table->string('town');
            $table->integer('rooms');
            $table->integer('baths');
            $table->integer('square');
            $table->string('image')->nullable();
            $table->longText('description');
            $table->integer('price');
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
        Schema::dropIfExists('properties');
    }
};
