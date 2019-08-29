<?php

use Illuminate\Database\Seeder;
use App\DocumentEdit;

class DocumentEditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DocumentEdit::create(array('original_id' => 45,
        'editor_id' => 2,
        'description' => 'Best guid to learn PHP', 
        'name' => 'Grāmata "PHP is your friend."',
        'directory_id' => 2,
        'path' => 'Nedzest_45.pdf'));

DocumentEdit::create(array('original_id' => 16,
        'editor_id' => 1,
        'description' => 'adverasbadsv234g', 
        'name' => 'Pirmā lekcija Angļu valodā (Presentation skills)',
        'directory_id' => 8,
        'path' => 'Nedzest_16.pdf'));

DocumentEdit::create(array('original_id' => 39,
        'editor_id' => 2,
        'description' => 'Grāmata kur apkopotas augstākās matemātikas formulas par tēmu "Varbūtība".', 
        'name' => 'Grāmata "Varbūtības teorija"',
        'directory_id' => 4,
        'path' => 'Nedzest_39.pdf'));

DocumentEdit::create(array('original_id' => 38,
        'editor_id' => 3,
        'description' => 'Orientēti, neorientēti grafi un cilpas.', 
        'name' => 'Grāmata "Grafu teorija"',
        'directory_id' => 4,
        'path' => 'Nedzest_38.pdf'));

DocumentEdit::create(array('original_id' => 33,
        'editor_id' => 1,
        'description' => 'PHP with SQL', 
        'name' => 'Grāmata "PHP on database queries"',
        'directory_id' => 4,
        'path' => 'Nedzest_33.pdf'));

DocumentEdit::create(array('original_id' => 32,
        'editor_id' => 1,
        'description' => 'sdfssgsefaesdhh33', 
        'name' => 'Objektorientēta programmēšana',
        'directory_id' => 6,
        'path' => 'Nedzest_32.pdf'));

DocumentEdit::create(array('original_id' => 31,
        'editor_id' => 1,
        'description' => 'sdgsg4sdsgsdg', 
        'name' => 'Datoru arhitektūra un operētājsistēmas',
        'directory_id' => 7,
        'path' => 'Nedzest_31.pdf'));

DocumentEdit::create(array('original_id' => 30,
        'editor_id' => 1,
        'description' => 'Use of times', 
        'name' => 'Otrā prezentācija Angļu valodā',
        'directory_id' => 8,
        'path' => 'Nedzest_30.pdf'));

DocumentEdit::create(array('original_id' => 29,
        'editor_id' => 1,
        'description' => 'Welcome to learning', 
        'name' => 'Pirmā prezentācija Angļu valodā',
        'directory_id' => 8,
        'path' => 'Nedzest_29.pdf'));

DocumentEdit::create(array('original_id' => 21,
        'editor_id' => 2,
        'description' => 'Nav jāraksta visas pārejas.', 
        'name' => 'Grāmata "Galīgi nedeterminēti (slinki) automāti"',
        'directory_id' => 9,
        'path' =>  'Nedzest_21.pdf'));

DocumentEdit::create(array('original_id' => 18,
        'editor_id' => 3,
        'description' => 'Wlcome "Afterparty"', 
        'name' => 'Trešā lekcija Angļu valodā',
        'directory_id' => 8,
        'path' => 'Nedzest_18.pdf'));

DocumentEdit::create(array('original_id' => 17,
        'editor_id' => 3,
        'description' => 'Start to do stuff', 
        'name' => 'Otrā lekcija Angļu valodā',
        'directory_id' => 8,
        'path' => 'Nedzest_17.pdf'));

DocumentEdit::create(array('original_id' => 16,
        'editor_id' => 1,
        'description' => 'Fuzzy English', 
        'name' => 'Pirmā lekcija Angļu valodā',
        'directory_id' => 8,
        'path' => 'Nedzest_16.pdf'));

DocumentEdit::create(array('original_id' => 16,
        'editor_id' => 2,
        'description' => 'Pasniedzejs aizmirsa publicet šo failu.', 
        'name' => 'Pirmā lekcija Angļu valodā',
        'directory_id' => 8,
        'path' => 'Nedzest_16.pdf'));

DocumentEdit::create(array('original_id' => 6,
        'editor_id' => 3,
        'description' => 'Introduction to Laravel', 
        'name' => 'Pirmā lekcija Tīmekļu tehnologijās 2',
        'directory_id' => 5,
        'path' => 'Nedzest_6.pdf'));
    }
}
