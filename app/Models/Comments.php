<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comments extends Model
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
        'comments',
        'created_at',
        'updated_at'
    ];

    public function __construct()
    {
        
    }

    public function posts() {
        return $this->belongsTo('App\Models\Posts');
    }

    public function users() {
        return $this->belongsTo('App\Models\Users');
    }
}
