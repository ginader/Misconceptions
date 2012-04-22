<?php
include 'myths.inc.php';
include 'languages.inc.php';
$first_id = 1;
$last_id = $myths_amount;

$path = array_filter(explode('/',$_SERVER['REQUEST_URI']));
$current_id = intval(array_pop($path));
$current_lang = array_pop($path);

$next_id = $current_id + 1;
if($next_id > $last_id){
	$next_id = $first_id;
}

$link_to_next = '../'.$next_id;

$language_nav = '';

foreach ($langs as $language) {
	if($current_lang != $language){
		$language_nav .= '<li><a href="/'.$language.'/'.$current_id.'">'.$lang_names[$language].'</a></li>';
	}
}

// <li><a href="/de/20">deutsch</a></li>
// <li><a href="/en/20">english</a></li>
?>