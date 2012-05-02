<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-sun.png" alt="The Sun.">
	<p>The Sun is the largest object in the solar system. It is larger than the Earth.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-solar-system.png" alt="The solar system.">
	<p>
		<strong class="no">Wrong.</strong>
		<strong class="yes">Correct!</strong> 
		The Sun is the largest object in the solar system. It contains 99 percent of the mass of the solar system.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://amazing-space.stsci.edu/resources/myths/solar_system.php.p=Capture+the+cosmos@,capture,%3ESolar+system@,capture,solarsyst," id="more">I want to learn more about Stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>