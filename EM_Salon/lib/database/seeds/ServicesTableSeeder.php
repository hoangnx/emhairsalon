<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
        	[
        		'name'=>'Dịch vụ 1', 	
        		'description'=>'Mô tả dịch vụ 1',
        		'duration'=>'30', 	
        		'status'=>'1', 	
        		'cate_id'=>random_int(1,4)
        	],
        	[
        		'name'=>'Dịch vụ 2', 	
        		'description'=>'Mô tả dịch vụ 2',
        		'duration'=>'45', 	
        		'status'=>'1', 	
        		'cate_id'=>random_int(1,4)
        	],
        	[
        		'name'=>'Dịch vụ 3', 	
        		'description'=>'Mô tả dịch vụ 3',
        		'duration'=>'60', 	
        		'status'=>'1', 	
        		'cate_id'=>random_int(1,4)
        	],
        	[
        		'name'=>'Dịch vụ 4', 	
        		'description'=>'Mô tả dịch vụ 4',
        		'duration'=>'75', 	
        		'status'=>'1', 	
        		'cate_id'=>random_int(1,4)
        	],
        	[
        		'name'=>'Dịch vụ 5', 	
        		'description'=>'Mô tả dịch vụ 5',
        		'duration'=>'90', 	
        		'status'=>'1', 	
        		'cate_id'=>random_int(1,4)
        	],
        ]);
    }
}
