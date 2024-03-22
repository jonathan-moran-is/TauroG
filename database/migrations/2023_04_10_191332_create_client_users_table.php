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
        Schema::create('client_users', function (Blueprint $table) {
            $table->id();
            $table->text('name', 45);
            $table->text('lastname', 45);
            $table->string('email', 75);
            $table->text('username', 45);
            $table->string('password');
            $table->timestamp('created');
            $table->timestamp('updated');
            $table->longtext('created_by');
            $table->longtext('updated_by');
            $table->string('status');

            $table->unsignedBigInteger('company_id')->nullable();

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
        Schema::dropIfExists('client_users');
    }
};
