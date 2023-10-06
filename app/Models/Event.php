<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Action;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'events',
        'events_description',
        'events_uploaded',
        'events_images',
        'profile_id',
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
