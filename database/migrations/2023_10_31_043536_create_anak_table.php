<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnakTable extends Migration
{
    public function up()
{
    Schema::create('anak', function (Blueprint $table) {
        $table->id();
        $table->string('nama_anak');
        $table->date('tanggal_lahir'); // Ubah tipe kolom menjadi date
        $table->integer('tinggi_badan');
        $table->integer('berat_badan');
        $table->text('catatan')->nullable();
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('anak');
    }
}