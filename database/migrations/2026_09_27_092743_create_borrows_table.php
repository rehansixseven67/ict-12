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
//rehan12pplg2
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->integer('borrow_id');
            $table->timestamps();

            $table->foreign('borrow_id')
                ->references('id_borrow')
                ->on('readies')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
