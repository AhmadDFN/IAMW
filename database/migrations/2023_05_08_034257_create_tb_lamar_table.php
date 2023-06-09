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
        Schema::create('tb_lamar', function (Blueprint $table) {
            $table->id();
            $table->string("lamar_kd");
            $table->string("lamar_nm");
            $table->string("lamar_NIM");
            $table->integer("lamar_id_loker");
            $table->timestamps();
            $table->index(['lamar_NIM','lamar_id_loker']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_lamar');
    }
};
