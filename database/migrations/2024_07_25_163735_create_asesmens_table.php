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
        Schema::create('asesmens', function (Blueprint $table) {
            $table->id();
            $table->boolean('elemen1_k')->nullable();
            $table->boolean('elemen1_bk')->nullable();
            $table->string('elemen1_bukti1')->nullable();
            $table->string('elemen1_bukti2')->nullable();
            $table->string('elemen1_bukti3')->nullable();
            $table->string('elemen1_bukti4')->nullable();

            // Elemen 2
            $table->boolean('elemen2_k')->nullable();
            $table->boolean('elemen2_bk')->nullable();
            $table->string('elemen2_bukti1')->nullable();
            $table->string('elemen2_bukti2')->nullable();
            $table->string('elemen2_bukti3')->nullable();
            $table->string('elemen2_bukti4')->nullable();

            // Elemen 3
            $table->boolean('elemen3_k')->nullable();
            $table->boolean('elemen3_bk')->nullable();
            $table->string('elemen3_bukti1')->nullable();
            $table->string('elemen3_bukti2')->nullable();
            $table->string('elemen3_bukti3')->nullable();
            $table->string('elemen3_bukti4')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesmens');
    }
};
