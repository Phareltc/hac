<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titre',
        'lieu',
        'photo',
        'description',
        'info',
        'user_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'info' => 'array', // Assuming 'info' is a JSON field that needs to be cast to an array
    ];

    /**
     * Get the user that owns the event.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
