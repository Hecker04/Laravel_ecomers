<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flashsales', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->decimal('original_price', 10, 2);
            $table->decimal('discount_price', 10, 2);
            $table->timestamp('start_time')->default(DB::raw('CURRENT_TIMESTAMP')); // Set default value
            $table->timestamp('end_time')->default(DB::raw('CURRENT_TIMESTAMP'));   // Set default value
            $table->integer('stock');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flashsales');
    }
};