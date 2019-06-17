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
        DB::table('users')->insert([
        	[
	        	'user_name' => 'admin'.Str::random(2),
	            'password' => Hash::make('123456'),
	            'avatar'=>Str::random(20),
	            'email'=> Str::random(2).'@gmail.com',	
	            'address'=>Str::random(50),
	            'phone'=>Str::random(11), 	
	            'user_level'=>'1', 	
	            'brand_id'=>'1'
        	],
            
				[
				'user_name' => 'admin'.Str::random(2),
	            'password' => Hash::make('123456'),
	            'avatar'=>Str::random(20),
	            'email'=> Str::random(2).'@gmail.com',
	            'address'=>Str::random(50),	
	            'phone'=>Str::random(11), 	
	            'user_level'=>'1', 	
	            'brand_id'=>'2'
				],
            

            [
				'user_name' => 'admin'.Str::random(2),
	            'password' => Hash::make('123456'),
	            'avatar'=>Str::random(20),
	            'email'=> Str::random(2).'@gmail.com',	
	            'address'=>Str::random(50),
	            'phone'=>Str::random(11), 	
	            'user_level'=>'0', 	
	            'brand_id'=>'1'
			],
            
        ]);
    }
}
