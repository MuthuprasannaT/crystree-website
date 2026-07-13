<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('website_visitors', function (Blueprint $table) {
            $table->id();

            $table->string('visitor_id')->nullable();

            $table->string('ip_address')->nullable();

            $table->text('browser')->nullable();

            $table->string('device')->nullable();

            $table->string('platform')->nullable();

            $table->string('language')->nullable();

            $table->string('screen_resolution')->nullable();

            $table->string('timezone')->nullable();

            $table->string('country')->nullable();

            $table->string('city')->nullable();

            $table->string('page_url')->nullable();

            $table->string('referrer')->nullable();

            $table->enum('cookie_status', ['accepted', 'rejected', 'pending'])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('website_visitors');
    }
};
