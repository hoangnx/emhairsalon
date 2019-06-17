<?php

use Illuminate\Database\Seeder;

class StylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stylists')->insert([
        	[
        		'stylist_name'=>'Nhan vien A',
        		'avatar'=>Str::random(10), 	
        		'age'=>random_int(18,30), 	
        		'brand_id'=>'1', 	
        		'status'=>'1'
        	],
        	[
        		'stylist_name'=>'Nhan vien B',
        		'avatar'=>Str::random(10), 	
        		'age'=>random_int(18,30), 	
        		'brand_id'=>'1', 	
        		'status'=>'1'
        	],
        	[
        		'stylist_name'=>'Nhan vien C',
        		'avatar'=>Str::random(10), 	
        		'age'=>random_int(18,30), 	
        		'brand_id'=>'2', 	
        		'status'=>'1'
        	],
        	[
        		'stylist_name'=>'Nhan vien D',
        		'avatar'=>Str::random(10), 	
        		'age'=>random_int(18,30), 	
        		'brand_id'=>'1', 	
        		'status'=>'0'
        	],
        ]);
    }
}
