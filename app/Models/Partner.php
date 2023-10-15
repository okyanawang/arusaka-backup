<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $table = 'partners';
    protected $fillable = [
        'name',
        'slug',
        'logo',
        'email',
        'contact',
        'address',
        'description',
        'image_profile',
    ];
    public $timestamps = false;

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class, 'partners_id');
    }
}
