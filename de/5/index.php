<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>Meteors are falling stars.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="yes">Wrong.</strong>
		<strong class="no">Correct!</strong> 
Even though they are commonly called "shooting star" or "falling star" a meteor is not a star, but the the visible path of a meteoroid that enters Earth's (or another body's) atmosphere. A meteoroid is a sand- to boulder-sized particle of debris in the Solar System.  If a meteoroid reaches the ground and survives impact, then it is called a meteorite. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.space.com/57-stars-formation-classification-and-constellations.html" id="more">I want to learn more about the stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>