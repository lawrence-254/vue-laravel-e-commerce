<?php
use App\Models\User;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string(column:'title', length:2024);
            $table->string(column:'slug', length:2024);
            $table->string(column:'image', length:2020)->nullable();
            $table->string(column:'image_mime')->nullable();
            $table->string(column:'image_size')->nullable();
            $table->longText(column:'description')->nullable();
            $table->decimal(column:'price', places:2,total:10);
            $table->foreignIdFor(model: User::class, column:'created_by')->nullable();
            $table->foreignIdFor(model: User::class, column:'updated_by')->nullable();
            $table->softDeletes();
            $table->foreignIdFor(model: User::class, column:'deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
