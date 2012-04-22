<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>Alle Sterne haben die gleiche Entfernung zur Erde</p>
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
Es gibt große Unterschiede zwischen den Entfernungen der Sterne zur Erde. Ein heller Stern, welcher sehr weit entfernt ist, kann z.B. genauso erscheinen wie ein dunklerer Stern welcher näher ist. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://wiki.answers.com/Q/Are_all_the_stars_in_a_constellation_the_same_distance_away_from_us" id="more">Mehr davon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>