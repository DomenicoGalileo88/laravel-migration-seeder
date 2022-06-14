<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
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
            $table->string('duration', 50);
            $table->string('img')->nullable();
            $table->string('location');
            $table->tinyInteger('number_travelers');
            $table->string('city_departure');
            $table->date('date_departure');
            $table->date('date_return');
            $table->boolean('is_available');
            $table->decimal('price', 6, 2);
            $table->text('description')->nullable();
            $table->string('note', 100)->nullable();
            $table->timestamps();

            /* 
            Tours
            duration
            img
            location
            city_departure
            date_departure
            date_return
            is_available
            number_travelers
            description
            note
            price

            */
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
}
