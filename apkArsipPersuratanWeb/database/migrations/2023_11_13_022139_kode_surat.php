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
        Schema::create('kode_surat', function (Blueprint $table){
            $table ->id('id_kode_surat');
            $table ->string('kode_surat');
            $table ->string('keterangan_kode_surat');
            $table  ->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kode_surat');
    }
};
