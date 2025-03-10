<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\TweetCollection;

class TimelineController extends Controller
{
  
    public function __construct(){
        $this->middleware('auth:sanctum');
    }

    public function index(Request $request)
    {
        //dd($request->user());
        $tweets = $request->user()->followingTweets()->latest()
                ->with(['user'])
                ->paginate(5);
        return new TweetCollection($tweets);
        
    }
}
