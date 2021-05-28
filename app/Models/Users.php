<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'images_id',
        'bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    public function __construct()
    {
        
    }

    public function images() {
        return $this->hasMany('App\Models\Images','id');
    }

    public function profile() {
        return $this->hasMany('App\Models\Users','id');
    }

    public function posts() {
        return $this->belongsTo('App\Models\Posts');
    }

    public function tags() {
        return $this->belongsTo('App\Models\Tags');
    }

    public function comments() {
        return $this->belongsTo('App\Models\Comments');
    }

    public function events() {
        return $this->belongsTo('App\Models\Events');
    }

    public function events_tags() {
        return $this->belongsTo('App\Models\Events_Tags');
    }

    public function events_comments() {
        return $this->belongsTo('App\Models\Comments');
    }
}
