<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        Role::create([
            'role' => 'admin',
        ]);
        Role::create([
            'role' => 'editor',
        ]);
        Role::create([
            'role' => 'user',
        ]);
    }
}
