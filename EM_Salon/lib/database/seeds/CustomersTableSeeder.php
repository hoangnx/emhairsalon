<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
        	[
        		'cus_name'=>'Khởi My', 	
        		'phone'=>'03'.random_int(10000000,99999999), 	
        		'cus_email'=>Str::random(4).'@gmail.com', 	
        		'gender'=>random_int(0,1) 
        	],
        	[
        		'cus_name'=>'Phương Khánh', 	
        		'phone'=>'03'.random_int(10000000,99999999), 	
        		'cus_email'=>Str::random(4).'@gmail.com', 	
        		'gender'=>random_int(0,1) 
        	],
        	[
        		'cus_name'=>'Minh Tiến', 	
        		'phone'=>'03'.random_int(10000000,99999999), 	
        		'cus_email'=>Str::random(4).'@gmail.com', 	
        		'gender'=>random_int(0,1) 
        	],
        	[
        		'cus_name'=>'Tùng Sơn', 	
        		'phone'=>'03'.random_int(10000000,99999999), 	
        		'cus_email'=>Str::random(4).'@gmail.com', 	
        		'gender'=>random_int(0,1) 
        	],
        	[
        		'cus_name'=>'Mai Phương', 	
        		'phone'=>'03'.random_int(10000000,99999999), 	
        		'cus_email'=>Str::random(4).'@gmail.com', 	
        		'gender'=>random_int(0,1) 
        	]
        ]);
    }
}
