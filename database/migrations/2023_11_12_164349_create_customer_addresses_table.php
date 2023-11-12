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
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->string(column:'type',length:50);
            $table->string(column:'address_1',length:255);
            $table->string(column:'address_2',length:255);
            $table->string(column:'city',length:255);
            $table->string(column:'state',length:255)->nullable();
            $table->string(column:'zip_code',length:255);
            $table->string(column:'country_code',length:255);
            $table->foreignId(column:'customer_id')->references(column:'id')->on(table:'customers');
            $table->timestamps();
            $table->foreignId(column:'country_code')->references(column:'code')->on(table:'countries');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_addresses');
    }
};
