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
        $sql = file_get_contents(database_path() . '/seeders/ficheros_bd/provinces.sql');
        DB::statement($sql);
    }
}
