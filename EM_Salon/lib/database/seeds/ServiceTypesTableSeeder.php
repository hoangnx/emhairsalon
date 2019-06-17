<?php

use Illuminate\Database\Seeder;

class ServiceTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_types')->insert([
        	[
        		'type_name'=>'Tùy chọn 1', 	
        		'type_price'=>'100000', 	
        		'unit'=>'head',
        		'service_id'=>'1'
        	],
        	[
        		'type_name'=>'Tùy chọn 1', 	
        		'type_price'=>'110000', 	
        		'unit'=>'head', 	
        		'service_id'=>'2'
        	],
        	[
        		'type_name'=>'Tùy chọn 1', 	
        		'type_price'=>'100000', 	
        		'unit'=>'head', 	
        		'service_id'=>'3'
        	],
        	[
        		'type_name'=>'Tùy chọn 2', 	
        		'type_price'=>'120000', 	
        		'unit'=>'head', 	
        		'service_id'=>'3'
        	],
        	[
        		'type_name'=>'Tùy chọn 3', 	
        		'type_price'=>'140000', 	
        		'unit'=>'head', 	
        		'service_id'=>'3'
        	],
        	[
        		'type_name'=>'Tùy chọn 4', 	
        		'type_price'=>'160000', 	
        		'unit'=>'head', 	
        		'service_id'=>'3'
        	],
        	[
        		'type_name'=>'Roots', 	
        		'type_price'=>'500000', 	
        		'unit'=>'head', 	
        		'service_id'=>'4'
        	],
        	[
        		'type_name'=>'Short', 	
        		'type_price'=>'600000', 	
        		'unit'=>'head', 	
        		'service_id'=>'4'
        	],
        	[
        		'type_name'=>'Medium', 	
        		'type_price'=>'600000', 	
        		'unit'=>'head', 	
        		'service_id'=>'4'
        	],
        	[
        		'type_name'=>'Long', 	
        		'type_price'=>'800000', 	
        		'unit'=>'head', 	
        		'service_id'=>'4'
        	],
        	[
        		'type_name'=>'Very Long', 	
        		'type_price'=>'800000', 	
        		'unit'=>'head', 	
        		'service_id'=>'4'
        	],

        ]);
    }
}
