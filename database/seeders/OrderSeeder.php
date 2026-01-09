<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'user_id' => 1,
            'product' => 'Laptop',
            'quantity' => 2
        ]);

        Order::create([
            'user_id' => 1,
            'product' => 'Mouse',
            'quantity' => 1
        ]);

        Order::create([
            'user_id' => 2,
            'product' => 'Keyboard',
            'quantity' => 1
        ]);

        Order::create([
            'user_id' => 3,
            'product' => 'Monitor',
            'quantity' => 2
        ]);
    }
}
