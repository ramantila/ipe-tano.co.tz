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
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job')->nullable();
            $table->string('business_name');
            $table->string('business_title')->nullable();
            $table->string('business_registration')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('country_id');
            $table->string('business_email')->nullable();
            $table->integer('business_phone')->nullable();
            $table->unsignedInteger('user_id')->nullable(); 
            $table->integer('status')->default(0);
            $table->integer('claim')->default(0);
            $table->integer('verify')->default(0);
            $table->integer('transfer')->default(0);
            $table->integer('display')->default(0);
            $table->integer('account')->nullable();
            $table->string('headquarters')->nullable();
            $table->string('website')->nullable();
            $table->text('slogan')->nullable();
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->string('letter')->nullable();
            $table->string('business_licence')->nullable();
            $table->string('company_reg')->nullable();
            $table->integer('total_review')->default(0);
            $table->string('total_rating')->default(0);
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('category_id')
            ->references('id')->on('categories')->onUpdate('cascade');

            $table->foreign('country_id')
            ->references('id')->on('countries')->onUpdate('cascade');
                
            $table->foreign('user_id')
            ->references('id')->on('users')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
