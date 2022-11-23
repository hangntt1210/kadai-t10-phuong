<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'アドミン', 'email' => 'admin@gmail.com', 'password' => bcrypt('123456')],
            ['id' => 2, 'name' => 'admin', 'email' => 'admin1@gmail.com', 'password' => bcrypt('123456')],
        ]);
    }
}
