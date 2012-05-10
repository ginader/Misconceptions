<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/helper.inc.php');
include ('strings.inc.php');
include ($_SERVER['DOCUMENT_ROOT'].'/head.inc.php');
?>
<body lang="hi">
<div id="header">
	<h1><a href="/hi/">Daily Myths</a></h1>
	<ul class="nav">
		<li><a href="/about">about</a></li>
		<!-- <li><a href="/credits">credits</a></li> -->
		<li id="language-nav" class="open_">
			<a href="/language">change language</a>
			<ul id="languages">
				<?php echo $language_nav ?>
			</ul>
		</li>
	</ul>	
</div><!-- /header -->

<div class="block panel">