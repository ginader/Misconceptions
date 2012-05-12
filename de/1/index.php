<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
		<img src="/assets/img/img-stars-3.png" alt="Stars in space">
	<p>Alle Sterne haben die gleiche Gr&uuml;sse</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
		<img src="/assets/img/img-star-1.png" alt="Stars at different sizes">
	<p>
		<strong class="no">Richtig!</strong>
		<strong class="yes">Falsch.</strong> 
Astronomen messen die Gr&ouml;&szlig;e von Sternen nach dem Radius der Sonne. Zum Beispiel hat Alpha Centauri A einen Radius von 1.05 Solar Radii. Die Gr&ouml;&szlig;e von Sternen reicht von Neutronen Sternen mit einem Radius von nur 20km (12 Meilen) bis hin zu Supergiganten mit einem Durchmesser 1.000 mal gr&ouml;&szlig;er als dem unserer Sonne.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.space.com/57-stars-formation-classification-and-constellations.html" id="more">Mehr davon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>