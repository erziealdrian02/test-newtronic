<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('sport'); // Jenis olahraga (misal: soccer, basketball)
            $table->string('team_a'); // Tim pertama
            $table->string('team_b'); // Tim kedua
            $table->integer('score_a')->default(0); // Skor tim pertama
            $table->integer('score_b')->default(0); // Skor tim kedua
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
        Schema::dropIfExists('games');
    }
};
