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
        Schema::create('vendor_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendore_id');
            $table->string('company_name');
            $table->string('logo');
            $table->string('satamp_logo');
            $table->string('profile_image');
            $table->string('time_zone');
            $table->string('currency');
            $table->string('vendor_name');
            $table->string('vendore_email');
            $table->string('vendore_mobile');
            $table->string('signature');
            $table->string('vendore_address');
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
        Schema::dropIfExists('vendor_details');
    }
};
