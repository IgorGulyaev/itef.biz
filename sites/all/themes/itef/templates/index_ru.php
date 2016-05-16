<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Навигация</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $siteUrl; ?>"><img src="<?php echo $mainPath; ?>images/logo.png" alt="Логотип компании" /></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right custom-menu">
                <li class="lang-switcher">
                    <a href="index.php?lang=en">EN</a>
                </li>
                <li class="hidden-xs"><span class="dummy"></span></li>
                <li class="active"><a href="#home">Главная</a></li>
                <li><a href="#services">Услуги</a></li>
                <li><a href="#meet-team">Команда</a></li>
                <li><a href="#portfolio1">Портфолио</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#contact">Связаться</a></li>
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
                            <div class="text-center"><h3>РАЗУМНЫЕ РЕШЕНИЯ ДЛЯ БИЗНЕСА!</h3></div>
                        </div>
                    </div>
                    <h4>ITEF – Персональное планирование и разработка вашего сайта.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash2.jpg" alt="">
                <span>image2</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>ЛУЧШИЙ КРЕАТИВНЫЙ КОНТЕНТ!</h3></div>
                        </div>
                    </div>
                    <h4>Мы создаем эксклюзивные веб-продукты для каждого.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash3.jpg" alt="">
                <span>image3</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>УНИКАЛЬНЫЙ ДИЗАЙН!</h3></div>
                        </div>
                    </div>
                    <h4>Наши дизайнеры создают веб-сайт именно таким, как вы хотите его видеть.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash4.jpg" alt="">
                <span>Image 04</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>WEB И ГРАФИЧЕСКИЙ ДИЗАЙН</h3></div>
                        </div>
                    </div>
                    <h4>Полный спектр графических решений для вашего бизнеса.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash5.jpg" alt="">
                <span>Image 05</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>ЦИФРОВЫЕ МАРКЕТИНГОВЫЕ РЕШЕНИЯ</h3></div>
                        </div>
                    </div>
                    <h4>Создайте свою собственную систему. От сайта-визитки до портала.</h4>
                </div>
            </li>
            <li>
                <img src="<?php echo $mainPath; ?>images/unsplash6.jpg" alt="">
                <span>Image 06</span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center"><h3>ПОИСКОВАЯ ОПТИМИЗАЦИЯ!</h3></div>
                        </div>
                    </div>
                    <h4>Правильный SEO контент для передовых позиций.</h4>
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

<section id="services" class="">
    <div class="orangeback">
        <div class="container">
            <div class="text-center homeport2"><h2>Услуги</h2></div>
            <div class="row">
                <div class="col-md-12 homeservices1">
                    <div class="col-md-3 portfolio-item wow flipInY">
                        <div class="text-center">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#modalPromo">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-line-chart fa-stack-1x"></i>
									</span>
                            </a>
                            <?php include('orderform_ru.php'); ?>
                            <h3><a href="javascript:void(0);">Сайт-визитка</a></h3>
                            <p>Доступный интернет-ресурс, который позволяет недорого разместить информацию о компании или предпринимателе.</p>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item wow flipInY">
                        <div class="text-center">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#modalPromo">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-users fa-stack-1x"></i>
									</span>
                            </a>
                            <?php include('orderform.php'); ?>
                            <h3><a href="javascript:void(0);">Корпоративный сайт</a></h3>
                            <p>Полноценный веб-продукт, является лицом компании в Интернете, содержащий наиболее полную информацию относительно ее деятельности.</p>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item wow flipInY">
                        <div class="text-center">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#modalPromo">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-code fa-stack-1x"></i>
									</span>
                            </a>
                            <?php include('orderform.php'); ?>
                            <h3><a href="javascript:void(0);">Интернет-магази</a></h3>
                            <p>Веб-сайт, оптимизированный для управления электронной коммерцией.</p>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item wow flipInY">
                        <div class="text-center">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#modalPromo">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-cogs fa-stack-1x"></i>
									</span>
                            </a>
                            <?php include('orderform.php'); ?>
                            <h3><a href="javascript:void(0);">Портал</a></h3>
                            <p>Интернет в интернете. Портал включает в себя множество функциональных возможностей.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('team-ru.php'); ?>

<?php include('portfolio-ru.php'); ?>

<section id="about" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="text-center">
                    <h2>О нас</h2>
                    <img class="img-responsive displayed" src="<?php echo $mainPath; ?>images/short.png" alt="Company about"/>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="wow rotateInUpLeft">Компания создана в 2014 году и за время своего существования объединила успешных и креативных сотрудников, которые качественно выполняют свои обязанности.</p>
                            <p class="wow rotateInUpRight">Мы предлагаем гибкую систему выбора веб-технологий. Ваш сайт может быть разработан как на системе управления контентом (CMS), так и с использованием популярных фреймворков. Возможности для дизайна и визуальных решений сайта фактически безграничны.</p>
                            <p class="wow rotateInUpLeft">Благодаря грамотному планированию и детальному следованию техзадания, мы гарантируем своевременную сдачу проекта. Вам не нужно беспокоиться о том, чтобы Ваш сайт заработал в срок. Мы ценим наших клиентов и ответственно подходим к делу.</p>
                            <p class="wow rotateInUpRight">Основаный на коллективном творчестве процесс разработки открывает широкие горизонты для генерации всевозможных идей. Передовые решения готовы броситься в бой с обыденностью, ради создания для Вас идеального продукта.</p>
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
                        <h2>Связаться с нами</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <form class="inline" id="contactForm" method="post" action="" >
                        <div class="row">
                            <div class="col-sm-6 height-contact-element">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control custom-labels" id="name" placeholder="ИМЯ И ФАМИЛИЯ" required data-validation-required-message="Пожалуйста, введите имя и фамилию!"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-sm-6 height-contact-element">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control custom-labels" id="email" placeholder="EMAIL" required data-validation-required-message="Пожалуйста, введите email!"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-sm-12 height-contact-element">
                                <div class="form-group">
                                    <input type="text" name="message" class="form-control custom-labels" id="message" placeholder="ЗАДАЙТЕ НАМ ВОПРОС" required data-validation-required-message="Пожалуйста, напишите сообщение!"/>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6 height-contact-element">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-md btn-custom btn-noborder-radius" value="Отправить"/>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6 height-contact-element">
                                <div class="form-group">
                                    <button type="button" class="btn btn-md btn-noborder-radius btn-custom" name="reset">ОЧИСТИТЬ
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
                                <span class="text">Киев, Украина</span>
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
            <h2>МЫ В СОЦСЕТЯХ</h2>
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
<button id="launchModal" class="hidden" data-target="#successModal" data-toggle="modal" type="button"> Запуск </button>
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Спасибо!</h4>
            </div>
            <div class="modal-body">
                Ваше сообщение отправлено. Мы с Вами свяжемся в ближайшее время.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>