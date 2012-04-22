<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-solar-system-2.png" alt="A view of the solar system and the order of all the planets.">
	<p>Planets cannot be seen with the naked eye</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-planets.png" alt="The solar system.">	
	<p>
		<strong class="no">Wrong.</strong>
		<strong class="yes">Correct!</strong> 
Venus, Mars, Jupiter and Saturn are easy to observe with the unaided eye.
Each planet is visible within a fixed schedule. For a given evening, each planet may be visible the entire evening, just part of the evening or not be visible at all. Over the course of the year, each of these planets will be visible at least part of the time.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.umich.edu/~lowbrows/guide/eye.html" id="more">I want to learn more about the planets!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>