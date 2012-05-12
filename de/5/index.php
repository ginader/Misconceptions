<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<p>Meteore sind fallende Sterne</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="yes">Falsch.</strong>
		<strong class="no">Richtig!</strong> 
Auch wenn Meteore Sternschnuppen oder fallende Sterne genannt werden, so sind sie dennoch keine Sterne. Meteore sind vielmehr der sichtbare helle Lichtstreifen am Himmel, der durch den Eintritt eines Meteoroiden in die Erdatmosph&auml;re hervorgerufen wird. Meteoroiden sind Objekte, die innerhalb des Sonnensystems um die Sonne kreisen und kleiner als Asteroiden sind. Dringt ein solcher Meteoroid in die Erdatmosph&auml;re ein, so wird er zu einem Meteor. Durch das Eintreten in die dichte Erdatmosph&auml;re wird die Luft um den Meteor herum ionisiert und wir k&ouml;nnen den daraus entstehenden Leuchtschweif auf der Erde als Sternschnuppe sehen. Trifft der Meteor auf der Erdoberfl&auml;che auf, so wird er Meteorit genannt.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://en.wikipedia.org/wiki/Meteoroid" id="more">Mehr davon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>