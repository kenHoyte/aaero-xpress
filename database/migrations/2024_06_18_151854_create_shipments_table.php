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
        Schema::create('shipments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('price', 10, 2)->nullable();
            $table->string('tracking_number')->unique()->nullable();
            $table->unsignedBigInteger('custshipment_id')->nullable();
            $table->string('status')->default('Pending');
            $table->boolean('received')->default(true);
            $table->boolean('in_transit')->default(false);
            $table->boolean('ready')->default(false);
            $table->boolean('delivered')->default(false);
            $table->timestamps();

            $table->index('user_id');
            $table->index('status');
            $table->index('tracking_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
