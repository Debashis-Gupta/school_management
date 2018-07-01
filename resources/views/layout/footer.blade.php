
    <section id="footer" class="footer_bg">
      <div class="footer_section flexBox">
        <div class="social_section"></div>
<div class="quick_links">
<h1>Quick Links</h1>
<ul>
<li><a href="index.html" title="School Home">Home</a></li>
<li><a href="about-us.html" title="About Us">About Us</a></li>
<li><a href="admission/online-registration.html" title="Admission">Admission</a></li>
<li><a href="http://orisonschool.com/sis/Login.aspx" title="Login">Login</a></li>
<li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
</ul>
</div>
<div class="general_others">
<h1>General/Others</h1>
<ul>
<li><a href="general-others/circulars.html" title="Circulars">Circulars</a></li>
<li><a href="general-others/obituary.html" title="Obituary">Obituary</a></li>
<li><a href="general-others/alumni.html" title="Alumni">Alumni</a></li>
<li><a href="general-others/tc-download.html" title="Tc download">Tc download</a></li>
<li><a href="links.html" title="Links">Useful Links</a></li>
</ul>
</div>
<div class="info_box">
<h1>Information</h1>
<ul>
<li><a href="academic/calendar.html" title="Calendar">Calendar</a></li>
<li><a href="academic/class-timetables.html" title="Class TimeTable">Timetable</a></li>
<li><a href="academic.html" title="Academic">Academic</a></li>
<li><a href="events.html" title="Events">Events</a></li>
<li><a href="faq.html" title="FAQ">FAQ</a></li>
</ul>
</div>
<div class="location_map">
<h1>Location Map</h1>
<div><iframe width="100%" height="160" src="{{asset('img/map.png')}}" frameborder="0" allowfullscreen="" style="border: 0;"></iframe></div>
</div>
      </div>
	  <div class="clearfix copyrightByBinoBaby">
		   <span>Developer - <a href="#">Debashis Gupta</a></span>
      </div>
    </section>

    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="Scripts/js/bootstrap.min.js"></script>
    <script src="../code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    	<script src="Scripts/slick/slick.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript">
        $(document).on('ready', function() {
          $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4
          });
        });
      </script>



    	<link rel="stylesheet" href="css/colorbox.css" />
    	<script src="Scripts/js/jquery.colorbox.js" type="text/javascript"></script>
            <script>
                $(document).ready(function(){
    				try{
                    //Examples of how to assign the Colorbox event to elements
                    $(".group1").colorbox({rel:'group1'});
    				}catch(err) {

    				}

                    $(".group2").colorbox({rel:'group2', transition:"fade"});
                    $(".group3").colorbox({rel:'group3', transition:"none", width:"65%", height:"65%"});
                    $(".group4").colorbox({rel:'group4', slideshow:true});
                    $('.non-retina').colorbox({rel:'group5', transition:'none'})
                    $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});


                    //Example of preserving a JavaScript event for inline calls.
                    $("#click").click(function(){
                        $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                        return false;
                    });
                });
            </script>




        <script type="text/javascript">
      jQuery.fn.liScroll = function(settings) {
      settings = jQuery.extend({
        travelocity: 0.03
        }, settings);
        return this.each(function(){
            var $strip = jQuery(this);
            $strip.addClass("newsticker")
            var stripHeight = 1;
            $strip.find("li").each(function(i){
              stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
            });
            var $mask = $strip.wrap("<div class='mask'></div>");
            var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");
            var containerHeight = $strip.parent().parent().height();  //a.k.a. 'mask' width
            $strip.height(stripHeight);
            var totalTravel = stripHeight;
            var defTiming = totalTravel/settings.travelocity; // thanks to Scott Waye
            function scrollnews(spazio, tempo){
            $strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
            }
            scrollnews(totalTravel, defTiming);
            $strip.hover(function(){
            jQuery(this).stop();
            },
            function(){
            var offset = jQuery(this).offset();
            var residualSpace = offset.top + stripHeight;
            var residualTime = residualSpace/settings.travelocity;
            scrollnews(residualSpace, residualTime);
            });
        });
    };

    $(function(){
        $("ul.BinoMarquee").liScroll();
    });

    		$("div.slider_container").height($(window).height()-183);
    </script>
</body>
</html>
@yield('content')
