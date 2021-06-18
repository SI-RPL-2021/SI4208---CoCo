<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EventsTags extends Model
{
    use HasFactory, Notifiable;

    public $events_tags = "events_tags";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'events_id',
        'users_id',
        'created_at',
        'updated_at'
    ];

    public function __construct()
    {
        
    }

    // public function events() {
    //     return $this->hasMany('App\Models\Events','id');
    // }

    // public function users() {
    //     return $this->hasMany('App\Models\Users');
    // }

    public function events() {
        return $this->belongsTo('App\Models\Events');
    }

    public function users() {
        return $this->belongsTo('App\Models\Users');
    }
}
