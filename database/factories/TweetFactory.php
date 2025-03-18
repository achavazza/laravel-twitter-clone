<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User; // Import User model

class TweetFactory extends Factory
{
    protected $model = \App\Models\Tweet::class; // Define model

    public function definition(): array
    {
        return [
            'body' => $this->faker->paragraph(1, true),
            'user_id' => $this->faker->randomElement([1, 3]), // Associate with a user
            'type' => 'tweet'
        ];
    }
}
