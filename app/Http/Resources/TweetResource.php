<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class TweetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'body' => $this->body,
            'user' => new UserResource($this->user),
            'created_at' => $this->created_at->timestamp,
            'type' => $this->type,

            //its a trick we create a copy using the relation
            'original_tweet' => new TweetResource($this->originalTweet)
            //'updated_at' => $this->updated_at,
        ];
        /*return parent::toArray($request);*/
    }
}
