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
        Schema::create('pot_products', function (Blueprint $table) {
            $table->id();
            $table->string ('name', '255')->nullable('false');
            $table->string ('material', '255')->nullable('false');
            $table->string ('size','255')->nullable('false');
            $table->string ('weight','255')->nullable('false');
            $table->string ('price', '255')->nullable('false');
            $table->text ('collection')->nullable('false');
            $table->boolean ('active')->default(true);
            $table->timestamps();
            $table->softDeletes ();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pot_products');
    }
};
