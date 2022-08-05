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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('F_name');
            $table->string('L_name');
            $table->string('Email')->unique();
            $table->string('Pwd');
            $table->enum('Gender', array('Male', 'Female'));
            $table->binary('Picture');
            $table->enum('Country', array('India', 'Arabia'));
            $table->integer('Phone');
            $table->enum('Language', array('English', 'Arabic'));
            $table->string('Currency');
            $table->enum('Status', array('Active', 'Inactive'));
            $table->integer('Wallet');
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
        Schema::dropIfExists('user_infos');
    }
};
