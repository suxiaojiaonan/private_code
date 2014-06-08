<?php
function shuffle_test($albums=array()) {
    if(empty($albums)) return array();
    $i = count($albums);
    while(--$i) {
        $j = rand()%($i + 1);
        //swap
        $temp = $albums[$i];
        $albums[$i] = $albums[$j];
        $albums[$j] = $temp;
    }
    
    return $albums;
}

$test_albums = array("tes1","ataaa","albums","alalalal", "asaasa");
$shuffled = shuffle_test($test_albums);

foreach($shuffled as $k => $v) {
    printf("%s ",$v);
}
