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

        $table->integer('category_id');

        $table->integer('user_id')->nullable();

        $table->string('title');

        $table->string('keywords')->nullable();

        $table->string('description')->nullable();

        $table->string('image')->nullable();

        $table->float('price')->default(0);

        $table->integer('quantity')->default(0);

        $table->integer('min_quantity')->default(5);

        $table->integer('tax')->default(0);

        $table->text('detail')->nullable();

        $table->string('status', 6)
              ->default('False');

        $table->timestamps();

    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
