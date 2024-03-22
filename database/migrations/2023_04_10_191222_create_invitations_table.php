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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();

            $table->boolean('acepted');
            $table->text('status');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->text('created_by');
            $table->text('updated_by');
            $table->unsignedBigInteger('external_user_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();

            $table->foreign('external_user_id')
                    ->references('id')->on('external_users')
                    ->onDelete('set null');
                    
            $table->foreign('company_id')
                    ->references('id')->on('companies')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
