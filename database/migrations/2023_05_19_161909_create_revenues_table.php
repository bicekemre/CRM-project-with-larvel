<?php

use App\Models\Client;
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
        Schema::create('revenues', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->foreignIdFor(Client::class,'id_client');
            $table->foreignIdFor(Invoice::class,'id_invoice');
            $table->foreignIdFor(Service::class,'is_service');
            $table->boolean('payment_status');
            $table->string('desc');
            $table->string('payment');
            $table->tinyInteger('installment');
            $table->date('payment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revenues');
    }
};
