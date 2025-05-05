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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            $table->date('peminjaman_tglpinjam');
            $table->date('peminjaman_tglkembali');
            $table->boolean('peminjaman_statuskembali')->default(false); // false = belum kembali
            $table->string('peminjaman_note', 100);
            $table->unsignedInteger('peminjaman_denda')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
