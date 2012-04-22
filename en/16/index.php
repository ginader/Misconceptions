<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>The Moon moves around the Earth in more than a day.</p>
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
		The Moon moves around the Earth in an approximately circular orbit, going once around us in approximately 27.3 days, or one sidereal period of revolution. As it does so, its position changes, relative to the stars. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://cseligman.com/text/sky/moonmotion.htm" id="more">I want to learn more about the moon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>