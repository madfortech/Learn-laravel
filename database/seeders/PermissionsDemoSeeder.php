<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        
        // create permissions
        Permission::create(['name' => 'create-articles']);
        Permission::create(['name' => 'edit-articles']);
        Permission::create(['name' => 'delete-articles']);
        Permission::create(['name' => 'publish-articles']);
        Permission::create(['name' => 'unpublish-articles']);
        
        // create roles and assign existing permissions
         
 
        $role1 = Role::create(['name' => 'Super-Admin']);

        $role2 = Role::create(['name' => 'manager']);
        $role2->givePermissionTo('create-articles');
        $role2->givePermissionTo('edit-articles');
        $role2->givePermissionTo('publish-articles');
        // gets all permissions via Gate::before rule; see AuthServiceProvider
 
        // create demo users

        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ])->givePermissionTo(Permission::all());
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole($role2);
    }
}