<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
{
    Schema::create('order_products', function (Blueprint $table) {

        $table->id();

        $table->foreignId('order_id');

        $table->foreignId('user_id');

        $table->foreignId('product_id');

        $table->double('price');

        $table->integer('quantity');

        $table->double('amount');

        $table->string('status')->default('new');

        $table->timestamps();

    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
