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
        Schema::create('destinos', function (Blueprint $table) {
            $table->id('ID');
            $table->string('NOM');
            $table->string('LOC');
            $table->longText('WEB');
            $table->string('HOT_APAR');
            $table->string('PRE');
            $table->string('DIAS_PREV');
            $table->date('FEC_PREV');
            $table->string('IMG');
            $table->string('NOTES');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinos');
    }
};
