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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('bus_name');
            $table->string('plate_number');
            $table->string('class_id');
            $table->string('insurance_number');
            $table->string('bus_image');
            $table->integer('total_seats');
            $table->timestamp('depature_time')->nullable();

            $table->foreignId('driver_id')->constrained();
            $table->foreignId('company_id')->constrained();

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
        Schema::dropIfExists('buses');
    }
};
