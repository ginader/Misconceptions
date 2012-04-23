<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-sun.png" alt="A closeup of the Sun.">
	<p>The Sun goes around the Earth in less than a year</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-solar-system-2.png" alt="Our solar system with all the planets.">
	<p>
		<strong class="yes">Correct!</strong>
		<strong class="no">Wrong.</strong> 
		The earth goes around the sun in 365.24 days. Most of the time our calendar is 365 days and every 4th year it is 366 days. That's why we have a leap year!
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.astronomy.org/astronomy/misconceptions.html#3" id="more">I want to learn more about the earth and sun!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>