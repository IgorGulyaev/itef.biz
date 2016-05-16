/*isMobile.js v0.3.2*/
!function(a){var b=/iPhone/i,c=/iPod/i,d=/iPad/i,e=/(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,f=/Android/i,g=/IEMobile/i,h=/(?=.*\bWindows\b)(?=.*\bARM\b)/i,i=/BlackBerry/i,j=/Opera Mini/i,k=/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,l=new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)","i"),m=function(a,b){return a.test(b)},n=function(a){var n=a||navigator.userAgent;this.apple={phone:m(b,n),ipod:m(c,n),tablet:m(d,n),device:m(b,n)||m(c,n)||m(d,n)},this.android={phone:m(e,n),tablet:!m(e,n)&&m(f,n),device:m(e,n)||m(f,n)},this.windows={phone:m(g,n),tablet:m(h,n),device:m(g,n)||m(h,n)},this.other={blackberry:m(i,n),opera:m(j,n),firefox:m(k,n),device:m(i,n)||m(j,n)||m(k,n)},this.seven_inch=m(l,n),this.any=this.apple.device||this.android.device||this.windows.device||this.other.device||this.seven_inch,this.phone=this.apple.phone||this.android.phone||this.windows.phone,this.tablet=this.apple.tablet||this.android.tablet||this.windows.tablet},o=new n;o.Class=n,"undefined"!=typeof module&&module.exports?module.exports=o:"function"==typeof define&&define.amd?define(o):a.isMobile=o}(this);


if(/dev\.mobile\./.test(document.location.href))
{
    isMobile.phone = 1;
}

if(isMobile.phone){
    document.querySelectorAll('html')[0].className = 'mobile';
}
else if(isMobile.tablet){
    document.querySelectorAll('html')[0].className = 'tablet';
}
/*isMobile.js v0.3.2*/


(function($) {

    Drupal.behaviors.custom_form_elements = {

        attach: function (context) {

            $('.col-md-3 .pane-webform .block-content a.ajax-processed').click(function () {
                $('.col-md-3 .pane-webform .block-content').fadeOut();
            });
            $('a.order-form').click(function () {
                $('.webform-confirmation').fadeOut();
                $('.col-md-3 .pane-webform.go-in .block-content').fadeOut();
                $('.col-md-3 .pane-webform.go-in .block-content a.ajax-processed').once().trigger('mousedown');
                $('.col-md-3 .pane-webform.order-form .block-content').fadeIn();
                return false
            });

            $('.pane-contact .pane-webform form input[type="submit"]').click(function () {
                if ($('.overlay')[0]) {
                    setTimeout(function () {
                        $('.overlay').fadeIn();
                    }, 300);
                } else {
                    setTimeout(function () {
                        var overlay = '<div class="overlay"></div>';
                        $('.pane-contact .pane-webform').once().append(overlay);
                        $('.overlay').fadeIn();
                    }, 300);
                }
            });

            $('.messages.error').on('click', function () {
                $(this).fadeOut();
            });

            $(document).mouseup(function (e) {
                if ($('.col-md-3 .pane-webform .block-content').has(e.target).length === 0){
                    $('.overlay').fadeOut();
                    if ($('.overlay')[0]) {
                        setTimeout(function () {
                            $('.overlay').fadeOut();
                        }, 250);
                    }
                    $('.col-md-3 .pane-webform .block-content').fadeOut();
                    $('a.ajax-processed').mousedown();
                }
            });

        }

    }

})(jQuery);

jQuery(document).ready(function ($) {

    function goLinksTop(item) {
        var goTlink = item.prev().prev().attr('id');
        var goTop = '<a class="gotop" href="/#' + goTlink + '">top</a>';
        item.prepend(goTop);

        $('a.gotop').once().on('click', function () {
            var paneT = $(this).parent().prev().prev();
            var paneTAttr = paneT.attr('id');
            var hrefTAct = '/#' + paneTAttr;
            $('.nav ul.menu a').parent('li').removeClass('active');
            $('.nav ul.menu a').removeClass('active');
            $('.nav ul.menu a').each(function () {
                if ($(this).attr('href') == hrefTAct) {
                    $(this).parent('li').addClass('active');
                    $(this).addClass('active');
                }
            });

            var goT = paneT.offset().top - admH;
            body.stop().animate({scrollTop: goT}, 1000, 'easeInOutQuad');
            return false
        });
    }

    function goLinksDown(item) {
        var goDlink = item.next().next().attr('id');
        var goDown = '<a class="godown" href="/#' + goDlink + '">down</a>';
        item.append(goDown);

        $('a.godown').on('click', function () {
            var paneD = $(this).parent().next().next();
            var paneDAttr = paneD.attr('id');
            var hrefDAct = '/#' + paneDAttr;
            $('.nav ul.menu a').parent('li').removeClass('active');
            $('.nav ul.menu a').removeClass('active');
            $('.nav ul.menu a').each(function () {
                if ($(this).attr('href') == hrefDAct) {
                    $(this).parent('li').addClass('active');
                    $(this).addClass('active');
                }
            });

            var goD;
            if (paneD.attr('id') == 'contact') {
                goD = paneD.offset().top - admH + 92;
            } else {
                goD = paneD.offset().top - admH;
            }
            body.stop().animate({scrollTop: goD}, 1000, 'easeInOutQuad');
            return false
        });
    }

    if($('html').hasClass('mobile') != true) {

        var wW = $(window).width();
        var hH = $(window).height();
        var admH;
        var STadmH;
        var body = $('html, body');
        var pane;

        $('.nav ul.menu a').parent('li').removeClass('active');
        $('.nav ul.menu a').removeClass('active');

        pane = $('.radix-layouts-content > .panel-panel-inner > .panel-pane:not(.start-panel):not(.pane-contact)');
        var paneInner = $('.radix-layouts-content > .panel-panel-inner > .panel-pane:not(.start-panel):not(.pane-contact) .block-inner');

        var paneStart = $('.block-system .panel-panel .panel-pane.start-panel');
        var paneEnd = $('.block-system .panel-panel .panel-pane.pane-contact');

        if (body.hasClass('admin-menu') == true) {
            admH = 92 + 29;
            STadmH = 29;
        } else {
            admH = 92;
            STadmH = 0;
        }

        pane.css('min-height', hH - admH);
        paneInner.css('min-height', hH - admH);
        paneStart.height(hH - STadmH);
        paneEnd.css('min-height', hH - STadmH);
        /*paneEnd.height(hH - STadmH);*/

        $('a.start').click(function () {
            var paneService = $('.pane-services');
            var startScr = paneService.offset().top - admH;
            body.stop().animate({scrollTop: startScr}, 1000, 'easeInOutQuad');
            $('#header').addClass('go');
            $('.nav ul.menu li.first').addClass('active');
            $('.nav ul.menu li.first a').addClass('active');
            return false
        });

        $('.nav ul.menu a').click(function () {
            var paneTo = $(this).attr('href');
            var hrefTo = paneTo.substring(1, paneTo.length);
            var goTo;
            if (hrefTo == '#contact') {
                goTo = $('' + hrefTo + '').offset().top - admH + 92;
            } else {
                goTo = $('' + hrefTo + '').offset().top - admH;
            }
            body.stop().animate({scrollTop: goTo}, 1000, 'easeInOutQuad');
            return false
        });


        $('.col-md-3 .pane-webform .pane-title, .order').click(function () {
            $('.col-md-3 .pane-webform.go-in .block-content').fadeIn();
            return false
        });


        goLinksTop($('#services'));
        goLinksTop($('#projects'));
        goLinksTop($('#about'));
        goLinksTop($('#contact'));

        goLinksDown($('#services'));
        goLinksDown($('#projects'));
        goLinksDown($('#about'));


        $('.block-system .panel-panel .panel-pane.start-panel').parallax("50%", 0.2);
        $('.block-system .panel-panel .panel-pane.pane-contact').parallax("0", -0.05);
        //$('.block-system .panel-panel .panel-pane.pane-projects').parallax("50%", 0.1);
        // $('.block-system .panel-panel .panel-pane.pane-projects .block-inner').parallax("0", -0.2);
        $('.block-system .panel-panel .panel-pane.pane-about').parallax("center", 0.1);
        $('.block-system .panel-panel .panel-pane.pane-about .block-inner').parallax("center", -0.05);
        //$('.block-system .panel-panel .panel-pane.pane-services .block-inner').parallax("right", 0.2);

        $('.view-projects.view-display-id-block').flexslider({
            selector: ".view-content > .views-row",
            animation: "slide",
            slideshow: false,
            controlNav: false,
            itemWidth: 345,
            itemMargin: 20,
            minItems: 3,
            maxItems: 3,
            move: 3
        });

        var $goAny = $('a.gotop, a.godown');
        var opacity = $goAny.css("opacity");
        var scrollStopped;

        var fadeInCallback = function () {
            if (typeof scrollStopped != 'undefined') {
                clearInterval(scrollStopped);
            }

            scrollStopped = setTimeout(function () {
                $goAny.animate({opacity: 1}, "slow");
            }, 600);
        };

        $(window).scroll(function () {
            var wScrT = $(window).scrollTop();
            var scrService = $('.block-system .panel-panel .panel-pane.pane-services').offset().top;
            var scrProjects = $('.block-system .panel-panel .panel-pane.pane-projects').offset().top;
            var scrAbout = $('.block-system .panel-panel .panel-pane.pane-about').offset().top;
            var scrContact = $('.block-system .panel-panel .panel-pane.pane-contact').offset().top;

            var $bgobj = $('.block-system .panel-panel .panel-pane.pane-services .block-inner'); // assigning the object
            var $bgobj2 = $('.block-system .panel-panel .panel-pane.pane-projects'); // assigning the object
            var bgobjPos = $bgobj.height() + 50;
            var bgobjPos2 = $bgobj2.height() + 100;
            var yPos = -(wScrT / 10);
            var yPos2 = -(wScrT / 5);
            var coordY = bgobjPos + yPos;
            var coordY2 = bgobjPos2 + yPos2;
            // Put together our final background position
            var coords = 'right ' + coordY + 'px';
            var coords2 = 'center ' + coordY2 + 'px';
            // Move the background
            $bgobj.css({backgroundPosition: coords});
            $bgobj2.css({backgroundPosition: coords2});

            console.log(scrService);

            if (!$goAny.is(":animated") && opacity == 1) {
                $goAny.animate({opacity: 0}, "slow", fadeInCallback);
            } else {
                fadeInCallback.call(this);
            }

            if (wScrT == 0 && $('#header').hasClass('go') == true) {
                $('#header').removeClass('go');
            }
            if (wScrT > scrService - 200) {
                $('#header').addClass('go');
            }
            if (wScrT > scrContact - 200) {
                $('#header').fadeOut('slow');
                $('.col-md-3').fadeOut('slow');
            } else {
                $('#header').fadeIn('slow');
                $('.col-md-3').fadeIn('slow');
            }

            if (wScrT < scrService - 130) {
                $('.nav ul.menu a').parent('li').removeClass('active');
                $('.nav ul.menu a').removeClass('active');
            }
            if (wScrT > scrService - 130 && wScrT < scrProjects - 130) {
                $('.nav ul.menu a').parent('li').removeClass('active');
                $('.nav ul.menu a').removeClass('active');
                $('.nav ul.menu a.services').parent('li').addClass('active');
                $('.nav ul.menu a.services').addClass('active');
            }
            if (wScrT > scrProjects - 130 && wScrT < scrAbout - 130) {
                $('.nav ul.menu a').parent('li').removeClass('active');
                $('.nav ul.menu a').removeClass('active');
                $('.nav ul.menu a.projects').parent('li').addClass('active');
                $('.nav ul.menu a.projects').addClass('active');
            }
            if (wScrT > scrAbout - 130 && wScrT < scrContact - 130) {
                $('.nav ul.menu a').parent('li').removeClass('active');
                $('.nav ul.menu a').removeClass('active');
                $('.nav ul.menu a.about').parent('li').addClass('active');
                $('.nav ul.menu a.about').addClass('active');
            }
            if (wScrT > scrContact - 130) {
                $('.nav ul.menu a').parent('li').removeClass('active');
                $('.nav ul.menu a').removeClass('active');
                $('.nav ul.menu a.contact').parent('li').addClass('active');
                $('.nav ul.menu a.contact').addClass('active');
            }


        });

        $(window).load(function () {

            //$("html").mCustomScrollbar();

            $(".view-services.view-display-id-block .views-field-field-service-image img").reflect({
                opacity: 0.2
            });
            $(".view-projects.view-display-id-block .views-row").reflect();
            setTimeout(function () {
                $('a.start.begin').css('backgtound-position', 'center 50px');
                //$('a.start.begin').removeClass('begin');
            }, 1200);
            setTimeout(function () {
                $('.block-system a.start').parallax("center", 0.02);
            }, 2100);


        });

    } else {

        $('.view-projects.view-display-id-block').flexslider({
            selector: ".view-content > .views-row",
            animation: "slide",
            slideshow: false,
            controlNav: false
        });

        $('html.mobile .primary-menu-wrapper .element-invisible').click(function () {
            $('html.mobile #header .nav ul.menu').slideToggle();
        });

        $('.col-md-3 .pane-webform .pane-title, .order').click(function () {
            $('.col-md-3 .pane-webform.go-in .block-content').fadeIn();
            return false
        });

    }

});