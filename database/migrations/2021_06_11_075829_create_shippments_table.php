<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippments', function (Blueprint $table) {
            $table->id();


            $table->string('user_id')->nullable();
            $table->string('sender_id')->nullable();
            $table->string('sender_address_id')->nullable();
            $table->string('receiver_id')->nullable();
            $table->string('receiver_address_id')->nullable();
            $table->string('book_as')->nullable();
            $table->string('ship_date')->nullable();
            $table->string('ship_time')->nullable();
            $table->string('dilivery_type')->nullable();
            $table->string('is_insured')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('show_receiver_info')->nullable();
            $table->string('shipping_fee')->nullable();
            $table->string('total_weight')->nullable();
            $table->string('package_cost')->nullable();
            $table->string('vehicle_type_id')->nullable();
            $table->string('vehicle_id')->nullable();
            $table->string('invoice_image')->nullable();
            $table->string('status_id')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('assigned_at')->nullable();
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
        Schema::dropIfExists('shippments');
    }
}
