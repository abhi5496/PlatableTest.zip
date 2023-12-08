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
        Schema::create('doneted_foods', function (Blueprint $table) {
            $table->id();
            $table->string('donor_name')->default('');
            $table->string('food_name')->default('');
            $table->unsignedBigInteger('donor_id');
            $table->foreign('donor_id')->references('id')->on('donors');
            $table->unsignedBigInteger('food_item_id');
            $table->foreign('food_item_id')->references('id')->on('food_items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doneted_foods');
    }
};
