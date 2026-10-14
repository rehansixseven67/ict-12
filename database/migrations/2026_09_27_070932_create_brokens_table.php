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
        Schema::create('brokens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->text('deskripsi');
            $table->string('image')->nullable();
            $table->enum('status', ['rusak', 'perbaikan'])->default('rusak');
            $table->timestamps();
        });
    }//rehan12pplg2

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brokens');
    }
};
