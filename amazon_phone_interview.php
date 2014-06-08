<?php

function count_words($text) {
    if(strlen($text) == 0) return array();
    $cut_text = explode(" ", $text);
    $words_count = array();
    foreach($cut_text as $k => $v) {
	if($v === " ") continue;
        if(is_null($words_count[$v])) {
            $words_count[$v] = 1;
        } else {
            $words_count[$v]++;
        }
    }

    return $words_count;
}

$text = "test here test";
$count_result = count_words($text);

foreach($count_result as $k => $v) {
    printf("words: %s count: %d\n", $k, $v);
}
