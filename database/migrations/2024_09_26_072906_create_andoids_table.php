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
        Schema::create('andoids', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('topic'); // Title of the advertisement
            $table->text('description'); // Detailed description
            $table->string('phone'); // Phone number
            $table->string('image')->nullable(); // Path to the uploaded image
            $table->string('category'); 
            $table->string('location');// Category of the advertisement
            $table->decimal('price', 10, 2); // Price of the item
            $table->unsignedBigInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('andoids');
        
    }

    
};
