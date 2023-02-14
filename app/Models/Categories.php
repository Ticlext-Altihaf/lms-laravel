<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Categories extends Model
{

    protected $table = 'categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];


    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Categories::class, 'parent_id');
    }

    public function courses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Courses::class, 'course_categories');
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
