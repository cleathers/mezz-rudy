<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>Rudy Jaramillo's 5-Step Hitting System</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
    	
    	<div id="gradient"></div><!-- gradient background -->


        <!--############################ use design var choice from models ###########################   Takes a href between div and places underbody-->
        <div id="background">
        <a id="bgndVideo" href="http://www.youtube.com/watch?v=VjGV6Sg-B8A" class="movie {isBgndMovie:{width:'window',mute:false}, optimizeDisplay:true, ratio:'16/9', loop: true, autoplay: true, quality: 'default', showControls: true, addRaster:true}"></a>
        </div>

        <!-- ###############################end background -->
        


        <!--###############Left hand menu-->

        <div id="header" class="vertical" data-type="vertical">
            
			<?php include ('inc.con_header.php'); ?>
            
        </div>

        <!-- ################end left hand menu -->


        <!--###############################INSERT################### INTO RICH TEXT / CONTENT-->


        <!--######################## END ############### RICH TEXT / CONTENT-->




        <!-- social sharing -->
        <?php include ('inc.social_sharing.php'); ?>
        
        <!-- footer -->
        <?php include ('inc.footer.php'); ?>
        
        <!-- live comments panel -->
        <?php include ('inc.live_comments.php'); ?>
        
        
    </div><!-- end page_wrapper -->
	
    
    <!-- Start Featured Boxes Code -->
    <script type = "text/javascript" src="js/jquery.tinycarousel.min.js"></script>
	<script type="text/javascript">
    (function($){
		$(document).ready(function(){
			// Featured Boxes Carousel
			$("#featured_boxes .featured_boxes_carousel").tinycarousel({
				display: 4,
				pager: true,
				interval: false,
				intervaltime: 4000,
				animation: true,
				duration: 300,
				controls: false
			});
		});
    })(jQuery);
	</script><!-- END Featured Boxes Code -->
	
    <!-- Start YOUTUBE Background Code -->
    <link rel="stylesheet" href="assets/mbytplayer/css/mb.YTVPlayer.css" type="text/css" />
	<script src="assets/mbytplayer/inc/jquery.metadata.min.js" type="text/javascript"></script>
	<script src="assets/mbytplayer/inc/jquery.mb.YTPlayer.js" type="text/javascript"></script>
    
    <script type="text/javascript">
    (function($){
		$(document).ready(function(){
			$("#bgndVideo").mb_YTPlayer();
		});
		
		$.mbYTPlayer.controls.play ="<a href='#' class='playvid'></a>";
		$.mbYTPlayer.controls.pause ="<a href='#' class='pausevid'></a>";
		$.mbYTPlayer.controls.mute ="<a href='#' class='mutevid'></a>";
		$.mbYTPlayer.controls.unmute ="<a href='#' class='unmutevid'></a>";
		$.mbYTPlayer.rasterImg ="http://hogash.com/demo/ekho_html/images/raster.png";
		
		$(".buttonBar a").click(function(e){
			e.preventDefault();
		});
	})(jQuery);
	</script><!-- END YOUTUBE Background Code -->
	
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>