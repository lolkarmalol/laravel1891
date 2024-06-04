<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('truck_trucker', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trucker_id');
            $table->unsignedBigInteger('truck_id');
            $table->timestamps();

        });

        Schema::table('truck_trucker', function (Blueprint $table) {
            $table->foreign('trucker_id')->references('id')->on('truckers')->onDelete('cascade');
            $table->foreign('truck_id')->references('id')->on('trucks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_trucker');
    }
};
