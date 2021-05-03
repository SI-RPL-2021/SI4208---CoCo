<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Images extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
    ];
    
    public function __construct()
    {
        
    }

    public function users() {
        return $this->belongsTo('App\Models\Users');
    }

    public function posts() {
        return $this->belongsTo('App\Models\Posts');
    }

}
