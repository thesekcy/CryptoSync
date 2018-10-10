<?php

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
        DB::table('admins')->insert([
        	'name'=> 'Crypto Syc',
        	'email'=> 'admin@cryptosync.com.br',
        	'password'=> Hash::make('123456'),
        ]);
    }
}
