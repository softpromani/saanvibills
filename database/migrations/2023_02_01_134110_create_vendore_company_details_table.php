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
        Schema::create('vendore_company_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendore_id');
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('created_by');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('invoice_series');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('pin');
            $table->string('gstin_tan_pan');
            $table->string('iec');
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
        Schema::dropIfExists('vendore_company_details');
    }
};
