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
        Schema::create('seguimiento', function (Blueprint $table) {
            $table->id('seguimiento_id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('companies_id');
            $table->unsignedBigInteger('client_id');

            $table->string('producto');
            $table->timestamp('fecha_solicitud');
            $table->boolean('existencia');
            $table->json('unidad');
            $table->json('carga');
            $table->json('factura');
            $table->string('recorrido');
            $table->json('evidencia_final');
            //$table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('companies_id')->references('id')->on('companies');
            $table->foreign('client_id')->references('id')->on('client');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguimiento');
    }
};
