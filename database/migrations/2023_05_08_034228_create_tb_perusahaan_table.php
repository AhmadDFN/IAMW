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
        Schema::create('tb_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string("perusahaan_nm");
            $table->string("perusahaan_alamat");
            $table->string("perusahaan_kota");
            $table->integer("perusahaan_notelp");
            $table->string("perusahaan_email");
            $table->string("perusahaan_website");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_perusahaan');
    }
};
