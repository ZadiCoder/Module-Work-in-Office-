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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('email');
            $table->string('password');
            $table->string('image');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address',255);
            $table->integer('zip_code');
            $table->integer('phone');
            $table->string('language');
            $table->integer('VAT');
            $table->enum('status', ['active', 'deactive'])->default('deactive');
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
        Schema::dropIfExists('companies');
    }
};
