<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\hasManyThrough;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function followings() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'following_id');
    }

    public function followers() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'followers', 'following_id', 'user_id');
    }

    public function followingTweets() : hasManyThrough
    {
        return $this->hasManyThrough(
            Tweet::class, //related
            Follower::class, //through
            'user_id',     //firstkey
            'user_id',     //secondkey
            'id',          //1st local key
            'following_id' //2nd local key
        );
    }
}
