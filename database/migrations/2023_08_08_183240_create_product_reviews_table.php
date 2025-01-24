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
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->text('review_title');
            $table->text('review');
            $table->unsignedInteger('rating')->default(0);
            $table->unsignedBigInteger('product_id')->nullable(); 
            $table->string('status')->default(0);
            $table->text('review_reason')->nullable();
            $table->softDeletes();
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_reviews');
    }
};
