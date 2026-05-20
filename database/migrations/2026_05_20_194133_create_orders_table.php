<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
{
    Schema::create('orders', function (Blueprint $table) {

        $table->id();

        $table->foreignId('user_id');

        $table->string('name');

        $table->string('surname');

        $table->string('email');

        $table->string('phone');

        $table->string('address');

        $table->double('total');

        $table->string('ip')->nullable();

        $table->string('status')->default('new');

        $table->timestamps();

    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
