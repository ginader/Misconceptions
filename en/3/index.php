<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-stars-4.png" alt="Stars in the galaxy.">	
	<p>All the stars in a constellation are near each other.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
		<img src="/assets/img/img-stars-3.png" alt="Stars in the galaxy.">	
	<p>
		<strong class="yes">Wrong.</strong>
		<strong class="no">Correct!</strong> 
Stars vary greatly in size, distance from Earth, and temperature. Dimmer stars may be smaller, farther away, or cooler than brighter stars.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.space.com/57-stars-formation-classification-and-constellations.html" id="more">I want to learn more about the stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>