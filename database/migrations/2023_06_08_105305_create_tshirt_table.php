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
        Schema::create('tshirt', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('pname');
            $table->string('amount');
            $table->string('product');
            $table->string('t_red')->nullable();
            $table->string('t_blue')->nullable();
            $table->string('t_black')->nullable();
            $table->string('t_white')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tshirt');
    }
};
