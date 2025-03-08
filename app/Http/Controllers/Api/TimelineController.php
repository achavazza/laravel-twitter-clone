<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\TweetCollection;

class TimelineController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->user());
        $tweets = $request->user()->followingTweets()->paginate(5);
        return new TweetCollection($tweets);
        
    }
}
