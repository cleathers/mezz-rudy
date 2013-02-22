
    <script type="text/javascript">
	(function($){
		$(window).load(function(){
			if(jQuery.isFunction(jQuery.fn.prettyPhoto)) {
				$.prettyPhoto.open(
					"http://lh5.googleusercontent.com/Xby3NLmORrtfRL99Tbn1KVRNOYV5my8OcTT3Oau4A6nYBUYTWbmfOBy1xYchv5X9lGuulzSh0_s", // Image to be opened
					"This is a super cool ad",	// Title of the pop-up
					"Just some description"		// The description
				);
				setTimeout(function() {
					$.prettyPhoto.close();
				}, 242000); // autoclose after 8 seconds
			} else {
				console.log("PrettyPhoto is not defined."); // log this message
			}
		});
	})(jQuery);
	</script>
    
