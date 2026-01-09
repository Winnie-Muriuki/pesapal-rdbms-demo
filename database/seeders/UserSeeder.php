<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Alice Johnson',
            'email' => 'alice@example.com'
        ]);

        User::create([
            'name' => 'Bob Smith',
            'email' => 'bob@example.com'
        ]);

        User::create([
            'name' => 'Charlie Brown',
            'email' => 'charlie@example.com'
        ]);
    }
}
