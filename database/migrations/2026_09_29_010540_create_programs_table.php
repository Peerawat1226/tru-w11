<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program', function (Blueprint $table) {
            $table->id();                                    // 1. id
            $table->string('pgm_code', 10)->unique();        // 2. pgm_code
            $table->string('pgm_name');                      // 3. pgm_name
            $table->string('degree', 50);                    // 4. degree
            $table->timestamps();                            // 5. created_at, 6. updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};