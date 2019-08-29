<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;
use Carbon\Carbon;
use App\FileDirectory;
use App\DocumentsEdit;

class Document extends Model
{
    public function author() {
        return $this->belongsTo('App\User', 'author_id');
    }

    public function editor() {
        return $this->belongsTo('App\User', 'editor_id');
    }

    public function comment() {
        return $this->hasMany('App\Comment');
    }

    public function fileDirectory() {
        return $this->belongsTo('App\FileDirectory', 'directory_id');
    }
    
    public function documentEdit() {
        return $this->hasMany('App\DocumentEdit');
    }

    public function formattedCreatedDate() {
        Carbon::setLocale('lv');
        if ($this->created_at->diffInDays() > 30) {
            return  $this->created_at->toFormattedDateString();
        } else {
            return  $this->created_at->diffForHumans();
        }
    }
}
