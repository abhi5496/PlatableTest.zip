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
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            $table->string('food_name');
            $table->string('food_description');
            $table->string('food_expiry_date');
            $table->string('food_quantity');
            // $table->unsignedBigInteger('donor_id');
            // $table->foreign('donor_id')->references('id')->on('donors');
            // $table->unsignedBigInteger('recipient_id');
            // $table->foreign('recipient_id')->references('id')->on('recipients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_items');
    }
};
