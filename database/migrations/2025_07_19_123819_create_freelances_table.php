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
        Schema::create('freelances', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('client');
            $table->string('website_url')->nullable();
            $table->string('github_url')->nullable();
            $table->text('technologies');
            $table->text('features');
            $table->enum('status', ['completed', 'ongoing', 'planned'])->default('completed');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelances');
    }
};
