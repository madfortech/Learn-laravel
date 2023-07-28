<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
class DatabaseSeeder extends Seeder


{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    use RefreshDatabase;


    public function run()
    {
       
        $this->call([
            PermissionsDemoSeeder::class,
        ]);
    }
}
