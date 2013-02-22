<!doctype html>
    <!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
    <!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
    <!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
    <!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
  <title>Async Slider | EKHO Template</title>
  <?php include ('inc.head.php'); ?>
</head>

<body class="minimized dark header-vertical">
<?php include('inc.fb-sdk.php'); ?>

<div id="page_wrapper">

<div id="gradient"></div><!-- gradient background -->

<div id="background"> </div><!-- end background -->

<div id="header" class="vertical" data-type="vertical">

  <?php include ('inc.con_header.php'); ?>

</div><!-- end header -->

<div id="front_centered" class="noMainboxes">
  <div class="container">
    <div id="slideshow" class="clearfix ">

      <ul class="asyncslider_container" id="asyncslider_container">

        <li class="slides slide-01">
          <img src="images/baseball/rudy_jaramillo_fbname.png" width="354" height="264" class="img1" alt=""
              />
          <img src="images/baseball/jaramillo_342.png" width="342" height="380" class="img2" alt=""
              />
          <h4 class="title">NOT YOUR AVERAGE ONLINE MARKETING CAMPAIGN</h4><br/>
          <p class="desc">Flooding the internet with The System</p>
        </li><!-- end slide -->

        <li class="slides slide-02">
          <div class="right">
            <iframe width="520" height="290" src="http://www.youtube.com/embed/Cgovv8jWETM?&amp;autoplay=0&amp;rel=0&amp;fs=0&amp;showinfo=0&amp;controls=0&amp;hd=1&amp;wmode=transparent" frameborder="0" allowfullscreen="" class="black_border"></iframe>
          </div>

          <h4 class="title">MULTI-PLATFORM ONLINE MARKETING CAMPAIGN</h4>

          <div class="left">
            <ul class="list-type-8 cols-1 clearfix async_list" >
              <li>Social Media Marketing</li>
              <li>On-Page Optimization</li>
              <li>Internal Link Architecture</li>
              <li>Key Word Research</li>
              <li>Dynamic URL Structuring</li>
              <li>Inbound Marketing</li>
              <li>Lead Generation</li>

            </ul>
          </div>
        </li><!-- end slide -->


        <li class="slides slide-03">
          <img src="images/baseball/analyticsdash358.png" width="358" height="369" class="img1"/>
          <div class="right">
            <h2 class="title"></h2>
            <div class="desc">
              <p>Aliquam vehicula purus quis massa eleifend feugiat. Suspendisse potenti. In lacus justo, malesuada nec interdum id, facilisis quis tortor. Donec velit mi, ornare eget hendrerit non, feugiat sit amet libero.</p>
              <p>Vivamus dapibus, nibh luctus consectetur posuere, ligula tellus sagittis felis, ac sollicitudin massa odio vitae massa. Nunc elit mi, semper eu pulvinar malesuada, tincidunt in arcu. Etiam sed ligula.</p>
            </div>
            <ul class="list-type-8 cols-1 clearfix " style="float:left; margin-right:50px;">
              <li>Google Analytics</li>
              <li>Conversion Oreinted Splash Pages</li>
              <li>A|B Funnel Testing</li>
            </ul>
            <ul class="list-type-8 cols-1 clearfix">
              <li>Visitor flow, real-time, custom goals</li>
              <li>Unique pages with a purpose</li>
              <li>Track everything your visitors do</li>
            </ul>
            <div class="clear"></div>
            <a href="#" class="button medium nice radius lightblue" target="_blank">Learn How!!</a>
            <span class="or"></span>
            <a href="#" class="button medium nice radius green-lemon" target="_blank">Try it!</a>
          </div>
        </li><!-- end slide -->

        <li class="slides slide-04">
          <h4 class="title">NON-STOP DEVELOPMENT</h4>
          <img src="images/baseball/info_graphic_cut_outs/chopped/baseball-SocialMedia01.jpg" width="370"
               height="324" class="img1" alt="" />

          <div class="async_gallery right">
            <ul class="simple_gallery">
              <li>
                <a href="images/baseball/rj_logo_700.png" rel="prettyPhoto">
                  <img
                      src="php_helpers/timthumb.php?src=images/baseball/info_graphic_cut_outs/twitter_corp.png&amp;w=254&amp;h=125" alt="" />
                </a>
              </li>
              <li>
                <a href="images/baseball/google_vflow.png" rel="prettyPhoto">
                  <img
                      src="php_helpers/timthumb.php?src=images/baseball/info_graphic_cut_outs/fb_business.png&amp;w=254&amp;h=125" alt="" />
                </a>
              </li>
              <li>
                <a href="images/baseball/fb_insights.png" rel="prettyPhoto">
                  <img
                      src="php_helpers/timthumb.php?src=images/baseball/info_graphic_cut_outs/google_age_gender.png&amp;w=254&amp;h=125" alt="" />
                </a>
              </li>
              <li>
                <a href="images/baseball/SEO_Link_Building.jpg" rel="prettyPhoto">
                  <img
                      src="php_helpers/timthumb.php?src=images/baseball/info_graphic_cut_outs/slide_content_marketing.png&amp;w=254&amp;h=125" alt="" />
                </a>
              </li>
            </ul>

          </div>
        </li><!-- end slide -->
      </ul>
      <div id="asyncslider_links"></div>
      <div id="async_nav"></div>

    </div><!-- end Slideshow -->
  </div>
</div><!-- end front centered -->
<div id="main" class="container">
<a href="#" id="mainClose" class="maximized" data-rel="tipsye" title="Minimize"></a>
<div class="inner-container">

<div id="breadcrumbs" class="row">
  <div class="breadcrumb ten columns omega">
    <div class="breadcrumbs">
      <a href="index.html" class="pathway isHome ">Home</a>
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

<div class="twelve columns sidebarRight">
<div id="mainbody">
<div class="item-page ">
<h2>FLOOD THE INTERNET</h2>
<blockquote>
  "By being a content generator and an engaged listener, a business may achieve and
  convert success on social networking sites to business growth"
</blockquote>

<div class="years">
<div id="model" class="year fromleft first">
  <div class="date">
    <span>Phase 1</span>
  </div>
  <div class="toggle-style-1" style="width:560px">
    <div class="tgg_wrapper">
      <a href="#" class="tgg-trigger"><h4
          class="htitle hlight_blue">CONSTRUCTING THE WEB-APP</h4></a>
      <div class="toggle_container">

        <table class="box-style stages">
          <thead>
          <tr>
            <th scope="col">Stage</th>
            <th scope="col" style="width:200px;">Title</th>
            <th scope="col">Specifics</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="cnt">1</td>
            <td>Purpose, Goals and Direction</td>
            <td>This initial task is an important part of the process. It requires putting together
              the <span class="hlight_red">Web Application</span>
              project <span class="hlight_blue">goals and purpose</span></td>
          </tr>
          <tr>
            <td class="cnt">2</td>
            <td>Researching and Defining Audience and Security Documents</td>
            <td>This requires researching the audience/users, and prospective clients and creating an Analytic
              Report which includes the following approximate assessments</td>
          </tr>
          <tr>
            <td class="cnt">3</td>
            <td>Creating Functional Specifications</td>
            <td>A Web App functionality specifications is the key in any project. This lists all of the
              functionalities and technical specifications that a web application will require to accomplish.</td>
          </tr>
          <tr>
            <td class="cnt">4</td>
            <td>Design Layout, Interface Design, Wire Framing</td>
            <td>One of the main ingredients to a successful project is o put together a web app that utilizes a
              user's interactions, interface and elements that have a proven record fir ease of use,
              and provide the best user experience.</td>
          </tr>
          <tr>
            <td class="cnt">5</td>
            <td>Development and Execution</td>
            <td>The developers need to buck up and establish entities, data variables and various coding
              procedures. Strict care is taken to adhere to the quality guidelines. The team will prepare a doc
              and give it to the management for review.</td>
          </tr>
          <tr>
            <td class="cnt">6</td>
            <td>Beta Testing and Bug Fixing</td>
            <td>This is the most unavoidable stage as it includes testing and ensuring the proper functioning of
              the application. It is done for the removal of the bugs and other malicious contents on order to
              proevent the applications to fail.</td>
          </tr>
          </tbody>
        </table>
        <div class="clear"></div>
      </div><!-- end toggle container -->
    </div><!-- end toggle wrapper -->

    <div class="tgg_wrapper">
      <a href="#"
         class="tgg-trigger"><h4 class="htitle hlight_blue">Maintain the
        Website</h4></a>
      <div class="toggle_container">
        <div id="tabgroup1" class="simple-tabs clearfix">
          <ul class="tabs clearfix">
            <li><a href="#tab5040d2a5a4bac">Tab 1</a></li>
            <li><a href="#tab5040d2a5a4fa4">Tab 2</a></li>
            <li><a href="#tab5040d2a5a538d">Tab 3</a></li>
          </ul>
          <div class="tab_container">
            <div class="tab_content" id="tab5040d2a5a4bac">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>. Vestibulum lacinia arcu eget nulla.</p>
            </div><!-- end tab -->
            <div class="tab_content" id="tab5040d2a5a4fa4">
              <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. <strong>Mauris massa</strong>. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. <strong>Curabitur tortor</strong>. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum.</p>
            </div><!-- end tab -->
            <div class="tab_content" id="tab5040d2a5a538d">
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.&nbsp;</p>
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
      </div><!-- end toggle container -->
    </div><!-- end toggle wrapper -->

  </div>
</div><!-- end year -->

<div id="video" class="year fromright ">
  <div class="date">
    <span>Phase 2</span>
  </div>
  <div class="toggle-style-1" style="width:580px">
    <div class="tgg_wrapper">
      <a href="#" class="tgg-trigger"><h4
          class="htitle hlight_red">Multi-Platform Online Marketing Blitz</h4></a>
      <div class="toggle_container">
        <p>Mauris laoreet arcu tortor. Fusce neque felis, bibendum vel lacinia et, eleifend ut tortor. Sed imperdiet, purus porttitor vestibulum lobortis, lorem nunc adipiscing ipsum, at ullamcorper sem odio a tellus. Mauris a luctus nunc.</p>
        <p>Maecenas at nisl leo. Sed sed nisl a ligula eleifend posuere ut nec sapien. Proin tempor neque mi. Duis pretium dignissim elit nec feugiat. Morbi non orci felis. Nam vitae metus a orci iaculis facilisis.</p>
        <table class="box-style">
          <thead>
          <tr>
            <th scope="col">Platform</th>
            <th scope="col">Service Type</th>
            <th scope="col">Audience Scope</th>
            <th scope="col">Impact</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Facebook</td>
            <td>Social Media</td>
            <td>Account Holders</td>
            <td>Viral, 52% of shares</td>
          </tr>
          <tr>
            <td>Twitter</td>
            <td>Social Media</td>
            <td>Account Holders</td>
            <td>Viral, 12% of shares</td>
          </tr>
          <tr>
            <td>Google +</td>
            <td>Social Media</td>
            <td>Google Search and Accounts</td>
            <td>70% of search traffic, 14.5% of shares</td>
          </tr>
          <tr>
            <td>Onsite Optimization</td>
            <td>Search Engine Optimization</td>
            <td>Search Engine Referrals</td>
            <td>14 Billion Searches Monthly</td>
          </tr>
          <tr>
            <td>Offsite Optimization</td>
            <td>Search Engine Marketing</td>
            <td>Inbound Links</td>
            <td>Search Traffic</td>
          </tr>
          </tbody>
        </table>
        <div class="clear"></div>

          <div class="tgg_wrapper">
            <a href="#" class="tgg-trigger"><h5 class="htitle
                                                 hlight_red">Search Engine Optimization</h5></a>
            <div class="toggle_container">
              <p>Mauris laoreet arcu tortor. Fusce neque felis, bibendum vel lacinia et, eleifend ut tortor. Sed imperdiet, purus porttitor vestibulum lobortis, lorem nunc adipiscing ipsum, at ullamcorper sem odio a tellus. Mauris a luctus nunc.</p>
              <p>Maecenas at nisl leo. Sed sed nisl a ligula eleifend posuere ut nec sapien. Proin tempor neque mi. Duis pretium dignissim elit nec feugiat. Morbi non orci felis. Nam vitae metus a orci iaculis facilisis.</p>
            </div><!-- end toggle container -->
          </div><!-- end toggle wrapper -->
          <div class="tgg_wrapper">
            <a href="#" class="tgg-trigger"><h5 class="htitle
                                                 hlight_red">Online Marketing</h5></a>
            <div class="toggle_container">
              <p>Mauris laoreet arcu tortor. Fusce neque felis, bibendum vel lacinia et, eleifend ut tortor. Sed imperdiet, purus porttitor vestibulum lobortis, lorem nunc adipiscing ipsum, at ullamcorper sem odio a tellus. Mauris a luctus nunc.</p>
              <p>Maecenas at nisl leo. Sed sed nisl a ligula eleifend posuere ut nec sapien. Proin tempor neque mi. Duis pretium dignissim elit nec feugiat. Morbi non orci felis. Nam vitae metus a orci iaculis facilisis.</p>
            </div><!-- end toggle container -->
          </div><!-- end toggle wrapper -->
        </div>
      </div><!-- end toggle container -->
    </div><!-- end toggle wrapper -->
  </div>
</div><!-- end year -->
</div><!-- end years -->

<h3>On this journey, we managed clients such as:</h3>
<ul class="photo_gallery clients">
  <li>
    <a href="images/gallery/clients/client1.jpg" rel="prettyPhoto">
      <img src="php_helpers/timthumb.php?src=images/gallery/clients/client1.jpg&amp;w=120&amp;h=83" alt="">
    </a>
  </li>

  <li>
    <a href="images/gallery/clients/client1.jpg" rel="prettyPhoto">
      <img src="php_helpers/timthumb.php?src=images/gallery/clients/client1.jpg&amp;w=120&amp;h=83" alt="">
    </a>
  </li>

  <li>
    <a href="images/gallery/clients/client1.jpg" rel="prettyPhoto">
      <img src="php_helpers/timthumb.php?src=images/gallery/clients/client1.jpg&amp;w=120&amp;h=83" alt="">
    </a>
  </li>

  <li>
    <a href="images/gallery/clients/client1.jpg" rel="prettyPhoto">
      <img src="php_helpers/timthumb.php?src=images/gallery/clients/client1.jpg&amp;w=120&amp;h=83" alt="">
    </a>
  </li>

  <li>
    <a href="images/gallery/clients/client1.jpg" rel="prettyPhoto">
      <img src="php_helpers/timthumb.php?src=images/gallery/clients/client1.jpg&amp;w=120&amp;h=83" alt="">
    </a>
  </li>

</ul><!-- end clients photo gallery -->

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

<!-- Start Async Slider code -->
<link rel="stylesheet" href="sliders/asyncslider/css/asyncslider.css" type="text/css" />
<script src="sliders/asyncslider/js/jquery.asyncslider.min.js" type="text/javascript"></script>
<script type="text/javascript">
  (function($){
    $(document).ready(function(){
      $("#asyncslider_container").asyncSlider({
        direction: "horizontal",
        minTime: 500,
        maxTime: 1000,
        easing: "easeInOutExpo",
        easingIn: "easeInExpo",
        easingOut: "easeInOutExpo",
        random: true,
        autoswitch: false,
        keyboardNavigate: true,
        firstSlide: 1,
        prevNextNav: true,
        centerPrevNextNav: false,
        slidesNav: true,
        slidesNav: $("#async_nav")
      });

      $("#asyncslider_next_prev_nav").prepend("<li class=\"pause\"><a class=\"auto_switcher\" href=\"#\"><span class=\"on\">On</span></a></li>");

      $(".auto_switcher").live("click",function(ev){
        ev.preventDefault();
        var asyncsl = $("#asyncslider_container"),
            status_span = $(this).find("span"),
            current_status = status_span.hasClass("on") ? 1 : 0;
        if( current_status == 1 ) {
          status_span.removeClass("on").addClass("off").text("Off");
          asyncsl.asyncSlider("set", "autoswitch", "off");
        } else {
          status_span.removeClass("off").addClass("on").text("On");
          asyncsl.asyncSlider("set", "autoswitch", "on");
        }
      });
    });
  })(jQuery);
</script>
<!-- End Async Slider code -->


<!-- Load JS Files -->
<?php include ('inc.js.php'); ?>

</body>
</html>