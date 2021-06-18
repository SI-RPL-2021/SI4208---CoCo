<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Follows extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = false;
    
    protected $fillable = [
        'follower_id',
        'following_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function __construct()
    {
    }

    // users that are followed by this user
    public function following() {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'following_id');
    }

    // users that follow this user
    public function followers() {
        return $this->belongsToMany(User::class, 'followers', 'following_id', 'follower_id');
    }
}
