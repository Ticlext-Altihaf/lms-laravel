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
        'sections',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];
    protected $appends = ['category', 'image_url', 'lessons_sectioned'];

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Categories::class, 'course_categories');
    }

    public function getCategoryAttribute(): ?Categories
    {
        $category = $this->categories()->first();
        if ($category)
            return $category;
        return null;
    }
    public function getLessonsSectionedAttribute()
    {
        if (isset($this->lessons))
            return Courses::Section($this);
        return null;
    }
    public function lessons(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Lessons::class, 'course_id');
    }


    public function getImageUrlAttribute(): ?string
    {
        if (empty($this->image))
            return null;
        if (strpos($this->image, 'http') === 0)
            return $this->image;
        //fully qualified url
        return Storage::disk('public')->url($this->image);
    }
    
    public static function Section($data)
    {
        $sections = array();
        $lessons = $data->lessons;
        $lessons_sectioned = array();
        foreach ($lessons as $lesson){
            if (!in_array($lesson->section, $sections)) {
                array_push($sections, $lesson->section);
            }
            if (!array_key_exists($lesson->section, $lessons_sectioned)) {
                $lessons_sectioned[$lesson->section] = array();
            }
            array_push($lessons_sectioned[$lesson->section], $lesson->toArray());
        }
        return $lessons_sectioned;
    }


}
