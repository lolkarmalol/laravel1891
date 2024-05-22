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
        Schema::create('user1s', function (Blueprint $table) {
            $table->id();
            $table->string('text');
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('user1s');
    }
};


