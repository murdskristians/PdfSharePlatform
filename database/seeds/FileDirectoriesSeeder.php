<?php

use App\FileDirectory;
use Illuminate\Database\Seeder;

class FileDirectoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FileDirectory::truncate();
        FileDirectory::create(array('name' => 'Algebra',
                                    'course_id' => 1));
        FileDirectory::create(array('name' => 'Tīmekļu Tehnoloģijas I',
                                    'course_id' => 1));
        FileDirectory::create(array('name' => 'Diskrētā Matemātika I',
                                    'course_id' => 1));
        FileDirectory::create(array('name' => 'Diskrētā Matemātika II',
                                    'course_id' => 1));
        FileDirectory::create(array('name' => 'Tīmekļu Tehnoloģijas II',
                                    'course_id' => 1));
        FileDirectory::create(array('name' => 'Programmēšanas Pamati',
                                    'course_id' => 1));
        FileDirectory::create(array('name' => 'Programmatūras Izstrādes Pamati',
                                    'course_id' => 1));
        FileDirectory::create(array('name' => 'Nozares Angļu Valoda',
                                    'course_id' => 1));
        FileDirectory::create(array('name' => 'Automātu Teorija',
                                    'course_id' => 1));
        FileDirectory::create(array('name' => 'Kursa projekts',
                                    'course_id' => 2));
        FileDirectory::create(array('name' => 'Kvalifikācijas darbs',
                                    'course_id' => 2));
        FileDirectory::create(array('name' => 'Programminžinierija',
                                    'course_id' => 2));
        FileDirectory::create(array('name' => 'Lineārā algebra II ',
                                    'course_id' => 2));
        FileDirectory::create(array('name' => 'Datu struktūras un pamatalgoritmi II',
                                    'course_id' => 2));
        FileDirectory::create(array('name' => 'Matemātiskā analīze II',
                                    'course_id' => 2));
        FileDirectory::create(array('name' => 'Grafu teorijas elementi',
                                    'course_id' => 2));
        FileDirectory::create(array('name' => 'Uzņēmējdarbības pamati',
                                    'course_id' => 2));
        FileDirectory::create(array('name' => 'ORACLE projektēšanas rīki',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'AB Suite programmēšanas vide',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Lietišķā kriptogrāfija',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Informācijas sistēmu drošība',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Lietotņu izstrāde .NET vidē',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Datoru tīkli II',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Pamatalgoritmu analīze un optimizācija ',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Kombinatorika',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Biroja informācijas sistēmas',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Programmēšanas valodu sintakse un semantika ',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Datu bāzu praktikums',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Bezvadu sensoru tīkli',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Interneta meklēšanas tehnoloģijas',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Tīmekļa dizaina pamati ',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Datoru grafikas un attēlu apstrādes pamati',
                                    'course_id' => 3));
        FileDirectory::create(array('name' => 'Dabas zinātnes',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'Objektorientētā programmēšana',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'Algoritmu sarežģītība',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'Datoru tīkli IV',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'Programmēšanas valodas',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'Lietišķie algoritmi',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'Varbūtību teorijas un matemāt. statist. izvēlētas nod',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'Grafu teorijas elementi',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'IT projektu pārvaldība',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'DBPS Oracle',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'Specseminārs',
                                    'course_id' => 4));
        FileDirectory::create(array('name' => 'Linux sistēmas programmēšana',
                                    'course_id' => 4));
    }
}
