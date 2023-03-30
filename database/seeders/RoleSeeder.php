<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'SuperAdmin']);
        $role2 = Role::create(['name' => 'Admin']);
        $role3 = Role::create(['name' => 'Moderador']);

        Permision::create(['name' => 'admin'])->syncRoles([$role1, $role2]);
        Permision::create(['name' => 'moderador'])->assignRole($role3);
        Permision::create(['name' => 'profile'])->syncRoles([$role1, $role2, $role3]);

        Permision::create(['name' => 'admin.home'])->syncRoles([$role1, $role2]);
        Permision::create(['name' => 'admin.users'])->syncRoles([$role1, $role2]);
        Permision::create(['name' => 'admin.users.create'])->syncRoles([$role1, $role2]);
        Permision::create(['name' => 'admin.users.edit'])->syncRoles([$role1, $role2]);
        Permision::create(['name' => 'admin.users.destroy'])->syncRoles([$role1, $role2]);
        Permision::create(['name' => 'admin.chats'])->syncRoles([$role1, $role2, $role3]);
    }
}
