<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();
        Course::create(array('name' => '1. Kurss'));
        Course::create(array('name' => '2. Kurss'));
        Course::create(array('name' => '3. Kurss'));
        Course::create(array('name' => '4. Kurss'));
    }
}
