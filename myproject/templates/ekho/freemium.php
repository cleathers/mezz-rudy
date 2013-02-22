<!doctype html>
    <!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
    <!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
    <!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
    <!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
  <title>Supersized Slider | EKHO Template</title>
  <?php include ('inc.head.php'); ?>
</head>

<body class="minimized dark header-vertical">
<?php include('inc.fb-sdk.php'); ?>

<div id="page_wrapper">

<div id="background">

  <div class="supersized_slider">
    <div class="titles-wrapper">
      <div id="titles">
        <h2></h2>
        <h3></h3>
      </div>
    </div><!-- end titles-wrapper -->

    <div id="thumb-tray" class="load-item">
      <div id="thumb-back"></div>
      <div id="thumb-forward"></div>
    </div><!-- end thumb tray -->

    <!--Slide counter-->
    <div id="slidecounter">
      <span class="slidenumber"></span> / <span class="totalslides"></span>
    </div>

    <!--Time Bar-->
    <div id="progress-back" class="load-item">
      <div id="progress-bar"></div>
    </div>

    <!--Control Bar-->
    <div id="controls-wrapper" class="load-item">
      <ul id="controls">
        <li><a id="play-button"><span id="pauseplay" class="pause"></span></a></li>

        <!--Arrow Navigation-->
        <li><a id="prevslide" class="load-item"></a></li>
        <li><a id="nextslide" class="load-item"></a></li>

        <!--Thumb Tray button-->
        <li><a id="tray-button"><span id="tray-arrow" class="button-tray-up"></span></a></li>
      </ul>
    </div>
    <!--Navigation-->
    <ul id="slide-list"></ul>

  </div><!-- end supersized slider // JUST HTML CODE // Images are added through JS in the bottom of this page -->

</div><!-- end background -->

<div id="header" class="vertical" data-type="vertical">

  <?php include ('inc.con_header.php'); ?>

</div><!-- end header -->
<div id="main" class="container">
<a href="#" id="mainClose" class="maximized" data-rel="tipsye" title="Minimize"></a>
<div class="inner-container">

<div id="breadcrumbs" class="row">
  <div class="breadcrumb ten columns omega">
    <div class="breadcrumbs">
      <a href="index.php" class="pathway isHome ">Home</a>
      <span class="brd_separator">/</span>
      <span>PAGES</span>
      <span class="brd_separator">/</span>
      <span>HISTORIC</span>
    </div>
  </div><!-- end breadcrumbs -->
  <div class="thedate six columns alpha">
    <span id="current-date"></span>
  </div>
  <div class="clear"></div>
</div><!-- end breadcrumbs -->
<div class="row">
  <div class="sixteen noSidebars">
    <div id="mainbody">
      <div class="item-page ">
        <h2 class="hlight_red">FREEMIUM SAAS</h2>
        <h6>The <span class="hlight_red">Software as a Service</span> <span
            class="hlight_blue">Freemium</span> Model as it applies to <span class="hlight_blue">Rudy
                        Jaramillo's</span> <strong class="hlight_red">THE SYSTEM</strong></h6>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="twelve columns sidebarRight">
    <div id="mainbody">
      <div class="item-page ">
        <div class="years">
          <div id="model" class="year fromleft first">
            <div class="date">
              <span><img src="http://webpowerlabs.com/static/img/icons/slider-tab-icon5.png"></img>SaaS</span>
            </div>
            <h4 class="htitle hlight_red">The SaaS Business Model</h4>
            <p>Unlike traditional business models, SaaS generally prices products using a subscription fee, most
              commonly a monthly fee or an annual fee.
              </p>
            <blockquote class="hlight_blue">Consequently, the initial setup cost for SaaS is typically lower than the
              equivalent
              enterprise software.</blockquote>
            <img class="shadow" src="images/baseball/info_graphic_cut_outs/ecom_cats.png" border="0" alt=".shadow css class" width="200" style="margin-left: 10px; float: right;" />
            <p>SaaS vendors typically price their product based on some usage parameters, such as the number of users
              ("seats") using the application.However, because in a SaaS environment customers' data resides with the
              SaaS vendor, opportunities also exist to charge per transaction, event, or other unit of value.</p>

          </div><!-- end year -->

          <div id="video" class="year fromright ">
            <div class="date">
              <span>Video</span>
            </div>
            <h4 class="htitle hlight_red">Video content for members</h4>
            <blockquote>Training videos are released systematically and over the stretch of an
              online marketing campaign.</blockquote>
            <img class="fivetwenty" src="images/baseball/info_graphic_cut_outs/saas_how.png"></img>
            <p>The relatively <span class="hlight_blue">low cost</span> for user provisioning (i.e., setting up a new
              customer) in a multi-tenant environment enables us to offer video content using the freemium model.</p>
          </div><!-- end year -->

          <div id="premium" class="year fromleft ">
            <div class="date">
              <span>Premium</span>
            </div>
            <h4 class="htitle hlight_red">Premium Memberships</h4>
            <blockquote>Different levels of memberships to reach all your target audiences.</blockquote>
            <p>In this model, a free service is made available with limited functionality or scope, and fees are charged for
              enhanced functionality or larger scope.</p>

          </div><!-- end year -->

          <div class="pricing-table col4 blue-style">
            <div class="box first ">
              <div class="box-inner">
                <div class="title">DOUBLE-AA</div>
                <div class="price">
                  <span class="curr">$</span>9.99
                </div>
                <div class="price-type">
                  starting price per month
                </div>
                <ul class="description">
                  <li>Training Video Archives</li>
                  <li>Progress Tracking</li>
                  <li>Drill Sequence</li>
                  <li>Improvement Plan</li>
                  <li>
                    <div class="separator"></div>
                  </li>
                  <li>-</li>
                  <li>-</li>
                  <li>-</li>
                  <li>-</li>
                </ul>
                <div class="action">
                  <a href="/ecommerce_product.php" class="button small nice radius">Order Now</a>
                </div>
              </div>
            </div><!-- Box end -->

            <div class="box promoted">
              <div class="box-inner">
                <div class="title">TRIPLE-AAA</div>
                <div class="price">
                  <span class="curr">$</span>13.99
                </div>
                <div class="price-type">
                  starting price per month
                </div>
                <ul class="description">
                  <li>Training Video Archives</li>
                  <li>Progress Tracking</li>
                  <li>Drill Sequence</li>
                  <li>Improvement Strategy Guide</li>
                  <li>
                    <div class="separator"></div>
                  </li>
                  <li>Virtual Online Batting Coach</li>
                  <li>2 System Training Gym Passes</li>
                  <li>-</li>
                  <li>-</li>
                </ul>
                <div class="action">
                  <a href="/ecommerce_product.php" class="button small nice radius">Order Now</a>
                </div>
              </div>
            </div><!-- Box end -->

            <div class="box last ">
              <div class="box-inner">
                <div class="title">MLB</div>
                <div class="price">
                  <span class="curr">$</span>49.99
                </div>
                <div class="price-type">
                  starting price per month
                </div>
                <ul class="description">
                  <li>Training Video Archives</li>
                  <li>Progress Tracking</li>
                  <li>Drill Sequence</li>
                  <li>Improvement Strategy Guide</li>
                  <li>
                    <div class="separator"></div>
                  </li>
                  <li>Virtual Online Batting Coach</li>
                  <li>5 System Training Gym Passes</li>
                  <li>24/7 Technical Support Line</li>
                  <li>Exclusive Tips</li>
                </ul>
                <div class="action">
                  <a href="/ecommerce_product.php" class="button small nice radius">Order Now</a>
                </div>
              </div>
            </div><!-- Box end -->

            <div class="clear"></div>
          </div><!-- end pricing table -->
        </div><!-- end years -->

      </div><!-- end item-page-->
    </div><!-- end mainbody -->
  </div>

  <div class="four columns">
    <?php include ('inc.con_right_sidebar.php'); ?>

  </div>

</div><!-- end row -->
</div>
</div><!--end main-->

<!-- social sharing -->
<?php include ('inc.social_sharing.php'); ?>

<!-- footer -->
<?php include ('inc.footer.php'); ?>

<!-- live comments panel -->
<?php include ('inc.live_comments.php'); ?>



</div><!-- end page_wrapper -->

<!-- Start Supersized Slider code -->
<link rel="stylesheet" href="sliders/supersized/css/supersized.css" type="text/css" />
<link rel="stylesheet" href="sliders/supersized/theme/supersized.shutter.css" type="text/css" />
<script src="sliders/supersized/js/supersized.3.2.6.min.js" type="text/javascript"></script>
<script src="sliders/supersized/theme/supersized.shutter.min.js" type="text/javascript"></script>
<script src="sliders/supersized/js/jquery.clip-animation.min.js" type="text/javascript"></script>
<script src="sliders/supersized/js/jquery.touchSwipe-1.2.6.min.js" type="text/javascript"></script>

<script type="text/javascript">
  (function($){
    $(document).ready(function(){
      $.supersized({
        slideshow:1,				// Slideshow on/off
        autoplay:1,					// Slideshow starts playing automatically
        start_slide:1, 				// Start slide (0 is random)
        stop_loop:0, 				// Stops slideshow on last slide
        random:0, 					// Randomize slide order (Ignores start slide)
        slide_interval:6000, 		// Length between transitions
        transition:1, 				// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed:1000, 		// Speed of transition
        new_window:1, 				// Image links open in new window/tab
        pause_hover:0, 				// Pause slideshow on hover
        keyboard_nav:1, 			// Keyboard navigation on/off
        performance:1, 				// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed //  (Only works for Firefox/IE, not Webkit)
        image_protect:1,			// Disables image dragging and right click with Javascript
        min_width:0,				// Min width allowed (in pixels)
        min_height:0,				// Min height allowed (in pixels)
        vertical_center:1,			// Vertically center background
        horizontal_center:1,		// Horizontally center background
        fit_always:0,				// Image will never exceed browser width or height (Ignores min. dimensions)
        fit_portrait:1,				// Portrait images will not exceed browser height
        fit_landscape: 0,			// Landscape images will not exceed browser width
        slide_links:"blank",		// Individual links for each slide (Options: false, 'num', 'name', 'blank')
        thumb_links:1,				// Individual thumb links for each slide
        thumbnail_navigation:0,		// Thumbnail navigation
        slides:[
          {
            image : "images/baseball/baseball_01.JPG",		// image source
            title1 : "THE SAAS MODEL",						// First title
            title2 : "SOFTWARE AS A SERVICE",					// Second title
            align : "top-right",								// Where to align
            thumb : "php_helpers/timthumb.php?src=images/sliders/supersized/slide1.jpg&amp;w=150&amp;h=108",	// Thumbnail (it's resized with timthumb.php)
            url : ""											// Slide URL
          },
          {
            image : "images/baseball/baseball_02.JPG",		// image source
            title1 : "VIDEOS FOR THE SAAS",
            title2 : "THE SYSTEMATIC RELEASING OF PREMIUM VIDEOS",
            align : "bottom-right",
            thumb : "php_helpers/timthumb.php?src=images/sliders/supersized/slide2.jpg&amp;w=150&amp;h=108",
            url : "https://www.google.ro"
          },
          {
            image : "images/baseball/baseball_03.JPG",		// image source
            title1 : "PREMIUM MEMBERSHIPS",
            title2 : "SUBSCRIPTIONS @ $15.00 EACH MONTH",
            align : "center-left",
            thumb : "php_helpers/timthumb.php?src=/images/sliders/supersized/slide3.jpg&amp;w=150&amp;h=108",
            url : ""
          },
          {
            image : "images/baseball/baseball_04.JPG",		// image source
            title1 : "SAAS STATISTICAL ANALYSIS",
            title2 : "BUSINESS MODEL DATA",
            align : "center-right",
            thumb : "php_helpers/timthumb.php?src=images/sliders/supersized/slide4.jpg&amp;w=150&amp;h=108",
            url : ""
          }
        ],
        progress_bar:1,
        mouse_scrub:0
      });
      // position the slide list
      $("ul#slide-list").css({
        "bottom": $("#footer").height() + $("ul#slide-list").height(),
        "margin-left": "-" + $("ul#slide-list").width()/2
      });
    });
  })(jQuery);
</script><!-- End Supersized Slider code -->


<!-- Load JS Files -->
<?php include ('inc.js.php'); ?>

</body>
</html>