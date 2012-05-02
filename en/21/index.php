<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-moon.png" alt="The Moon at night.">
	<p>Different countries see different phases of the Moon on the same day.</p>	
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<a target="_blank" href="/MoonPhases/MoonPhases.html"><img src="/assets/img/img-moon-phases-trigger.png" alt="A thumbnail to trigger the animation of the different hemisphere by Amit."> </a>	
	<p>
		<strong class="no">Wrong.</strong>
		<strong class="yes">Correct!</strong> 
Northern and southern hemispheres see different phases of the Moon. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="/MoonPhases/LunarLibration.html" id="more">I want to learn more about Moon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>