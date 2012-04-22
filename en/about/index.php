<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/helper.inc.php');
include ('../strings.inc.php');
include ($_SERVER['DOCUMENT_ROOT'].'/head.inc.php');
?>
<body>
<div id="header">
	<h1>Daily Myths</h1>
	<ul class="nav">
		<li><a href="/en/about">about</a></li>
		<!-- <li><a href="/credits">credits</a></li> -->
		<li id="language-nav" class="open_">
			<a href="/language">change language</a>
			<ul id="languages">
				<?php echo $language_nav ?>
			</ul>
		</li>
	</ul>	
</div><!-- /header -->

<div class="container" id="about">
	<div id="card" class="flipped_">
		<div class="face">
			<h2>About Daily Myths</h2>
				
			<p>This project was built in 24 hours during the INTERNATIONAL SPACE APPS CHALLENGE on 21-22 APRIL 2012. </p><p>The idea for it came out of the Challenge called: <a target="_blank" href="http://spaceappschallenge.org/challenge/visualize-all-too-common-astronomysolar-system-mis/">Visualize the "All-too-Common Astronomy/Solar System Misconceptions</a></p>
			
			<p>This Trivia is our approach to make people learn while having fun and to make those Misconceptions go away.</p>

			<h3>The Team</h3>

			<ul id="team">
				<li><a target="_blank" href="http://twitter.com/cindyli"><img src="/assets/img/cindyli.jpg" alt=""> Cindy Li</a> <p>[design]</li>
				<li><a target="_blank" href="http://twitter.com/ginader"><img src="/assets/img/ginader.png" alt=""> Dirk Ginader</a> [developer]</li>
				<li><a target="_blank" href="http://twitter.com/amitmrao"><img src="/assets/img/amirao.jpg" alt=""> Amit Rao</a> [developer (moon phases)]</li>
			</ul><!-- /team -->



		</div>


	</div>
</div><!-- /content -->
</body>
</html>