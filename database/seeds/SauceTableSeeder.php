<?php

use Illuminate\Database\Seeder;

class SauceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sauces')->insert([
             [
               'name' => 'ketchup'
             ],
             [
               'name' => 'relish'
             ],
             [
               'name' => 'mustard'
             ]

        	]);
    }
}
