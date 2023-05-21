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
        Schema::create('lut_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendore_id')->comment('id of vendor table');
            $table->unsignedBigInteger('vendore_company_id')->comment('id of vendore company table');
            $table->string('year');
            $table->string('lut')->nullable();
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
        Schema::dropIfExists('lut_infos');
    }
};
