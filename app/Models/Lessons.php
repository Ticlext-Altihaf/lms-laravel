<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{

    protected $table = 'lessons';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'section',
        'order_no',
        'course_id',
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

    public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }

    public function quizzes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Quiz::class, 'lesson_id');
    }

    public function lessonContents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LessonContent::class, 'lesson_id');
    }

    public function contents()
    {//merge quiz and lessonContent
        return $this->quizzes->merge($this->lessonContents);
    }

    public function chat_room(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ChatRoom::class, 'chat_room_id');
    }
}
