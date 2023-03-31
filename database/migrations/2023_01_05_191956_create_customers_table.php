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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('password');
            $table->string('mobile');
            $table->string('tin_no');
            $table->string('image')->nullable();
            $table->string('pincode');
            $table->string('currency')->nullable();
            $table->unsignedBigInteger('timezone_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('state');
            $table->unsignedBigInteger('city');
            $table->longText('address')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
