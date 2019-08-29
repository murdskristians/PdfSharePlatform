<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(array('name' => 'Administrator',
                           'bio' => 'Galvenais šīs lapas uzturētājs. Ja kādam rodas jautājumi, tad droši rakstiet uz zemāk norādīto epastu.',
                           'email' => 'admin@timekli.com', 
                           'password' => bcrypt('admin1234'),
                           'image' =>'Admin.gif',
                           'role_id' => 2));  
        User::create(array('name' => 'Kristiāns Murds',
                           'email' => 'murdskristians@timekli.com', 
                           'password' => bcrypt('murdskristians123'),
                           'image' =>'A.jpg',
                           'role_id' => 1));    
        User::create(array('name' => 'Reinis Šadinovs',
                           'email' => 'sadinovsreinis@timekli.com', 
                           'password' => bcrypt('sadinovsreinis123'),
                           'image' =>'B.jpg',
                           'role_id' => 1));    
        User::create(array('name' => 'Nikola Upīte',
                           'email' => 'upitenikola@timekli.com', 
                           'password' => bcrypt('upitenikola123'),
                           'image' =>'C.jpg',
                           'role_id' => 1));     
    }
}
