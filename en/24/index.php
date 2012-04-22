<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>The Earth is larger than the Sun.</p>
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
		The sun is WAY bigger than the Earth. In fact the sun is 109 times bigger than the Earth, which means you'd have to line up 109 Earth's end-to-end to stretch across the face of the sun.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.nasa.gov/vision/universe/solarsystem/sun_for_kids_main.html" id="more">I want to learn more about stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>