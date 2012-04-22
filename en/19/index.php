<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>The Sun is never directly overhead at noon.</p>
		<img src="/assets/img/img-sun.png" alt="A closeup of the Sun.">
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-earth-01.png" alt="A closeup of the Earth.">	
	<p>
		<strong class="yes">Wrong.</strong>
		<strong class="no">Correct!</strong> 
		For continental U.S. the answer is never. Since the Earth's rotation axis is tilted 23.5 degrees with respect to its orbital motion around the Sun, one would have to be less than 23.5 degrees above or below the equator to have the Sun pass directly overhead (once per year).
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://scienceblogs.com/dotphysics/2009/01/when-is-the-sun-directly-overhead.php" id="more">I want to learn more about sun!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>