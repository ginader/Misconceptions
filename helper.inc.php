<?php
$first_id = 1;
$last_id = 25;

$current_id = intval(array_pop(array_filter(explode('/',$_SERVER['REQUEST_URI']))));
$next_id = $current_id + 1;
if($next_id > $last_id){
	$next_id = $first_id;
}

$link_to_next = '../'.$next_id;
?>