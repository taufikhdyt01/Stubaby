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
        Schema::create('tiket_konsultasis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul_tiket');
            $table->string('pengirim')->nullable();
            $table->enum('status', ['Selesai', 'Pending']);
            $table->unsignedBigInteger('id_ahligizi');
            $table->unsignedBigInteger('id_irt'); 
            // Foreign key constraints
            $table->foreign('id_ahligizi')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_irt')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_konsultasis');
    }
};
