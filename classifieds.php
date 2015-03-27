<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/classifieds/style_cfilter.css"> <!-- Resource style -->
<link rel="stylesheet" href="css/classifieds/reset_cfilter.css"> <!-- Resource style -->
	 <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		 <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js\/vendor\/1.7.2.jquery.min"><\/script>')</script>
			
	  <script src="lightbox/js/lightbox.js"></script>
        <script src="js/script.js"></script>
	<script src="js/classifieds/modernizr.js"></script>
	<title>Pollachi Classifieds</title>
</head>
<body>
<?php
$searchstring = $_GET['searchtag'];

if($searchstring=='schools')
{
			$filter1 = 'Matric';
			$filter2 = 'CBSE';
			$filter3 = 'Girls';
			
}else if($searchstring=='Colleges')
{
			$filter1 = 'Engineering';
			$filter2 = 'Arts & Science';
			$filter3 = 'Ladies';
}
?>

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
					<li><a href="about.php">Explore</a></li>
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
	
	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
					<li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Color 1</a></li>
					<li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Color 2</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<ul>
			<?php
			
			?>
				<li class="mix color-1 check1 radio2 option3"><img src="img/img-1.jpg" alt="Image 1"></li>
				<li class="mix color-2 check2 radio2 option2"><img src="img/img-2.jpg" alt="Image 2"></li>
				<li class="mix color-1 check3 radio3 option1"><img src="img/img-3.jpg" alt="Image 3"></li>
				<li class="mix color-1 check3 radio2 option4"><img src="img/img-4.jpg" alt="Image 4"></li>
				<li class="mix color-1 check1 radio3 option2"><img src="img/img-5.jpg" alt="Image 5"></li>
				<li class="mix color-2 check2 radio3 option3"><img src="img/img-6.jpg" alt="Image 6"></li>
				<li class="mix color-2 check2 radio2 option1"><img src="img/img-7.jpg" alt="Image 7"></li>
				<li class="mix color-1 check1 radio3 option4"><img src="img/img-8.jpg" alt="Image 8"></li>
				<li class="mix color-2 check1 radio2 option3"><img src="img/img-9.jpg" alt="Image 9"></li>
				<li class="mix color-1 check3 radio2 option4"><img src="img/img-10.jpg" alt="Image 10"></li>
				<li class="mix color-1 check3 radio3 option2"><img src="img/img-11.jpg" alt="Image 11"></li>
				<li class="mix color-2 check1 radio3 option1"><img src="img/img-12.jpg" alt="Image 12"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Search</h4>
					
					<div class="cd-filter-content">
						<input type="search" placeholder="Try color-1...">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Check boxes</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1"><?php echo $filter1 ?></label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2"><?php echo $filter2 ?></label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3"><?php echo $filter3 ?></label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Select</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Choose an option</option>
								<option value=".option1"><?php echo $filter1 ?></option>
								<option value=".option2"><?php echo $filter2 ?></option>
								<option value=".option3"><?php echo $filter3 ?></option>
								<option value=".option4">Option 4</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Radio buttons</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">Choice 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">Choice 3</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>
	</main> <!-- cd-main-content -->
	
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
                    <h4>Consectetuer</h4>
                    <ul>
                        <li><a href="javascript:void(0)">Die Copy warnte das Blindtextchen</a></li>
                        <li><a href="javascript:void(0)">Unterwegs traf es eine Copy</a></li>
                        <li><a href="javascript:void(0)">Doch alles Gutzureden konnte</a></li>
                        <li><a href="javascript:void(0)">Als es die ersten Hügel</a></li>
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
<script src="js/classifieds/jquery-2.1.1.js"></script>
<script src="js/classifieds/jquery.mixitup.min.js"></script>

<script src="js/classifieds/main.js"></script> <!-- Resource jQuery -->
</body>
</html>