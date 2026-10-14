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
        Schema::create('readies', function (Blueprint $table) {
            $table->integer('id_borrow')->primary()->autoIncrement();
            $table->string('nama_alat');
            $table->integer('jumlah');
            $table->string('image')->nullable();
            $table->timestamps();
        });

       
    }//rehan12pplg2

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readies');
    }
};
