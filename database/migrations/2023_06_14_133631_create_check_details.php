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
        Schema::create('check_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('check_id');
            $table->foreign('check_id')->references('id')->on('checkouts');
            $table->unsignedBigInteger('prod_id');
            $table->foreign('prod_id')->references('id')->on('products');
            $table->integer('amount');
            $table->integer('total_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_details');
    }
};
