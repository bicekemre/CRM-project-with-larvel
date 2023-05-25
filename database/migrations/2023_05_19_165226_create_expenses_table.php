<?php

use App\Models\Invoice;
use App\Models\Service;
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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->double('amount')->nullable();
            $table->foreignIdFor(Invoice::class,'id_invoice')->nullable();
            $table->foreignIdFor(Service::class,'id_service')->nullable();
            $table->boolean('is_paid')->nullable();
            $table->string('desc')->nullable();
            $table->string('payment')->nullable();
            $table->date('payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
