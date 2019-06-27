<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mailinator.com',
            'username' => 'admin',
          
           
            'password' => '$2y$10$iHUM7wK4gReNyGt4QNYKK.upadQQCanviovaiZvThY7K8TlPbrSyi', // 12345678
            'remember_token' => str_random(10),
            'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')  
        ]);
    }
}
