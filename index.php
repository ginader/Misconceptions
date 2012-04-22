<?php
include 'languages.inc.php';
include 'myths.inc.php';
$show_lang = $default_lang;
shuffle($myths);
//echo $myths[0];

$show_myth = $myths[0];

$user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//echo $user_lang;

if (in_array($user_lang, $langs)) {
    //echo "yep - we got: ".$user_lang;
    $show_lang = $user_lang;
}else{
	//echo "nope - we dont have ".$user_lang." (yet) - let's use ".$default_lang." instead";
}

header("Location: /".$show_lang."/".$show_myth."/"); /* Redirect browser */
exit;
?>