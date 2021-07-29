<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUserVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_vehicles', function (Blueprint $table) {

            $table->string('vehicle_registration_image')->nullable();
            $table->string('model')->nullable();
            $table->string('name')->nullable();
            $table->string('registration_city')->nullable();
            $table->string('body_size')->nullable();
            $table->string('capacity')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_vehicles', function (Blueprint $table) {
            //
        });
    }
}
