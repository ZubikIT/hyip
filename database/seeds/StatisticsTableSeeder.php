<?php

use Illuminate\Database\Seeder;

class StatisticsTableSeeder extends Seeder {
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run() {
		DB::table('statistics')->insert([
			'replenished' => 0,
            'invested' => 0,
            'balance' => 0,
			'paidout' => 0,
			'registered' => 0,
			'active' => 0,
		]);
	}
}