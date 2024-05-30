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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation_id')->constrained()->cascadeOnDelete();

            $table->string('email_sender')->nullable();

            $table->unsignedBigInteger('email_receiver')->nullable();


            $table->timestamp('read_at')->nullable();

            //delete actions
            $table->timestamp('receiver_deleted_at')->nullable();
            $table->timestamp('sender_deleted_at')->nullable();

            $table->text('body')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
