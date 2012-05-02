<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-earth-2.png" alt="A partial closeup view of the Earth.">	
	<p>Seasons are caused by the Earth's distance from the Sun.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-earth-01.png" alt="A closeup view of the entire Earth.">	
	<p>
		<strong class="no">Correct!</strong>
		<strong class="yes">Wrong.</strong> 
The Earth spins on its axis, around the sun in an elliptical orbit in about 365 1/4 days. The Earth's spin axis is tilted. This is what causes the seasons. When the Earth's axis points towards the Sun, it is summer for that hemisphere. When the Earth's axis points away, winter can be expected.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.wrh.noaa.gov/fgz/science/season.php?wfo=fgz" id="more">I want to learn more about the seasons!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>