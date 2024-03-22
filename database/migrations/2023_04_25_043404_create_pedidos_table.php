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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('pedido_id');
            $table->unsignedBigInteger('user_id');
            $table->string('resposable');
            $table->string('numero_afiliacion');
            $table->string('tipo_pedido');
            $table->integer('tamaño_pedido');
            $table->string('tipo_alimento');
            $table->date('fecha_recoleccion');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
