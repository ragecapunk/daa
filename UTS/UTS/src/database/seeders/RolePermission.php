<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        $role = Role::firstOrCreate(['name' => 'Peminjam']);

        $permissions = ['view_Peminjam', 'create_Peminjam', 'view_any_Peminjam'];

        foreach ($permissions as $perm) {
            $permission = Permission::firstOrCreate(['name' => $perm]);
            $role->givePermissionTo($permission);
        }
    }
}