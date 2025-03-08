<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tweet; // Import Tweet model

class TweetFactory extends Command
{
    protected $signature = 'app:tweet-factory';
    protected $description = 'Generate fake tweets';

    public function handle()
    {
        Tweet::factory()->count(10)->create();
        $this->info('10 fake tweets created!');
    }
}
