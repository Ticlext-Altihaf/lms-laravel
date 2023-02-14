<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

    protected $table = 'quizzes';
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
        'answer'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_fill_in_the_blank' => 'boolean',
        'is_true_false' => 'boolean',
        'is_multiple_choice' => 'boolean',
    ];

    protected $appends = ['type'];

    public function getTypeAttribute(): string
    {
        return 'quiz';
    }

    public function choices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Choice::class);
    }

    public function lesson(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Lessons::class, 'lesson_id');
    }
}
