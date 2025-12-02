<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// 1 first run this command... which will create this file
// php artisan make:migration create_listings_table
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { // 2 this is the table name listings
        Schema::create('listings', function (Blueprint $table) {

            // 3 here are the actual tables we can add as many as we want 
            $table->id();
            $table->string('title');
             $table->string('tags');
             $table->string('company');
             $table->string('location');
             $table->string('email');
             $table->string('website');
             $table->string('description');
            $table->timestamps();
        });
    }

    // 4 then we can run this in terminal 'php artisan migrate' to migrate our data
        
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
