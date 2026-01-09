<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id();                   // Primary key
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('users');
    }
};
