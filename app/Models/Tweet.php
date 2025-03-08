<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\TweetFactory; 

class Tweet extends Model
{
    //
    use HasFactory;
    protected static function newFactory(): TweetFactory
    {
        return TweetFactory::new();
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
}
