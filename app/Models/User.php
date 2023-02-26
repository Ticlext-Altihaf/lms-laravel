<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public bool $is_admin;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
        'is_teacher' => 'boolean',
    ];

    public function authoredCourses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Courses::class);
    }

    public function lessonsProgress(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(LessonContent::class);
    }

    protected $appends = ['image_url'];


    public function getImageUrlAttribute(): ?string
    {
        return self::getImageUrlAttributeS($this);
    }

    public static function getImageUrlAttributeS($that): ?string
    {
        if (empty($that->image))
            return null;
        if (strpos($that->image, 'http') === 0)
            return $that->image;
        //fully qualified url
        return Storage::disk('public')->url($that->image);
    }

}
