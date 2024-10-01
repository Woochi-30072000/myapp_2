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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('image',100);
            $table->float('price',10,2);
            $table->float('sale_price',10,2)->nullable();
            $table->unsignedInteger('category_id');
            $table->text('description');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            // $table->primary('id');
            $table->foreign('category_id')->references('id')->on('categories');
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
