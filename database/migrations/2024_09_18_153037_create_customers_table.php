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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->string('phone',100);
            $table->string('address',100)->nullable();
            $table->tinyInteger('gender')->default(0);
            $table->string('password',100);
            $table->timestamp('email_verified_at')->nullable();
            // $table->tinyInteger('block')->default(0);
            $table->timestamps();
            // $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
