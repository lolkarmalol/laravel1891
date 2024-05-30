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
        Schema::create('truckers', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('population');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('salary');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->foreign('package_id')
                ->references('id')
                ->on('packages')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truckers');
    }
};
