<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
   public function up(): void
{
    Schema::create('comments', function (Blueprint $table) {

        $table->id();

        $table->foreignId('product_id');

        $table->foreignId('user_id');

        $table->text('comment');

        $table->integer('rate');

        $table->string('ip')->nullable();

        $table->boolean('status')->default(true);

        $table->timestamps();

    });
}

   
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
