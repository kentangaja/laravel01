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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penulis_id')->constrained()->onUpdate('cascade');
            $table->foreignId('kategori_id')->constrained()->onUpdate('cascade');
            $table->foreignId('penerbit_id')->constrained()->onUpdate('cascade');
            $table->foreignId('rak_id')->constrained()->onUpdate('cascade');
            $table->string('buku_judul', 40);
            $table->char('buku_isbn', 16);
            $table->year('buku_thnterbit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
