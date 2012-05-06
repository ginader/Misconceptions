<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
		<img src="/assets/img/img-sun.png" alt="A closeup of the Sun.">
	<p>In the continental United States the Sun is never directly overhead at noon.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-earth-01.png" alt="A closeup of the Earth.">	
	<p>
		<strong class="yes">Wrong.</strong>
		<strong class="no">Correct!</strong> 
The sun is never above. The Earth's rotation axis is tilted. You would have to be less than 23.5 degrees above or below the equator to have the Sun pass directly overhead (once per year).
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://scienceblogs.com/dotphysics/2009/01/when-is-the-sun-directly-overhead.php" id="more">I want to learn more about Sun!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>