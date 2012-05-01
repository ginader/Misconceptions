<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-sun.png" alt="A closeup of the Sun.">
	<p>The Sun goes around the Earth in less than a year</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-solar-system-2.png" alt="Our solar system with all the planets.">	
		<strong class="no">Richtig!</strong>
		<strong class="yes">Falsch.</strong> 
		Die Erde bewegt sich um die Sonne in 365.24 Tagen. Unser Kalender zeigt meistens 365 Tage aber alle 4 Jahre sind es 366 Tage. Darum haben wir Schaltjahre!
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.astronomy.org/astronomy/misconceptions.html#3" id="more">Ich m&ouml;chte mehr &uuml;ber die Erde und die Sonne lernen!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>