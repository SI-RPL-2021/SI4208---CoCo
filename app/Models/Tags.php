<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tags extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'posts_id',
        'users_id',
    ];

    public function __construct()
    {
        
    }

    public function posts() {
        return $this->hasMany('App\Models\Posts','id');
    }

    public function users() {
        return $this->hasMany('App\Models\Users','id');
    }
}
