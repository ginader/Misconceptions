<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-earth-01.png" alt="Earth in space.">
	<p>The Earth is round like a pancake.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-earth-2.png" alt="Earth in space.">
	<p>
		<strong class="yes">Wrong.</strong>
		<strong class="no">Correct!</strong> 
The Earth is neither flat like a pancake nor perfectly round like a marble. The actual shape of the Earth is actually an oblate spheroid, a sphere with a bulge around the equator. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.universetoday.com/25893/is-the-earth-round/" id="more">I want to learn more about the earth!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>