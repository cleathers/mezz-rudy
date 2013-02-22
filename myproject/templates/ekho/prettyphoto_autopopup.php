<!doctype html>
<!--[if lt IE 7 ]> <html lang="en-gb" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-gb" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<title>PrettyPhoto Auto-popup | EKHO Template</title>
<?php include ('inc.head.php'); ?>
</head>

<body class="dark header-vertical">
    <?php include('inc.fb-sdk.php'); ?>
        
    <div id="page_wrapper">
        
        <div id="gradient"></div><!-- gradient background -->
        
        <div id="background"></div><!-- end background -->
        
        <div id="header" class="vertical" data-type="vertical">
            
			<?php include ('inc.header.php'); ?>
            
        </div><!-- end header -->
        
        
		<!-- social sharing -->
        <?php include ('inc.social_sharing.php'); ?>
        
        <!-- footer -->
        <?php include ('inc.footer.php'); ?>
        
        <!-- live comments panel -->
        <?php include ('inc.live_comments.php'); ?>
        
    </div><!-- end page_wrapper -->
    
    <script type="text/javascript">
	(function($){
		$(window).load(function(){
			if(jQuery.isFunction(jQuery.fn.prettyPhoto)) {
				$.prettyPhoto.open(
					"http://vimeo.com/54903543", // Image to be opened
					"This is a super cool ad",	// Title of the pop-up
					"Just some description"		// The description
				);
				setTimeout(function() {
					$.prettyPhoto.close();
				}, 8000); // autoclose after 8 seconds
			} else {
				console.log("PrettyPhoto is not defined."); // log this message
			}
		});
	})(jQuery);
	</script>
    
    <!-- Load JS Files -->
	<?php include ('inc.js.php'); ?>	
	
</body>
</html>