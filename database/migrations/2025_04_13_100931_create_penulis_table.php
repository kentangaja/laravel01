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
        Schema::create('penulis', function (Blueprint $table) {
            $table->id();
            $table->string('penulis_nama', 50);
            $table->string('penulis_tmptlahir', 15);
            $table->date('penulis_tgllahir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penulis');
    }
};
