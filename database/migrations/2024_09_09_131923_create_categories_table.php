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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_ar')->default('اسم عربي');
            $table->string('desc');
            $table->string('desc_ar')->default('محتوي عربي');
            $table->string('image')->nullable();

            $table->string('slug');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreignId('one_category_id')->references('id')->on('one_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
