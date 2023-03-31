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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('shop_company_id');
            $table->unsignedBigInteger('customer_id');
            $table->string('vehical_no')->nullable();
            $table->date('invoice_date');
            $table->decimal('total_price',10,2);
            $table->decimal('total_weight',10,2);
            $table->boolean('is_email_send')->default(false);
            $table->enum('payment_status',['paid','partial','unpaid'])->default('unpaid');
            $table->decimal('paid_amount',10,2)->default(0.00);
            $table->unsignedBigInteger('bill_currency_id')->nullable();
            $table->string('customer_name');
            $table->string('customer_mobile');
            $table->string('customer_tpin');
            $table->softDeletes();
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
        Schema::dropIfExists('bills');
    }
};
