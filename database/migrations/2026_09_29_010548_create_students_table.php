<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();                                    // 1. id
            $table->string('student_code', 20)->unique();    // 2. student_code
            $table->string('name');                          // 3. name
            $table->string('email')->unique();               // 4. email
            $table->foreignId('std_pgm_id')                  // 5. std_pgm_id (Foreign Key)
                  ->constrained('program')
                  ->onDelete('cascade');
            $table->timestamps();                            // 6. created_at, 7. updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};