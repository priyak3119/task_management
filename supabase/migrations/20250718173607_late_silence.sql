/*
# Create tasks table

1. New Tables
  - `tasks`
    - `id` (bigint, primary key, auto increment)
    - `user_id` (bigint, foreign key to users table)
    - `title` (varchar 255, required)
    - `description` (text, optional)
    - `status` (enum: pending, in-progress, completed, default: pending)
    - `due_date` (date, optional)
    - `created_at` (timestamp)
    - `updated_at` (timestamp)

2. Indexes
  - Foreign key constraint on user_id
  - Index on status for filtering
  - Index on due_date for sorting

3. Security
  - Tasks belong to users (user_id foreign key)
*/

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', ['pending', 'in-progress', 'completed'])->default('pending');
            $table->date('due_date')->nullable();
            $table->timestamps();
            
            $table->index(['user_id', 'status']);
            $table->index('due_date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};