<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'is_read',
        'users_id',
    ];

    public function __construct()
    {
        
    }

    public function users() {
        return $this->hasMany('App\Models\Users','id');
    }
}
