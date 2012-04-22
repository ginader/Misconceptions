<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>The Earth's revolution around the sun causes night and day.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="yes">Wrong.</strong>
		<strong class="no">Correct!</strong> 
		The Earth rotates on an axis, making one full rotation every 24 
		hours. Different sides of the Earth are exposed to the sun during the 
		course of these 24 hours, with half of the planet being exposed to sun 
		while the other half is deprived of light. It is this rotation that 
		causes day and night.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://wiki.answers.com/Q/What_causes_day_and_night_on_earth" id="more">I want to learn more about stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>