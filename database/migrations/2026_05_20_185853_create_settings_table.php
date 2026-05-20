<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {

    $table->id();

    $table->string('title')->nullable();

    $table->string('keywords')->nullable();

    $table->string('description')->nullable();

    $table->string('company')->nullable();

    $table->string('address')->nullable();

    $table->string('phone')->nullable();

    $table->string('fax')->nullable();

    $table->string('email')->nullable();

    $table->string('smtp_server')->nullable();

    $table->string('smtp_email')->nullable();

    $table->string('smtp_password')->nullable();

    $table->string('smtp_port')->nullable();

    $table->string('facebook')->nullable();

    $table->string('instagram')->nullable();

    $table->string('twitter')->nullable();

    $table->string('youtube')->nullable();

    $table->text('about_us')->nullable();

    $table->text('contact')->nullable();

    $table->text('references')->nullable();

    $table->string('status')->nullable();

    $table->timestamps();

});
    }

   
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
