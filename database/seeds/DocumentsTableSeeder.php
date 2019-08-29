<?php

use Illuminate\Database\Seeder;
use App\Document;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::truncate();
        Document::create(array('name' => 'Pirmā lekcija Algebrā',
                        'description' => 'Pirmais mājasdarbs Algebras kursā. Tiek apskatīta Gausa metode.', 
                        'author_id' => 2,
                        'directory_id' => 1,
                        'path' => 'Nedzest_1.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Otrā lekcija Algebrā',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 2,
                        'directory_id' => 1,
                        'path' => 'Nedzest_2.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Trešā lekcija Algebrā',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 1,
                        'directory_id' => 1,
                        'path' => 'Nedzest_3.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Pirmā lekcija Tīmekļu tehnologijās 1',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 3,
                        'directory_id' => 2,
                        'path' => 'Nedzest_4.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Otrā lekcija Tīmekļu tehnologijās 1',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 3,
                        'editor_id' => 'Nedzest_MD2',
                        'directory_id' => 2,
                        'path' => 'Nedzest_5.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Pirmā lekcija Tīmekļu tehnologijās 2',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 3,
                        'directory_id' => 5,
                        'path' => 'Nedzest_6.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Pirmā lekcija Diskrētajā Matemātikā 2',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 4,
                        'directory_id' => 4,
                        'path' => 'Nedzest_7.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Otrā lekcija Diskrētajā Matemātikā 2',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 4,
                        'directory_id' => 4,
                        'path' => 'Nedzest_8.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Trešā lekcija Diskrētajā Matemātikā 2',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 4,
                        'directory_id' => 5,
                        'path' => 'Nedzest_9.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Otrā lekcija Tīmekļu tehnologijās 2',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 3,
                        'directory_id' => 5,
                        'path' => 'Nedzest_10.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Trešā lekcija Tīmekļu tehnologijās 2',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 3,
                        'directory_id' => 5,
                        'path' => 'Nedzest_11.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Pirmā lekcija Programmēšanas pamatos',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 2,
                        'directory_id' => 6,
                        'path' => 'Nedzest_12.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Otrā lekcija Programmēšanas pamatos',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 2,
                        'directory_id' => 6,
                        'path' => 'Nedzest_13.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Pirmā lekcija Programmatūras izstrādes pamatos',
                        'description' => 'Ļoti noderīgs fails. Izlasi, ja plāno turpināt studijas LU. Sī informācija būs nepieciešama arī turpmāko semestru kontroldarbos. Pietam vel ļoti bieži. Bez šīs info nevarēsi uztaisīt turpmākos arī turpmākos projektus daudzos priekšemtos.', 
                        'author_id' => 2,
                        'directory_id' => 7,
                        'path' => 'Nedzest_MD14.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Otrā lekcija Programmatūras izstrādes pamatos',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 1,
                        'directory_id' => 7,
                        'path' => 'Nedzest_15.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Pirmā lekcija Angļu valodā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 1,
                        'directory_id' => 8,
                        'path' => 'Nedzest_16.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Otrā lekcija Angļu valodā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 1,
                        'directory_id' => 8,
                        'path' => 'Nedzest_17.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Trešā lekcija Angļu valodā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 2,
                        'directory_id' => 8,
                        'path' => 'Nedzest_18.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Pirmā lekcija Automātu teorijā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 2,
                        'directory_id' => 9,
                        'path' => 'Nedzest_19.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Otrā lekcija Automātu teorijā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 3,
                        'directory_id' => 9,
                        'path' => 'Nedzest_20.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata "Galīgi nedeterminēti (slinki) automāti"',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 1,
                        'directory_id' => 9,
                        'path' => 'Nedzest_21.pdf',
                        'is_accepted' =>0));

        Document::create(array('name' => 'Grāmata "Determinēti (apņēmīgi) automāti"',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 2,
                        'directory_id' => 9,
                        'path' => 'Nedzest_22.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Pirmā lekcija Kursa projektā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 4,
                        'directory_id' => 10,
                        'path' => 'Nedzest_23.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Otrā lekcija Kursa projektā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 3,
                        'directory_id' => 10,
                        'path' => 'Nedzest_24.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Trešā lekcija Kursa projektā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 3,
                        'directory_id' => 10,
                        'path' => 'Nedzest_25.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Pirmā prezentācija Automātu teorijā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 3,
                        'directory_id' => 9,
                        'path' => 'Nedzest_26.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Otrā prezentācija Automātu teorijā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 3,
                        'directory_id' => 9,
                        'path' => 'Nedzest_27.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Trešā prezentācija Automātu teorijā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 3,
                        'directory_id' => 9,
                        'path' => 'Nedzest_28.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Pirmā prezentācija Angļu valodā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 2,
                        'directory_id' => 8,
                        'path' => 'Nedzest_29.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Otrā prezentācija Angļu valodā',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 4,
                        'directory_id' => 8,
                        'path' => 'Nedzest_30.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Pirmā prezentācija Programmatūras izstrādes pamatos',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 1,
                        'directory_id' => 7,
                        'path' => 'Nedzest_31.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Pirmā prezentācija Programmēšanas pamatos',
                        'description' => 'Svarīgs dokuments!!!', 
                        'author_id' => 2,
                        'directory_id' => 6,
                        'path' => 'Nedzest_32.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata "PHP on database queries"',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 4,
                        'directory_id' => 5,
                        'path' => 'Nedzest_33.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata "Bootstap - Do not reinvent the wheel."',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 4,
                        'directory_id' => 5,
                        'path' => 'Nedzest_34.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Pirmā prezentācija Diskrētajā matemātikā 2',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 4,
                        'directory_id' => 4,
                        'path' => 'Nedzest_35.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Otrā prezentācija Diskrētajā matemātikā 2',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 2,
                        'directory_id' => 4,
                        'path' => 'Nedzest_36.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Trešā prezentācija Diskrētajā matemātikā 2',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 3,
                        'directory_id' => 4,
                        'path' => 'Nedzest_37.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata "Grafu teorija"',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 4,
                        'directory_id' => 4,
                        'path' => 'Nedzest_38.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata "Varbūtības teorija"',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 2,
                        'directory_id' => 4,
                        'path' => 'Nedzest_39.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Nedalāmā Polinoma piedzīvojums"',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 1,
                        'directory_id' => 4,
                        'path' => 'Nedzest_40.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata HTML,CSS,JavaScript',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 1,
                        'directory_id' => 2,
                        'path' => 'Nedzest_41.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata "Matricas"',
                        'description' => 'Bez šīs info es nevarēju izpildīt mājasdarbu.', 
                        'author_id' => 4,
                        'directory_id' => 1,
                        'path' => 'Nedzest_42.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata "Viss par un ap Gausa metodi"',
                        'description' => 'Nav īpaši svarīgs fails, bet ieteicams izlasīt.', 
                        'author_id' => 2,
                        'directory_id' => 1,
                        'path' => 'Nedzest_43.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata "Gredzenu teorija"',
                        'description' => 'Nav īpaši svarīgs fails, bet ieteicams izlasīt.', 
                        'author_id' => 4,
                        'directory_id' => 1,
                        'path' => 'Nedzest_44.pdf',
                        'is_accepted' =>1));

        Document::create(array('name' => 'Grāmata "PHP is your friend."',
                        'description' => 'Nav īpaši svarīgs fails, bet ieteicams izlasīt.', 
                        'author_id' => 4,
                        'directory_id' => 2,
                        'path' => 'Nedzest_45.pdf',
                        'is_accepted' =>1));

    }
}
