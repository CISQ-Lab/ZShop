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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->foreignId('order_status_id')->constrained('order_status')->onDelete('cascade');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('tax', 10, 2)->nullable();
            $table->boolean('is_shipping_required')->default(false);
            $table->decimal('shipping_cost', 10, 2)->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->string('shipping_address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
