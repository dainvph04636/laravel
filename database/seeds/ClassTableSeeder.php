<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if (DB::table('classes')->count() == 0) {
    		DB::table('classes')->insert([
    			[
    				'id' => 1,
    				'name' => 'PT11111',
    				'teacher_name' => 'Nguyen Van A',
    				'major' => 'WEB',
    				'max_student' => 50,
    			],
    			[
    				'id' => 2,
    				'name' => 'PT22222',
    				'teacher_name' => 'Nguyen Van B',
    				'major' => 'MOB',
    				'max_student' => 40,
    			],
    			[
    				'id' => 3,
    				'name' => 'PT33333',
    				'teacher_name' => 'Nguyen Van C',
    				'major' => 'MUL',
    				'max_student' => 30,
    			],
    		]);
    	}
    }
}
