<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FileDirectory;

class Course extends Model
{
    public function fileDirectory() {
        return $this->hasMany('App\FileDirectory');
    }
}
