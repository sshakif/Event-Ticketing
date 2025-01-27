<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['super-admin', 'admin', 'accountant', 'user'];

        foreach ($roles as $roleName) {
            Role::updateOrCreate(
                ['name' => $roleName],
                ['guard_name' => 'web']
            );
        }
    }
}
