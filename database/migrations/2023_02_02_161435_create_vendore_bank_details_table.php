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
        Schema::create('vendore_bank_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('vendore_id');
            $table->unsignedBigInteger('company_id');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('bank_ifsc');
            $table->string('account_no');
            $table->string('ad_code');
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
        Schema::dropIfExists('vendore_bank_details');
    }
};
