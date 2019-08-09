@extends('layouts.app')

@section('content')
    <svg style="display: none">
        <symbol id="arrow-up">
            <svg viewBox="12.89999771118164 2.4000000953674316 34.20000076293945 55.099998474121094">
                <path d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z"></path>
            </svg>
        </symbol>
    </svg>
    <!-- Header -->
    <header class="plx" data-parallax="scroll" data-speed="0.0" data-image-src="{{asset('img/back/1.jpg')}}">
        <div class="address-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">г.Краснодар</div>
                </div>
            </div>
        </div>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <h1 class="name">СТЕЙКХАУС</h1>
                        <div class="skills">Только настоящая еда</div>
                        <div class="page-scroll circle"><a href="#contact">Заказать<br>онлайн</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="about brown plx" id="about" data-parallax="scroll" data-speed="0.3"
             data-image-src="{{asset('img/back/kit2.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Ресторан</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="digits">01</h3>
                    <hr class="h3">
                    <h3>СВЕЖИЙ ВЗГЛЯД НА ДОБРЫЕ ТРАДИЦИИ</h3>
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the
                        complete
                        source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy
                        customization.</p>
                </div>
                <div class="col-lg-4">
                    <h3 class="digits">02</h3>
                    <hr class="h3">
                    <h3>ПОДАЕМ ТОЛЬКО ЛУЧШИЕ КУСКИ МЯСА</h3>
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the
                        complete
                        source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy
                        customization.</p>
                </div>
                <div class="col-lg-4">
                    <h3 class="digits">03</h3>
                    <hr class="h3">
                    <h3>МЫ НАХОДИМСЯ В САМОМ СЕРДЦЕ ГОРОДА</h3>
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the
                        complete
                        source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy
                        customization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="brown gallery">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Галерея</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption"><!--
                    <div class="caption-content">
                        <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                --></div>
                    <img src="{{asset('img/gallery/1.jpg')}}" class="img-responsive" alt="photo1">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption"></div>
                    <img src="{{asset('img/gallery/2.jpg')}}" class="img-responsive" alt="photo2">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption"></div>
                    <img src="{{asset('img/gallery/3.jpg')}}" class="img-responsive" alt="photo3">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption"></div>
                    <img src="{{asset('img/gallery/4.jpg')}}" class="img-responsive" alt="photo4">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption"></div>
                    <img src="{{asset('img/gallery/5.jpg')}}" class="img-responsive" alt="photo5">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="caption"></div>
                    <img src="{{asset('img/gallery/6.jpg')}}" class="img-responsive" alt="photo6">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                    <div class="caption"></div>
                    <img src="{{asset('img/gallery/7.jpg')}}" class="img-responsive" alt="photo7">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                    <div class="caption"></div>
                    <img src="{{asset('img/gallery/8.jpg')}}" class="img-responsive" alt="photo8">
                </a>
            </div>
        </div>
    </section>
    <section class="fire plx" data-parallax="scroll" data-speed="0.3"
             data-image-src="{{asset('img/back/fire.gif')}}"></section>
    <!-- Contact Section -->
    <section id="contact" class="contacts brown">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>НАШ АДРЕС<br/> И КОНТАКТЫ</h2>
                    <h4>МЫ ВСЕГДА РАДЫ УЗНАТЬ ВАШЕ МНЕНИЕ. ПРОСТО ЗАПОЛНИТЕ ФОРМУ:</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <feedback></feedback>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4>ДЛЯ ЗАКАЗА СТОЛИКОВ ЗВОНИТЕ: +7 (495) 000-00-00</h4>
                        <p>ул. Арбат, 1а, Москва, Россия</p>
                        <p>Понедельник — пятница: 12:00–23:00 / Суббота, воскресенье: 12:00–1:00</p>
                    </div>
                </div>
                <div class="row">
                    <div class="map" id="yandexmap">

                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-top page-scroll">
            <svg class="arrow-up">
                <a href="#page-top">
                    <use xlink:href="#arrow-up"></use>
                </a>
            </svg>
            <a href="#page-top">
                наверх
            </a>
        </div>
    </section>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <img src="{{asset('img/gallery/1.jpg')}}" class="img-responsive img-centered" alt="photo1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <img src="{{asset('img/gallery/2.jpg')}}" class="img-responsive img-centered" alt="photo2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <img src="{{asset('img/gallery/3.jpg')}}" class="img-responsive img-centered" alt="photo3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <img src="{{asset('img/gallery/4.jpg')}}" class="img-responsive img-centered" alt="photo4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <img src="{{asset('img/gallery/5.jpg')}}" class="img-responsive img-centered" alt="photo5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <img src="{{asset('img/gallery/6.jpg')}}" class="img-responsive img-centered" alt="photo6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <img src="{{asset('img/gallery/7.jpg')}}" class="img-responsive img-centered" alt="photo7">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <img src="{{asset('img/gallery/8.jpg')}}" class="img-responsive img-centered" alt="photo8">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection