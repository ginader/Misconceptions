<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
		<img src="/assets/img/img-stars-3.png" alt="Stars in space">
	<p>All stars are the same size.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
		<img src="/assets/img/img-star-1.png" alt="Stars at different sizes">
	<p>
		<strong class="no">Correct!</strong>
		<strong class="yes">Wrong.</strong> 
Astronomers generally measure the size of stars by using the radius of our Sun. Stars range in size from neutron stars, which can be only 12 miles (20 kilometers) wide, to supergiants about 1,000 times the diameter of the Sun.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.space.com/57-stars-formation-classification-and-constellations.html" id="more">I want to learn more about the stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>