<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);

        $this->call(RoleSeeder::class);

        $this->call(ModelHasRolesSeeder::class);

        $this->call(PermissionSeeder::class);

        $this->call(planoSeeder::class);

        $this->call(TaxaSeeder::class);
    }
}
