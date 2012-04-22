<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/helper.inc.php');
include ('../strings.inc.php');
include ($_SERVER['DOCUMENT_ROOT'].'/head.inc.php');
?>
<body>
<div id="header">
	<h1><a href="/">Daily Myths</a></h1>
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
				
			<p>This project was built in 24 hours during the <a target="_blank" href="http://spaceappschallenge.org/">International Space Apps Challenge</a> on 21-22 April 2012.The San Francisco location was at <a target="_blank" href="http://techshop.ws/">TechShop.</a.> </p>
			<p>The idea for it came out of the Challenge called: <a target="_blank" href="http://spaceappschallenge.org/challenge/visualize-all-too-common-astronomysolar-system-mis/">Visualize the "All-too-Common Astronomy/Solar System Misconceptions</a> We thought the title was really long so we decided to rebrand it: Daily Myths.This Trivia is our approach to make people learn while having fun and to make those Misconceptions go away.</p>

			<h2>The Team</h2>

			<ul id="team">
				<li><a target="_blank" href="http://twitter.com/cindyli"><img src="/assets/img/cindyli.jpg" alt="avatar of Cindy Li">Cindy Li</a> [design] <p></li>
				<li><a target="_blank" href="http://twitter.com/ginader"><img src="/assets/img/ginader.png" alt="avatar of Dirk Ginader">Dirk Ginader</a> [developer]<p></li>
				<li><a target="_blank" href="http://twitter.com/amitmrao"><img src="/assets/img/amirao.jpg" alt="avatar of Amit Rao">Amit Rao</a> [developer (moon phases)]<p></li>
				<li><a target="_blank" href="http://twitter.com/kurzkeks"><img src="/assets/img/cotta.jpg" alt="avatar of Cotta Ginader">Cotta Ginader</a> [Researcher]<p></li>
			</ul><!-- /team -->



		</div>


	</div>
</div><!-- /content -->
</body>
</html>