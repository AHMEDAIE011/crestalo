<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('one_categories', function (Blueprint $table) {
            $table->id();
             $table->string('name');
             $table->string('name_ar');
             $table->string('desc')->nullable();
             $table->string('desc_ar')->default('محتوي عربي');
            $table->string('slug');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }









    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('one_categories');
    }
};
