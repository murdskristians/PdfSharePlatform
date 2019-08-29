<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Document;
use App\FileDirectory;
use Carbon\Carbon;

class DocumentEdit extends Model
{
    public function editor() {
        return $this->belongsTo('App\User', 'editor_id');
    }
    
    public function document() {
        return $this->belongsTo('App\Document', 'original_id');
    }

    public function fileDirectory() {
        return $this->belongsTo('App\FileDirectory', 'directory_id');
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
