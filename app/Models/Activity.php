<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'activity',
        'activity_title',
        'activity_type',
        'profile_id',
        'activity_at',
    ];
    public $timestamps = false;
    public function profile()
    {
        return $this->hasMany(Profile::class);
    }
}
