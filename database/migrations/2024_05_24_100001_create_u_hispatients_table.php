<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('u_hispatients', function (Blueprint $table) {
            $table->id();
            $table->string('CODE')->unique();
            $table->string('U_LASTNAME');
            $table->string('U_FIRSTNAME');
            $table->string('U_MIDDLENAME')->nullable();
            $table->date('U_BIRTHDATE')->nullable();
            $table->string('U_GENDER')->nullable();
            $table->string('U_EXTNAME')->nullable();
            $table->integer('U_VISITCOUNT')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('u_hispatients');
    }
};
