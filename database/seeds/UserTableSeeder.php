<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                 [
                     'name'              => 'admin',
                     'email'             => 'admin@email.com',
                     'email_verified_at' => now(),
                     'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                     'roles'             => 'admin',
                     'remember_token'    => Str::random(10),
                 ],
                 [
                     'name'              => 'user',
                     'email'             => 'user@email.com',
                     'email_verified_at' => now(),
                     'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                     'roles'             => 'user',
                     'remember_token'    => Str::random(10),
                 ]
             ]
          );
          
    }
}
