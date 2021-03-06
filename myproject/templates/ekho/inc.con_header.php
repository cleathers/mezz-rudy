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
        <li><a href="/index.php"><span class="spn">HOME</span></a></li>
        <li><a href="/construction.php"><span class="spn">CONSTRUCTION</span></a></li>

        <li><a href="/dvd_training_series.php"><span class="spn">12-PART TRAINING SERIES</span></a>
            <ul>
                <li><a href="/dvd_training_series.php#model"><span class="spn">Model</span></a></li>
                <li><a href="/dvd_training_series.php#video"><span class="spn">Breakdown</span></a></li>
                <li><a href="/ecommerce.php"><span class="spn">E-commerce</span></a></li>
            </ul>
        </li>
        <li><a href="/freemium.php"><span class="spn">FREEMIUM SAAS</span></a>
            <ul>
                <li><a href="/freemium.php#model"><span class="spn">Model</span></a></li>
                <li><a href="/freemium.php#video"><span class="spn">Breakdown</span></a></li>
                <li><a href="/freemium.php#premium"><span class="spn">Premium Members</span></a></li>
            </ul>
        </li>

        <li><a href="video.php"><span class="spn">CONSTRUCT THE VIDEOS</span></a>
            <ul>
                <li><a href="video_construction.php"><span class="spn">Constructing the Website</span></a></li>
                <li><a href="video_marketing.php"><span class="spn">Online Marketing</span></a>
                    <ul>
                        <li><a href="video_smm.php"><span class="spn">Social Media</span></a></li>
                        <li><a href="video_seo.php"><span class="spn">Search Engine Optimization</span></a></li>
                        <li><a href="video_inbound.php"><span class="spn">Inbound Marketing</span></a></li>
                    </ul>
                </li>
                <li><a href="video_traffic.php"><span class="spn">Traffic Analysis</span></a>
                    <ul>
                        <li><a href="video_analytics.php"><span class="spn">Analytics</span></a></li>
                        <li><a href="video_conversions.php"><span class="spn">Conversions</span></a></li>
                        <li><a href="video_funneling.php"><span class="spn">Funnels</span></a></li>
                    </ul>
                </li>
                <li><a href="video_pricing.php"><span class="spn">Pricing</span></a></li>
            </ul>
        </li>
              <li><a href="online.php"><span class="spn">FLOOD THE INTERNET</span></a>
            <ul>
                <li><a href="online_construction.php"><span class="spn">Constructing the Website</span></a></li>
                <li><a href="online_marketing.php"><span class="spn">Online Marketing</span></a>
                    <ul>
                        <li><a href="online_smm.php"><span class="spn">Social Media</span></a></li>
                        <li><a href="online_seo.php"><span class="spn">Search Engine Optimization</span></a></li>
                        <li><a href="online_inbound.php"><span class="spn">Inbound Marketing</span></a></li>
                    </ul>
                </li>
                <li><a href="online_traffic.php"><span class="spn">Traffic Analysis</span></a>
                    <ul>
                        <li><a href="online_analytics.php"><span class="spn">Analytics</span></a></li>
                        <li><a href="online_conversions.php"><span class="spn">Conversions</span></a></li>
                        <li><a href="online_funneling.php"><span class="spn">Funnels</span></a></li>
                    </ul>
                </li>
                <li><a href="online_pricing.php"><span class="spn">Pricing</span></a></li>
            </ul>
        </li>
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
        <li><a href="http://www.facebook.com/pages/Rudy-Jaramillo/102987426539765" target="_blank" rel="nofollow" title="Facebook" class="social_iconF">F</a></li>
        <li><a href="http://twitter.com/@RudyJaramillo1" target="_blank" rel="nofollow" title="Twitter" class="social_iconL">L</a></li>
        <li><a href="http://plus.google.com/103189403559325402130" target="_blank" rel="nofollow" title="Google Plus" class="social_iconGpl">}</a></li>
        <li><a href="http://www.youtube.com/watch?v=VjGV6Sg-B8A&feature=youtu.be" target="_blank" rel="nofollow" title="Youtube" class="social_iconX">X</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Vimeo" class="social_iconV">V</a></li>
        <li><a href="#" target="_blank" rel="nofollow" title="Stumble Upon" class="social_iconS">S</a></li>
    </ul>
</div><!-- end social_icons -->
<div class="clear"></div>