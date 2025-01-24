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
        Schema::create('business_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->text('review_title');
            $table->unsignedInteger('business_id');
            $table->text('review');
            $table->integer('rating')->default(0); 
            // $table->string('type')->nullable();
            $table->integer('status')->nullable();
            $table->text('review_reason')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('business_id')
            ->references('id')->on('businesses')->onUpdate('cascade');
            
            $table->foreign('user_id')
            ->references('id')->on('users')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_reviews');
    }
};
