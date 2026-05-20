<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
{
    Schema::create('shop_carts', function (Blueprint $table) {

        $table->id();

        $table->foreignId('user_id');

        $table->foreignId('product_id');

        $table->integer('quantity');

        $table->timestamps();

    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('shop_carts');
    }
};
