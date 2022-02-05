<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Apartament;
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
        $sql = file_get_contents(database_path() . '/seeders/ficheros_bd/apartaments.sql');
        DB::statement($sql);
        $sql = file_get_contents(database_path() . '/seeders/ficheros_bd/features.sql');
        DB::statement($sql);
        foreach(Apartament::all() as $apartament){
            $apartament->features()->attach(1);
        }
       // $sql = file_get_contents(database_path() . '/seeders/ficheros_bd/apartaments_featrures.sql');
      //  DB::statement($sql);
        
    }
}
