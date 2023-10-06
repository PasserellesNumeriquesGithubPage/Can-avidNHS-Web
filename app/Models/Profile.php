<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'gender',
        'position',
        'department',
        'phone_number',
        'images',
        'user_id',
    ];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }
    
    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
}
