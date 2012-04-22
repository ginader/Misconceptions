<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>Day and night are caused by the Sun going around the Earth.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="no">Wrong.</strong>
		<strong class="yes">Correct!</strong> 
The Earth is going around the Sun and not the other way round. But day and night is caused by the rotation of the Earth about its own axis. At any given time,
the half facing the Sun will be shined upon while the other half will 
have no light. Places in the former will therefore experience day while 
places in the latter will experience night.Of course, since the 
Earth is rotating, the illuminated places will not be illuminated 
forever. After some time, it will be their turn to experience night.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.universetoday.com/59707/what-causes-day-and-night/" id="more">I want to learn more about the moon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>