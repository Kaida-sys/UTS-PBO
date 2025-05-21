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
    Schema::create('nomor_sims', function (Blueprint $table) {
        $table->id();
        $table->string('nomor_sim')->unique();
        $table->enum('jenis_sim', ['A', 'B', 'C', 'D', 'Internasional']); // atau sesuaikan dengan jenis SIM di Indonesia
        $table->date('tanggal_berlaku');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nomor_sims');
    }
};
