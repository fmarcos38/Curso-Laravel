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
        Schema::create('images', function (Blueprint $table) {
            //$table->id(); //no necesito este id
            $table->string('url');

            $table->unsignedBigInteger('imagiable_id'); //ac refenc al user_id
            $table->string('imagiable_type'); //ac refernc al Modelo q administra la imagen: App\Models\()nombre del modelo al q pertenc la img

            //genero la clave compuesta
            $table->primary(['imagiable_id', 'imagiable_type']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
