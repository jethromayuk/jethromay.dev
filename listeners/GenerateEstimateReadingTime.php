<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateEstimateReadingTime
{
    public function handle(Jigsaw $jigsaw)
    {
        $jigsaw->getCollection('posts')->map(function($post){
            $post->estimate_reading_time = estimate_reading_time($post->getContent(), 200, true, true, 'read');
        });
    }
}
