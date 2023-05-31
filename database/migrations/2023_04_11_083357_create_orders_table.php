<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();// nullable in case the user isn't logged in
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();

            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();

            $table->string('shipping_method');
            $table->decimal('shipping_amount', 8, 2)->nullable();
            $table->decimal('tax_amount', 8, 2)->nullable();
            $table->decimal('total', 8, 2);
            $table->string('payment_method');
            $table->string('payment_status')->default('pending');

            $table->string('status')->default('pending');
            $table->string('notes')->nullable();


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
        Schema::dropIfExists('orders');
    }
}
