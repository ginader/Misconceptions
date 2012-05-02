<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-night.png" alt="View from space of North America's lights.">
	<p>We see because light brightens things.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
		<img src="/assets/img/img-night-2.png" alt="View from space of Europe's lights.">
	<p>
		<strong class="yes">Wrong.</strong>
		<strong class="no">Correct!</strong> 
		Light reflects off of things and into your eye, where it is detected, turned into nerve impulses and sent on to your brain.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://wiki.answers.com/Q/Is_it_true_you_see_because_light_brightens_things#ixzz1tgwCO7kl" id="more">I want to learn more about light!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>