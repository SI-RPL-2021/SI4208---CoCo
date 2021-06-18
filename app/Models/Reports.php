<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reports extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'konten',
        'created_at',
        'updated_at'
    ];
}
