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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->text('body');
            /* col para user_ID */
            $table->unsignedBigInteger('user_id')->nullable();
            /* col para categoria_ID */
            $table->unsignedBigInteger('categoria_id')->nullable();
            
            /* creo la FK con user */
            $table->foreign('user_id') //columna a la q asigno como FK
                ->references('id') //col de donde tomo el dato
                ->on('users') //tabla con la q se relaciona
                ->onDelete('set null'); //metodoligia por si se elim el dato en la tabla USERS

            /* creo la FK con Categorias */
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
