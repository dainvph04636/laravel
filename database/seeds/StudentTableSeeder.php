<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('students')->count() == 0) {
    		DB::table('students')->insert([
    			[
    				'id' => 1,
    				'name' => 'Nguyen Van A',
    				'address' => 'Ha Noi',
    				'university' => 'FPT',
    				'class_id' => '1'
    			],
    			[
    				'id' => 2,
    				'name' => 'Tran Van B',
    				'address' => 'Ha Noi',
    				'university' => 'FPT',
    				'class_id' => '1'
    			],
    			[
    				'id' => 3,
    				'name' => 'Le Van C',
    				'address' => 'Ha Noi',
    				'university' => 'FPT',
    				'class_id' => '3'
    			],
    		]);
    	}
    }
}
