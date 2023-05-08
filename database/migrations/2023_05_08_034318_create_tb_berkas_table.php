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
        Schema::create('tb_berkas', function (Blueprint $table) {
            $table->id();
            $table->string("berkas_kd")->unique();
            $table->string("berkas_skck");
            $table->string("berkas_kk");
            $table->string("berkas_ijazah");
            $table->integer("NIM");
            $table->timestamps();
            $table->index(["NIM"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_berkas');
    }
};
