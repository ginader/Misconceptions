<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>Different countries see different phases of the Moon on the same day..</p>
			<img src="/assets/img/img-moon.png" alt="The Moon at night.">	
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-moon-phases-trigger.png" alt="A thumbnail to trigger the animation of the different hemisphere by Amit.">	
	<p>
		<strong class="no">Wrong.</strong>
		<strong class="yes">Correct!</strong> 
Northern and Southern hemispheres see different phases of the moon. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.uwgb.edu/dutchs/planets/sun.htm" id="more">I want to learn more about sun!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>