<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Role::truncate();

        Role::create (['name'=> 'admin']);
        Role::create (['name'=> 'employee']);
        Role::create (['name'=> 'comptable']);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


    }
}
