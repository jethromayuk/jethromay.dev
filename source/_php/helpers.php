<?php

/**
 * Originally found on @link https://coderwall.com/p/y1yhwg/estimate-reading-time
 *
 * Returns an estimated reading time in a string
 * idea from @link http://briancray.com/posts/estimated-reading-time-web-design/
 * @param  string $content the content to be read
 * @param int $wordsPerMinute
 * @param bool $minutesOnly
 * @param string $suffix
 * @return string  estimated read time eg. 1 minute, 30 seconds / 1 min read / ...
 */
function estimate_reading_time($content, $wordsPerMinute=200, $minutesOnly=false, $abbreviated=true, $suffix='read' ) {
    $wordCount = str_word_count(strip_tags($content));

    $wordsPerMinute = (int) $wordsPerMinute;
    if( $wordsPerMinute <= 0 ){
        $wordsPerMinute = 200;
    }

    $minutes = floor($wordCount / $wordsPerMinute);
    $seconds = floor($wordCount % $wordsPerMinute / ($wordsPerMinute / 60));

    if( $minutesOnly === true && $minutes > 0 ){
        if( $seconds >=30 ){
            $minutes++;
        }
    }

    if( $abbreviated === true ){
        $strMinutes = 'min';
        $strSeconds = 'sec';
    } else {
        $strMinutes = ($minutes == 1) ? "minute" : "minutes";
        $strSeconds = ($seconds == 1) ? "second" : "seconds";
    }

    if ($minutes == 0) {
        $returnString = "{$seconds} {$strSeconds}";
    } elseif( $minutesOnly === true ) {
        $returnString = "{$minutes} {$strMinutes}";
    } else {
        $returnString = "{$minutes} {$strMinutes}, {$seconds} {$strSeconds}";
    }

    if( is_string( $suffix ) && !empty( trim( $suffix ) ) ){
        $returnString.= ' ' . trim( $suffix );
    }

    return $returnString;
}
