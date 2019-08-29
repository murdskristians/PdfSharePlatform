<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Document;
use App\DocumentEdit;

class FileDirectory extends Model
{
    public function document() {
        return $this->hasMany('App\Document');
    }

    public function documentEdit() {
        return $this->hasMany('App\DocumentEdit');
    }
    
    public function course() {
        return $this->belongsTo('App\Course');
    }
}
