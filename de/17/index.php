<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>The phases of the Moon are caused by the angle it makes with the orbit of the Earth and Sun.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="no">Wrong.</strong>
		<strong class="yes">Correct!</strong> 
The Moon's phases depends on two things: the Moon is round, and the angle it makes with the Earth and Sun changes over its orbit
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://home.hiwaay.net/~krcool/Astro/moon/moonphase/" id="more">I want to learn more about the moon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>