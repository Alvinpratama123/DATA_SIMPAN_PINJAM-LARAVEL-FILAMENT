<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'super_admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'User',
                'guard_name' => 'web'
            ],
            [
                'name' => 'User2',
                'guard_name' => 'web'
            ]
        ]);
    }
}
