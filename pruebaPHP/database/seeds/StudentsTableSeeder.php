<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
				'name'=> 'Lucero',
				'lastname'=>'Ramos',
				'email'=>'ing.lucero.ramos@gmail.com',
				'code'=>'LUZ',
				'age'=>27
		],
		[
				'name'=> 'hsdh',
				'lastname'=>'Ramos',
				'email'=>'ing.lucero.ramos@gmail.com',
				'code'=>'LUZ',
				'age'=>27
		]
	);
    }
}
