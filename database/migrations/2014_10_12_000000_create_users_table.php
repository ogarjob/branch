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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 45);
            $table->string('last_name', 45)->nullable();
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone', 45)->nullable()->unique();
            $table->enum('gender', ['M', 'F'])->default('M')->index();
            $table->string('password')->nullable();
            $table->string('photo')->nullable();
            $table->enum('type', ['admin', 'customer'])->default('customer');
            $table->rememberToken();
            $table->timestamps();
            $table->authors();
            $table->softDeletes();

            $table->fullText(['last_name', 'first_name', 'phone', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
