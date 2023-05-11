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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->text('biografia');
            $table->string('website', 45);
            /* campo FK ---> RELACION 1:1 <---*/
            $table->unsignedBigInteger('user_id')->unique();
            /* genero la relación */
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')  //para q SI se elim user se elimine SU perfil.
                ->onUpdate('cascade');  //para q SI modif su ID se modif tamb en la tabla perfil.
                //user_id->columna antes creada; id->col de la tabla users; on('users')->de q tabla toma

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
