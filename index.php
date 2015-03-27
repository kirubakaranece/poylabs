<!DOCTYPE HTML>
<html>
    <head>
	    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pollachi Guide</title>
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link href="lightbox/css/lightbox.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>
        
		
        <script src="js/vendor/modernizr.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        
        <!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js\/vendor\/1.7.2.jquery.min"><\/script>')</script>
        
        <script src="lightbox/js/lightbox.js"></script>
        <script src="js/vendor/prefixfree.min.js"></script>
        <script src="js/vendor/jquery.slides.min.js"></script>
        <script src="js/script.js"></script>
		<script src="js/typeahead.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
	
        
        <!--[if lt IE 9]>
            <style>
                header
                {
                    margin: 0 auto 20px auto;
                }
                #four_columns .img-item figure span.thumb-screen
                {
                    display:none;
                }  
            </style>
        <![endif]-->
        <script language="javascript" type="text/javascript">
var timerid = 0;
var images = new Array(	"img/coco1.jpg",
"img/coco2.jpg",
"img/coco3.jpg");
var countimages = 0;
function startTime()
{
if(timerid)
{
timerid = 0;
}
var tDate = new Date();
if(countimages == images.length)
{
countimages = 0;
}
if(tDate.getSeconds() % 5 == 0)
{
document.getElementById("img1").src = images[countimages];
}
countimages++;
timerid = setTimeout("startTime()", 1000);
}
</script>


<script>
var myCenter=new google.maps.LatLng(10.657274, 77.010669);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
        
        <script>
        $(function() {
          $('#slides').slidesjs({	
            height: 235,
            navigation: false,
            pagination: false,
            effect: {
              fade: {
                speed: 400
              }
            },
            callback: {
                start: function(number)
                {			
                    $("#slider_content1,#slider_content2,#slider_content3").fadeOut(500);
                },
                complete: function(number)
                {			
                    $("#slider_content" + number).delay(500).fadeIn(1000);
                }		
            },
            play: {
                active: false,
                auto: true,
                interval: 6000,
                pauseOnHover: false,
                effect: "fade"
            }
          });
        });
        </script>
		
	<script>
$(document).ready(function(){
 $("#searchtag").autocomplete("autocomplete.php", {
		selectFirst: true
	});
});
</script>
	
	</head>

	<body onload="startTime();">
        <header>
            <div class="toggleMobile">
                <span class="menu1"></span>
                <span class="menu2"></span>
                <span class="menu3"></span>
            </div>
            <div id="mobileMenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
					<li><a href="explore.php">Explore</a></li>
                    <li><a href="javascript:void(0)">Getting Around</a></li>
					<li><a href="javascript:void(0)">Blog</a></li>
                </ul>
            </div>           
            <h2>Pollachi Guide</h2>
            <p>Your friend of pollachi</p>           
            <nav>
            	<h2 class="hidden">Our navigation</h2>
                <ul>
					<li style="float:left;"><a href="index.php">Home</a></li>
                    <li style="float:left;"><a href="about.php">About</a></li>
					<li style="float:left;"><a href="explore.php">Explore</a></li>
                    <li style="float:left;"><a href="explore.php">Getting Around</a></li>
					<li style="float:left;"><a href="javascript:void(0)">Blog</a></li>
                </ul>
            </nav>
			</header>
        <section class="container">
        	<h2 class="hidden">Lorem Ipsum</h2>
            <article id="slider_content1">
                <h3>Wanna perfect vacation?</h3>
                <p>Pollachi offers you a great place for a break from routine.The enchanting spots around Pollachi will be a definite stress buster and perfect timeout with family and friends. To know more.. <a href="javascript:void(0)" class="responsive_button">Click Here</a></p>
                <a class="button" href="javascript:void(0)">Click Here</a>
            </article>
            <article id="slider_content2">
                <h3>Classifieds</h3>
                <p>Ein kleines Bächlein namens Duden fließt durch ihren Ort und versorgt sie mit den nötigen Regelialien. Es ist ein paradiesmatisches Land, in dem einem gebratene Satzteile in den Mund fliegen. <a href="javascript:void(0)" class="responsive_button">Click Here</a></p>
                <a class="button" href="classifieds.php">Click Here</a>
            </article>
            <article id="slider_content3">
                <h3>Advertise</h3>
                <p>With Pollachi Guide, you can add your business to our website and increase the online presence. Click below to contact us<a href="javascript:void(0)" class="responsive_button">Click Here</a></p>
                <a class="button" href="javascript:void(0)">Click Here</a>
            </article>
            <div id="slides">
                <img src="img/slide3.jpg" alt="Some alt text">
                <img src="img/slide2.jpg" alt="Some alt text">    	
                <img src="img/slide1.jpg" alt="Some alt text">
            </div>
        </section>
        <section id="spacer">  
		
        	<h2 class="hidden">Dolor sit amet</h2>          
            <p>Enter your search so that we can help you !!</p>
            <div class="search">
                <form action="classifieds.php" method="GET">
                  <!--  <input type="text" name="typeahead" value="Enter a word..."/>-->
					 <input name="searchtag" type="text" id="searchtag" size="20"/>
                    <input type="submit" name="start_search" class="button" value="Search"/>
                </form>
            </div>            
        </section>
        <section id="boxcontent">
        	<h2 class="hidden">Adipiscing</h2>
            <article>            	               
                <img src="img/icon1.png" alt="Some alt text" width="200px" height="200px" id="img1"	/>                
                <h3>Coconut City</h3>
                <p>        	
                    Eines Tages aber beschloß eine kleine Zeile Blindtext, ihr Name war Lorem Ipsum, hinaus zu gehen. 
                </p>
            </article>
            <article>            	     
                <img src="img/icon2.jpg" alt="Some alt text" width="200px" height="200px"/>              
                <h3>Consectetuer</h3>
                <p>        	
                    Der große Oxmox riet ihr davon ab, da es dort wimmele von bösen Kommata, wilden Fragezeichen...
                </p>
            </article>
            <article>            	    
                <div id="googleMap" style="width:200px;height:200px;"></div>              
                <h3>Pollachi Map</h3>
                <p>        	
                    Es packte seine sieben Versalien, schob sich sein Initial in den Gürtel und machte sich auf den Weg.
                </p>
            </article>
            <br class="clear"/>
        </section>
        
        <section id="four_columns">
            <h2>
                Lorem ipsum
            </h2>    
            <article class="img-item">
            	<h3 class="hidden">Dolor sit amet</h3>
                <figure>  
                    <a href="" rel="lightbox" title="Some title">
                        <span class="thumb-screen"></span>
                        <img src="img/map.jpg" alt="Some alt text" width="200px" height="100px"/>
                    </a>
                    <figcaption>
                        <strong>
                            Photo by: Some name
                        </strong>
                        Als es die ersten Hügel des Kursivgebirges erklommen hatte
                    </figcaption>
                </figure>
            </article>
            <article class="img-item">
            	<h3 class="hidden">Sit Amet</h3>
                <figure>
                    <a href="img/example-slide-2.jpg" rel="lightbox" title="Some title">
                        <span class="thumb-screen"></span>
                        <img src="img/example-slide-2sml.jpg" alt="Some alt text"/>
                    </a>
                    <figcaption>
                        <strong>
                            Photo by: Some name
                        </strong>
                        warf es einen letzten Blick zurück auf die Skyline seiner Heimatstadt Buchstabhausen
                    </figcaption>
                </figure>
            </article>
            <article class="img-item">
            	<h3 class="hidden">Dolor Sit</h3>
                <figure>
                    <a href="img/example-slide-3.jpg" rel="lightbox" title="Some title">
                        <span class="thumb-screen"></span>
                        <img src="img/example-slide-3sml.jpg" alt="Some alt text"/>
                    </a>
                    <figcaption>
                        <strong>
                            Photo by: Some name
                        </strong>
                        die Headline von Alphabetdorf und die Subline seiner eigenen Straße.
                    </figcaption>
                </figure>
            </article>
            <article class="img-item">
            	<h3 class="hidden">Lorem Ipsum</h3>
                <figure>
                    <a href="img/example-slide-4.jpg" rel="lightbox" title="Some title">
                        <span class="thumb-screen"></span>
                        <img src="img/example-slide-4sml.jpg" alt="Some alt text"/>
                    </a>
                    <figcaption>
                        <strong>
                            Photo by: Some name
                        </strong>
                        Wehmütig lief ihm eine rhetorische Frage über die Wange.
                    </figcaption>
                </figure>
            </article>
            <br class="clear"/>
        </section>
        
        <section id="text_columns">
        	<h2 class="hidden">Blindtext</h2>
            <article class="column1">    
                <h3>Pollachi, in brief</h3>
                <p>Pollachi is a town and a taluk headquarters in Coimbatore district, Tamil Nadu state, India. Located about 40 km to the south of Coimbatore, it is the second largest town in the district after the Coimbatore. Pollachi is a very popular Marketplace, with supposedly largest markets for jaggery, vegetables and considered as southindia's biggest Cattle market.As of 2011, the town had a population of 90,180.</p>
                    <p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht lange, bis ihm ein paar heimtückische Werbetexter auflauerten, es mit Longe und Parole betrunken machten und es dann in ihre Agentur schleppten, wo sie es für ihre Projekte wieder und wieder mißbrauchten.</p>
            </article>
            <section class="column2">
            	<h3 class="hidden">Lorem Impsum</h3>
                <article class="row">  
                	<h4 class="hidden">Dolor sit</h4>                  
                    <img src="img/icon4.png" width="80" class="rocket" alt="Some alt text"/>
                    <p>Und wenn es nicht umgeschrieben wurde, dann benutzen Sie es immernoch.</p>
                </article> 
                <article class="row">
                	<h4 class="hidden">Ipsum</h4>                
                    <img src="img/icon5.png" width="80" class="clock" alt="Some alt text"/>
                    <p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht lange.</p>
                </article>   
            </section>
        </section>
		
        <footer>
        	<h2 class="hidden">Our footer</h2>
            <section id="copyright">
            	<h3 class="hidden">Copyright notice</h3>
                <div class="wrapper">
                    <div class="social">
                        <a href="javascript:void(0)"><img src="img/icon6.png" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="img/icon7.png" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="img/icon8.png" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="img/icon9.png" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="img/icon10.png" alt="Some alt text" width="25"/></a>
                    </div>
                    &copy; Copyright 2015 by <a href="http://www.pollachiguide.com">Pollachi Guide</a>. All Rights Reserved.
                </div>
            </section>
            <section class="wrapper">
            	<h3 class="hidden">Footer content</h3>
                <article class="column">
                    <h4>Lorem ipsum</h4>
                    Unterwegs traf es eine Copy. Die Copy warnte das Blindtextchen, da, wo sie herkäme wäre sie zigmal umgeschrieben worden und alles, was von ihrem Ursprung noch übrig wäre, sei das Wort "und" und das Blindtextchen solle umkehren und wieder in sein.
                </article>
                <article class="column midlist">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="javascript:void(0)">Advertise</a></li>
                        <li><a href="explore.php">Terms of use</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                    </ul>
                </article>
                <article class="column rightlist">
                    <h4>Dolor sit amet</h4>
                    <ul>
                        <li><a href="javascript:void(0)"><img src="img/example-slide-1sml.jpg" width="80" alt="Some alt text"/><span>Unterwegs traf es eine Copy. Die Copy warnte.</span></a></li>
                        <li><a href="javascript:void(0)"><img src="img/example-slide-2sml.jpg" width="80" alt="Some alt text"/><span>Doch alles Gutzureden konnte es nicht.</span></a></li>
                        <li><a href="javascript:void(0)"><img src="img/example-slide-3sml.jpg" width="80" alt="Some alt text"/><span>Und es dann in ihre Agentur schleppten.</span></a></li>
                    </ul>
                    <br class="clear"/>
                </article>
            </section>
        </footer>
			<a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
	</body>
</html>
