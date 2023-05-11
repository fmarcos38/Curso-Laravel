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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('descripcion', 150);
            $table->string('url', 45);
            /* creo campo para la relación - es el id de la tabla con la q se relaciona -> USER */
            $table->unsignedBigInteger('user_id')->nullable();
            /* le asigo a dicho campo antes creado FK */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
