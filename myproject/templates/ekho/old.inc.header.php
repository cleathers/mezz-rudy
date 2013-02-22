<script type="text/javascript">
// THIS SCRIPT DETECTS THE ACTIVE ELEMENT AND ADDS ACTIVE CLASS
(function($){ 
	$(document).ready(function(){
		var pathname = window.location.pathname,
			page = pathname.split(/[/ ]+/).pop(),
			menuItems = $('#menu a');
		menuItems.each(function(){
			var mi = $(this),
				miHrefs = mi.attr("href"),
				miParents = mi.parents('li');
			if(page == miHrefs) {
				miParents.addClass("active");
			}
		});
	});
})(jQuery);
</script>

<!-- logo -->
<a href="index.php" title="Ekho Template" id="logo"></a>

<!-- menu -->
<div id="menu">
    <ul class="jt-menu clearfix">
        <li>
            <a href="index.php"><span class="spn">HOME</span></a>
            <ul>
                <li><a href="index.php"><span class="spn">Static Image w/ Featured boxes</span></a></li>
                <li><a href="home_video_background_featured_boxes.php"><span class="spn">Video background w/ Featured boxes</span></a></li>
                <li><a href="home_youtube_background_featured_boxes.php"><span class="spn">Youtube background w/ Featured boxes</span></a></li>
                <li><a href="home_simple_slideshow_featured_boxes.php"><span class="spn">Simple slideshow w/ Featured boxes</span></a></li>
                <li><a href="home_google_map_featured_boxes.php"><span class="spn">Google Map w/ Featured boxes</span></a></li>
                <li><a href="home_simple_image_square_boxes.php"><span class="spn">Simple image w/ Square Boxes</span></a></li>
                <li><a href="home_simple_image_audio_player.php"><span class="spn">Simple image with Audio Player</span></a></li>
                <li><a href="home_simple_image_intro_article.php"><span class="spn">Intro article /w Simple image</span></a></li>
				<li><a href="home_static_image.php"><span class="spn">Static Image</span></a></li>
            </ul>
        </li>
        <li><a href="about_us.php"><span class="spn">ABOUT US</span></a></li>
        <li><a href="#"><span class="spn">SLIDERS</span></a>
            <ul>
                <li><a href="#"><span class="spn">Fullscreen Sliders</span></a>
                    <ul>
                        <li><a href="slider_ffslider.php"><span class="spn">FF Slider</span></a></li>
                        <li><a href="slider_supersized.php"><span class="spn">Supersized Slideshow</span></a></li>
                        <li><a href="slider_grid_gallery.php"><span class="spn">jQuery Grid Gallery</span></a></li>
                        <li><a href="slider_sideways.php"><span class="spn">Sideways Gallery</span></a></li>
                        <li><a href="slider_sequence.php"><span class="spn">Sequence Slider</span></a></li>
                        <li><a href="slider_async.php"><span class="spn">Async Slider</span></a></li>
                        <li><a href="slider_impressjs.php"><span class="spn">ImpressJs Slider</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="spn">Normal sliders</span></a>
                    <ul>
                        <li><a href="slider_flexslider.php"><span class="spn">Flex Slider</span></a></li>
                        <li><a href="slider_nivoslider.php"><span class="spn">Nivo Slider</span></a></li>
                        <li><a href="slider_wowslider_blast.php" ><span class="spn">Wow Slider</span></a>
                            <ul>
                                <li><a href="slider_wowslider_blast.php"><span class="spn">Wow Slider - Blast</span></a></li>
                                <li><a href="slider_wowslider_blinds.php"><span class="spn">Wow Slider - Blinds</span></a></li>
                                <li><a href="slider_wowslider_fly.php"><span class="spn">Wow Slider - Fly</span></a></li>
                                <li><a href="slider_wowslider_blur.php"><span class="spn">Wow Slider - Blur</span></a></li>
                            </ul>
                        </li>
                        <li><a href="slider_3dportfolio.php"><span class="spn">3D Portfolio carousel</span></a></li>
                        <li><a href="slider_piecemaker.php"><span class="spn">Piecemaker 3D</span></a></li>
                        <li><a href="slider_in_content_page.php"><span class="spn">Slider in content page</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#"><span class="spn">FEATURES</span></a>
            <ul>
                <li><a href="#"><span class="spn">PrettyPhoto (Lightbox)</span></a>
                    <ul>
                        <li><a class="prettyphoto_link" href="http://themeforest.net/?iframe=true&amp;width=700&amp;height=450"><span class="spn">PrettyPhoto (open iframe)</span></a></li>
                        <li><a class="prettyphoto_link" href="images/super_cool_ad.jpg"><span class="spn">PrettyPhoto (openimage)</span></a></li>
                        <li><a class="prettyphoto_link" href="http://www.youtube.com/watch?v=G-1HNnxb0WE"><span class="spn">PrettyPhoto (open youtube)</span></a></li>
                        <li><a href="prettyphoto_autopopup.php"><span class="spn">Auto Pop-up</span></a></li>
                    </ul>
                </li>
                <li><a href="photo_gallery.php"><span class="spn">Photo Gallery</span></a></li>
                <li><a href="grid_positions.php"><span class="spn">Grid Positions</span></a></li>
                <li><a href="#"><span class="spn">Portfolio</span></a>
                    <ul>
                        <li><a href="#"><span class="spn">Category Layout</span></a>
                            <ul>
                                <li><a href="portfolio_simple_onecolumn.php"><span class="spn">One Column</span></a></li>
                                <li><a href="portfolio_simple_twocolumns.php"><span class="spn">Two Columns</span></a></li>
                                <li><a href="portfolio_simple_threecolumns.php"><span class="spn">Three Columns</span></a></li>
                                <li><a href="portfolio_simple_fourcolumns.php"><span class="spn">Four Columns</span></a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio_sortable.php"><span class="spn">Sortable Layout</span></a></li>
                        <li><a href="portfolio_carousels.php"><span class="spn">Carousels Layout</span></a></li>
                     </ul>
                </li>
                <li><a href="blog.php"><span class="spn">Blog</span></a></li>
                <li><a href="faq.php"><span class="spn">FAQ Page</span></a></li>
                <li><a href="sitemap.php"><span class="spn">Sitemap</span></a></li>
                <li><a href="start_minimized.php"><span class="spn">Start minimized</span></a></li>
            </ul>
        </li>
        <li><a href="#"><span class="spn">PAGES</span></a>
            <ul>
                <li><a href="pages_full_width_page.php"><span class="spn">Full width page</span></a></li>
                <li><a href="pages_left_sidebar.php"><span class="spn">Left Sidebar</span></a></li>
                <li><a href="pages_right_sidebar.php"><span class="spn">Right Sidebar</span></a></li>
                <li><a href="pages_historic.php"><span class="spn">Historic</span></a></li>
                <li><a href="pages_offline.php"><span class="spn">Offline Page</span></a></li>
                <li><a href="pages_404.php"><span class="spn">404 Error Page</span></a></li>
                <li><a href="portfolio_item.php"><span class="spn">Portfolio Item Page</span></a></li>
                <li><a href="blog_item.php"><span class="spn">Blog Item Page</span></a></li>
                <li><a href="pages_product.php"><span class="spn">Product Page</span></a></li>
            </ul>
        </li>
        <li><a href="#"><span class="spn">STYLES</span></a>
            <ul>
                <li><a href="styles_typography.php"><span class="spn">Typography</span></a></li>
                <li><a href="styles_table_designs.php"><span class="spn">Table Designs</span></a></li>
                <li><a href="styles_button_designs.php"><span class="spn">Button designs</span></a></li>
                <li><a href="styles_pricing_tables.php"><span class="spn">Pricing tables</span></a></li>
                <li><a href="styles_form_styles.php"><span class="spn">Form Styles</span></a></li>
                <li><a href="styles_tabs_designs.php"><span class="spn">Tabs designs</span></a></li>
                <li><a href="styles_accordions_toggles.php"><span class="spn">Accordion &amp; Toggles</span></a></li>
            </ul>
        </li>
        <li><a href="contact.php"><span class="spn">CONTACT</span></a></li>
    </ul>
</div><!--end menu -->
<div class="clear"></div>

<!-- search -->
<div id="search">
    <form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)" target="_blank">
        <div class="search">
        	<input name="q" type="hidden" />
            <input name="qfront" maxlength="20" class="inputbox" type="text" size="20" value="SEARCH ..." onblur="if (this.value=='') this.value='SEARCH ...';" onfocus="if (this.value=='SEARCH ...') this.value='';" />
            <input type="submit" value="go" class="button"/>
        </div>
    </form>
</div><!-- end search -->
            
<!-- social icons -->
<div id="social_icons">
    <ul class="social_icons colorWhite">
        <li><a href="#" target="_blank" rel="nofollow" title="Facebook" class="social_iconF">F</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Twitter" class="social_iconL">L</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Dribbble" class="social_iconD">D</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Pinterest" class="social_iconPin">{</a></li>
<!-- UNCOMMENT AN ICON BELOW -->
<!--
        <li><a href="#" target="_blank" rel="nofollow" title="Amazon" class="social_iconA">A</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Bebo" class="social_iconB">B</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="AppStore" class="social_iconC">C</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Behance" class="social_iconE">E</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Github" class="social_iconG">G</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Skype" class="social_iconH">H</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Linkedin" class="social_iconI">I</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Deviantart" class="social_iconJ">J</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Bing" class="social_iconK">K</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Myspace" class="social_iconM">M</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Flickr" class="social_iconN">N</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Tumblr" class="social_iconO">O</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Paypal" class="social_iconP">P</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Quora" class="social_iconQ">Q</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="RSS" class="social_iconR">R</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Stumble Upon" class="social_iconS">S</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Twitter" class="social_iconT">T</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Blogger" class="social_iconU">U</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Vimeo" class="social_iconV">V</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Wordpress" class="social_iconW">W</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Youtube" class="social_iconX">X</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Yahoo!" class="social_iconY">Y</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Google Plus" class="social_iconGpl">}</a></li>
-->
    </ul>
</div><!-- end social_icons -->
<div class="clear"></div>