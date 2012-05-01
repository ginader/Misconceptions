<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/helper.inc.php');
include ($_SERVER['DOCUMENT_ROOT'].'/en/strings.inc.php');
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
				<li><a href="/de">deutsch</a></li>
			</ul>
		</li>
	</ul>	
</div><!-- /header -->

<div class="block panel">
		<div class="front" id="question">
			<h2>About Daily Myths</h2>
				
			<p>This project was built in 48 hours during the <a target="_blank" href="http://spaceappschallenge.org/">International Space Apps Challenge</a> on 21-22 April 2012. The San Francisco location was at <a target="_blank" href="http://techshop.ws/">TechShop.</a> </p>
			<p>The idea for it came out of the Challenge called: <a target="_blank" href="http://spaceappschallenge.org/challenge/visualize-all-too-common-astronomysolar-system-mis/">Visualize the "All-too-Common Astronomy/Solar System Misconceptions</a> We thought the title was really long so we decided to rebrand it: Daily Myths.This Trivia is our approach to make people learn while having fun and to make those Misconceptions go away.</p>

			<h3>You can help!</h3>

			<p><strong>If you happen to speak a language in which Daily Myths is not yet available</strong> (currently available in: english, german) then it would be absolutely brilliant if you could add translations! It's easy! Just clone the <a href="https://github.com/ginader/Misconceptions">github repository</a>, duplicate the language folder of a language you know (en or de) and happily translate away! The UI strings live in strings.inc.php and all the myths in their own numbered folders. If you run into issues or have questions simply file an <a href="https://github.com/ginader/Misconceptions/issues">issue in our tracker</a></p>

			<p><strong>If you stumble over a common Myth that people still believe and you feel like you have to change that</strong> then go ahead and add it! We always want people to become more educated :-)</p>

			<h3>The Team</h3>

			<ul id="team">
				<li><a target="_blank" href="http://twitter.com/cindyli"><img src="/assets/img/cindyli.jpg" alt="avatar of Cindy Li">Cindy Li</a> [design] <p></li>
				<li><a target="_blank" href="http://twitter.com/ginader"><img src="/assets/img/ginader.png" alt="avatar of Dirk Ginader">Dirk Ginader</a> [developer]<p></li>
				<li><a target="_blank" href="http://twitter.com/amitmrao"><img src="/assets/img/amirao.jpg" alt="avatar of Amit Rao">Amit Rao</a> [developer (moon phases)]<p></li>
				<li><a target="_blank" href="http://twitter.com/kurzkeks"><img src="/assets/img/cotta.jpg" alt="avatar of Cotta Ginader">Cotta Ginader</a> [Researcher]<p></li>
				<li><a target="_blank" href="http://twitter.com/themattharris"><img src="/assets/img/matt.jpg" alt="avatar of Matt Harris">Matt Harris</a> [Tech support]<p></li>
			</ul><!-- /team -->


<?php include ($_SERVER['DOCUMENT_ROOT'].'/en/footer.inc.php'); ?>


