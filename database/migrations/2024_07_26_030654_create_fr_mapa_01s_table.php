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
        Schema::create('fr_mapa_01s', function (Blueprint $table) {
            $table->id();
            $table->text('kandidat');
            $table->text('tujuan');
            $table->text('konteks');
            $table->text('konfirmasi');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fr_mapa_01s');
    }
};
