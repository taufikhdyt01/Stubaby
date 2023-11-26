<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Events\SendMessageEvent;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesan_tiket_konsultasis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_tiket_konsultasi');
            $table->unsignedBigInteger('pengirim_id'); // ID pengirim pesan
            $table->unsignedBigInteger('penerima_id'); // ID penerima pesan
            $table->text('pesan');
            
            // Foreign key constraints
            $table->foreign('id_tiket_konsultasi')->references('id')->on('tiket_konsultasis')->onDelete('cascade');
            $table->foreign('pengirim_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('penerima_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan_tiket_konsultasis');
    }
};
