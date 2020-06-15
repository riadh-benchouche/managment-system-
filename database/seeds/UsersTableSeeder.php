<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::table('role_user')->truncate();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@iris.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $comptable = User::create([
            'name' => 'comptable',
            'email' => 'comptable@iris.com',
            'email_verified_at' => now(),
            'password' => Hash::make('pass'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $employee = User::create([
            'name' => 'Employee',
            'email' => 'employee@iris.com',
            'email_verified_at' => now(),
            'password' => Hash::make('pass'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
   //     $admin = DB::table('users')->insert([
   //       'name' => 'Admin',
   //       'email' => 'admin@iris.com',
   //       'email_verified_at' => now(),
   //       'password' => Hash::make('secret'),
   //       'created_at' => now(),
   //       'updated_at' => now()
   // ]);



        $adminRole = Role::where('name', 'admin')->first();
        $employeeRole = Role::where('name', 'employee')->first();
        $comptableRole = Role::where('name', 'comptable')->first();

        $admin ->roles()->attach($adminRole);
        $employee ->roles()->attach($employeeRole);
        $comptable ->roles()->attach($comptableRole);

    }
}
