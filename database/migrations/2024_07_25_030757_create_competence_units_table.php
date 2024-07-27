<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetenceUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competence_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('certification_id')->constrained()->onDelete('cascade');
            $table->string('kode_unit');
            $table->string('judul_unit');
            $table->text('standar_kompetensi_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competence_units');
    }
}

