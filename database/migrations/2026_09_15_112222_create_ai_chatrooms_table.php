<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ai_chatrooms', function (Blueprint $table) {

            $table->id();

            $table->bigInteger('customer_id')->nullable();

            $table->string('title')->default('New Chat')->nullable();

            $table->string('status')->default('active');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_chatrooms');
    }
};