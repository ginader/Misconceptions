<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-meteor.png" alt="Meteors and Auora in the sky.">	
	<p>Meteors are falling stars.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-meteor-2.png" alt="Meteors and Auora in the sky.">		
	<p>
		<strong class="yes">Wrong.</strong>
		<strong class="no">Correct!</strong> 
Commonly called a "shooting star" or "falling star" a Meteor is not a star, but the the visible path of a meteoroid that enters Earth's atmosphere.

	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.space.com/57-stars-formation-classification-and-constellations.html" id="more">I want to learn more about the stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>