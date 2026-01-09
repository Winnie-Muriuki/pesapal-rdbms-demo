<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();                        // Primary key
            $table->foreignId('user_id')->constrained('users'); // FK to users
            $table->string('product');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('orders');
    }
};
