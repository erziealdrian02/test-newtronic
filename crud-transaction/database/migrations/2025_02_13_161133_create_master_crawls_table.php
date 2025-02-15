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
        Schema::create('master_crawls', function (Blueprint $table) {
            $table->id();
            $table->string('currency')->nullable();
            $table->string('denomination')->nullable();
            $table->decimal('buy', 10, 5);
            $table->decimal('sell', 10, 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_crawls');
    }
};
