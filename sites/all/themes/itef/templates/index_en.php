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
                <li class="lang-switcher">
                    <a href="index.php?lang=ru">RU</a>
                </li>
                <li class="hidden-xs"><span class="dummy"></span></li>
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#meet-team">Team</a></li>
                <li><a href="#portfolio1">Portofolio</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header Carousel -->
<header id="home" class="carousel slide">
    <div id="mainslider">
        <ul class="cb-slideshow slideme">
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash1.jpg" alt="">
                <span>image1</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>SMART BUSINESS SOLUTIONS!</h3></div>
                        </div>
                    </div>
                    <h4>ITEF – Personal planning and development for your website.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash2.jpg" alt="">
                <span>image2</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>PREMIUM CREATIVE CONTENT!</h3></div>
                        </div>
                    </div>
                    <h4>We develop exclusive web-product for everyone.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash3.jpg" alt="">
                <span>image3</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>UNIQUE DESIGN!</h3></div>
                        </div>
                    </div>
                    <h4>Our designers create a website exactly the way you want it to be.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash4.jpg" alt="">
                <span>Image 04</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>WEB AND GRAPHICS DESIGN</h3></div>
                        </div>
                    </div>
                    <h4>A full range of graphics solutions for your business.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash5.jpg" alt="">
                <span>Image 05</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>DIGITAL MARKETING SOLUTIONS</h3></div>
                        </div>
                    </div>
                    <h4>Create your own system. From promo site to the portal.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash6.jpg" alt="">
                <span>Image 06</span>
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
    </div>
    <div class="intro-scroller">
        <a class="inner-link" href="#services">
            <div class="mouse-icon" style="opacity: 1;">
                <div class="wheel"></div>
            </div>
        </a>
    </div>
</header>

<!-- Page Content -->

<?php include('services.php'); ?>

<?php include('team.php'); ?>

<?php include('portfolio.php'); ?>

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
                            <div class="form-group">
                                <i class="fa fa-2x fa-phone"></i>
                                <span class="text">+38 099 4959282</span>
                            </div>
                            <div class="form-group">
                                <i class="fa fa-2x fa-skype"></i>
                                <span class="text">svetolik_dn</span>
                            </div>
                            <div class="form-group">
                                <i class="fa fa-2x fa-skype"></i>
                                <span class="text">nataly.schus</span>
                            </div>
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