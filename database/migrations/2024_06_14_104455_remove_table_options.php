<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('options');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('site_url');
            $table->string('site_name');
            $table->string('site_description');
            $table->string('site_keywords')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('site_favicon')->nullable();
            $table->string('site_copyright')->nullable();
            $table->timestamps();
        });
    }
};
