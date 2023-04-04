<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('visitados', function (Blueprint $table) {
            $table->id('ID');
            $table->string('NOM');
            $table->string('LOC');
            $table->longText('WEB');
            $table->string('HOT_APAR');
            $table->string('PRE');
            $table->string('DIN_GASTADO');
            $table->string('IMG');
            $table->string('NOTES');
            $table->integer('VAL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitados');
    }
};
