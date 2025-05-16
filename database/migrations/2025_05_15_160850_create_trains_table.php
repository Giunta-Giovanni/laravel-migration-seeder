<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Migrazione per creare la tabella treni

    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('company', 200);
            $table->string('train_type', 50);
            $table->string('departure_station', 60);
            $table->string('arrival_station', 60);
            $table->time('departure_time');
            $table->time('arrival_time')->nullable(); // può non essere noto
            $table->string('train_number', 5);
            $table->unsignedTinyInteger('platform')->nullable(); // se non si sa ancora
            $table->boolean('is_on_time')->nullable(); // se non si sa ancora
            $table->unsignedTinyInteger('delay_minutes')->nullable();
            $table->boolean('is_cancelled')->default(false);
            $table->timestamps();
        });
    }



    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
