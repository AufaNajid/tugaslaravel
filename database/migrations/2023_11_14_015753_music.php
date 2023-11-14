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
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('penyanyi',100);
            $table->integer('umur');
            $table->string('lagu',100);
            $table->string('genre',100);
            $table->timestamps();      

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
