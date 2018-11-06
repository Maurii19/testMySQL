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
    	for ($i=0; $i < 10; $i++) { 
        DB::table('users')->insert([
        	'name' => str_random(10),
        	'age' => random_int(18, 50),
        	'salary' => rand(900*10, 1000*3)/10,
        	'date' => '1990/03/17',
        	'password' => str_random(4),
        	'city' => "Vivo en Donosti",
        	'paid' => true

        ]);
        }
    }
}
