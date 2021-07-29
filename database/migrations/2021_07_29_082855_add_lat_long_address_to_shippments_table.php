<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLatLongAddressToShippmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shippments', function (Blueprint $table) {
            $table->string('sender_name')->nullable();
            $table->string('s_lat')->nullable();
            $table->string('s_long')->nullable();
            $table->string('s_floor')->nullable();
            $table->string('s_building')->nullable();
            $table->string('s_street')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('r_lat')->nullable();
            $table->string('r_long')->nullable();
            $table->string('r_floor')->nullable();
            $table->string('r_building')->nullable();
            $table->string('r_street')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('extra_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shippments', function (Blueprint $table) {
            //
        });
    }
}
