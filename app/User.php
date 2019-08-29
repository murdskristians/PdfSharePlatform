<?php

namespace App;

use App\UserRole;
use App\Comment;
use App\Document;
use App\DocumentEdit;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userRole() {
        return $this->belongsTo('App\UserRole', 'role_id');
    }

    public function comment() {
        return $this->hasMany('App\Comment');
    }

    public function documentEdit() {
        return $this->hasMany('App\DocumentEdit');
    }

    public function document() {
        return $this->hasMany('App\Document');
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
