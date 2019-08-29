<?php

use App\UserRole;
use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::truncate();
        UserRole::create(array('role_name' => 'Lietotājs'));
        UserRole::create(array('role_name' => 'Admins'));
    }
}
