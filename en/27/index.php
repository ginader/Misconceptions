<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>The sun is the largest object in the solar system. It is larger than the earth.</p>
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
		The Sun is the largest object in the solar system. It contains 99 percent of the mass of the solar system. Jupiter is the largest planet in the solar system, and Earth is the fifth-largest.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://amazing-space.stsci.edu/resources/myths/solar_system.php.p=Capture+the+cosmos@,capture,%3ESolar+system@,capture,solarsyst," id="more">I want to learn more about stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>