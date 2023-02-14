<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Courses extends Model
{

    protected $table = 'courses';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'author_id',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'sections'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Categories::class, 'course_categories');
    }

    public function lessons(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Lessons::class, 'course_id');
    }

    protected $appends = ['image_url'];

    public function getImageUrlAttribute(): ?string
    {
        if (empty($this->image))
            return null;
        if (strpos($this->image, 'http') === 0)
            return $this->image;
        //fully qualified url
        return Storage::disk('public')->url($this->image);
    }
}
