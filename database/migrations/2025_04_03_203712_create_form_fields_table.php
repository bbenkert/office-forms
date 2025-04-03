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
    Schema::create('form_fields', function (Blueprint $table) {
        $table->id();
        $table->foreignId('form_page_id')->constrained()->onDelete('cascade');
        $table->string('label');
        $table->string('name');
        $table->string('type'); // text, email, textarea, etc.
        $table->boolean('required')->default(false);
        $table->integer('order_column')->default(0); // for field ordering
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_fields');
    }
};
