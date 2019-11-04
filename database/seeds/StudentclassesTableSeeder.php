<?php

use Illuminate\Database\Seeder;

class StudentclassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\StudentClass::class,10)->create();
    }
}
