<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'image',
        'price',
        'categories_id',
        'partners_id',
    ];
    public $timestamps = false;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'id');
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class, 'id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'ratings', 'courses_id', 'users_id')
                    ->as('ratings')
                    ->withPivot('rating', 'comment');
    }

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class, 'courses_id', 'id');
    }

    public function users2(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'course_orders', 'courses_id', 'users_id')
                    ->as('orders')
                    ->withPivot('payments_id');
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class, 'courses_id');
    }
}
