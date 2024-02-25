<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     */
    public function up(): void
    {
        Schema::create('user_account_data_base', function (Blueprint $table) {
            $table->id();
            $table->string('first-name');
            $table->string('last-name');
            $table->string('email');
            $table->string('password');
            $table->string('AccountNumber');
            $table->string('number-phone');
            $table->string('street-address');
            $table->string('city');
            $table->string('region');
            $table->string('country');
            $table->string('AccountAmount');
            $table->string('postal-code');
            $table->string('UserAccount');
            $table->string('NumberDocument');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_account_data_base');
    }
};
