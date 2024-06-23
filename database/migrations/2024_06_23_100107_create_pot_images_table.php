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
        Schema::create('pot_images', function (Blueprint $table) {
            $table->id ();
            $table->unsignedBigInteger ('pot_product_id')->nullable('true');
            $table->foreign ('pot_product_id')->references('id')->on('pot_products')->onDelete('cascade')->onUpdate('cascade');
            $table->string ('image', 255)->nullable('true');
            $table->text ('color')->nullable('true');
            $table->text ('texture')->nullable('true');
            $table->text ('description_image')->nullable('true');
            $table->timestamps ();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pot_images');
    }
};
