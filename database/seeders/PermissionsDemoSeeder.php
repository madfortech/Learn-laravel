<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create demo users
        $role1 = Role::create(['name' => 'user']);
        $user = \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' =>Hash::make('password'),
        ]);
        $user->assignRole($role1);

        $role2 = Role::create(['name' => 'admin']);
        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' =>Hash::make('password'),
        ]);
        $user->assignRole($role2);

    }
}