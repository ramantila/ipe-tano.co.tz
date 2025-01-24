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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('business_id');
            $table->integer('total_review')->default(0);
            $table->string('total_rating')->default(0);
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
        Schema::dropIfExists('services');
    }
};
