<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<p>Tag und Nacht werden durch die Rotation der Sonne um die Erde verursacht</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="no">Falsch.</strong>
		<strong class="yes">Richtig!</strong> 
Die Erde dreht sich um die Sonne und nicht anders herum. Tag und Nacht werden jedoch durch die Drehung der Erde um ihre eigene Achse verusacht. Diejenige H&auml;lfte der Erde die der Sonne zugewandt ist, wird von dieser angestrahlt und dort herrscht Tag. Auf der sonnenabgewandten Seite herrscht Nacht. Da sich die Erde um ihre Achse dreht, bleibt der von der Sonne erleuchtete Teil nicht derselbe. Vielmehr wird hier die Nacht eintreten und dort wo zuvor Nacht herrschte, bricht der Tag an.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.universetoday.com/59707/what-causes-day-and-night/" id="more">Mehr davon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>