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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('paket_id')->constrained();
            $table->foreignId('status_id')->constrained();
            $table->integer('jumlah');
            $table->dateTime('tanggal_selesai', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
