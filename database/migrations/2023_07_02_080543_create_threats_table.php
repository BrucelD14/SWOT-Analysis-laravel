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
        Schema::create('threats', function (Blueprint $table) {
            $table->id();
            $table->string('faktor_strategis');
            $table->float('bobot');
            $table->float('rating');
            $table->float('score');
            $table->float('tingkat_signifikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threats');
    }
};
