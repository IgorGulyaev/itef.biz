<?php

session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
	$lang = $_GET['lang'];
// register the session and set the cookie
	$_SESSION['lang'] = $lang;
	setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
	$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
	$lang = $_COOKIE['lang'];
}
else
{
	$lang = 'en';
}

$siteUrl = $GLOBALS['base_url'].'/';
$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL)).'/';
$mainPath = $siteUrl.$theme_path;

/*$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);*/
switch ($lang){
	case "ru":
		$inc = "index_ru.php";
		$htmlLang = "ru";
		break;
	case "ua":
		$inc = "index_ru.php";
		$htmlLang = "ru";
		break;
	case "be":
		$inc = "index_ru.php";
		$htmlLang = "ru";
		break;
	case "kk":
		$inc = "index_ru.php";
		$htmlLang = "ru";
		break;
	case "en":
		$inc = "index_en.php";
		$htmlLang = "en";
		break;
	default:
		$inc = "index_en.php";
		$htmlLang = "en";
		break;
}

?>
<!DOCTYPE html>
<html lang="<?php echo $htmlLang; ?>">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Creative and modern business solutions. Web development, e-commerse, branding and much more.">
		<meta name="author" content="">
		<meta name="keywords" content="clean design, web development, web developer, modern web design, html5, html5 developer, html5 designer, freelance html5, html5 designer, html5 website design, css3, front end, front-end, front end developer, front end development, wordpress, wordpress developer, wordpress design, typography, developer, programmer, web solution, e-commerce, content management systems, web design, multimedia design, internet site design, создание сайтов, продвижение сайтов, разработка сайтов, заказать создание, заказать продвижение, интернет магазин, разработка сайтов, сайты, itef, создание web сайтов, разработка сайта цена, разработка интернет сайта, создание и разработка сайтов, создать web сайт, разработка корпоративного сайта, разработка сайтов под ключ, разработка и продвижение сайтов, сайт визитка, web дизайн сайта, заказать создание сайта, заказать сайт, изготовление сайтов, интернет магазин, интернет портал, корпоративный сайт, создать блог, создать сайт, веб студия, веб-студия, web студия, web-студия, сделать сайт">
		<title>ITEF | Web development studio</title>
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

	<?php include('loader.php'); ?>

	<?php include($inc); ?>

	<div id="seo">
		<!-- begin of Top100 code -->
		<script async id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?3067938"></script>
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
		<script async type="text/javascript">
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
		<script async>
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
		<script async type="text/javascript">
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
</body>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="<?php echo $mainPath; ?>js/html5shiv.js"></script>
	<script src="<?php echo $mainPath; ?>js/respond.min.js"></script>
	<![endif]-->
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo $mainPath; ?>css/animate.css" >
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo $mainPath; ?>css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="<?php echo $mainPath; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo $mainPath; ?>css/owl.carousel.css" >
	<link rel="stylesheet" href="<?php echo $mainPath; ?>css/slideme.css" >
	<link rel="stylesheet" href="<?php echo $mainPath; ?>css/styles.css" >
	<!-- jQuery -->
	<script src="<?php echo $mainPath; ?>js/jquery-1.12.0.min.js"></script>
	<script>
		window.history.pushState("object or string", "Title", "/");
		jQuery(document).ready(function($){
			setTimeout(function () {
				$('#loadDum').fadeOut();
			}, 3000);
			$('#mainslider > ul').owlCarousel({
				items: 1,
				loop: true,
				dots: true,
				autoplay: true,
				animateOut: 'zoomOut',
				animateIn: 'pulse',
			});
			$(window).on('load', function() {

			});
		});
	</script>
	<script src="<?php echo $mainPath; ?>js/imagelightbox.min.js"></script>
	<script src="<?php echo $mainPath; ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo $mainPath; ?>js/jquery.slideme2.js"></script>
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

		jQuery('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:2,
					nav:false
				},
				1000:{
					items:3,
					nav:true
				}
			}
		});

		jQuery(document).ready(function ($) {
			var activityIndicatorOn = function () {
					$('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
				},
				activityIndicatorOff = function () {
					$('#imagelightbox-loading').remove();
				},
				overlayOn = function () {
					$('<div id="imagelightbox-overlay"></div>').appendTo('body');
				},
				overlayOff = function () {
					$('#imagelightbox-overlay').remove();
				};
			$(window).load(function() {
				$('a[data-imagelightbox="a"]').imageLightbox({
					onStart: 	 function() { overlayOn(); },
					onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
					onLoadStart: function() { activityIndicatorOn(); },
					onLoadEnd:	 function() { activityIndicatorOff(); }
				});
				$('a[data-imagelightbox="b"]').imageLightbox({
					onStart: 	 function() { overlayOn(); },
					onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
					onLoadStart: function() { activityIndicatorOn(); },
					onLoadEnd:	 function() { activityIndicatorOff(); }
				});
				$('a[data-imagelightbox="c"]').imageLightbox({
					onStart: 	 function() { overlayOn(); },
					onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
					onLoadStart: function() { activityIndicatorOn(); },
					onLoadEnd:	 function() { activityIndicatorOff(); }
				});
				$('a[data-imagelightbox="d"]').imageLightbox({
					onStart: 	 function() { overlayOn(); },
					onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
					onLoadStart: function() { activityIndicatorOn(); },
					onLoadEnd:	 function() { activityIndicatorOff(); }
				});
				$('a[data-imagelightbox="e"]').imageLightbox({
					onStart: 	 function() { overlayOn(); },
					onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
					onLoadStart: function() { activityIndicatorOn(); },
					onLoadEnd:	 function() { activityIndicatorOff(); }
				});
				$('a[data-imagelightbox="f"]').imageLightbox({
					onStart: 	 function() { overlayOn(); },
					onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
					onLoadStart: function() { activityIndicatorOn(); },
					onLoadEnd:	 function() { activityIndicatorOff(); }
				});
				$('a[data-imagelightbox="g"]').imageLightbox({
					onStart: 	 function() { overlayOn(); },
					onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
					onLoadStart: function() { activityIndicatorOn(); },
					onLoadEnd:	 function() { activityIndicatorOff(); }
				});
				$('a[data-imagelightbox="h"]').imageLightbox({
					onStart: 	 function() { overlayOn(); },
					onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
					onLoadStart: function() { activityIndicatorOn(); },
					onLoadEnd:	 function() { activityIndicatorOff(); }
				});

			});

			$(document).mouseup(function (e)
			{
				var container = $(".modal-content");

				if (!container.is(e.target) // if the target of the click isn't the container...
					&& container.has(e.target).length === 0) // ... nor a descendant of the container
				{
					container.find('.close').trigger('click');
				}
			});

			/*$('.modal-dialog').on('click', function () {
				console.log('click');
				$(this).find('.close').trigger('click');
			});*/
		});
	</script>
	<!-- Portfolio -->
	<script src="<?php echo $mainPath; ?>js/jquery.quicksand.js"></script>
	<!--Jquery Smooth Scrolling-->
	<script>
		function gallery(){}$(document).ready(function(){$("#contactForm, .order-form").submit(function(){var t=$(this),e=!1;if(t.find("input, textarea").each(function(){""==$(this).val()&&(alert('Зaпoлнитe пoлe "'+$(this).attr("placeholder")+'"!'),e=!0)}),!e){var a=t.serialize();$.ajax({type:"POST",url:"<?php echo $mainPath; ?>templates/send.php",dataType:"json",data:a,beforeSend:function(e){t.find('input[type="submit"]').attr("disabled","disabled")},success:function(t){t.error?alert(t.error):$("#launchModal").trigger("click")},error:function(t,e,a){alert(t.status),alert(a)},complete:function(e){t.find('input[type="submit"]').prop("disabled",!1)}})}return!1}),$('.custom-menu a[href^="#"], .intro-scroller .inner-link').on("click",function(t){t.preventDefault();var e=this.hash,a=$(e);$("html, body").stop().animate({scrollTop:a.offset().top},900,"swing",function(){window.location.hash=e})}),$("a.page-scroll").bind("click",function(t){var e=$(this);$("html, body").stop().animate({scrollTop:$(e.attr("href")).offset().top},1500,"easeInOutExpo"),t.preventDefault()}),$(".nav a").on("click",function(){$(".nav").find(".active").removeClass("active"),$(this).parent().addClass("active")}),$("body").append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>'),$(window).scroll(function(){0!=$(this).scrollTop()?$("#toTop").fadeIn():$("#toTop").fadeOut()}),$("#toTop").click(function(){return $("html, body").animate({scrollTop:0},700),!1})});var $itemsHolder=$("ul.port2"),$itemsClone=$itemsHolder.clone(),$filterClass="";$("ul.filter li").click(function(t){if(t.preventDefault(),$filterClass=$(this).attr("data-value"),"all"==$filterClass)var e=$itemsClone.find("li");else var e=$itemsClone.find("li[data-type="+$filterClass+"]");$itemsHolder.quicksand(e,{duration:1e3},gallery)}),$(document).ready(gallery);
	</script>
	<script type="text/javascript">
		$(document).ready(function(){inicializemap(),$("#contactForm").on("submit",function(e){e.preventDefault(),e.stopPropagation();var t=$("#name").val(),s=$("#email").val(),c=$("#message").val(),a=!1,n="Request can not be send",l=new RegExp(/^(('[\w-\s]+')|([\w-]+(?:\.[\w-]+)*)|('[\w-\s]+')([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);return t&&t.length>0&&""!=$.trim(t)&&c&&c.length>0&&""!=$.trim(c)&&s&&s.length>0&&""!=$.trim(s)?l.test(s)?a=!0:(n="Please check your email address",a=!1):(n="You must fill all the form fields to proceed!",a=!1),a?($.ajax({data:$("#contactForm").serialize(),beforeSend:function(){$("#success").html('<div class="col-md-12 text-center"><img src="images/spinner1.gif" alt="spinner" /></div>')},success:function(e){1==e?($("#success").html('<div class="col-md-12 text-center">Your email was sent successfully</div>'),window.location.reload()):$("#success").html('<div class="col-md-12 text-center">E-mail was not sent. Please try again!</div>')},error:function(e){$("#success").html('<div class="col-md-12 text-center">We could not fetch the data from the server. Please try again!</div>')},complete:function(e){console.log("Finished")},type:"POST",url:"js/send_email.php"}),!0):($("#success").html('<div class="col-md-12 text-center">'+n+"</div>"),!1)})});
	</script>
</html>




