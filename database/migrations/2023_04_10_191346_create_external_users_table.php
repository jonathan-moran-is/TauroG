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
        Schema::create('external_users', function (Blueprint $table) {
            $table->id();

            $table->string('name', 45);
            $table->string('lastname', 45);
            $table->text('status');
            $table->string('email', 75);
            $table->string('username', 45);
            $table->string('password');
            $table->timestamp('created');
            $table->timestamp('updated');
            $table->longtext('created_by');
            $table->longtext('updated_by');
            $table->unsignedBigInteger('matrix_id')->nullable();

            //$table->foreign('matrix_id')
            //        ->references('id')->on('matrix')
            //        ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_users');
    }
};
