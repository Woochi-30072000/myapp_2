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
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('link',100)->default('#');
            $table->string('image',100);
            $table->string('description',255);
            $table->string('position',100)->default('#');
            $table->tinyInteger('prioty')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            // $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
