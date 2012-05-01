<?php
include ($_SERVER['DOCUMENT_ROOT'].'/myths.inc.php');

$path = array_filter(explode('/',$_SERVER['REQUEST_URI']));
$current_lang = array_pop($path);

$show_lang = $current_lang;
$show_myth = rand(1, $myths_amount);

header("Location: /".$show_lang."/".$show_myth."/"); /* Redirect browser */
exit;
?>