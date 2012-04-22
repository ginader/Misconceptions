<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>Planets cannot be seen with the naked eye</p>
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
No. Venus, Mars, Jupiter and Saturn are easy to observe with the unaided eye.
Each planet is visible within a fixed schedule. For a given evening, each planet may be visible the entire evening, just part of the evening or not be visible at all. This schedule doesn't change by much over the
course of an evening or two, but will change over a period of weeks or months. Over the course of the year, each of these planets will be visible at least part of the time. Given the right conditions Mercury will be very bright and can be seen with the naked eye too. Uranus is bright enough to be seen with the unaided eye, but appears as a dot of light that can be very difficult to distinguish from nearby stars. Only Neptune and the dwarf planet Pluto are too dim to be seen with the naked eye.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.umich.edu/~lowbrows/guide/eye.html" id="more">I want to learn more about the planets!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>