<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();

        $table->foreignId('category_id');

        $table->string('title');
        $table->string('keywords')->nullable();
        $table->text('description')->nullable();

        $table->string('image')->nullable();

        $table->double('price');

        $table->integer('quantity');

        $table->longText('detail')->nullable();

        $table->boolean('status')->default(true);

        $table->timestamps();
    });
}
    
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
