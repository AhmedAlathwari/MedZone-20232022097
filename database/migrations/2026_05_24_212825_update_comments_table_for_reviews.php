<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('comments', function (Blueprint $table) {

            $table->string('subject')
                  ->nullable()
                  ->after('user_id');

            $table->text('review')
                  ->nullable()
                  ->after('subject');

            $table->string('status')
                  ->default('new')
                  ->change();

        });
    }

    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {

            $table->dropColumn([
                'subject',
                'review'
            ]);

            $table->boolean('status')
                  ->default(true)
                  ->change();

        });
    }
};