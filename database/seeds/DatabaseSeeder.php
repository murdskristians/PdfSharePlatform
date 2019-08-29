<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UserRolesTableSeeder::class); 
        $this->call(UsersTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(DocumentEditsTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(FileDirectoriesSeeder::class);
        $this->call(CommentsTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
