<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('order_items');

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('unit_price', 8, 2);
            $table->timestamps();

            // Define foreign key relationships
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('product_id')->constrained('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
}




// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::dropIfExists('order_items');

//         Schema::create('order_items', function (Blueprint $table) {
//             $table->id();
//             $table->integer(column:'quantity');
//             $table->decimal(column:'unit_price');
//             $table->timestamps();
//             $table->foreignId(column:'order_id')->references(column:'id')->on(table:'orders');
//             $table->foreignId(column:'product_id')->references(column:'id')->on(table:'products');

//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('order_items');
//     }
// }; -->
