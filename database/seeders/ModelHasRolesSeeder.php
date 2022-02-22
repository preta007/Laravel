<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $model_has_roles = [
            [
                'role_id' => 1,
                'model_type' => 'App\Models\User',
                'model_id' => 1,

            ],
        ];
        DB::table('model_has_roles')->insert($model_has_roles);
    }
}
