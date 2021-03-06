<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Events extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_name',
        'description',
        'start_date',
        'end_date',
        'capacity',
        'images_id',
        'users_id',
        'created_at',
        'updated_at'
    ];

    public function __construct()
    {
        
    }

    public function images() {
        return $this->hasMany('App\Models\Images','id');
    }

    public function users() {
        return $this->belongsTo('App\Models\Users');
    }

    public function comments() {
        return $this->hasMany('App\Models\EventsComments');
    }

    public function events_tags() {
        return $this->belongsTo('App\Models\EventsTags');
    }

}
