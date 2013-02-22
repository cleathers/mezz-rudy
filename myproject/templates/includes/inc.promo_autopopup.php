
    <script type="text/javascript">
	(function($){
		$(window).load(function(){
			if(jQuery.isFunction(jQuery.fn.prettyPhoto)) {
				$.prettyPhoto.open(
					"http://www.youtube.com/watch?v=x5PJsoJLePM", // Image to be opened
					"RUDY JARAMILLO'S THE SYSTEM",	// Title of the pop-up
					"12-Step Training Program"		// The description
				);
				setTimeout(function() {
					$.prettyPhoto.close();
				}, 120000);
			} else {
				console.log("PrettyPhoto is not defined."); // log this message
			}
		});
	})(jQuery);
	</script>
    
