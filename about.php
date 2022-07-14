<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>01014 | What is this?</title>

<!--  BOOTSTRAP ICONS  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<link rel="stylesheet" type="text/css" href="css/styles.css" />

<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="css/ie7.css" />
<![endif]-->
<!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
<div id="nojs-background">
    <img src="images/backgrounds/placeholder.jpg" alt="" /><!-- Non-JavaScript background -->
</div>
<!--Start Outside-->
<div class="outside"><a name="top"></a>

  <!-- Begin Header -->
  <div id="header-outer" class="clearfix">
    <div id="header-inner">

      <!--Logo-->
      <div class="logo"><a href="./"><span class="logo-txt">01014</span></a></div>
      <!--End Logo-->

      <!-- Nav -->
      <div id="nav-wrap">
        <div id="nav-wrap-inner">

          <!--Horizontal Menu-->
          <?PHP require("php-components/nav-bar.php"); ?>
          <!--End Horizontal Menu-->

          <!--Search-->
          <?PHP require("php-components/search-bar.php"); ?>
          <!--End Search-->

          <!--Minimise-->
          <div class="min-button"><a id="minimise-button" href="#" title="Hide" class="min"></a></div>
          <!--End Minimise-->

        </div>
      </div>
      <!-- End Nav -->

    </div>
  </div>
  <!-- End Header -->

  <!-- Begin ABOUT US PAGE -->
  <div class="content-outer clearfix">
    <div class="content-inner">
      <!--About us content-->
      <div class="full-width-transparent clearfix">
        <h1 style="text-align: center;">What is 01014?</h1>
        <h2 style="text-align: center;">Not quite binary...</h2>

		<div class="clearfix bottom-breaker">
			<p>
				The short answer- this website is a work in progress of my coding and generative art projects.  It needs a lot of work!  Currently I'm focused on just getting my projects neatened-up and online.  My current projects are:
			</p>
			<ul>
				<li>
					<p><b><a href="../wall-of-cats.php" target="_blank">Wall of Cats</a></b>:  I originally made this project in 2020.  I was messing around with the Twitter API for another project (a rube goldberg machine that would trigger on certain twitter reactions to tweets- long story!) when I decided to make this project.  The goal was to create something using the Twitter API, for practice.  I created it for practice, but then ended up adding it to my projects portfolio.</p>

					<p>It was originally much more complicated than it is now, but I decided to remake it and clean it up.  It connects to a filtered stream of live tweets from Twitter, processes the tweets (uses two Tensorflow models to determine if the image is safe for work, and if it contains cats), and then sends them off to the client via WSS.  Eventually, I would like to add in a style-transfer model behind the scenes in the image processing, but that's for future me ;)</p>
				</li>

				<li>
					<p><b><a href="https://twitter.com/n3tdr34m3r">Dream Tweeter</a></b>:  This is another project that uses the Twitter API.  This project is overly-complicated and is up next on my list of projects to reformat.  It generates some random text (around a topic- there is a library of words that are used that can be easily configured), and does a Google search of the text generated.  It then picks a random result from the top 10 results.  After that, the script will crawl the website to get all the webpages.  It then picks a random page, and scrapes all the text on the page.  From that text, it randomly selects as many sentences as it can fit in a tweet, combines them, and then finally tweets the resulting text.</p>

					<p>What makes this so complicated (aside from my sloppy code!) is that there are many points-of-failure, and I added in a lot of redundancy so that it if it doesn't work the first time, it will either try and restart at a given point of the process, or just restart the whole process.</p>

				</li>

				<li>
					<p><b><a href="/Deity-Clan-Website/" target="_blank">Gamer Clan Website</a></b>:  This is a website that I built for a paying client around 2018.  It took me a long time (months), and was a big project for me to cut my teeth on.  I had built basic websites before but this was on a new scale for me.  It's not a template!  I built the whole thing from scratch.</p> 

					<p>While it's certainly flawed (and a bit outdated), I'm proud of it.  I started a project, I finished it and got paid, and I learned a lot along the way.  At the time, it was a huge accomplishment and is a display of my early web development skills.</p>
				</li>

				<li> 
					<p><b><a href="https://github.com/qozle/text-gen" target="_blank">Text Generator</a></b>:  This project is one of my latest.  In the past few months, I've been taking a serious dive into machine learning.  I've experimented mostly with time-series prediction, some image processing, and text generation.  Soon, I would like to have a demo version of this, but currently there is no demo, only the raw code that you can find on github.</p>

					<p>This code uses years worth of my personal journals as training material, and ultimately created a model that would write like I do.  That's partially why I don't have a demo- the resulting text that the generator makes sometimes reveals aspects of my personal life that I would like to keep private.  In the future, I am planning on changing this so that it combines the writing styles of some of my favorite authors (Arthur C. Clarke, Ken Wilber, Terry Goodkind, and others) and generates text off of that.</p>
				</li>


			</ul>	


		</div>


        

      </div>
      <!--End About us content-->
    </div>
  </div>
  <!-- End ABOUT US PAGE -->

  <!-- Begin Footer -->
  <?PHP require("php-components/footer.php"); ?>
  <!-- End Footer -->

</div>
<!--End Outside-->
<script type="text/javascript">Cufon.now();</script>
</body>
</html>