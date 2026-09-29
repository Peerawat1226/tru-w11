<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();                                    // 1. id
            $table->string('project_title');                 // 2. project_title
            $table->text('description')->nullable();         // 3. description
            $table->string('status', 50)->default('Proposed'); // 4. status
            $table->foreignId('student_id')                  // 5. student_id (Foreign Key)
                  ->constrained('student')
                  ->onDelete('cascade');
            $table->timestamps();                            // 6. created_at, 7. updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};