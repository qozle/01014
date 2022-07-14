<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Storm - Full screen background template</title>

<!--  BOOTSTRAP ICONS  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="quform/css/base.css" />
<link rel="stylesheet" type="text/css" href="quform/themes/dark/dark.css" />
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="css/ie7.css" />
<![endif]-->
<!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="quform/js/plugins.js"></script>
<script type="text/javascript" src="quform/js/scripts.js"></script>
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
		  <?PHP require("php-components/search.php"); ?>
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

<!-- Begin CONTACT PAGE -->
  <div class="content-outer clearfix">
    <div class="content-inner">

   	  <!--Transparent Header-->
      <div class="transparent-header">
        <h1>Contact us</h1>
        <h2>We would love to hear from you</h2>
      </div>
      <!--End Transparent Header-->

      <div class="plain-black clearfix">
      	<!--Contact Left Col-->
      	<div class="contact-left-col">

          <!-- To copy the form HTML, start here -->
          <div class="quform-outer quform-theme-dark-dark">
              <form class="quform" action="quform/process.php" method="post" enctype="multipart/form-data" onclick="">

                  <div class="quform-inner">
                      <h3>Send us a message</h3>

                      <div class="quform-elements">

                          <!-- Begin 2 column Group -->
                          <div class="quform-group-wrap quform-group-style-plain quform-group-alignment-proportional">
                              <div class="quform-group-elements">

                                  <div class="quform-group-row quform-group-row-2cols">

                                      <!-- Begin Text input element -->
                                      <div class="quform-element quform-element-text quform-full-width">
                                          <div class="quform-spacer">
                                              <label for="name">Name <span class="quform-required">*</span></label>
                                              <div class="quform-input">
                                                  <input id="name" type="text" name="name" />
                                              </div>
                                          </div>
                                      </div>
                                      <!-- End Text input element -->

                                      <!-- Begin Text input element -->
                                      <div class="quform-element quform-element-text quform-full-width">
                                          <div class="quform-spacer">
                                              <label for="email">Email address <span class="quform-required">*</span></label>
                                              <div class="quform-input">
                                                  <input class="quform-tooltip" id="email" type="text" name="email" title="We will never send you spam, we value your privacy as much as our own" />
                                              </div>
                                          </div>
                                      </div>
                                      <!-- End Text input element -->

                                  </div>

                              </div>
                          </div>
                          <!-- End 2 column Group -->

                          <!-- Begin Textarea element -->
                          <div class="quform-element quform-element-textarea quform-full-width">
                              <div class="quform-spacer">
                                  <label for="message">Message <span class="quform-required">*</span></label>
                                  <div class="quform-input">
                                      <textarea id="message" name="message" style="height: 130px;"></textarea>
                                  </div>
                              </div>
                          </div>
                          <!-- End Textarea element -->

                          <!-- Begin Captcha element -->
                          <div class="quform-element quform-element-captcha quform-small">
                              <div class="quform-spacer">
                                  <label for="type_the_word">Type the word <span class="quform-required">*</span></label>
                                  <div class="quform-input quform-cf">
                                      <input id="type_the_word" type="text" name="type_the_word" />
                                      <div class="quform-captcha">
                                          <div class="quform-captcha-inner">
                                              <img src="images/captcha.png" alt="" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- End Captcha element -->

                          <!-- Begin Submit button -->
                          <div class="quform-submit">
                              <div class="quform-submit-inner">
                                  <button type="submit" value="Send"><span><em>Send</em></span></button>
                              </div>
                              <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                          </div>
                          <!-- End Submit button -->
                     </div>
                 </div>
              </form>
          </div>
          <!-- To copy the form HTML, end here -->

        </div>
        <!--End Contact Left Col-->

        
      </div><!-- /.plain-black -->
    </div>
  </div>
  <!-- End CONTACT PAGE -->

  <!-- Begin Footer -->
  <?PHP require("php-components/footer.php"); ?>
  <!-- End Footer -->
</div>
<!--End Outside-->
<script type="text/javascript">Cufon.now();</script>
</body>
</html>