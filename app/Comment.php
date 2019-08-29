<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;
use App\Document;

class Comment extends Model
{
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function document() {
        return $this->belongsTo('App\Document');
    }

    public function formattedCreatedDate() {
        Carbon::setLocale('lv');
        if ($this->created_at->diffInDays() > 30) {
            return $this->created_at->toFormattedDateString();
        } else {
            return $this->created_at->diffForHumans();
        }
    }
}
