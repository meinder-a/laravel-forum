<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    public function up()
    {
        Schema::create('threads', function (Blueprint $table): void
        {
            $table->id();
            $table->string('subject');
            $table->string('slug')->unique();
            $table->string('content');
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->foreignId('posted_by');
            $table->foreignId('category_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('threads');
    }
}