<?php 
//print_r($_SERVER);
//include ('../helper.inc.php');
include ('strings.inc.php');
$url = array_pop(array_filter(explode('/',$_SERVER['REQUEST_URI'])));

//print_r($url);
//$link_to_next = 
?>
<!doctype html>
<html>
<head>
	<title>Daily Myths</title>
	<link rel="stylesheet" href="/assets/css/normalize.css" />
	<link rel="stylesheet" href="/assets/css/daily-myths.css" />
	<script src="/assets/js/jquery-1.7.2.min.js"></script>
	<script src="/assets/js/daily-myths.js"></script>
</head>
<body>
<div id="header">
	<h1>Daily Myths</h1>
	<ul class="nav">
		<li><a href="/about">about</a></li>
		<li><a href="/archives">archives</a></li>
		<li><a href="/language">language</a></li>
	</ul>	
</div><!-- /header -->

<div class="container">
	<div id="card" class="flipped_">