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
    	$data = [
    		'name'	=> 'Guten Morgen',
			'email'	=> 'guten@morgen.com',
			'remember_token'	=> '',
			'username'	=> 'guten_morgen',
			'password'	=> bcrypt('jalansehat2018'),
    	];

       	\App\User::create($data);
       	echo "sukses";
    }
}
