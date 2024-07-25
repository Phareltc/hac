<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motdudg extends Model
{
    use HasFactory;

    protected $table = 'motdudg';

    protected $fillable = [
        'photo',
        'dg',
        'missions',
        'visions',
        'description',
    ];
}
