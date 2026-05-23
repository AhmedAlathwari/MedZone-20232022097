<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'ffaqs',
            function (
                Blueprint $table
            ) {

            $table->id();

            $table->string(
                'question'
            );

            $table->text(
                'answer'
            );

            $table->string(
                'status',
                6
            )->default(
                'False'
            );

            $table->timestamps();

        });

    }

    public function down(): void
    {
        Schema::dropIfExists(
            'ffaqs'
        );
    }
};