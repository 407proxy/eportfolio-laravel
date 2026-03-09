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
        Schema::create('page_headers', function (Blueprint $table) {
            $table->id();
            $table->string('page')->unique();
            $table->string('header');
            $table->string('subheader')->nullable();
            $table->string('updated_date')->nullable();
            $table->string('cta_header')->nullable();
            $table->text('cta_subheader')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_headers');
    }
};
