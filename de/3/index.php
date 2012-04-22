<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>All the stars in a constellation are near each other.</p>
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
Each constellation is a collection of stars that are distributed in space in three dimensions. Stars are all different distances from Earth. The stars in a constellation appear to be in the same plane because we are viewing them from very, very, far away. Stars vary greatly in size, distance from Earth, and temperature. Dimmer stars may be smaller, farther away, or cooler than brighter stars. By the same token, the brightest stars are not necessarily the closest. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.space.com/57-stars-formation-classification-and-constellations.html" id="more">I want to learn more about the stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>