<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>Die Mondphasen werden durch den Schatten, welche die Erde auf den Mond wirft verursacht.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="no">Falsch.</strong>
		<strong class="yes">Richtig!</strong> 
Ähnlich wie die Planeten produziert unser Mond kein eigenes Licht, sondern "leuchtet indem er das Sonnenlicht reflektiert. Während sich der Mond um die Erde dreht, ist seine sonnenzugewandte Seite immer erleuchtet. Ähnlich wie bei der Erde, wo diejenige Seite auf welcher Tag herrscht von der Sonne angestrahlt wird. Was wir vom Mond von der Erde aus sehen können, ist jedoch eine andere Geschichte. Angefangen vom dunklen Neumond können wir beobachten wie der helle Teil des Mondes langsam vom Halb- zum Vollmond wächst und wieder abnimmt und ein neuer Zyklus beginnt. Wir haben den sog. Neumond, wenn unser Mond sich beim Umrunden der Erde zwischen Erde und Sonne schiebt. Von der Erde aus gesehen sieht die Mondoberfläche dunkel aus, weil die von der Sonne erleuchtete Seite zu dieser hin und von der Erde weggerichtet ist. Während der Mond sich weiter um die Erde dreht wird mehr und mehr erleuchtete Fläche von der Erde aus sichtbar, bis der Mond so um die Erde rotiert ist, dass nun die Erde zwichen ihm und der Sonne steht. Nun haben wir Vollmond.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.moonconnection.com/moon_phases.phtml" id="more">Mehr davon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>