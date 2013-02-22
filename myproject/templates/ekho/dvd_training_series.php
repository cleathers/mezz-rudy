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
          <span>CONSTRUCTION</span>
          <span class="brd_separator">/</span>
          <span>12-PART TRAINING SERIES</span>
        </div>
      </div><!-- end breadcrumbs -->
      <div class="thedate six columns alpha">
        <span id="current-date"></span>
      </div>
      <div class="clear"></div>
    </div><!-- end breadcrumbs -->

    <div class="row">

      <div class="twelve columns sidebarRight">
        <div id="mainbody">

          <div class="hg-portfolio">
            <h1 class="title hlight_red">12-Part Training Series</h1>

            <div class="category-desc">
              <p>
                Rudy always takes a simple approach with his students. The System will help players
                of any age and skill level improve their game -- from professionals to amateurs,
                adults to children. This is how we’ve designed Jaramillo’s video training series.
                We want learning The System to be as easy for you as it is for Jaramillo’s students
                so we’ve broken the series down into 12 separate lessons that give you everything
                you need to start implementing The System into your game.
              </p>
            </div>

            <div class="items-row cols-1 row-0 clearfix">
              <div class="item column-1">
                <div class="inner-item">
                  <div class="img-intro">
                    <a href="http://www.youtube.com/watch?v=x5PJsoJLePM" data-rel="prettyPhoto" data-type="video" class="hoverLink" >
                      <img
                          src="php_helpers/timthumb.php?src=images/baseball/rj_logo_700.png&amp;w=480" alt="Preview The Series"  />
                    </a>
                  </div>
                  <h4 id="model" class="title">
                    <a href="images/baseball/rj_logo_1170.png" data-rel="prettyPhoto" class=" hlight_blue"
                        >Training
                      series</a>
                  </h4>
                  <div class="pt-cat-desc">
                    <p>The 12-Part Series offers over six hours of training cont
                      ent, available
                      on DVD and through our premium online streaming service. You’ll have
                      the opportunity to learn through a variety of drills, one-on-one
                      training sessions, and live criticisms of our models and their swings.
                      The DVDs are broken up into 3 packages, each of which include 4
                      separate training sessions with Rudy Jaramillo.</p>
                  </div>
                </div><!-- end inner item -->
              </div>
              <div class="clear"></div>
              <div class="separator"></div>
            </div><!-- end items-row -->

            <div class="items-row cols-1 row-1  clearfix">
              <div class="item column-1">
                <div class="inner-item">
                  <h4 id="video" class="title hlight_blue">Videos in the series</h4>
                  <div class="pt-cat-desc">
                    <div id="tabgroup1" class="simple-tabs clearfix">
                      <ul class="tabs clearfix">
                        <li><a href="#online_marketing">Online Marketing</a></li>
                        <li><a href="#widespread_exposure">Widespread Exposure</a></li>
                        <li><a href="#audience_engagement">Audience Engagement</a></li>
                      </ul>
                      <div class="tab_container">
                        <div class="tab_content" id="online_marketing">
                          <p>
                            Video marketing holds the top spot for future marketing plans
                            of businesses across the globe. Based on a 2012 industry report
                            by Social Media Examiner, a significant 76% of marketers plan
                            on increasing their use of YouTube and online video marketing,
                            making it the top area that marketers will invest in for
                            2012.
                          </p>
                        </div><!-- end tab -->
                        <div class="tab_content" id="widespread_exposure">
                          <p>
                            DVD sales have always been stifled by the high cost of
                            international distribution. With the rapid growth of the
                            Internet and social media in recent years, online video
                            distribution is the perfect way to reach international
                            audiences and further increase our profits.
                          </p>
                        </div><!-- end tab -->
                        <div class="tab_content" id="audience_engagement">
                          <p>
                            Wireless technology and mobile devices have marked the dawn of
                            a new era of visual communication. Today, few people enjoy read
                            through brochures or training manuals, let alone a 300-page
                            chapter book. Younger generations are attracted to visual
                            stimulation and video production is the perfect way to give
                            them what they want.
                          </p>
                        </div><!-- end tab -->
                      </div>
                    </div><!-- end tabs -->
                    <script type="text/javascript">
                      (function($){
                        $(window).load(function(){
                          $('#tabgroup1').simpleTabs();
                        });
                      })(jQuery);
                    </script>
                  </div>
                </div><!-- end inner item -->
              </div>
              <div class="clear"></div>
              <div class="separator"></div>
            </div><!-- end items-row -->

            <div class="items-row cols-1 row-2  clearfix">
              <div class="item column-1">
                <div class="inner-item">
                  <h4 id="premium" class="title">
                    <a class="hlight_blue" href="/ecommerce.php" >E-commerce</a>
                  </h4>
                  <blockquote>
                    Electronic commerce is the buying and selling of product or service over the Internet.
                  </blockquote>
                  <img class="shadow" src="images/baseball/info_graphic_cut_outs/ecom_cats.png" border="0" alt=".shadow css class" width="200" style="margin-left: 10px; float: right;" />
                  <ul class="list-type-4 cols-1 clearfix">
                    <li><span class="hlight_blue">E-tailing</span> or "virtual storefronts" on Web sites with <span class="hlight_red">online catalogs</span>, sometimes gathered into a "virtual mall"</li>
                    <li>The gathering and use of <span class="hlight_blue">demographic data</span> through Web contacts and <span class="hlight_blue">social media</span></li>

                    <li><span class="hlight_red">Electronic Data Interchange,</span> the <span class="hlight_blue">business-to-business</span> exchange of data</li>
                    <li><span class="hlight_red">Newsletters</span> and their use as media for <span class="hlight_blue">reaching prospects and established customers</span></li>
                  </ul>
                </div><!-- end inner item -->
              </div>
              <div class="clear"></div>
              <div class="separator"></div>
            </div><!-- end items-row -->

            <div class="items-row cols-1 row-3 lastRow clearfix">
              <div class="item column-1">
                <div class="inner-item">
                  <h5 class="htitle"><a href="#" class="hlight_blue">Statistics on Web Videos</a></h5>
                  <div id="tabgroup2" class="simple-tabs clearfix">
                    <ul class="tabs clearfix">

                      <li><a href="#twitter">Vimeo's Growth</a></li>

                      <li><a href="#marketing">Video on the Web</a></li>
                    </ul>
                    <div class="tab_container">

                      <div class="tab_content" id="twitter">
                        <h6 class="hlight_red">Year-End</h6>
                        <img src="/images/baseball/info_graphic_cut_outs/chopped/Vimeo-YearEnd01.jpg"></img>
                        <h6 class="hlight_red">Timeline for 2011</h6>
                        <img src="/images/baseball/info_graphic_cut_outs/chopped/Vimeo-YearEnd02.jpg"></img>
                      </div><!-- end tab -->
                      <div class="tab_content" id="marketing">
                        <img src="/images/baseball/info_graphic_cut_outs/chopped/web-video-stats.jpg"></img>
                      </div><!-- end tab -->
                    </div>
                  </div><!-- end tabs -->
                  <script type="text/javascript">
                    (function($){
                      $(window).load(function(){
                        $('#tabgroup2').simpleTabs();
                      });
                    })(jQuery);
                  </script>
                </div><!-- end inner item -->
              </div>
              <div class="clear"></div>
              <div class="separator"></div>
            </div><!-- end items-row -->

          </div><!-- end Portfolio page -->

        </div><!-- end mainbody -->
      </div>

      <div class="four columns">
        <?php include ('inc.con_right_sidebar.php'); ?>
      </div>
    </div><!-- end row -->
  </div>
</div><!-- end main -->
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
            image : "images/baseball/IMG_8505.jpg",		// image source
            title1 : "THE 12-PART TRAINING SERIES",						// First title
            title2 : "RUDY JARAMILLO BREAKS DOWN THE SYSTEM",					// Second title
            align : "bottom-right",								// Where to align
            thumb : "php_helpers/timthumb.php?src=images/sliders/supersized/slide1.jpg&amp;w=150&amp;h=108",	// Thumbnail (it's resized with timthumb.php)
            url : ""											// Slide URL
          },
          {
            image : "images/baseball/IMG_8560.jpg",		// image source
            title1 : "VIDEOS IN THE SERIES",
            title2 : "3 DVD'S - OVER 6 HOURS OF VIDEO",
            align : "top-right",
            thumb : "php_helpers/timthumb.php?src=images/sliders/supersized/slide2.jpg&amp;w=150&amp;h=108",
            url : "https://www.google.ro"
          },
          {
            image : "images/baseball/IMG_8554.jpg",		// image source
            title1 : "E-COMMERCE",
            title2 : "ONLINE STORE OF THE SYSTEM",
            align : "center-left",
            thumb : "php_helpers/timthumb.php?src=/images/sliders/supersized/slide3.jpg&amp;w=150&amp;h=108",
            url : ""
          },
          {
            image : "images/baseball/IMG_8531.jpg",		// image source
            title1 : "E-COMMERCE STATISTICAL ANALYSIS",
            title2 : "BUSINESS MODEL DATA",
            align : "top-left",
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

<!--DOCUMENT TEXT

Intro:
Rudy always takes a simple approach with his students. The System will help players of any age and skill level improve their game -- from professionals to amateurs, adults to children. This is how we’ve designed Jaramillo’s video training series. We want learning The System to be as easy for you as it is for Jaramillo’s students so we’ve broken the series down into 12 separate lessons that give you everything you need to start implementing The System into your game.

Summary of the training series:
The 12-Part Series offers over six hours of training content, available on DVD and through our premium online streaming service. You’ll have the opportunity to learn through a variety of drills, one-on-one training sessions, and live criticisms of our models and their swings. The DVDs are broken up into 3 packages, each of which include 4 separate training sessions with Rudy Jaramillo. Click <span class="hlight_blue">here</span> to check out our online store so you can start improving your swing before your next game.

Why use video?
	Online Marketing
Video marketing holds the top spot for future marketing plans of businesses across the globe. Based on a 2012 industry report by Social Media Examiner, a significant 76% of marketers plan on increasing their use of YouTube and online video marketing, making it the top area that marketers will invest in for 2012.
	Widespread Exposure
DVD sales have always been stifled by the high cost of international distribution. With the rapid growth of the Internet and social media in recent years, online video distribution is the perfect way to reach international audiences and further increase our profits.
	Audience Engagement
Wireless technology and mobile devices have marked the dawn of a new era of visual communication. Today, few people enjoy read through brochures or training manuals, let alone a 300-page chapter book. Younger generations are attracted to visual stimulation and video production is the perfect way to give them what they want.

Summary of E-Commerce:
Electronic commerce is the buying and selling of product or service over the Internet.
E-commerce can be divided into:
E-tailing or "virtual storefronts" on Web sites with online catalogs, sometimes gathered into a "virtual mall"
The gathering and use of demographic data through Web contacts and social media
Electronic Data Interchange, the business-to-business exchange of data
E-mail and their use as media for reaching prospects and established customers (for example, through newsletters)
Business-to-business buying and selling
The security of business transactions

-->



</body>
</html>