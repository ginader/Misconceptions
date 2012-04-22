<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>All stars are the same size.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="no">Correct!</strong>
		<strong class="yes">Wrong.</strong> 
Astronomers generally measure the size of stars in terms of the radius of our sun. For instance, Alpha Centauri A has a radius of 1.05 solar radii (the plural of radius). Stars range in size from neutron stars, which can be only 12 miles (20 kilometers) wide, to supergiants roughly 1,000 times the diameter of the sun.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.space.com/57-stars-formation-classification-and-constellations.html" id="more">I want to learn more about the stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>