<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>01014 | Wall of Cats</title>

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css" />

<!-- <link href="css/wall-of-cats/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
<link href="css/wall-of-cats/bootstrap.rtl.min.css" media="all" type="text/css" rel="stylesheet"> -->
<link href="css/wall-of-cats/styles.css" media="all" type="text/css" rel="stylesheet">
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie7.css" />
<![endif]-->
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/colorbox.js"></script>
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

	<!-- Begin Colorbox 3 column portfolio -->
	<div class="content-outer clearfix">
		<div class="content-inner">

			<!--Transparent Header-->
			<div class="transparent-header">
				<h1 style="text-align: center;">Wall of Cats</h1>
				<h2 style="text-align: center;">Images taken from real-time tweets about cats</h2>
			</div>
			<!--End Transparent Header-->

			<!--Portfolio content-->
			<div class="plain-black clearfix">
				<div class="portfolio colorbox-portfolio threecol-portfolio threecol-colorbox-portfolio clearfix">
					<ul>

						<li class="one-portfolio-item" id="col_1">
							<a class="portfolio-thumb-link" href="images/cats/cat1.jpg" rel="portfolio">
								<img src="images/cats/cat1.jpg" class="cat_pic" alt="" />
							</a>
						</li>

						<li class="one-portfolio-item" id="col_2">
							<a class="portfolio-thumb-link" href="images/cats/cat2.jpg" rel="portfolio">
								<img src="images/cats/cat2.jpg" class="cat_pic" alt="" />
							</a>
						</li>

						<li class="one-portfolio-item" id="col_3">
							<a class="portfolio-thumb-link" href="images/cats/cat3.jpg" rel="portfolio">
								<img src="images/cats/cat3.jpg" class="cat_pic" alt="" />
							</a>
						</li>

						<li class="one-portfolio-item" id="col_4">
							<a class="portfolio-thumb-link" href="images/cats/cat4.jpg" rel="portfolio">
								<img src="images/cats/cat4.jpg" class="cat_pic" alt="" />
							</a>
						</li>

						<li class="one-portfolio-item" id="col_5">
							<a class="portfolio-thumb-link" href="images/cats/cat5.jpg" rel="portfolio">
								<img src="images/cats/cat5.jpg" class="cat_pic" alt="" />
							</a>
						</li>

						<li class="one-portfolio-item" id="col_6">
							<a class="portfolio-thumb-link" href="images/cats/cat6.jpg" rel="portfolio">
								<img src="images/cats/cat6.jpg" class="cat_pic" alt="" />
							</a>
						</li>

						<li class="one-portfolio-item" id="col_7">
							<a class="portfolio-thumb-link" href="images/cats/cat7.jpg" rel="portfolio">
								<img src="images/cats/cat7.jpg" class="cat_pic" alt="" />
							</a>
						</li>

						<li class="one-portfolio-item" id="col_8">
							<a class="portfolio-thumb-link" href="images/cats/cat8.jpg" rel="portfolio">
								<img src="images/cats/cat8.jpg" class="cat_pic" alt="" />
							</a>
						</li>

						<li class="one-portfolio-item" id="col_9">
							<a class="portfolio-thumb-link" href="images/cats/cat9.jpg" rel="portfolio">
								<img src="images/cats/cat9.jpg" class="cat_pic" alt="" />
							</a>
						</li>

					</ul>
				</div>
			</div>
			<!--End Portfolio content-->

		</div>
	</div>
	<!-- End Colorbox 3 column portfolio -->

	<!-- Begin Footer -->
	<?PHP require("php-components/footer.php"); ?>
	<!-- End Footer -->
</div>
<!--End Outside-->
  
<script src="js/wall-of-cats/bootstrap.bundle.min.js"></script>
<script src="js/wall-of-cats/new-wall-of-cats.js"></script>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>