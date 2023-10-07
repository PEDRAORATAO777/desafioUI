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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId(column: 'categorie_id')->constrained();
            $table->string(column: 'name');
            $table->string(column: 'image');
            $table->string(column: 'price');
            $table->string(column: 'categorie');
            $table->foreign('categorie_id')->references('id')->on('Categorie');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
