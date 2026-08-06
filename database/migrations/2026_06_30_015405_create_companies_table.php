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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_type_id')->nullable()->constrained('company_type')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 25)->nullable();
            $table->text('description')->nullable();
            $table->string('logo_path', 150)->nullable();
            $table->string('banner_path', 150)->nullable();
            $table->string('address')->nullable();
            $table->string('status')->default('active');
            $table->boolean('is_active')->default(true);
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
