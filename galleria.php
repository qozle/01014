<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Storm - Full screen background template</title>

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
<script type="text/javascript" src="js/galleria/galleria.js"></script>
<script type="text/javascript" src="js/galleria.js"></script>
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
      <div class="logo"><a href="./"><img src="images/logo.png" title="" alt="Logo" /></a></div>
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

    <!-- Begin Galleria portfolio -->
    <div class="content-outer clearfix">
        <div class="content-inner">

            <!--Transparent Header-->
            <div class="transparent-header">
                <h1>Galleria</h1>
                <h2>Image gallery</h2>
            </div>
            <!--End Transparent Header-->

            <!--Portfolio content-->
            <div class="plain-black clearfix">
                <div class="portfolio galleria-portfolio grid-portfolio clearfix">
                    <ul>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                        <li class="one-portfolio-item">
                            <a class="portfolio-thumb-link" href="images/portfolio/popup/placeholder.png" rel="portfolio">
                                <img src="images/portfolio/grid/placeholder.png" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End Portfolio content-->

        </div>
    </div>
    <!-- End Galleria portfolio -->

  <!-- Begin Footer -->
  <?PHP require("php-components/footer.php"); ?>
  <!-- End Footer -->
</div>
<!--End Outside-->
<script type="text/javascript">Cufon.now();</script>
</body>
</html>