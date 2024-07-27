<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuktiPersyaratanDasarsTable extends Migration
{
    public function up()
    {
        Schema::create('bukti_persyaratan_dasars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bagiansatu_id')->constrained()->onDelete('cascade');
            $table->boolean('memenuhi_syarat')->nullable();
            $table->boolean('tidak_memenuhi_syarat')->nullable();
            $table->string('tidakada')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bukti_persyaratan_dasars');
    }
}

