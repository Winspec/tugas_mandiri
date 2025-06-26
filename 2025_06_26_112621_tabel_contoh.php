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
        Schema::create('ulum', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('semester')->unique();
            $table->string('prodi');
            $table->char('TLPN', length: 50); //varchar(50)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulum');
    }
};
