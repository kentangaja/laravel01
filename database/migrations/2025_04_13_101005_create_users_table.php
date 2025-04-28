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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_nama', 50);
            $table->string('user_alamat', 50);
            $table->string('user_username', 50);
            $table->string('user_email', 50);
            $table->char('user_notelp', 13);
            $table->string('user_password', 50);
            $table->enum('user_level', ['admin','anggota'])->default('anggota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
