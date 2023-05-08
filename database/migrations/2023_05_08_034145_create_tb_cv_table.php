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
        Schema::create('tb_cv', function (Blueprint $table) {
            $table->id();
            $table->integer("NIM");
            $table->string("cv_filename");
            $table->string("cv_path");
            $table->timestamps();
            $table->index(["NIM"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_cv');
    }
};
