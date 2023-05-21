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
        Schema::create('rols_to_user', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('rol_id')->references('id')->on('rols');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rols_to_user');
    }
};
