<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<p>The surface of the Sun has visible layers.</p>
			<img src="/assets/img/img-sun.png" alt="A closeup of the Sun.">	
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-sun-ultraviolet.png" alt="A closeup of the Sun in Ultraviolet to show the layers.">	
	<p>
		<strong class="no">Wrong.</strong>
		<strong class="yes">Correct!</strong> 
The Sun's visible surface shows a variety of features. Most conspicuous are the sunspots, great dark disturbances which can be many times larger than the earth. Observations of sunspots from day to day show that the Sun rotates. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.uwgb.edu/dutchs/planets/sun.htm" id="more">I want to learn more about sun!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>