<?php

use Illuminate\Database\Seeder;

class ServiceCatgoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
        	[
        		'cate_name'=>'Cắt tóc', 	
        		'status'=>'1'
        	],
        	[
        		'cate_name'=>'Gội đầu', 	
        		'status'=>'1'
        	],
        	[
        		'cate_name'=>'Nhuộm tóc', 	
        		'status'=>'1'
        	],
        	[
        		'cate_name'=>'Uốn, Hấp', 	
        		'status'=>'1'
        	],
        ]);
    }
}
