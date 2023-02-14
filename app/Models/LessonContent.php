<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonContent extends Model
{

    protected $table = 'lesson_contents';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_no',
        'name',
        'text',
        'lesson_id',
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

    protected $appends = ['type', 'video_id'];

    public function getTypeAttribute(): string
    {
        if (substr($this->text, 0, 32) === "https://www.youtube.com/watch?v=" || substr($this->text, 0, 17) === "https://youtu.be/") {
            return 'youtube_video';
        }
        return 'text';
    }

    public function getVideoIdAttribute()
    {
        //check if start with http
        $video_id = null;
        if (substr($this->text, 0, 4) === "http") {
            if (substr($this->text, 0, 32) === "https://www.youtube.com/watch?v=") {
                $video_id = substr($this->text, 32);
            } elseif (substr($this->text, 0, 17) === "https://youtu.be/") {
                $video_id = substr($this->text, 17);
            }
            //cut the rest
            if (strpos($video_id, '&') !== false) {
                $video_id = substr($video_id, 0, strpos($video_id, '&'));
            }
        }
        return $video_id;
    }

    public function lesson(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Lessons::class, 'lesson_id');
    }
}
