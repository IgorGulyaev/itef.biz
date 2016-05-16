<?php 
$siteUrl = $GLOBALS['base_url'].'/';
$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL)).'/';
$mainPath = $siteUrl.$theme_path;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Creative and modern business solutions. Web development, e-commerse, branding and much more.">
		<meta name="author" content="">
		<meta name="keywords" content="clean design, web development, web developer, modern web design, html5, html5 developer, html5 designer, freelance html5, html5 designer, html5 website design, css3, front end, front-end, front end developer, front end development, wordpress, wordpress developer, wordpress design, typography, developer, programmer, web solution, e-commerce, content management systems, web design, multimedia design, internet site design, создание сайтов, продвижение сайтов, разработка сайтов, заказать создание, заказать продвижение, интернет магазин, разработка сайтов, сайты, itef, создание web сайтов, разработка сайта цена, разработка интернет сайта, создание и разработка сайтов, создать web сайт, разработка корпоративного сайта, разработка сайтов под ключ, разработка и продвижение сайтов, сайт визитка, web дизайн сайта, заказать создание сайта, заказать сайт, изготовление сайтов, интернет магазин, интернет портал, корпоративный сайт, создать блог, создать сайт, веб студия, веб-студия, web студия, web-студия, сделать сайт">
		<title>ITEF | Web development studio</title>
		<!-- Bootstrap Core CSS -->
		<link href="<?php echo $mainPath; ?>css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="<?php echo $mainPath; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo $mainPath; ?>css/animate.css" >
		<link rel="stylesheet" href="<?php echo $mainPath; ?>css/styles.css" >
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
			<!-- Facebook Pixel Code -->
			<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','//connect.facebook.net/en_US/fbevents.js');

			fbq('init', '664453193696113');
			fbq('track', "PageView");</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=664453193696113&ev=PageView&noscript=1"
			/></noscript>
			<!-- End Facebook Pixel Code -->
	</head>

	<body data-spy="scroll">
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo $siteUrl; ?>"><img src="<?php echo $mainPath; ?>images/logo.png" alt="Company logo" /></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu">
						<li class="active"><a href="#home">Home</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#portfolio1">Portofolio</a></li>
						<li><a href="#about">About</a></li>
						<!-- <li><a href="#meet-team">Team</a></li> -->
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header Carousel -->
		<header id="home" class="carousel slide">
			<ul class="cb-slideshow">
				<li><span>image1</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>SMART BUSINESS SOLUTIONS!</h3></div>
							</div>
						</div>
						<h4>ITEF – Personal planning and development for your website.</h4>
					</div>
				</li>
				<li><span>image2</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>PREMIUM CREATIVE CONTENT!</h3></div>
							</div>
						</div>
						<h4>We develop exclusive web-product for everyone.</h4>
					</div>
				</li>
				<li><span>image3</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>UNIQUE DESIGN!</h3></div>
							</div>
						</div>
						<h4>Our designers create a website exactly the way you want it to be.</h4>
					</div>
				</li>
				<li><span>Image 04</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>WEB AND GRAPHICS DESIGN</h3></div>
							</div>
						</div>
						<h4>A full range of graphics solutions for your business.</h4>
					</div>
				</li>
				<li><span>Image 05</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>DIGITAL MARKETING SOLUTIONS</h3></div>
							</div>
						</div>
						<h4>Create your own system. From promo site to the portal.</h4>
					</div>
				</li>
				<li><span>Image 06</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3>SEARCH ENGINE OPTIMIZATION!</h3></div>
							</div>
						</div>
						<h4>Proper SEO content for advanced positions.</h4>
					</div>
				</li>
			</ul>
			<div class="intro-scroller">
				<a class="inner-link" href="#services">
					<div class="mouse-icon" style="opacity: 1;">
						<div class="wheel"></div>
					</div>
				</a> 
			</div>          
		</header>
			
		<!-- Page Content -->

		<section id="services" class="">
			<div class="orangeback">
				<div class="container">
					<div class="text-center homeport2"><h2>Services</h2></div>
					<div class="row">
						<div class="col-md-12 homeservices1">
							<div class="col-md-3 portfolio-item wow flipInY">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-line-chart fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="javascript:void(0);">Promo site</a></h3>
									<p>Available online resource that allows you to inexpensively put information about the company, a private company. Created to attract potential customers. The information includes basic data on the area of activity, owner, goods, services and contacts.</p>
								</div>
							</div>
							<div class="col-md-3 portfolio-item wow flipInY">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-users fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="javascript:void(0);">Corporate website</a></h3>
									<p>A full web product, is the face of the company in Internet, containing the most complete information about its activities.<br/>
The main difference - a good interactivity, constant interaction with customers and corporate visitors. The ability to quickly process and use the information received. Corporate website created on this engine, which allows company managers to manage content.</p>
								</div>
							</div>
							<div class="col-md-3 portfolio-item wow flipInY">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-code fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="javascript:void(0);">Online store</a></h3>
									<p>Web site with special software to manage the buying and selling online. On the site you can choose a product, create an order, choose the method of payment and delivery.<br/>
Online store has a number of advantages: no need to rent office space, warehouse. Enough to have reliable suppliers, and service delivery.</p>
								</div>
							</div>
							<div class="col-md-3 portfolio-item wow flipInY">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-cogs fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="javascript:void(0);">Web portal</a></h3>
									<p>The website, which performs navigation and service functions. A practical interface allows the user to make a request, it is easy to navigate on given links and to find the necessary information in Internet. It may offer a unique news, review content, reports and original service - the ability to create your own home page, inbox, participate in forums, comments.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="portfolio1" class="">
		<div class="container">
		<div class="row">
			<div class="text-center">
			<h2>Portfolio</h2>
			<img class="img-responsive displayed" src="<?php echo $mainPath; ?>images/short.png" alt="about">
			</div>
 
			<ul class="port2">
			  <li data-type="development" data-id="id-1" class="port3 wow zoomIn">
				<a href="http://www.rtinews.com.ua/" id="development1"><img src="<?php echo $mainPath; ?>images/rti.jpg" alt=""></a>
				<span class="site-title">RTI News</span>
				<span class="site-body">Front-end for <a href="http://awebia.com/" target="_blank">Awebia</a></span></li>
			  <li data-type="webdesign" data-id="id-2" class="port3 wow zoomIn">
				<a href="http://sayres.websparta.ru/" id="webdesign1"><img src="<?php echo $mainPath; ?>images/sayres.jpg" alt=""></a>
				<span class="site-title">Sayres agency</span>
				<span class="site-body">Full-stack for <a href="http://websparta.ru/" target="_blank">WebSparta</a></span>
			  </li>
			  <li data-type="mobileapps" data-id="id-3" class="port3 wow zoomIn">
				<a href="http://kmr.gov.ua/" id="mobileapps1"><img src="<?php echo $mainPath; ?>images/kmr.jpg" alt=""></a>
				<span class="site-title">Kiev city Counsil</span>
				<span class="site-body">Front-end for <a href="http://awebia.com/" target="_blank">Awebia</a></span></li>
			  </li>
				<li data-type="development" data-id="id-4" class="port3 wow zoomIn">
				<a href="http://lawandjustice.ae/" id="development2"><img src="<?php echo $mainPath; ?>images/lnj.jpg" alt=""></a>
				<span class="site-title">Law&Justice</span>
				<span class="site-body">Front-end for <a href="http://awebia.com/" target="_blank">Awebia</a></span></li>
			  </li>
			  <li data-type="webdesign" data-id="id-5" class="port3 wow zoomIn">
				<a href="http://timak.co/" id="webdesign2"><img src="<?php echo $mainPath; ?>images/timak.jpg" alt=""></a>
				<span class="site-title">TIMAK</span>
				<span class="site-body">Front-end for <a href="http://awebia.com/" target="_blank">Awebia</a></span></li>
			  </li>
			  <li data-type="mobileapps" data-id="id-6" class="port3 wow zoomIn">
				<a href="http://liyev.com/" id="mobileapps2"><img src="<?php echo $mainPath; ?>images/liyev.jpg" alt=""></a>
				<span class="site-title">Lawyer Alexander Liyev</span>
				<span class="site-body">Front-end for <a href="http://awebia.com/" target="_blank">Awebia</a></span></li>
			  </li>
			</ul>
		
		  </div> 
		</div>
		</section>
		
		<section id="about" class="">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="text-center">
							<h2>About Us</h2>
							<img class="img-responsive displayed" src="<?php echo $mainPath; ?>images/short.png" alt="Company about"/>
							<div class="row">
								<div class="col-md-12">
									<p class="wow rotateInUpLeft">ITEF company was founded in 2014 and during its existence has combined successful and creative employees who are qualitatively carry out their duties.</p>
									<p class="wow rotateInUpRight">We offer a flexible choice of web technologies. Your site can be designed as a content management system (CMS), and using popular frameworks. The possibilities for design and visual solutions site are virtually limitless.</p>
									<p class="wow rotateInUpLeft">Through careful planning and adherence to a detailed requirements specification, we ensure timely delivery of the project. You do not need to worry about making your site has earned in the period. We value our customers and responsible approach to business.</p>
									<p class="wow rotateInUpRight">On the basis of the collective work of the development process opens wide horizons to generate all kinds of ideas. Advanced solutions are ready to rush into battle with the commonplace, in order to create the perfect product for you.<!-- <span class="color-elements">essentially unchanged.</span> --></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="contact" class="">
			<div class="container"> 
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-12">
							<div class="text-center">
							<h2>Contact Us</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-8">
							<form class="inline" id="contactForm" method="post" action="" >
								<div class="row">
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="text" name="name" class="form-control custom-labels" id="name" placeholder="FULL NAME" required data-validation-required-message="Please write your name!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="email" name="email" class="form-control custom-labels" id="email" placeholder="EMAIL" required data-validation-required-message="Please write your email!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="message" class="form-control custom-labels" id="message" placeholder="ASK YOUR QUESTION" required data-validation-required-message="Please write a message!"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<input type="submit" class="btn btn-md btn-custom btn-noborder-radius" value="Send It"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<button type="button" class="btn btn-md btn-noborder-radius btn-custom" name="reset">RESET
											</button>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<div id="response_holder"></div>
										</div>
									</div>
									<div class="col-sm-12 contact-msg">
									<div id="success"></div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-5 col-md-3 col-lg-offset-1 col-md-offset-1">
							<div class="row">
								<div class="col-md-12 height-contact-element">
									<div class="form-group">
										<i class="fa fa-2x fa-map-marker"></i>
										<span class="text">Kiev, Ukraine</span>
									</div>
								</div>
								<div class="col-md-12 height-contact-element">
									<div class="form-group">
										<i class="fa fa-2x fa-phone"></i>
										<span class="text">+38 099 4959282</span>
									 </div>
								 </div>
								<div class="col-md-12 height-contact-element">    
									<div class="form-group">
										<i class="fa fa-2x fa-envelope"></i>
										<span class="text"><a href="malito:info@itef.biz">info@itef.biz</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="follow-us" class="">
			<div class="container"> 
				<div class="text-center height-contact-element">
					<h2>FOLLOW US</h2>
				</div>
				<img class="img-responsive displayed" src="<?php echo $mainPath; ?>images/short.png" alt="short" />
				<div class="text-center height-contact-element">
					<ul class="list-unstyled list-inline list-social-icons">
						<li class="active"><a href="https://www.facebook.com/itef.ua" target="_blank"><i class="fa fa-facebook social-icons"></i></a></li>
						<!-- <li><a href="#" target="_blank"><i class="fa fa-twitter social-icons"></i></a></li> -->
						<li><a href="https://www.facebook.com/itef.ua" target="_blank"><i class="fa fa-google-plus social-icons"></i></a></li>
						<li><a href="https://www.linkedin.com/company/4836086" target="_blank"><i class="fa fa-linkedin social-icons"></i></a></li>
					</ul>
				</div>
			</div>
		</section>

		<footer id="footer" class="wow">
			<div class="container">
				<div class="row myfooter">
					<div class="col-xs-12"><div class="pull-left">
					© Copyright ITEF 2016<!-- | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> -->
					</div></div>
				</div>
			</div>
		</footer>
		
		<!-- Modal -->
		<button id="launchModal" class="hidden" data-target="#successModal" data-toggle="modal" type="button"> Launch demo modal </button>
		<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Thank you!</h4>
			  </div>
			  <div class="modal-body">
				Your message is sent. Support will answer ASAP.
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		
		<div id="seo">
		<!-- begin of Top100 code -->
		<script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?3067938"></script>
		<noscript>
			<a href="http://top100.rambler.ru/navi/3067938/">
				<img src="http://counter.rambler.ru/top100.cnt?3067938" alt="Rambler's Top100" border="0" />
			</a>
		</noscript>
		<!-- end of Top100 code -->
		<!-- uaport -->
		<a href="http://uaport.net" target="_blank"><img src="http://uaport.net/banners/88x31.gif" width="88" height="31" border="0" title="UAport - объединяя лучшее, найти главное"></a>
		<!-- end of uaport -->
		<!-- Rating@Mail.ru counter -->
		<script type="text/javascript">
			var _tmr = _tmr || [];
			_tmr.push({id: "2596923", type: "pageView", start: (new Date()).getTime()});
			(function (d, w) {
				 var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
				 ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
				 var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
				 if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
			})(document, window);
		</script><noscript><div style="position:absolute;left:-10000px;">
		<img src="//top-fwz1.mail.ru/counter?id=2596923;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
		</div></noscript>
		<!-- //Rating@Mail.ru counter -->
		<!-- //Google counter -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-57628192-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<!-- //Google counter -->
    <!-- Yandex.Metrika informer -->
    <a href="https://metrika.yandex.ru/stat/?id=27463563&amp;from=informer"
    target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/27463563/3_0_209BC7FF_007BA7FF_1_pageviews"
    style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:27463563,lang:'ru'});return false}catch(e){}"/></a>
    <!-- /Yandex.Metrika informer -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter27463563 = new Ya.Metrika({id:27463563,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/27463563" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <a href="https://plus.google.com/108294760884636691112" rel="publisher">Google+</a>
	</div>
		

		<!-- jQuery -->
		<!-- <script src="js/jquery.js"></script> -->
		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo $mainPath; ?>js/bootstrap.min.js"></script>
		<!-- WOW js -->
		<script src="<?php echo $mainPath; ?>js/wow.js"></script>
		<script>
			var wow = new WOW(
			  {
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       0,          // distance to the element when triggering the animation (default is 0)
				mobile:       true,       // trigger animations on mobile devices (default is true)
				live:         true,       // act on asynchronously loaded content (default is true)
				callback:     function(box) {
				  // the callback is fired every time an animation is started
				  // the argument that is passed in is the DOM node being animated
				},
				scrollContainer: null // optional scroll container selector, otherwise use window
			  }
			);
			wow.init();
		</script>

		<!-- Google Map -->
		<script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true&amp;libraries=places"></script>

		<!-- Portfolio -->
		<script src="<?php echo $mainPath; ?>js/jquery.quicksand.js"></script>	    
	

		<!--Jquery Smooth Scrolling-->
		<script>
			$(document).ready(function(){
				$("#contactForm").submit(function() {
					var form = $(this); // зaпишeм фoрму, чтoбы пoтoм нe былo прoблeм с this
					var error = false; // прeдвaритeльнo oшибoк нeт
					form.find('input, textarea').each( function(){ // прoбeжим пo кaждoму пoлю в фoрмe
						if ($(this).val() == '') { // eсли нaхoдим пустoe
							alert('Зaпoлнитe пoлe "'+$(this).attr('placeholder')+'"!'); // гoвoрим зaпoлняй!
							error = true; // oшибкa
						}
					});
					if (!error) { // eсли oшибки нeт
						var data = form.serialize(); // пoдгoтaвливaeм дaнныe
						$.ajax({ // инициaлизируeм ajax зaпрoс
						   type: 'POST', // oтпрaвляeм в POST фoрмaтe, мoжнo GET
						   url: '<?php echo $mainPath; ?>templates/send.php', // путь дo oбрaбoтчикa, у нaс oн лeжит в тoй жe пaпкe
						   dataType: 'json', // oтвeт ждeм в json фoрмaтe
						   data: data, // дaнныe для oтпрaвки
						   beforeSend: function(data) { // сoбытиe дo oтпрaвки
								form.find('input[type="submit"]').attr('disabled', 'disabled'); // нaпримeр, oтключим кнoпку, чтoбы нe жaли пo 100 рaз
							  },
						   success: function(data){ // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
								if (data['error']) { // eсли oбрaбoтчик вeрнул oшибку
									alert(data['error']); // пoкaжeм eё тeкст
								} else { // eсли всe прoшлo oк
									$('#launchModal').trigger('click'); // пишeм чтo всe oк
								}
							 },
						   error: function (xhr, ajaxOptions, thrownError) { // в случae нeудaчнoгo зaвeршeния зaпрoсa к сeрвeру
								alert(xhr.status); // пoкaжeм oтвeт сeрвeрa
								alert(thrownError); // и тeкст oшибки
							 },
						   complete: function(data) { // сoбытиe пoслe любoгo исхoдa
								form.find('input[type="submit"]').prop('disabled', false); // в любoм случae включим кнoпку oбрaтнo
							 }
									  
							 });
					}
					return false; // вырубaeм стaндaртную oтпрaвку фoрмы
				});
				
				$('.custom-menu a[href^="#"], .intro-scroller .inner-link').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						'scrollTop': $target.offset().top
					}, 900, 'swing', function () {
						window.location.hash = target;
					});
				});

				$('a.page-scroll').bind('click', function(event) {
					var $anchor = $(this);
					$('html, body').stop().animate({
						scrollTop: $($anchor.attr('href')).offset().top
					}, 1500, 'easeInOutExpo');
					event.preventDefault();
				});

			   $(".nav a").on("click", function(){
					 $(".nav").find(".active").removeClass("active");
					$(this).parent().addClass("active");
				});

				$('body').append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>');
					$(window).scroll(function () {
						if ($(this).scrollTop() != 0) {
							$('#toTop').fadeIn();
						} else {
							$('#toTop').fadeOut();
						}
					}); 
				$('#toTop').click(function(){
					$("html, body").animate({ scrollTop: 0 }, 700);
					return false;
				});

			});

		</script>

		<script>
		function gallery(){};

		var $itemsHolder = $('ul.port2');
		var $itemsClone = $itemsHolder.clone(); 
		var $filterClass = "";
		$('ul.filter li').click(function(e) {
		e.preventDefault();
		$filterClass = $(this).attr('data-value');
			if($filterClass == 'all'){ var $filters = $itemsClone.find('li'); }
			else { var $filters = $itemsClone.find('li[data-type='+ $filterClass +']'); }
			$itemsHolder.quicksand(
			  $filters,
			  { duration: 1000 },
			  gallery
			  );
		});

		$(document).ready(gallery);
		</script>


		<script type="text/javascript">
	$(document).ready(function(){
		inicializemap()

		$('#contactForm').on('submit', function(e){
			e.preventDefault();
			e.stopPropagation();

			// get values from FORM
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			var goodToGo = false;
			var messgaeError = 'Request can not be send';
			var pattern = new RegExp(/^(('[\w-\s]+')|([\w-]+(?:\.[\w-]+)*)|('[\w-\s]+')([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);


			 if (name && name.length > 0 && $.trim(name) !='' && message && message.length > 0 && $.trim(message) !='' && email && email.length > 0 && $.trim(email) !='') {
				  if (pattern.test(email)) {
					 goodToGo = true;
				  } else {
					 messgaeError = 'Please check your email address';
					 goodToGo = false; 
				  }
			 } else {
			   messgaeError = 'You must fill all the form fields to proceed!';
			   goodToGo = false;
			 }

			 
			if (goodToGo) {
			   $.ajax({
				 data: $('#contactForm').serialize(),
				 beforeSend: function() {
				   $('#success').html('<div class="col-md-12 text-center"><img src="images/spinner1.gif" alt="spinner" /></div>');
				 },
				 success:function(response){
				   if (response==1) {
					 $('#success').html('<div class="col-md-12 text-center">Your email was sent successfully</div>');
					 window.location.reload();
				   } else {
					 $('#success').html('<div class="col-md-12 text-center">E-mail was not sent. Please try again!</div>');
				   }
				 },
				 error:function(e){
				   $('#success').html('<div class="col-md-12 text-center">We could not fetch the data from the server. Please try again!</div>');
				 },
				 complete: function(done){
				   console.log('Finished');
				 },
				 type: 'POST',
				 url: 'js/send_email.php', 
			   });
			   return true;
			} else {
			   $('#success').html('<div class="col-md-12 text-center">'+messgaeError+'</div>');
			   return false;
			}
			return false;
		});
	});

	var map = null;
	 var latitude;
	 var longitude;
	 function inicializemap(){
	   latitude = 41.3349509; 
	   longitude = 19.8217028;

	  var egglabs = new google.maps.LatLng(latitude, longitude);
	  var egglabs1 = new google.maps.LatLng(43.0630171, 89.2296082);
	  var egglabs2 = new google.maps.LatLng(13.0630171, 80.2296082 );


	  var image = new google.maps.MarkerImage('images/marker.png', new google.maps.Size(84,56), new google.maps.Point(0,0), new google.maps.Point(42,56));
	  var mapCoordinates = new google.maps.LatLng(latitude, longitude);
	  var mapOptions = {
	   backgroundColor: '#ffffff',
	   zoom: 10,
	   disableDefaultUI: true,
	   center: mapCoordinates,
	   mapTypeId: google.maps.MapTypeId.ROADMAP,
	   scrollwheel: true,
	   draggable: true, 
	   zoomControl: false,
	   disableDoubleClickZoom: true,
	   mapTypeControl: false,
	   styles: [
					{
						"featureType": "all",
						"elementType": "labels.text.fill",
						"stylers": [
							{
								"color": "#1f242f"
							}
						]
					},
					{
						"featureType": "all",
						"elementType": "labels.icon",
						"stylers": [
							{
								"hue": "#ff9d00"
							}
						]
					},
					{
						"featureType": "landscape.man_made",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#fef8ef"
							}
						]
					},
					{
						"featureType": "poi.medical",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"hue": "#ff0000"
							}
						]
					},
					{
						"featureType": "poi.park",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#c9d142"
							},
							{
								"lightness": "0"
							},
							{
								"visibility": "on"
							},
							{
								"weight": "1"
							},
							{
								"gamma": "1.98"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "geometry",
						"stylers": [
							{
								"weight": "1.00"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#d7b19c"
							},
							{
								"weight": "1"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"weight": "4.03"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"visibility": "off"
							},
							{
								"color": "#ffed00"
							}
						]
					},
					{
						"featureType": "road.highway.controlled_access",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "geometry",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "geometry",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "transit.line",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#cbcbcb"
							}
						]
					},
					{
						"featureType": "water",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#0b727f"
							}
						]
					}
				]
					  };

	  map = new google.maps.Map(document.getElementById('map-canvas-holder'),mapOptions);
	  marker = new google.maps.Marker({position: egglabs, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'ATIS1'}); 
	  marker = new google.maps.Marker({position: egglabs1, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'ATIS2'}); 
	  marker = new google.maps.Marker({position: egglabs2, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'ATIS3'}); 
	  google.maps.event.addListener(map, 'zoom_changed', function() {
	   var center = map.getCenter();
	   google.maps.event.trigger(map, 'resize');
	   map.setCenter(center);
	  });
	 }

</script>


</body>
</html>




