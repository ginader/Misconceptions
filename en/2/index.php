<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
		<img src="/assets/img/img-stars-5.png" alt="Stars in the Universe">	
	<p>All the stars are different distances from the Earth.</p>
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
		<img src="/assets/img/img-stars-4.png" alt="Stars in the Universe">	
There could be huge differences. A brighter star at a bigger distance will look just like a weaker star at a shorter distance.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://wiki.answers.com/Q/Are_all_the_stars_in_a_constellation_the_same_distance_away_from_us" id="more">I want to learn more about the stars and earth!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>