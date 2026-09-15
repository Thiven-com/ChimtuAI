<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ai_messages', function (Blueprint $table) {

            $table->id();

            // Chatroom
            $table->bigInteger('chatroom_id')
                ->nullable();

            // user / assistant / system
            $table->string('role')
                ->nullable();

            // User question / AI response
            $table->longText('message')
                ->nullable();

            // Message type
            // text / image / file / audio
            $table->string('message_type')
                ->default('text')->nullable();

            // OpenAI
            $table->string('openai_response_id')
                ->nullable();

            $table->string('openai_model')
                ->nullable();

            // Token usage
            $table->unsignedInteger('input_tokens')
                ->nullable();

            $table->unsignedInteger('output_tokens')
                ->nullable();

            $table->unsignedInteger('total_tokens')
                ->nullable();

            // OpenAI request status
            // pending / processing / completed / failed
            $table->string('status')
                ->default('completed');

            // Store OpenAI error if request fails
            $table->text('error_message')
                ->nullable();

            // Time taken by OpenAI
            $table->unsignedInteger('response_time_ms')
                ->nullable();

            // Optional parent message
            // Useful if you implement regenerate/retry
            $table->bigInteger('parent_message_id')
                ->nullable();

            // Optional file/image information
            $table->string('file_url')
                ->nullable();

            $table->string('file_name')
                ->nullable();

            $table->string('file_type')
                ->nullable();

            // Additional OpenAI response data
            $table->json('metadata')
                ->nullable();

            // Soft delete if required later
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_messages');
    }
};