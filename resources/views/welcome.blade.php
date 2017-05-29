<!DOCTYPE html>
<html>
<head>
    <title>Conference</title>
    <meta charset="utf-8"> <!-- Meta for unicode encoding -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Meta for responsiveness -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Meta for Edge style rendering in IE -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> <!-- External font - Open Sans -->
    <link rel="stylesheet" type="text/css" href="css/app.css"> <!-- Compiled css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<div id="app">
    <!-- Navbar Header -->

    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="main-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand white-logo" href="/"><img src="/img/logo.png" alt="Conference"></a>
                    <a class="navbar-brand green-logo" href="/"><img src="/img/logo-nav.png" alt="Conference"></a>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right conf-nav">
                        <li><a href="javascrip:void(0)" alt="Speakers" data-move="speaker-section">Speakers</a></li>
                        <li><a href="javascrip:void(0)" alt="Home" data-move="price-section">Pricing</a></li>
                        <li><a href="javascrip:void(0)" alt="Home" data-move="sponsor-section">Sponsors</a></li>
                        <li><a href="javascrip:void(0)" alt="Home" data-move="faq-section">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- End of navbar header -->


    <!-- Landing section -->

    <section class="conference-landing">
        <div class="container">
            <div class="welcome-message">
                {{--<h1>A Event For Freelancers, Consultants & Agencies</h1>--}}
                <h1>This year, we're bringing the best minds in the freelancing community to YOU! </h1>
                {{--<p>10th – 13th July 2015</p>--}}
                <p>15th October, 2017</p>
                <div class="action-buttons">
                    <button class="primary-btn">Buy Tickets Now</button>
                    <button class="secondary-btn">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- End of landing section -->


    <!-- Speakers section -->

    <section class="conf-section speaker-section">
        <div class="container">
            <header class="conf-header">
                <img src="/img/microphone.png">
                <h2>Our Speakers</h2>
            </header>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p>We’ve lined up brilliant thought leaders to teach and inspire you with stories of victories,
                        defeats, and everything you learn in the in between from putting your passions to work.</p>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-1" data-toggle="modal">
                                <img src="/img/kai-davis.jpg" alt="Kai Davis">
                                <h2>Kai Davis</h2>
                            </a>
                            <a href="javascript:void(0)" class="site-link" target="_blank">kaidavis.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-2" data-toggle="modal">
                                <img src="/img/sean-dsouza.jpg" alt="Sean D'Souza">
                                <h2>Sean D'Souza</h2>
                            </a>
                            <a href="javascript:void(0)" class="site-link" target="_blank">psychotactics.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-3" data-toggle="modal">
                                <img src="/img/christopher-hawkins.jpg" alt="Christopher Hawkins">
                                <h2>Christopher Hawkins</h2>
                            </a>
                            <a href="javascript:void(0)" class="site-link">christopherhawkins.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-1" data-toggle="modal">
                                <img src="/img/melyssa-griffin.jpg" alt="Melyssa Griffin">
                                <h2>Melyssa Griffin</h2>
                            </a>
                            <a href="javascript:void(0)" class="site-link">melyssagriffin.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-1" data-toggle="modal">
                                <img src="/img/melyssa-griffin.jpg" alt="Melyssa Griffin">
                                <h2>Melyssa Griffin</h2>
                            </a>
                            <a href="javascript:void(0)" class="site-link">melyssagriffin.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-1" data-toggle="modal">
                                <img src="/img/melyssa-griffin.jpg" alt="Melyssa Griffin">
                                <h2>Melyssa Griffin</h2>
                            </a>
                            <a href="javascript:void(0)" class="site-link">melyssagriffin.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of speakers section -->


    <!-- Description section -->

    <section class="conf-section gray-section description-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <header class="conf-header">
                        <p>
                            There's nothing inspirational than attending a conference, but unfortunately, not everyone
                            can take part in person. We've created Consulting People Conference - it is the easiest and
                            most affordable way to attend an event. We've put together a full day of talks from the best
                            minds in the consulting community, and we're streaming them directly to your home or office.
                        </p>
                    </header>
                </div>
            </div>
            <div class="description-points">
                <div class="points">
                    <div class="icon">
                        <i class="fa fa-television" aria-hidden="true"></i>
                    </div>
                    <h5>Keynote talks</h5>
                    <p>Hear creative and inspiring stories from our main stage on how to transform your day-to-day work
                        into work that has a life-changing impact on your customers.</p>
                </div>
                <div class="points">
                    <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <h5>Intimate workshops</h5>
                    <p>Throughout the weekend you’ll have the opportunity to choose between different workshops taught
                        by online business leaders in a more focused environment.</p>
                </div>
                <div class="points">
                    <div class="icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <h5>ConvertKit experts</h5>
                    <p>Ask questions about your email marketing and get help using ConvertKit genius-bar-style from our
                        team members onsite.</p>
                </div>
                <div class="points">
                    <div class="icon">
                        <i class="fa fa-glass" aria-hidden="true"></i>
                    </div>
                    <h5>Parties</h5>
                    <p>Join us to kick off the event and meet your fellow attendees on Friday night and make sure you’ve
                        made your rounds at our closing party on Sunday.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End of description section -->


    <!-- Pricing section -->

    <section class="conf-section price-section">
        <div class="container">
            <header class="conf-header">
                <img src="/img/pricing.png">
                <h2>Pricing</h2>
            </header>
            <div class="row">
                <div class="col-sm-4">
                    <div class="plans">
                        <div class="header">
                            <h4>Plan 1</h4>
                            <div class="price">
                                <span class="currency-symbol">$</span>500<span class="unit">/ Per Ticket</span>
                            </div>
                        </div>
                        <ul class="features">
                            <li>First Feature</li>
                            <li>First Feature</li>
                            <li>First Feature</li>
                            <li>First Feature</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="plans">
                        <div class="header">
                            <h4>Plan 2</h4>
                            <div class="price">
                                <span class="currency-symbol">$</span>600<span class="unit">/ Per Ticket</span>
                            </div>
                        </div>
                        <ul class="features">
                            <li>First Feature</li>
                            <li>First Feature</li>
                            <li>First Feature</li>
                            <li>First Feature</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="plans">
                        <div class="header">
                            <h4>Plan 3</h4>
                            <div class="price">
                                <span class="currency-symbol">$</span>800<span class="unit">/ Per Ticket</span>
                            </div>
                        </div>
                        <ul class="features">
                            <li>First Feature</li>
                            <li>First Feature</li>
                            <li>First Feature</li>
                            <li>First Feature</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of pricing section -->


    <!-- Slack BG Section> -->

    <section class="conf-section slack-section">
        <div class="container">
            <div class="container-fluid">
                <div class="col-md-5">
                    <header class="conf-header">
                        <img src="/img/slack.png">
                        <h2>Mingling</h2>
                    </header>
                    <p>Part of the excitement of Laracon is the chance to network and make new connections. For Laracon
                        Online, we’re creating a dedicated Slack room just for attendees which you can use before,
                        during, and after the event.</p>

                    <p>Discuss the talks as they happen, swap notes, and make new friends from around the globe.</p>
                </div>
            </div>
        </div>

    </section>

    <!-- End of slack BG section -->


    <!-- sponsor section -->

    <section class="conf-section sponsor-section">
        <div class="container">
            <header class="conf-header">
                <img src="/img/sponsors.png">
                <h2>Our Sponsors</h2>
            </header>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/facebook.png" alt="Facebook">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/wordpress.png" alt="Wordpress">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/blogger.png" alt="Blogger">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/amazon.png" alt="Amazon">
                        </div>
                    </div>

                    <div class="row last-row">
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/linkedin.png" alt="Linkedin">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/chrome.png" alt="Chrome">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/pinterest.png" alt="Pinterest">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/microsoft.png" alt="Microsoft">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End of sponsor section -->


    <!-- FAQ section -->

    <section class="conf-section faq-section gray-section">
        <div class="container">
            <header class="conf-header">
                <img src="/img/faq.png">
                <h2>FAQ</h2>
            </header>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="false" aria-controls="collapseOne">
                                        Will this be worth my money and time?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>
                                        This conference is specifically created to help people like you – freelancers,
                                        consultants, and agency owners – be inspired from fellow freelancers and
                                        educated by consultants to help grow your business. If learning how to become a
                                        better freelancer, consultant, or agency owner and starting long-lasting
                                        relationships with your clients is your objective, then the answer is yes!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Are you taking applications for speakers?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>
                                        No. We know you're great, but we also want to make sure that you get the best
                                        experience and actionable advice. We're carefully designing the schedule to be
                                        able to inspire and help you grow with an actionable plan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How will I watch the sessions?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>
                                        The sessions will be live streamed directly to your computer or laptop. You will
                                        get the access details a couple of days before the conference.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Are videos available for download?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>
                                        The short answer is yes.
                                    </p>
                                    <p>
                                        All session videos will be recorded for offline download after the conference.
                                        It may take a couple of days to a week to make them available for you, but we
                                        will make sure to have them ready as soon as possible.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of FAQ section -->


    <!-- Subscribe to newsletter section -->

    <section class="conf-section newsletter-section gray-section">
        <div class="container">
            <header class="conf-header">
                <img src="/img/subscribe.png">
                <h2>Subscribe To Our Newsletter</h2>
            </header>
            <div class="row">
                <div class="col-md-6 col-sm-10 mid-column">
                    <form role="form" novalidate="true">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                            <i class="fa fa-envelope-o"></i>
                            <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- End of subscribe to newsletter section -->

    <!-- Kai Davis Modal -->

    <div id="profile-1" class="modal speaker-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="container">

            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-close"></i></button>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="speaker-data">
                                    <img src="/img/kai-davis.jpg" alt="Kai Davis">
                                    <div class="data-title">
                                        <i class="fa fa-television" aria-hidden="true"></i>
                                        Main stage
                                    </div>
                                    <p>Sunday 25 June, 3:15pm</p>

                                    <a href="javascript:void(0)">
                                        Generating client referrals and repeat projects through outreach.
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>Kai Davis</h2>
                                <a href="javascript:void(0)" class="site-target" target="_blank">kaidavis.com</a>
                                <p></p>
                                <p>
                                    Kai Davis teaches Freelancers and Consultants how to get more clients without
                                    spending more money on marketing. He's an evangelist of the model of modern
                                    freelancing. Kai runs Double Your Audience, an Outreach Consulting Agency, helps
                                    authors and self-funded business owners reach through target audience through
                                    Digital Outreach.
                                </p>
                                <p>
                                    Kai sends out a DAILY email on marketing and consulting for freelancers at
                                    <a href="javascript:void(0)" class="" target="_blank">kaidavis.com</a>. You aren't
                                    alone any longer, fellow freelancer.
                                </p>
                                <p></p>
                                <div class="social-icons">
                                    <a href="javascript:void(0)" class="icon fb-icon" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="icon twitter-icon" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="icon insta-icon" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Sean D'Souza Modal -->

    <div id="profile-2" class="modal speaker-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="container">

            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-close"></i></button>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="speaker-data">
                                    <img src="/img/sean-dsouza.jpg" alt="Sean D'Souza">
                                    <div class="data-title">
                                        <i class="fa fa-television" aria-hidden="true"></i>
                                        Main stage
                                    </div>
                                    <p>Sunday 25 June, 3:15pm</p>

                                    <a href="javascript:void(0)">
                                        How To Get To Your Uniqueness For Your Consultancy/Freelancing Business.
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>Sean D'Souza</h2>
                                <a href="javascript:void(0)" class="site-target" target="_blank">psychotactics.com</a>
                                <p></p>
                                <p>
                                    Sean has always followed his dreams, putting in the effort required to achieve them.
                                    He was running a successful business as a freelance cartoonist in Mumbai, when he
                                    and his wife decided to embark on a completely new adventure – moving to beautiful
                                    New Zealand. Through relentless perseverance, springing out of bed at 4am, he once
                                    again built up a portfolio of delighted clients. Eventually he developed a
                                    three-pronged strategy that allows him to take three months off every year, while
                                    running the very successful website <a href="javascript:void(0)" class="site-target"
                                                                           target="_blank">psychotactics.com</a>.
                                </p>
                                <p></p>
                                <div class="social-icons">
                                    <a href="javascript:void(0)" class="icon fb-icon" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="icon twitter-icon" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="icon insta-icon" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Christopher Hawkins Modal -->

    <div id="profile-3" class="modal speaker-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="container">

            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-close"></i></button>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="speaker-data">
                                    <img src="/img/christopher-hawkins.jpg" alt="Christopher Hawkins">
                                    <div class="data-title">
                                        <i class="fa fa-television" aria-hidden="true"></i>
                                        Main stage
                                    </div>
                                    <p>Sunday 25 June, 3:15pm</p>

                                    <a href="javascript:void(0)">
                                        Offline Networking to increase your funnel
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>Christopher Hawkins</h2>
                                <a href="javascript:void(0)" class="site-target"
                                   target="_blank">christopherhawkins.com</a>
                                <p></p>
                                <p>
                                    Speaker Description
                                </p>
                                <p></p>
                                <div class="social-icons">
                                    <a href="javascript:void(0)" class="icon fb-icon" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="icon twitter-icon" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="icon insta-icon" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- End of speaker Modal -->


    <!-- Footer section -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p class="footer-links">
                        <a href="javascript:void(0)">Terms</a>
                        <a href="javascript:void(0)">Privacy</a>
                        <a href="javascript:void(0)">Blog</a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="copy-div">
                        <img src="/img/logo-nav.png" alt="Conference">
                    </div>
                    <p class="copy-text">© 2015 Conference. All rights reserved.</p>
                </div>
                <div class="col-sm-4">
                    <p class="footer-contact-head">Contact Us</p>
                    <ul class="social">
                        <li>
                            <a href="" data-toggle="modal" data-target="#modal-contact-form">
                                <i class="fa fa-envelope-o"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- End of footer section -->

</div>

<script type="text/javascript" src="/js/app.js"></script> <!-- compiled js -->

<script>
    /*
     Main JS file for writing our JS code.
     Author: Pankaj Patil
     */

    /* Javascript code will start function only after all the resources and assets of the site will load */

    $(window).on('load', function () {


        /* Navigation Functionality */

        $('.conf-nav li a').on('click', function () {
            var $this = $(this);
            $('.conf-nav li a').removeClass('active');
            var moveSection = $this.data('move');
            $('html, body').animate({
                scrollTop: $('.' + moveSection).offset().top - 73
            }, 1000);
            $this.addClass('active');
        })

        /* End of navigation functionality */


        /* Responsive header & animation */

        if ($(window).width() < 768) {
            $('.navbar-default').addClass('white-nav');
        } else {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 0) {
                    $('.navbar-default').addClass('white-nav');
                } else {
                    $('.navbar-default').removeClass('white-nav');
                }
            });
        }

        /* End of responsive header */


        /* IE 9 Support */

        function isIE() {
            var myNav = navigator.userAgent.toLowerCase();
            return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
        }

        if (isIE() == 9) {
            $('body').addClass('ie');
        }

        /* End of IE9 Support*/

    });

    /* End of window load function */

</script>
</body>
</html>