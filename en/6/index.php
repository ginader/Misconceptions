<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-moonview-earth.png" alt="View of Earth from the Moon">		
	<p>Phases of the Moon are caused by a shadow from the Earth.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-moon-earth.png" alt="Moon and Earth in the same view with shadows.">	
	<p>
		<strong class="no">Correct!</strong>
		<strong class="yes">No.</strong> 
The lunar phases are created by changing angles of the Earth, the Moon and the Sun, as the Moon orbits the Earth.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.moonconnection.com/moon_phases.phtml" id="more">I want to learn more about the Moon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>