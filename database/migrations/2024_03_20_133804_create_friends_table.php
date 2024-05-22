<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->Integer('num1');
            $table->Integer('num2');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('friends');
    }
};