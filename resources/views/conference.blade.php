<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Freelancing Conference</title>
    <meta name="description" content="dione is a one page conference and event template"/>
    <meta name="keywords" content="dione, one page, conference, event"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- Loading Bootstrap CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Loading Font Icons -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Include all css plugins (below), or include individual files as needed -->
    <link href="/assets/css/flickity.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Main CSS -->
    <link href="/assets/css/dione_main.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/dione_style.css" rel="stylesheet" type="text/css">

    <!-- Color Skins CSS -->
    <link href="/assets/css/dione_color_blue.css" rel="stylesheet" type="text/css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 8]>
    <script src="/assets/js/modernizr.min.js"></script>
    <![endif]-->

    <!-— Facebook and Open Graph -->
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://freelancingpeople.com/conference"/>
    <meta property="og:title" content="An online conference for freelancers"/>
    <meta property="og:description"
          content="Want to close more clients? Freelancing Conf helps you learn a framework to get a continuous pipeline of leads."/>
    <meta property="og:image" content="{{asset('img/conference-landing-image.png')}}"/>

    <!-— Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" value="https://freelancingpeople.com"/>
    <meta name="twitter:title" value="An online conference for freelancers"/>
    <meta name="twitter:description"
          value="Want to close more clients? Freelancing Conf helps you learn a framework to get a continuous pipeline of leads."/>
    <meta name="twitter:image" content="{{asset('img/conference-landing-image.png')}}"/>
    <meta name="twitter:url" value="http://freelancingpeople.com/conference"/>

    @include('includes.pixel')
</head>

<body id="page-top">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Navigation Start -->
<nav id="navigation" class="navbar navbar-fixed-top navbar-white">
    <div class="container">
        <div class="row">
            <div class="navbar-header col-md-3">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-dione">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll font-family-alt letter-spacing-1 text-extra-large text-uppercase"
                   href="#page-top">
                    <img class="logo-navbar-dark" src="/assets/images/logo-text-white.png" alt=""/>
                    <img class="logo-navbar-white" src="/assets/images/logo-text-dark.png" alt=""/>
                </a>
            </div>
            <!-- //.navbar-header -->

            <div id="navbar-dione" class="navbar-collapse collapse col-md-9 pull-right">
                <ul class="nav navbar-nav font-family-alt letter-spacing-1 text-small text-uppercase">
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#venue" class="page-scroll">Venue</a></li>
                    <li><a href="#speakers" class="page-scroll">Speakers</a></li>
                    {{--<li><a href="#schedule" class="page-scroll">Schedule</a></li>--}}
                    <li><a href="#sessions" class="page-scroll">Sessions</a></li>
                    <li><a href="#ticket" class="page-scroll">Register</a></li>
                    <li><a href="#contact" class="page-scroll">Contact</a></li>
                </ul>
            </div>
            <!-- //.navbar-collapse -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</nav>
<!-- //Navigation End -->


<!-- Section - Home Start -->
<section id="home" class="bg-cover bg-gray-dark-2 bg-overlay-black-6 display-table height-100 no-padding width-100">
    <div class="display-table-cell vertical-align-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="display-block font-family-alt font-weight-700 letter-spacing-2 text-uppercase text-white xs-title-extra-large sm-title-extra-large-3 title-extra-large-5">
                        Freelancing<br>
                        Conference!
                    </h2>

                    <p class="font-family-alt letter-spacing-1 margin-3 no-margin-bottom no-margin-rl text-gray-light xs-text-large text-extra-large text-uppercase">
                        One amazing day of learning, growing and
                        <br>mingling with the Freelancing community.
                    </p>

                    <a href="#intro"
                       class="page-scroll btn btn-base-color sm-btn-medium btn-large margin-4-5 no-margin-bottom no-margin-rl">15
                        October 2017, Live Streaming</a>
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </div>
    <!-- //.display-table-cell -->
</section>
<!-- //Section - Home End -->


<!-- Countdown Start -->
<div id="countdown" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="countdown bg-white border border-gray-light border-round sm-no-padding-rl no-padding-rl sm-padding-5 padding-2-5 position-relative">
                    <div class="no-padding-tb padding-3-5">
                        <div class="row">
                            <div class="col-md-6" data-mh="mh-col-countdown">
                                <div class="display-table height-100 width-100">
                                    <div class="display-table-cell vertical-align-middle sm-text-center">
                                        <span class="display-block font-family-alt font-weight-700 letter-spacing-1 xs-text-extra-large title-medium text-uppercase">Save The Date. <span
                                                    class="text-decoration-underline text-base-color">15 Oct, 2017!</span></span>
                                        <span class="display-block font-family-alt margin-1 no-margin-bottom no-margin-rl text-large text-gray-dark">Book your place right now!</span>
                                    </div>
                                    <!-- //.display-table-cell -->
                                </div>
                                <!-- //.display-table -->
                            </div>
                            <!-- //.col-md-6 -->

                            <div class="col-md-6 sm-margin-4 sm-no-margin-bottom sm-no-margin-rl"
                                 data-mh="mh-col-countdown">
                                <div id="clock" data-until-date="2017/10/15" class="clock"></div>
                            </div>
                            <!-- //.col-md-6 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    <!-- //.no-padding-tb -->
                </div>
                <!-- //.countdown -->
            </div>
            <!-- //.col-md-10 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</div>
<!-- //Countdown End -->


<!-- Intro Start -->
<div id="intro" class="bg-white overflow-hidden position-relative width-100">
    <div class="container-fluid no-padding">
        <div class="row no-padding-rl xs-padding-6 padding-4">
            <div class="col-md-12 text-center">
                <span class="display-block font-family-alt letter-spacing-1 text-gray-dark-2 text-medium text-uppercase">2017 Freelancing Conference</span>
                <span class="display-block font-family-alt font-weight-700 letter-spacing-2 margin-1 no-margin-bottom text-gray-dark-2 text-uppercase xs-text-extra-large title-large">What You'll Discover:</span>
            </div>
            <!-- //.col-md-12 -->
        </div>
        <!-- //.row -->

        <div class="row">
            <!-- Features Box Style v1 Start -->
            <div class="features-box col-md-4 no-padding text-center">
                <div class="bg-cover bg-overlay-black-4 overflow-hidden position-relative">
                    <div class="height-100 position-absolute position-top position-left width-100">
                        <div class="display-table height-100 width-100">
                            <div class="display-table-cell text-center vertical-align-middle">
                                <span class="display-block font-family-alt letter-spacing-2 text-medium text-uppercase text-white">6 Amazing Speakers</span>
                            </div>
                            <!-- //.display-table-cell -->
                        </div>
                        <!-- //.display-table -->
                    </div>
                    <!-- //.height-100 -->
                </div>
                <!-- //.bg-cover -->
            </div>
            <!-- //Features Box Style v1 End -->

            <!-- Features Box Style v1 Start -->
            <div class="features-box col-md-4 no-padding text-center">
                <div class="bg-cover bg-overlay-black-4 overflow-hidden position-relative">
                    <div class="height-100 position-absolute position-top position-left width-100">
                        <div class="display-table height-100 width-100">
                            <div class="display-table-cell text-center vertical-align-middle">
                                <span class="display-block font-family-alt letter-spacing-2 text-medium text-uppercase text-white">Enjoy The Party</span>
                            </div>
                            <!-- //.display-table-cell -->
                        </div>
                        <!-- //.display-table -->
                    </div>
                    <!-- //.height-100 -->
                </div>
                <!-- //.bg-cover -->
            </div>
            <!-- //Features Box Style v1 End -->

            <!-- Features Box Style v1 Start -->
            <div class="features-box col-md-4 no-padding text-center">
                <div class="bg-cover bg-overlay-black-4 overflow-hidden position-relative">
                    <div class="height-100 position-absolute position-top position-left width-100">
                        <div class="display-table height-100 width-100">
                            <div class="display-table-cell text-center vertical-align-middle">
                                <span class="display-block font-family-alt letter-spacing-2 text-medium text-uppercase text-white">Experiences Only at FreelancingConf</span>
                            </div>
                            <!-- //.display-table-cell -->
                        </div>
                        <!-- //.display-table -->
                    </div>
                    <!-- //.height-100 -->
                </div>
                <!-- //.bg-cover -->
            </div>
            <!-- //Features Box Style v1 End -->
        </div>
        <!-- //.row -->

        <div class="row border-bottom no-padding-rl sm-padding-6 padding-2">
            <div class="col-md-12 text-center">
                <span class="display-inline-block font-family-alt text-medium text-gray-dark-2">Special early bird offers on the first 50 tickets sold - <span
                            class="text-base-color">This month only</span>.</span>
            </div>
            <!-- //.col-md-12 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container-fluid -->
</div>
<!-- //Intro End -->


<!-- Section - About Start -->
<section id="about" class="bg-white-2">
    <div class="container">
        <div class="row no-padding-rl no-padding-top padding-8">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3 class="font-family-alt font-weight-700 letter-spacing-2 text-uppercase xs-title-small title-medium title-sideline-base-color">
                    About This Event</h3>
                <p class="font-family-alt margin-3 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">
                    FreelancingConf gives actionable advice, period. You'll leave with a framework ready in your hands
                    which can be put into action the next moment.
                </p>
            </div>
            <!-- //.col-md-8 -->
        </div>
        <!-- //.row -->

        <div class="row">
            <div class="col-md-5 xs-text-center">
                <p class="font-family-alt text-extra-large">Join us for a day of interactive sessions, workshops,
                    and best practices that will keep you looking ahead.</p>
                <p class="margin-5-5 no-margin-bottom no-margin-rl text-large text-gray-dark-2">Attend sessions and
                    interact with other freelancers and consultants. Whether you're in home or tuning in from around
                    the office, the experience is going to be thrilling for everyone. The event is bigger
                    than ever - with 6 amazing speakers, interactive experiences and the opportunity to meet
                    one-on-one with the leaders who are shaping the future of freelancing.</p>
                <a href="https://www.tickettailor.com/checkout/view-event/id/97243/chk/cf13" target="_blank"
                   class="page-scroll btn btn-outline-black btn-medium margin-6-5 no-margin-bottom no-margin-rl">Grab Your Seat</a>
            </div>
            <!-- //.col-md-5 -->

            <div class="col-md-6 col-md-offset-1">
                <div class="row">
                    <div class="col-sm-6 xs-margin-10 sm-margin-5 xs-no-margin-bottom sm-no-margin-bottom xs-no-margin-rl sm-no-margin-rl xs-text-center">
                        <i class="fa fa-map-marker display-block text-base-color title-extra-large-2"></i>
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">Location</span>
                        <p class="margin-3 no-margin-bottom no-margin-rl text-large text-gray-dark-2">
                            At your Home<br>
                            At your Office<br>
                            It's streaming LIVE
                        </p>
                    </div>
                    <!-- //.col-md-6 -->

                    <div class="col-sm-6 sm-margin-5 sm-no-margin-bottom sm-no-margin-rl xs-text-center">
                        <i class="fa fa-bullhorn display-block text-base-color title-extra-large-2"></i>
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">Speakers</span>
                        <p class="margin-3 no-margin-bottom no-margin-rl text-large text-gray-dark-2">
                            <strong>6</strong> Professsional Speakers:<br>
                            Kai, Christopher, Mojca, Jane, Philip, Sean...
                        </p>
                    </div>
                    <!-- //.col-md-6 -->

                    <div class="col-sm-6 margin-5 no-margin-bottom no-margin-rl xs-text-center">
                        <i class="fa fa-clock-o display-block text-base-color title-extra-large-2"></i>
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">Date & Time</span>
                        <p class="margin-3 no-margin-bottom no-margin-rl text-large text-gray-dark-2">
                            October 15th, 2017<br>
                            Time: TBD
                        </p>
                    </div>
                    <!-- //.col-md-6 -->

                    <div class="col-sm-6 margin-5 no-margin-bottom no-margin-rl xs-text-center">
                        <i class="fa fa-coffee display-block text-base-color title-extra-large-2"></i>
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">Sponsors</span>
                        <p class="margin-3 no-margin-bottom no-margin-rl text-large text-gray-dark-2">
                            The Consulting and Freelancing Club
                        </p>
                    </div>
                    <!-- //.col-md-6 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.col-md-6 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</section>
<!-- //Section - About End -->


<!-- Section - Venue Start -->
<section id="venue" class="bg-cover bg-overlay-black-5 display-table height-100 no-padding width-100">
    <div class="display-table-cell vertical-align-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="bg-white border-round padding-13 position-relative">
                        <h3 class="font-family-alt font-weight-700 letter-spacing-2 text-uppercase xs-title-small title-medium title-sideline-base-color">
                            Venue</h3>
                        <span class="display-block font-family-alt margin-4-5 no-margin-bottom no-margin-rl text-base-color title-small">Online, Live Streaming</span>
                        <p class="margin-4-5 no-margin-bottom no-margin-rl text-large text-gray-dark-2">
                            There's nothing like attending a conference in person, but unfortunately, everyone of us
                            cannot make it to wonderful conferences around the world. We've curated a very special
                            experience for YOU. You'll get to experience every exciting aspect of a conference -
                            mingling with fellow attendees, swag, discussions with speakers, parties and lastly tons of
                            actionable advice to grow your freelancing business.
                        </p>
                        <a href="https://www.tickettailor.com/checkout/view-event/id/97243/chk/cf13"
                           class="btn btn-outline-black btn-medium margin-7 no-margin-bottom no-margin-rl"
                           target="_blank">Book Tickets</a>
                    </div>
                    <!-- //.bg-white -->
                </div>
                <!-- //.col-md-5 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </div>
    <!-- //.display-table-cell -->
</section>
<!-- //Section - Venue End -->


<!-- Section - Speakers Start -->
<section id="speakers" class="bg-white-3">
    <div class="container">
        <div class="row no-padding-rl no-padding-top padding-8">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3 class="font-family-alt font-weight-700 letter-spacing-2 text-uppercase xs-title-small title-medium title-sideline-base-color">
                    Event Speakers</h3>
                <p class="font-family-alt margin-3 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">Know about
                    the speakers. Learn from the specialists who are consistently making $100K+ revenue every year from their consulting business.</p>
            </div>
            <!-- //.col-md-8 -->
        </div>
        <!-- //.row -->

        <div class="row">
            <!-- Features Box Style v2 Start -->
            <div class="features-box col-sm-6 col-md-4 xs-margin-4-5 xs-no-margin-bottom xs-no-margin-rl">
                <div class="overflow-hidden position-relative width-100">
                    <div class="position-relative">
                        <img src="/assets/images/christopher-hawkins.jpg" alt=""/>
                        <span class="bg-base-color display-inline-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom text-extra-small text-uppercase text-white">CEO, Founder</span>
                    </div>
                    <!-- //.position-relative -->

                    <div class="bg-gray-light no-padding-rl padding-6 position-relative text-center">
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-2 text-gray-dark-2 text-small text-uppercase">Christopher Hawkins</span>
                    </div>
                    <!-- //.bg-gray-light -->

                    <div class="ease height-100 padding-2 position-absolute position-top position-left show-on-hover width-100">
                        <div class="bg-base-color height-100 width-100">
                            <div class="display-table height-100 width-100">
                                <div class="display-table-cell no-padding-tb padding-11 vertical-align-middle">
                                    <span class="display-block font-family-alt letter-spacing-2 text-medium text-uppercase text-white">Christopher Hawkins</span>
                                    <span class="display-block font-family-alt letter-spacing-1 text-small text-uppercase text-white">CEO, Founder</span>
                                    <p class="margin-6 no-margin-bottom no-margin-rl text-medium text-white">
                                        Chris quickly built a 6-figure practice that provides consulting and web
                                        development for businesses of every size, from Fortune 500s on down. He
                                        writes extensively on the software consulting industry, and hosts the $100K
                                        Freelancing show
                                    </p>
                                </div>
                                <!-- //.display-table-cell -->
                            </div>
                            <!-- //.display-table -->
                        </div>
                        <!-- //.bg-base-color -->
                    </div>
                    <!-- //.ease -->
                </div>
                <!-- //.overflow-hidden -->
            </div>
            <!-- //Features Box Style v2 End -->

            <!-- Features Box Style v2 Start -->
            <div class="features-box col-sm-6 col-md-4 xs-margin-4-5 xs-no-margin-bottom xs-no-margin-rl">
                <div class="overflow-hidden position-relative width-100">
                    <div class="position-relative">
                        <img src="/assets/images/kai-davis.jpg" alt=""/>
                        <span class="bg-base-color display-inline-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom text-extra-small text-uppercase text-white">Outreach Consultant</span>
                    </div>
                    <!-- //.position-relative -->

                    <div class="bg-gray-light no-padding-rl padding-6 position-relative text-center">
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-2 text-gray-dark-2 text-small text-uppercase">Kai Davis</span>
                    </div>
                    <!-- //.bg-gray-light -->

                    <div class="ease height-100 padding-2 position-absolute position-top position-left show-on-hover width-100">
                        <div class="bg-base-color height-100 width-100">
                            <div class="display-table height-100 width-100">
                                <div class="display-table-cell no-padding-tb padding-11 vertical-align-middle">
                                    <span class="display-block font-family-alt letter-spacing-2 text-medium text-uppercase text-white">Kai Davis</span>
                                    <span class="display-block font-family-alt letter-spacing-1 text-small text-uppercase text-white">Outreach Consultant</span>
                                    <p class="margin-6 no-margin-bottom no-margin-rl text-medium text-white">
                                        Kai Davis is an evangelist of the model of modern freelancing. Kai runs Double
                                        Your Audience, an Outreach Consulting Agency, helps authors and self-funded
                                        business owners reach to target audience through Digital Outreach.
                                    </p>
                                </div>
                                <!-- //.display-table-cell -->
                            </div>
                            <!-- //.display-table -->
                        </div>
                        <!-- //.bg-base-color -->
                    </div>
                    <!-- //.ease -->
                </div>
                <!-- //.overflow-hidden -->
            </div>
            <!-- //Features Box Style v2 End -->

            <!-- Features Box Style v2 Start -->
            <div class="features-box col-sm-6 col-md-4 sm-margin-4-5 sm-no-margin-bottom sm-no-margin-rl">
                <div class="overflow-hidden position-relative width-100">
                    <div class="position-relative">
                        <img src="/assets/images/sean-dsouza.jpg" alt=""/>
                        <span class="bg-base-color display-inline-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom text-extra-small text-uppercase text-white">Brain Auditor</span>
                    </div>
                    <!-- //.position-relative -->

                    <div class="bg-gray-light no-padding-rl padding-6 position-relative text-center">
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-2 text-gray-dark-2 text-small text-uppercase">Sean D'Souza</span>
                    </div>
                    <!-- //.bg-gray-light -->

                    <div class="ease height-100 padding-2 position-absolute position-top position-left show-on-hover width-100">
                        <div class="bg-base-color height-100 width-100">
                            <div class="display-table height-100 width-100">
                                <div class="display-table-cell no-padding-tb padding-11 vertical-align-middle">
                                    <span class="display-block font-family-alt letter-spacing-2 text-medium text-uppercase text-white">Sean D'Souza</span>
                                    <span class="display-block font-family-alt letter-spacing-1 text-small text-uppercase text-white">Brain Auditor</span>
                                    <p class="margin-6 no-margin-bottom no-margin-rl text-medium text-white">
                                        Through relentless perseverance, springing out of bed at 4am, Sean has
                                        built up a portfolio of delighted clients. Eventually he developed a
                                        three-pronged strategy that allows him to take three months off every year,
                                        while running the very successful website psychotactics.com.
                                    </p>
                                </div>
                                <!-- //.display-table-cell -->
                            </div>
                            <!-- //.display-table -->
                        </div>
                        <!-- //.bg-base-color -->
                    </div>
                    <!-- //.ease -->
                </div>
                <!-- //.overflow-hidden -->
            </div>
            <!-- //Features Box Style v2 End -->

            <!-- Features Box Style v2 Start -->
            <div class="features-box col-sm-6 col-md-4 sm-margin-4-5 margin-3 sm-no-margin-bottom no-margin-bottom sm-no-margin-rl no-margin-rl">
                <div class="overflow-hidden position-relative width-100">
                    <div class="position-relative">
                        <img src="/assets/images/mojca-mars.jpg" alt=""/>
                        <span class="bg-base-color display-inline-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom text-extra-small text-uppercase text-white">Social Media Consultant</span>
                    </div>
                    <!-- //.position-relative -->

                    <div class="bg-gray-light no-padding-rl padding-6 position-relative text-center">
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-2 text-gray-dark-2 text-small text-uppercase">Mojca Mars</span>
                    </div>
                    <!-- //.bg-gray-light -->

                    <div class="ease height-100 padding-2 position-absolute position-top position-left show-on-hover width-100">
                        <div class="bg-base-color height-100 width-100">
                            <div class="display-table height-100 width-100">
                                <div class="display-table-cell no-padding-tb padding-11 vertical-align-middle">
                                    <span class="display-block font-family-alt letter-spacing-2 text-medium text-uppercase text-white">Mojca Mars</span>
                                    <span class="display-block font-family-alt letter-spacing-1 text-small text-uppercase text-white">Social Media Consultant</span>
                                    <p class="margin-6 no-margin-bottom no-margin-rl text-medium text-white">
                                        Mojca's work focuses on helping businesses generate more leads and increase
                                        profits with Facebook Advertising. She’s currently working with
                                        multimillion-dollar companies from around the globe, developing marketing
                                        funnels and implementing them to FB Ad Ecosystem.
                                    </p>
                                </div>
                                <!-- //.display-table-cell -->
                            </div>
                            <!-- //.display-table -->
                        </div>
                        <!-- //.bg-base-color -->
                    </div>
                    <!-- //.ease -->
                </div>
                <!-- //.overflow-hidden -->
            </div>
            <!-- //Features Box Style v2 End -->

            <!-- Features Box Style v2 Start -->
            <div class="features-box col-sm-6 col-md-4 sm-margin-4-5 margin-3 sm-no-margin-bottom no-margin-bottom sm-no-margin-rl no-margin-rl">
                <div class="overflow-hidden position-relative width-100">
                    <div class="position-relative">
                        <img src="/assets/images/philip-morgan.jpg" alt=""/>
                        <span class="bg-base-color display-inline-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom text-extra-small text-uppercase text-white">Positioning Consultant</span>
                    </div>
                    <!-- //.position-relative -->

                    <div class="bg-gray-light no-padding-rl padding-6 position-relative text-center">
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-2 text-gray-dark-2 text-small text-uppercase">Philip Morgan</span>
                    </div>
                    <!-- //.bg-gray-light -->

                    <div class="ease height-100 padding-2 position-absolute position-top position-left show-on-hover width-100">
                        <div class="bg-base-color height-100 width-100">
                            <div class="display-table height-100 width-100">
                                <div class="display-table-cell no-padding-tb padding-11 vertical-align-middle">
                                    <span class="display-block font-family-alt letter-spacing-2 text-medium text-uppercase text-white">Philip Morgan</span>
                                    <span class="display-block font-family-alt letter-spacing-1 text-small text-uppercase text-white">Positioning Consultant</span>
                                    <p class="margin-6 no-margin-bottom no-margin-rl text-medium text-white">
                                        Philip Morgan teaches self-employed software developers how to identify,
                                        validate, and dominate a desirable niche market position. He's also the author
                                        of The Positioning Manual for Technical Firms.
                                    </p>
                                </div>
                                <!-- //.display-table-cell -->
                            </div>
                            <!-- //.display-table -->
                        </div>
                        <!-- //.bg-base-color -->
                    </div>
                    <!-- //.ease -->
                </div>
                <!-- //.overflow-hidden -->
            </div>
            <!-- //Features Box Style v2 End -->

            <!-- Features Box Style v2 Start -->
            <div class="features-box col-sm-6 col-md-4 sm-margin-4-5 margin-3 sm-no-margin-bottom no-margin-bottom sm-no-margin-rl no-margin-rl">
                <div class="overflow-hidden position-relative width-100">
                    <div class="position-relative">
                        <img src="/assets/images/jane-portman.jpg" alt=""/>
                        <span class="bg-base-color display-inline-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom text-extra-small text-uppercase text-white">UI/UX Consultant</span>
                    </div>
                    <!-- //.position-relative -->

                    <div class="bg-gray-light no-padding-rl padding-6 position-relative text-center">
                        <span class="display-block font-family-alt font-weight-700 letter-spacing-2 text-gray-dark-2 text-small text-uppercase">Jane Portman</span>
                    </div>
                    <!-- //.bg-gray-light -->

                    <div class="ease height-100 padding-2 position-absolute position-top position-left show-on-hover width-100">
                        <div class="bg-base-color height-100 width-100">
                            <div class="display-table height-100 width-100">
                                <div class="display-table-cell no-padding-tb padding-11 vertical-align-middle">
                                    <span class="display-block font-family-alt letter-spacing-2 text-medium text-uppercase text-white">Jane Portman</span>
                                    <span class="display-block font-family-alt letter-spacing-1 text-small text-uppercase text-white">UI/UX Consultant</span>
                                    <p class="margin-6 no-margin-bottom no-margin-rl text-medium text-white">
                                        Jane is an independent UI/UX consultant from Russia who helps software companies build focused, profitable web applications. Her favorite topics include productized consulting, product strategy, and action-driven consulting websites. "Start building your own platform as early as possible," — Jane recommends.
                                    </p>
                                </div>
                                <!-- //.display-table-cell -->
                            </div>
                            <!-- //.display-table -->
                        </div>
                        <!-- //.bg-base-color -->
                    </div>
                    <!-- //.ease -->
                </div>
                <!-- //.overflow-hidden -->
            </div>
            <!-- //Features Box Style v2 End -->

        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</section>
<!-- //Section - Speakers End -->


<!-- Section - Schedule Start -->
{{--<section id="schedule" class="bg-white">--}}
    {{--<div class="container">--}}
        {{--<div class="row no-padding-rl no-padding-top padding-8">--}}
            {{--<div class="col-md-8 col-md-offset-2 text-center">--}}
                {{--<h3 class="font-family-alt font-weight-700 letter-spacing-2 text-uppercase xs-title-small title-medium title-sideline-base-color">--}}
                    {{--Event Schedule</h3>--}}
                {{--<p class="font-family-alt margin-3 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">Have a--}}
                    {{--look at the game plan. Lorem Ipsum is simply dummy text of the printing<br>and typesetting industry.--}}
                    {{--Lorem Ipsum has been.</p>--}}
            {{--</div>--}}
            {{--<!-- //.col-md-8 -->--}}
        {{--</div>--}}
        {{--<!-- //.row -->--}}

        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
                {{--<span class="display-inline-block font-family-alt font-weight-700 letter-spacing-1 text-extra-large text-uppercase title-underline-thick-base-color">What you'll learn:</span>--}}

                {{--<ul class="nav nav-tabs font-family-alt font-weight-700 display-block letter-spacing-1 sm-margin-5 margin-9 no-border sm-no-margin-bottom no-margin-bottom sm-no-margin-rl no-margin-rl text-uppercase"--}}
                    {{--role="tablist">--}}
                    {{--<li role="presentation" class="active">--}}
                        {{--<a href="#day-1" aria-controls="day-1" role="tab" data-toggle="tab"--}}
                           {{--class="border-gray-light no-border-radius no-border-right no-margin">Day 1</a>--}}
                    {{--</li>--}}
                    {{--<li role="presentation">--}}
                        {{--<a href="#day-2" aria-controls="day-2" role="tab" data-toggle="tab"--}}
                           {{--class="border-gray-light no-border-radius no-border-right no-margin">Day 2</a>--}}
                    {{--</li>--}}
                    {{--<li role="presentation">--}}
                        {{--<a href="#day-3" aria-controls="day-3" role="tab" data-toggle="tab"--}}
                           {{--class="border-gray-light no-border-radius no-margin">Day 3</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}

                {{--<div class="tab-content">--}}
                    {{--<div role="tabpanel" class="tab-pane fade active in" id="day-1">--}}
                        {{--<table class="table table-bordered table-striped margin-8 no-margin-rl">--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 1</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">The economics of design <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Ridwan Kamil.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 2</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Become a better design leader with competitive analysis <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Sandiaga Uno.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 3</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">The agile design team maturity scale <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Sarah Sechan.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 4</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Designing and engineering better teams to build better products <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Nirina Zubir.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 5</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Why you should design to develop <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Mona Ratuliu.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 6</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Dear client, We need to talk <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Najwa Sihab.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 7</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">VR, AR, and MR: Designing the new reality experience <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Taufik Hidayat.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 8</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">The 7 principles of empowered freelancers <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Anisa Bahar.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                    {{--<!-- //.tab-pane -->--}}

                    {{--<div role="tabpanel" class="tab-pane fade" id="day-2">--}}
                        {{--<table class="table table-bordered table-striped margin-8 no-margin-rl">--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 9</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Why developers should learn design <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Agnes Monika.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 10</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">A framework for designing a better user onboarding experience <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Roby Purba.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 11</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Freelancing with depression <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Chairil Tanjung.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 12</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Where has the creativity gone in web (and UX) design? <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Suci Mentari.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 13</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Rebranding a SaaS startup <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Ridwan Kamil.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 14</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Designing and engineering better teams to build better products <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Sandiaga Uno.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 15</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">How to write a case study that wins you clients <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Sarah Sechan.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 16</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">The right way to pitch your app to investors <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Nirina Zubir.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                    {{--<!-- //.tab-pane -->--}}

                    {{--<div role="tabpanel" class="tab-pane fade" id="day-3">--}}
                        {{--<table class="table table-bordered table-striped margin-8 no-margin-rl">--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 17</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">To design digital experiences that matter, design for the 5 senses <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Mona Ratuliu.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 18</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Should you hire for culture fit? <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Najwa Sihab.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 19</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Creating design-driven data visualization <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Taufik Hidayat.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 20</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Figuring out UX flow for better team cooperation <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Anisa Bahar.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 21</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">The creative part of UI design: Adding characters and style <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Agnes Monika.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 22</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Designing innovation inside your company <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Roby Purba.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 23</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">So you want to work for a startup <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Chairil Tanjung.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td-session-number sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-medium text-gray-dark-2">Session 24</span>--}}
                                {{--</td>--}}
                                {{--<td class="sm-padding-2 padding-4"><span--}}
                                            {{--class="display-block font-family-alt text-gray-dark-2 text-medium text-uppercase">Designing innovation inside your company <span--}}
                                                {{--class="text-gray-dark text-small text-transform-none">by Suci Mentari.</span></span>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                    {{--<!-- //.tab-pane -->--}}
                {{--</div>--}}
                {{--<!-- //.tab-content -->--}}
            {{--</div>--}}
            {{--<!-- //.col-md-4 -->--}}

            {{--<div class="col-md-7 col-md-offset-1">--}}
                {{--<div class="row carousel-schedule">--}}
                    {{--<div class="carousel-cell col-md-12">--}}
                        {{--<div class="position-relative">--}}
                            {{--<div class="position-relative">--}}
                                {{--<span class="display-block font-family-alt font-weight-700 letter-spacing-1 text-extra-large text-uppercase">Conference Day 1</span>--}}
                                {{--<span class="display-block margin-1 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">Tuesday, July 25, 2017</span>--}}
                                {{--<span class="bg-base-color margin-3 no-margin-bottom no-margin-rl separator-line-thick"></span>--}}
                            {{--</div>--}}
                            {{--<!-- //.position-relative -->--}}

                            {{--<div class="timeline sm-margin-5 margin-10 sm-no-margin-bottom no-margin-bottom sm-no-margin-rl no-margin-rl position-relative">--}}
                                {{--<span class="timeline-label bg-base-color border-round display-inline-block font-family-alt letter-spacing-1 padding-tb-9px padding-rl-13px text-extra-small text-uppercase text-white">Schedules</span>--}}

                                {{--<ul class="border-left border-gray-light list-unstyled position-relative">--}}
                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">08:15 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Doors Open & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">09:00 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 1: <span class="text-gray-dark-2 text-uppercase">The economics of design</span> <span--}}
                                                        {{--class="text-small">by Ridwan Kamil</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">09:45 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 2: <span class="text-gray-dark-2 text-uppercase">Become a better design leader with competitive analysis</span> <span--}}
                                                        {{--class="text-small">by Sandiaga Uno</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">10:30 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Break & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">10:50 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 3: <span class="text-gray-dark-2 text-uppercase">The agile design team maturity scale</span> <span--}}
                                                        {{--class="text-small">by Sarah Sechan</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">11:35 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 4: <span class="text-gray-dark-2 text-uppercase">Designing and engineering better teams to build better products</span> <span--}}
                                                        {{--class="text-small">by Nirina Zubir</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">12:30 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Lunch.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">02:50 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 5: <span class="text-gray-dark-2 text-uppercase">Why you should design to develop</span> <span--}}
                                                        {{--class="text-small">by Mona Ratuliu</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">02:45 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 6: <span class="text-gray-dark-2 text-uppercase">Dear client, We need to talk</span> <span--}}
                                                        {{--class="text-small">by Najwa Sihab</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">03:30 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Break & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">03:50 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 7: <span class="text-gray-dark-2 text-uppercase">VR, AR, and MR: Designing the new reality experience</span> <span--}}
                                                        {{--class="text-small">by Taufik Hidayat</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">04:35 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 8: <span class="text-gray-dark-2 text-uppercase">The 7 principles of empowered freelancers</span> <span--}}
                                                        {{--class="text-small">by Anisa Bahar</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">05:30 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">After Party & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<!-- //.timeline -->--}}
                        {{--</div>--}}
                        {{--<!-- //.position-relative -->--}}
                    {{--</div>--}}
                    {{--<!-- //.carousel-cell -->--}}

                    {{--<div class="carousel-cell col-md-12">--}}
                        {{--<div class="position-relative">--}}
                            {{--<div class="position-relative">--}}
                                {{--<span class="display-block font-family-alt font-weight-700 letter-spacing-1 text-extra-large text-uppercase">Conference Day 2</span>--}}
                                {{--<span class="display-block margin-1 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">Wednesday, July 26, 2017</span>--}}
                                {{--<span class="bg-base-color margin-3 no-margin-bottom no-margin-rl separator-line-thick"></span>--}}
                            {{--</div>--}}
                            {{--<!-- //.position-relative -->--}}

                            {{--<div class="timeline sm-margin-5 margin-10 sm-no-margin-bottom no-margin-bottom sm-no-margin-rl no-margin-rl position-relative">--}}
                                {{--<span class="timeline-label bg-base-color border-round display-inline-block font-family-alt letter-spacing-1 padding-tb-9px padding-rl-13px text-extra-small text-uppercase text-white">Schedules</span>--}}

                                {{--<ul class="border-left border-gray-light list-unstyled position-relative">--}}
                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">08:15 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Doors Open & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">09:00 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 9: <span class="text-gray-dark-2 text-uppercase">Why developers should learn design</span> <span--}}
                                                        {{--class="text-small">by Agnes Monika</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">09:45 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 10: <span class="text-gray-dark-2 text-uppercase">A framework for designing a better user onboarding experience</span> <span--}}
                                                        {{--class="text-small">by Roby Purba</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">10:30 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Break & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">10:50 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 11: <span class="text-gray-dark-2 text-uppercase">Freelancing with depression</span> <span--}}
                                                        {{--class="text-small">by Chairil Tanjung</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">11:35 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 12: <span class="text-gray-dark-2 text-uppercase">Where has the creativity gone in web (and UX) design?</span> <span--}}
                                                        {{--class="text-small">by Suci Mentari</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">12:30 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Lunch.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">02:50 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 13: <span class="text-gray-dark-2 text-uppercase">Rebranding a SaaS startup</span> <span--}}
                                                        {{--class="text-small">by Ridwan Kamil</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">02:45 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 14: <span class="text-gray-dark-2 text-uppercase">Designing and engineering better teams to build better products</span> <span--}}
                                                        {{--class="text-small">by Sandiaga Uno</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">03:30 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Break & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">03:50 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 15: <span class="text-gray-dark-2 text-uppercase">How to write a case study that wins you clients</span> <span--}}
                                                        {{--class="text-small">by Sarah Sechan</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">04:35 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 16: <span class="text-gray-dark-2 text-uppercase">The right way to pitch your app to investors</span> <span--}}
                                                        {{--class="text-small">by Nirina Zubir</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">05:30 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">After Party & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<!-- //.timeline -->--}}
                        {{--</div>--}}
                        {{--<!-- //.position-relative -->--}}
                    {{--</div>--}}
                    {{--<!-- //.carousel-cell -->--}}

                    {{--<div class="carousel-cell col-md-12">--}}
                        {{--<div class="position-relative">--}}
                            {{--<div class="position-relative">--}}
                                {{--<span class="display-block font-family-alt font-weight-700 letter-spacing-1 text-extra-large text-uppercase">Conference Day 3</span>--}}
                                {{--<span class="display-block margin-1 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">Thursday, July 27, 2017</span>--}}
                                {{--<span class="bg-base-color margin-3 no-margin-bottom no-margin-rl separator-line-thick"></span>--}}
                            {{--</div>--}}
                            {{--<!-- //.position-relative -->--}}

                            {{--<div class="timeline sm-margin-5 margin-10 sm-no-margin-bottom no-margin-bottom sm-no-margin-rl no-margin-rl position-relative">--}}
                                {{--<span class="timeline-label bg-base-color border-round display-inline-block font-family-alt letter-spacing-1 padding-tb-9px padding-rl-13px text-extra-small text-uppercase text-white">Schedules</span>--}}

                                {{--<ul class="border-left border-gray-light list-unstyled position-relative">--}}
                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">08:15 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Doors Open & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">09:00 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 17: <span class="text-gray-dark-2 text-uppercase">To design digital experiences that matter, design for the 5 senses</span> <span--}}
                                                        {{--class="text-small">by Mona Ratuliu</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">09:45 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 18: <span class="text-gray-dark-2 text-uppercase">Should you hire for culture fit?</span> <span--}}
                                                        {{--class="text-small">by Najwa Sihab</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">10:30 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Break & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">10:50 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 19: <span class="text-gray-dark-2 text-uppercase">Creating design-driven data visualization</span> <span--}}
                                                        {{--class="text-small">by Taufik Hidayat</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">11:35 AM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 20: <span class="text-gray-dark-2 text-uppercase">Figuring out UX flow for better team cooperation</span> <span--}}
                                                        {{--class="text-small">by Anisa Bahar</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">12:30 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Lunch.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">02:50 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 21: <span class="text-gray-dark-2 text-uppercase">The creative part of UI design: Adding characters and style</span> <span--}}
                                                        {{--class="text-small">by Agnes Monika</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">02:45 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 22: <span class="text-gray-dark-2 text-uppercase">Designing innovation inside your company</span> <span--}}
                                                        {{--class="text-small">by Roby Purba</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">03:30 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">Break & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">03:50 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 23: <span class="text-gray-dark-2 text-uppercase">So you want to work for a startup</span> <span--}}
                                                        {{--class="text-small">by Chairil Tanjung</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item highlight position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">04:35 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">--}}
                                                    {{--Session 24: <span class="text-gray-dark-2 text-uppercase">Designing innovation inside your company</span> <span--}}
                                                        {{--class="text-small">by Suci Mentari</span>.--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}

                                    {{--<li class="timeline-item position-relative">--}}
                                        {{--<div class="timeline-content bg-white border border-gray-light border-round display-block">--}}
                                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark text-small">05:30 PM</span>--}}
                                            {{--<span class="display-block font-family-alt text-medium text-gray-dark-2">After Party & Mingling.</span>--}}
                                        {{--</div>--}}
                                        {{--<!-- //.timeline-content -->--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<!-- //.timeline -->--}}
                        {{--</div>--}}
                        {{--<!-- //.position-relative -->--}}
                    {{--</div>--}}
                    {{--<!-- //.carousel-cell -->--}}
                {{--</div>--}}
                {{--<!-- //.row -->--}}
            {{--</div>--}}
            {{--<!-- //.col-md-7 -->--}}
        {{--</div>--}}
        {{--<!-- //.row -->--}}
    {{--</div>--}}
    {{--<!-- //.container -->--}}
{{--</section>--}}
<!-- //Section - Schedule End -->


<!-- Milestones Start -->
<div id="milestones" class="bg-cover bg-overlay-black-6 no-padding-rl padding-9">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 border-right border-white xs-margin-7 xs-no-border text-center">
                <span class="timer display-block font-family-alt font-weight-700 letter-spacing-1 text-white sm-title-large title-extra-large-2"
                      data-from="0" data-to="6" data-speed="1500">6</span>
                <span class="display-inline-block font-family-alt letter-spacing-2 margin-3 no-margin-bottom no-margin-rl text-extra-large text-uppercase text-white title-sideline-base-color">Speakers</span>
            </div>
            <!-- //.col-sm-3 -->

            <div class="col-sm-3 border-right border-white xs-margin-7 xs-no-border text-center">
                <span class="timer display-block font-family-alt font-weight-700 letter-spacing-1 text-white sm-title-large title-extra-large-2"
                      data-from="0" data-to="9" data-speed="1500">9</span>
                <span class="display-inline-block font-family-alt letter-spacing-2 margin-3 no-margin-bottom no-margin-rl text-extra-large text-uppercase text-white title-sideline-base-color">Hours</span>
            </div>
            <!-- //.col-sm-3 -->

            <div class="col-sm-3 border-right border-white xs-margin-7 xs-no-border text-center">
                <span class="timer display-block font-family-alt font-weight-700 letter-spacing-1 text-white sm-title-large title-extra-large-2"
                      data-from="0" data-to="100" data-speed="100">100</span>
                <span class="display-inline-block font-family-alt letter-spacing-2 margin-3 no-margin-bottom no-margin-rl text-extra-large text-uppercase text-white title-sideline-base-color">Attendees</span>
            </div>
            <!-- //.col-sm-3 -->

            <div class="col-sm-3 xs-margin-7 text-center">
                <span class="timer display-block font-family-alt font-weight-700 letter-spacing-1 text-white sm-title-large title-extra-large-2"
                      data-from="0" data-to="1" data-speed="1500">1</span>
                <span class="display-inline-block font-family-alt letter-spacing-2 margin-3 no-margin-bottom no-margin-rl text-extra-large text-uppercase text-white title-sideline-base-color">Sponsor</span>
            </div>
            <!-- //.col-sm-3 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</div>
<!-- //Milestones End -->


<!-- Section - Hotels Start -->
<section id="sessions" class="bg-white">
    <div class="container">
        <div class="row no-padding-rl no-padding-top padding-8">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3 class="font-family-alt font-weight-700 letter-spacing-2 text-uppercase xs-title-small title-medium title-sideline-base-color">
                    Sessions</h3>
                <p class="font-family-alt margin-3 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">
                    A variety of sessions covering exciting topics to help you grow your freelancing business. Get ready
                    to learn about an actionable framework and earn $100K in 2018.
            </div>
            <!-- //.col-md-8 -->
        </div>
        <!-- //.row -->

        <div class="row">
            <!-- Features Box Style v3 Start -->
            <div class="features-box col-sm-6 col-md-4">
                <div class="border border-gray-light border-round box-shadow-yes position-relative"
                     data-mh="mh-features-box-v3">
                    <div class="display-table height-100 no-padding-rl padding-7 width-100">
                        <div class="display-table-cell no-padding-tb padding-8 vertical-align-middle">
                            <a href="#" class="text-black"><span
                                        class="display-block font-family-alt font-weight-700 letter-spacing-1 text-large text-uppercase">
                                    Offline Networking to Get More Leads
                                </span></a>
                            <span class="bg-base-color display-inline-block margin-3 no-margin-bottom no-margin-rl separator-line-thick"></span>
                            <span class="display-block margin-2 no-margin-bottom no-margin-rl text-medium text-gray-dark-2"></span>
                        </div>
                        <!-- //.display-table-cell -->
                    </div>
                    <!-- //.display-table -->

                    <span class="bg-base-color border-round display-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom position-right text-extra-small text-uppercase text-white">
                        Christopher Hawkins</span>
                </div>
                <!-- //.border -->
            </div>
            <!-- //Features Box Style v3 End -->

            <!-- Features Box Style v3 Start -->
            <div class="features-box col-sm-6 col-md-4 xs-margin-3 xs-no-margin-bottom xs-no-margin-rl">
                <div class="border border-gray-light border-round box-shadow-yes position-relative"
                     data-mh="mh-features-box-v3">
                    <div class="display-table height-100 no-padding-rl padding-7 width-100">
                        <div class="display-table-cell no-padding-tb padding-8 vertical-align-middle">
                            <a href="#" class="text-black"><span
                                        class="display-block font-family-alt font-weight-700 letter-spacing-1 text-large text-uppercase">
                                    Generating Client referrals and repeat projects through outreach.
                                </span></a>
                            <span class="bg-base-color display-inline-block margin-3 no-margin-bottom no-margin-rl separator-line-thick"></span>
                            <span class="display-block margin-2 no-margin-bottom no-margin-rl text-medium text-gray-dark-2"></span>
                        </div>
                        <!-- //.display-table-cell -->
                    </div>
                    <!-- //.display-table -->

                    <span class="bg-base-color border-round display-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom position-right text-extra-small text-uppercase text-white">Kai Davis</span>
                </div>
                <!-- //.border -->
            </div>
            <!-- //Features Box Style v3 End -->

            <!-- Features Box Style v3 Start -->
            <div class="features-box col-sm-6 col-md-4 sm-margin-3 sm-no-margin-bottom sm-no-margin-rl">
                <div class="border border-gray-light border-round box-shadow-yes position-relative"
                     data-mh="mh-features-box-v3">
                    <div class="display-table height-100 no-padding-rl padding-7 width-100">
                        <div class="display-table-cell no-padding-tb padding-8 vertical-align-middle">
                            <a href="#" class="text-black"><span
                                        class="display-block font-family-alt font-weight-700 letter-spacing-1 text-large text-uppercase">
                                    How To Get To Your Uniqueness For Your Freelancing Business.
                                </span></a>
                            <span class="bg-base-color display-inline-block margin-3 no-margin-bottom no-margin-rl separator-line-thick"></span>
                            <span class="display-block margin-2 no-margin-bottom no-margin-rl text-medium text-gray-dark-2"></span>
                        </div>
                        <!-- //.display-table-cell -->
                    </div>
                    <!-- //.display-table -->

                    <span class="bg-base-color border-round display-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom position-right text-extra-small text-uppercase text-white">Sean D'Souza</span>
                </div>
                <!-- //.border -->
            </div>
            <!-- //Features Box Style v3 End -->

            <!-- Features Box Style v3 Start -->
            <div class="features-box col-sm-6 col-md-4 margin-3 no-margin-bottom no-margin-rl">
                <div class="border border-gray-light border-round box-shadow-yes position-relative"
                     data-mh="mh-features-box-v3">
                    <div class="display-table height-100 no-padding-rl padding-7 width-100">
                        <div class="display-table-cell no-padding-tb padding-8 vertical-align-middle">
                            <a href="#" class="text-black"><span
                                        class="display-block font-family-alt font-weight-700 letter-spacing-1 text-large text-uppercase">
                                    Supercharge Your Lead Generation With Facebook Ads
                                </span></a>
                            <span class="bg-base-color display-inline-block margin-3 no-margin-bottom no-margin-rl separator-line-thick"></span>
                            <span class="display-block margin-2 no-margin-bottom no-margin-rl text-medium text-gray-dark-2"></span>
                        </div>
                        <!-- //.display-table-cell -->
                    </div>
                    <!-- //.display-table -->

                    <span class="bg-base-color border-round display-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom position-right text-extra-small text-uppercase text-white">Mojca Mars</span>
                </div>
                <!-- //.border -->
            </div>
            <!-- //Features Box Style v3 End -->

            <!-- Features Box Style v3 Start -->
            <div class="features-box col-sm-6 col-md-4 margin-3 no-margin-bottom no-margin-rl">
                <div class="border border-gray-light border-round box-shadow-yes position-relative"
                     data-mh="mh-features-box-v3">
                    <div class="display-table height-100 no-padding-rl padding-7 width-100">
                        <div class="display-table-cell no-padding-tb padding-8 vertical-align-middle">
                            <a href="#" class="text-black"><span
                                        class="display-block font-family-alt font-weight-700 letter-spacing-1 text-large text-uppercase">
                                    Positioning your Freelancing Business
                                </span></a>
                            <span class="bg-base-color display-inline-block margin-3 no-margin-bottom no-margin-rl separator-line-thick"></span>
                            <span class="display-block margin-2 no-margin-bottom no-margin-rl text-medium text-gray-dark-2"></span>
                        </div>
                        <!-- //.display-table-cell -->
                    </div>
                    <!-- //.display-table -->

                    <span class="bg-base-color border-round display-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom position-right text-extra-small text-uppercase text-white">Philip Morgan</span>
                </div>
                <!-- //.border -->
            </div>
            <!-- //Features Box Style v3 End -->

            <!-- Features Box Style v3 Start -->
            <div class="features-box col-sm-6 col-md-4 margin-3 no-margin-bottom no-margin-rl">
                <div class="border border-gray-light border-round box-shadow-yes position-relative"
                     data-mh="mh-features-box-v3">
                    <div class="display-table height-100 no-padding-rl padding-7 width-100">
                        <div class="display-table-cell no-padding-tb padding-8 vertical-align-middle">
                            <a href="#" class="text-black"><span
                                        class="display-block font-family-alt font-weight-700 letter-spacing-1 text-large text-uppercase">
                                    Productizing Your Consulting Business
                                </span></a>
                            <span class="bg-base-color display-inline-block margin-3 no-margin-bottom no-margin-rl separator-line-thick"></span>
                            <span class="display-block margin-2 no-margin-bottom no-margin-rl text-medium text-gray-dark-2"></span>
                        </div>
                        <!-- //.display-table-cell -->
                    </div>
                    <!-- //.display-table -->

                    <span class="bg-base-color border-round display-block font-family-alt letter-spacing-1 margin-4 padding-tb-9px padding-rl-13px position-absolute position-bottom position-right text-extra-small text-uppercase text-white">Jane Portman</span>
                </div>
                <!-- //.border -->
            </div>
            <!-- //Features Box Style v3 End -->

        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</section>
<!-- //Section - Hotels End -->


<!-- Section - Gallery Start -->
{{--<section id="gallery" class="bg-white-3">--}}
    {{--<div class="container">--}}
        {{--<div class="row no-padding-rl no-padding-top padding-8">--}}
            {{--<div class="col-md-8 col-md-offset-2 text-center">--}}
                {{--<h3 class="font-family-alt font-weight-700 letter-spacing-2 text-uppercase xs-title-small title-medium title-sideline-base-color">--}}
                    {{--Photo Gallery</h3>--}}
                {{--<p class="font-family-alt margin-3 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">Lorem--}}
                    {{--Ipsum is simply dummy text of the dione conference and event<br>template. Lorem Ipsum has been the--}}
                    {{--industry's standard.</p>--}}
            {{--</div>--}}
            {{--<!-- //.col-md-8 -->--}}
        {{--</div>--}}
        {{--<!-- //.row -->--}}

        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="gallery-wrapper">--}}
                    {{--<div class="gallery-grid grid-col-3 gutter-wide">--}}
                        {{--<div class="item">--}}
                            {{--<figure>--}}
                                {{--<div class="gallery-img">--}}
                                    {{--<a href="/assets/images/gallery-1.jpg">--}}
                                        {{--<img src="/assets/images/gallery-1.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- //.gallery-img -->--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<!-- //.item -->--}}

                        {{--<div class="item">--}}
                            {{--<figure>--}}
                                {{--<div class="gallery-img">--}}
                                    {{--<a href="/assets/images/gallery-2.jpg">--}}
                                        {{--<img src="/assets/images/gallery-2.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- //.gallery-img -->--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<!-- //.item -->--}}

                        {{--<div class="item">--}}
                            {{--<figure>--}}
                                {{--<div class="gallery-img">--}}
                                    {{--<a href="/assets/images/gallery-3.jpg">--}}
                                        {{--<img src="/assets/images/gallery-3.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- //.gallery-img -->--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<!-- //.item -->--}}

                        {{--<div class="item">--}}
                            {{--<figure>--}}
                                {{--<div class="gallery-img">--}}
                                    {{--<a href="/assets/images/gallery-4.jpg">--}}
                                        {{--<img src="/assets/images/gallery-4.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- //.gallery-img -->--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<!-- //.item -->--}}

                        {{--<div class="item">--}}
                            {{--<figure>--}}
                                {{--<div class="gallery-img">--}}
                                    {{--<a href="/assets/images/gallery-5.jpg">--}}
                                        {{--<img src="/assets/images/gallery-5.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- //.gallery-img -->--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<!-- //.item -->--}}

                        {{--<div class="item">--}}
                            {{--<figure>--}}
                                {{--<div class="gallery-img">--}}
                                    {{--<a href="/assets/images/gallery-6.jpg">--}}
                                        {{--<img src="/assets/images/gallery-6.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- //.gallery-img -->--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<!-- //.item -->--}}

                        {{--<div class="item">--}}
                            {{--<figure>--}}
                                {{--<div class="gallery-img">--}}
                                    {{--<a href="/assets/images/gallery-7.jpg">--}}
                                        {{--<img src="/assets/images/gallery-7.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- //.gallery-img -->--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<!-- //.item -->--}}

                        {{--<div class="item">--}}
                            {{--<figure>--}}
                                {{--<div class="gallery-img">--}}
                                    {{--<a href="/assets/images/gallery-8.jpg">--}}
                                        {{--<img src="/assets/images/gallery-8.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- //.gallery-img -->--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<!-- //.item -->--}}

                        {{--<div class="item">--}}
                            {{--<figure>--}}
                                {{--<div class="gallery-img">--}}
                                    {{--<a href="/assets/images/gallery-9.jpg">--}}
                                        {{--<img src="/assets/images/gallery-9.jpg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- //.gallery-img -->--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<!-- //.item -->--}}
                    {{--</div>--}}
                    {{--<!-- //.gallery-grid -->--}}
                {{--</div>--}}
                {{--<!-- //.gallery-wrapper -->--}}
            {{--</div>--}}
            {{--<!-- //.col-md-12 -->--}}
        {{--</div>--}}
        {{--<!-- //.row -->--}}
    {{--</div>--}}
    {{--<!-- //.container -->--}}
{{--</section>--}}
<!-- //Section - Gallery End -->


<!-- Section - FAQ Start -->
<section id="faq" class="bg-white">
    <div class="container">
        <div class="row no-padding-rl no-padding-top padding-8">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3 class="font-family-alt font-weight-700 letter-spacing-2 text-uppercase xs-title-small title-medium title-sideline-base-color">
                    FAQ</h3>
                <p class="font-family-alt margin-3 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">Here is a
                    list of answers to frequently asked questions about the conference.</p>
            </div>
            <!-- //.col-md-8 -->
        </div>
        <!-- //.row -->

        <div class="row">
            <div class="col-sm-4 margin-5 no-margin-rl no-margin-top">
                <ul class="nav nav-pills nav-stacked font-family-alt font-weight-700 display-block letter-spacing-2 margin-3 sm-no-margin no-margin-left no-margin-tb text-small text-uppercase"
                    role="tablist">
                    <li role="presentation" class="active no-margin">
                        <a href="#tab-one" aria-controls="tab-one" role="tab" data-toggle="tab"
                           class="border border-gray-light no-border-bottom no-border-radius" aria-expanded="false">01.
                            General FAQ</a>
                    </li>
                    <li role="presentation" class="no-margin">
                        <a href="#tab-two" aria-controls="tab-two" role="tab" data-toggle="tab"
                           class="border border-gray-light no-border-radius" aria-expanded="false">02. Registration</a>
                    </li>
                </ul>
            </div>
            <!-- //.col-sm-4 -->

            <div class="col-sm-8">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab-one">
                        <!-- Accordion Start -->
                        <div class="panel-group position-relative" id="accordion-one" role="tablist">
                            <div class="panel active" role="tab" id="accordion-one-heading-1">
                                <div class="panel-heading ease">
                                    <div class="panel-title display-block">
                                        <a class="font-family-alt font-weight-700 letter-spacing-2 text-small text-uppercase"
                                           role="button" data-toggle="collapse" data-parent="#accordion-one"
                                           href="#accordion-one-collapse-1" aria-controls="accordion-one-collapse-1">When
                                            will the conference program details be announced?</a>
                                    </div>
                                    <!-- //.panel-title -->
                                </div>
                                <!-- //.panel-heading -->

                                <div id="accordion-one-collapse-1" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="accordion-one-heading-1">
                                    <div class="panel-body">
                                        <p class="text-gray-dark-2 text-large">
                                            The speakers and sessions are confirmed and available on the website. The exact
                                            schedule with timings will be live by 15th July.
                                        </p>
                                    </div>
                                    <!-- //.panel-body -->
                                </div>
                                <!-- //.panel-collapse -->
                            </div>
                            <!-- //.panel -->

                            <div class="panel" role="tab" id="accordion-one-heading-2">
                                <div class="panel-heading ease">
                                    <div class="panel-title display-block">
                                        <a class="collapsed font-family-alt font-weight-700 letter-spacing-2 text-small text-uppercase"
                                           role="button" data-toggle="collapse" data-parent="#accordion-one"
                                           href="#accordion-one-collapse-2" aria-controls="accordion-one-collapse-2">
                                            How do I view the sessions online?</a>
                                    </div>
                                    <!-- //.panel-title -->
                                </div>
                                <!-- //.panel-heading -->

                                <div id="accordion-one-collapse-2" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="accordion-one-heading-2">
                                    <div class="panel-body">
                                        <p class="text-gray-dark-2 text-large">
                                            You will receive an e-mail with the details at-least 15 days before the conference.
                                        </p>
                                    </div>
                                    <!-- //.panel-body -->
                                </div>
                                <!-- //.panel-collapse -->
                            </div>
                            <!-- //.panel -->

                            <div class="panel" role="tab" id="accordion-one-heading-4">
                                <div class="panel-heading ease">
                                    <div class="panel-title display-block">
                                        <a class="collapsed font-family-alt font-weight-700 letter-spacing-2 text-small text-uppercase"
                                           role="button" data-toggle="collapse" data-parent="#accordion-one"
                                           href="#accordion-one-collapse-4" aria-controls="accordion-one-collapse-4">Are
                                            video of speakers available for download?</a>
                                    </div>
                                    <!-- //.panel-title -->
                                </div>
                                <!-- //.panel-heading -->

                                <div id="accordion-one-collapse-4" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="accordion-one-heading-4">
                                    <div class="panel-body">
                                        <p class="text-gray-dark-2 text-large">
                                            Yes, you can download the videos after the conference. You will get detailed
                                            instructions for the same after 15th October.
                                        </p>
                                    </div>
                                    <!-- //.panel-body -->
                                </div>
                                <!-- //.panel-collapse -->
                            </div>
                            <!-- //.panel -->

                            <div class="panel" role="tab" id="accordion-one-heading-5">
                                <div class="panel-heading ease">
                                    <div class="panel-title display-block">
                                        <a class="collapsed font-family-alt font-weight-700 letter-spacing-2 text-small text-uppercase"
                                           role="button" data-toggle="collapse" data-parent="#accordion-one"
                                           href="#accordion-one-collapse-5" aria-controls="accordion-one-collapse-5">How
                                            do you select speakers for the conference?</a>
                                    </div>
                                    <!-- //.panel-title -->
                                </div>
                                <!-- //.panel-heading -->

                                <div id="accordion-one-collapse-5" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="accordion-one-heading-5">
                                    <div class="panel-body">
                                        <p class="text-gray-dark-2 text-large">We want to make sure that you get the best
                                            experience and actionable advice. We have carefully designed the schedule to
                                            be able to inspire and help you grow with an actionable plan. The speakers
                                            are leaders from the freelancing industry who have consistently made $100K+
                                            in yearly revenue</p>
                                    </div>
                                    <!-- //.panel-body -->
                                </div>
                                <!-- //.panel-collapse -->
                            </div>
                            <!-- //.panel -->
                        </div>
                        <!-- //Accordion End -->
                    </div>
                    <!-- //.tab-pane -->

                    <div role="tabpanel" class="tab-pane fade" id="tab-two">
                        <!-- Accordion Start -->
                        <div class="panel-group position-relative" id="accordion-two" role="tablist">
                            <div class="panel active" role="tab" id="accordion-two-heading-1">
                                <div class="panel-heading ease">
                                    <div class="panel-title display-block">
                                        <a class="font-family-alt font-weight-700 letter-spacing-2 text-small text-uppercase"
                                           role="button" data-toggle="collapse" data-parent="#accordion-two"
                                           href="#accordion-two-collapse-1" aria-controls="accordion-two-collapse-1">Can
                                            we get a discount for group registrations?</a>
                                    </div>
                                    <!-- //.panel-title -->
                                </div>
                                <!-- //.panel-heading -->

                                <div id="accordion-two-collapse-1" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="accordion-two-heading-1">
                                    <div class="panel-body">
                                        <p class="text-gray-dark-2 text-large">At this time, there are no discounted
                                            group rates for the Freelancing Conference.</p>
                                    </div>
                                    <!-- //.panel-body -->
                                </div>
                                <!-- //.panel-collapse -->
                            </div>
                            <!-- //.panel -->

                            <div class="panel" role="tab" id="accordion-two-heading-2">
                                <div class="panel-heading ease">
                                    <div class="panel-title display-block">
                                        <a class="collapsed font-family-alt font-weight-700 letter-spacing-2 text-small text-uppercase"
                                           role="button" data-toggle="collapse" data-parent="#accordion-two"
                                           href="#accordion-two-collapse-2" aria-controls="accordion-two-collapse-2">Can
                                            I register by mail?</a>
                                    </div>
                                    <!-- //.panel-title -->
                                </div>
                                <!-- //.panel-heading -->

                                <div id="accordion-two-collapse-2" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="accordion-two-heading-2">
                                    <div class="panel-body">
                                        <p class="text-gray-dark-2 text-large">At this moment, you cannot register by mail. If you want to use Paypal, please send an e-mail to viraj@freelancingpeople.com</p>
                                    </div>
                                    <!-- //.panel-body -->
                                </div>
                                <!-- //.panel-collapse -->
                            </div>
                            <!-- //.panel -->

                            <div class="panel" role="tab" id="accordion-two-heading-4">
                                <div class="panel-heading ease">
                                    <div class="panel-title display-block">
                                        <a class="collapsed font-family-alt font-weight-700 letter-spacing-2 text-small text-uppercase"
                                           role="button" data-toggle="collapse" data-parent="#accordion-two"
                                           href="#accordion-two-collapse-4" aria-controls="accordion-two-collapse-4">Do
                                            you offer any comp registrations?</a>
                                    </div>
                                    <!-- //.panel-title -->
                                </div>
                                <!-- //.panel-heading -->

                                <div id="accordion-two-collapse-4" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="accordion-two-heading-4">
                                    <div class="panel-body">
                                        <p class="text-gray-dark-2 text-large">We do not offer complimentary
                                            registrations to anyone.</p>
                                    </div>
                                    <!-- //.panel-body -->
                                </div>
                                <!-- //.panel-collapse -->
                            </div>
                            <!-- //.panel -->
                        </div>
                        <!-- //Accordion End -->
                    </div>
                    <!-- //.tab-pane -->
                </div>
                <!-- //.tab-content -->
            </div>
            <!-- //.col-sm-8 -->
        </div>
        <!-- //.row -->

        <div class="row margin-6 no-margin-bottom no-margin-rl">
            <div class="col-md-10 col-md-offset-1 text-center">
                <p class="font-weight-300 title-extra-large">If you still have unanswered questions after reading this
                    page, please <a href="#contact" class="page-scroll display-inline-block title-underline-base-color">contact
                        us</a>.</p>
            </div>
            <!-- //.col-md-10 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</section>
<!-- //Section - FAQ End -->


<!-- Section - Ticket Start -->
<section id="ticket" class="bg-white-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-7">
                <h2 class="font-family-alt sm-title-large title-extra-large-2 text-gray-dark-2">Great speakers with
                    great topics. Join with us!</h2>
                <span class="bg-base-color margin-6-5 no-margin-bottom no-margin-rl separator-line-extra-thick-long"></span>
                <p class="font-family-alt margin-5-5 no-margin-bottom no-margin-rl sm-text-large text-extra-large text-gray-dark-2">
                    Freelancing Conference is one of its kind but it’s also exclusive. If you haven't been to a conference, this is a great chance to do it. I'm sure
                    you'll love it and you'll be enjoying your time here. We have amazing talks lined up for
                    everyone. Great speakers with great topics. Don't make late, join with us!
                </p>

                <div class="testimonial margin-6 no-margin-bottom no-margin-rl">
                    <div class="bg-white border border-gray-light border-round padding-5 width-100">
                        <p class="no-margin text-gray-dark- text-large">
                            This conference is
                            specifically created to help amazing entrepreneurs like you – consultants, freelancers, and
                            agencies.
                        </p>
                    </div>
                    <!-- //.bg-white -->

                    <div class="testimonial-avatar position-relative">
                        <img src="/assets/images/profile.jpg" alt=""/>

                        <div class="testimonial-avatar-label">
                            <div class="display-table height-100">
                                <div class="display-table-cell vertical-align-middle">
                                    <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-medium text-uppercase">Viraj Khatavkar</span>
                                    <span class="margin-3 no-margin-bottom no-margin-rl text-medium text-gray-dark-2">Founder, Organizer</span>
                                </div>
                                <!-- //.display-table-cell -->
                            </div>
                            <!-- //.display-table -->
                        </div>
                        <!-- //.testimonial-avatar-label -->
                    </div>
                    <!-- //.testimonial-avatar -->
                </div>
                <!-- //.testimonial -->
            </div>
            <!-- //.col-sm-6 -->

            <div class="col-sm-6 col-md-4 col-md-offset-1 xs-margin-8 xs-no-margin-bottom xs-no-margin-rl">
                <div class="pricing bg-white border border-gray-light border-round box-shadow-yes ease position-relative">
                    <span class="bg-base-color border-round display-block font-family-alt letter-spacing-1 margin-6 padding-tb-9px padding-rl-13px position-absolute position-top position-right text-extra-small text-uppercase text-white">Hot</span>

                    <div class="display-table height-100 no-padding-tb padding-13 width-100">
                        <div class="display-table-cell no-padding-rl padding-18 text-center vertical-align-middle">
                            <span class="display-block font-family-alt letter-spacing-1 text-gray-dark-2 text-large text-uppercase">Early Bird</span>

                            <span class="display-block font-family-alt margin-11 no-letter-spacing no-margin-bottom no-margin-rl text-gray-dark-2 title-extra-large-4">
                                    <span class="pricing-dollar position-relative title-large">$</span>50
                                </span>

                            <span class="bg-gray-light-2 margin-10-5 no-margin-bottom no-margin-rl separator-line-full"></span>

                            <ul class="list-unstyled margin-11 no-margin-bottom no-margin-rl text-gray-dark2 text-large text-left">
                                <li class="check-mark">6 Actionable Sessions</li>
                                <li class="check-mark">Live Streaming Access</li>
                                <li class="check-mark">Offline Recordings of Each Session</li>
                                <li class="check-mark">Access to Private Slack Channel</li>
                                <li class="check-mark">Q&A with speakers on Slack</li>
                                <li class="check-mark">Sponsor swag (Discount coupons, extended trials, etc)</li>
                                <li class="check-mark">Surprise Gift!!!</li>
                            </ul>

                            <p class="margin-11 no-margin-bottom no-margin-rl text-gray-dark-2 text-medium">Ticket
                                prices are $50.00 if you reserve by 30th August, otherwise general admission will cost
                                $75.00.</p>
                        </div>
                        <!-- //.display-table-cell -->
                    </div>
                    <!-- //.display-table -->

                    <a href="https://www.tickettailor.com/checkout/view-event/id/97243/chk/cf13" target="_blank"
                       class="page-scroll btn btn-base-color btn-large display-block letter-spacing-2 text-small width-100">Purchase
                        Ticket</a>
                </div>
                <!-- //.pricing -->
            </div>
            <!-- //.col-sm-6 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</section>
<!-- //Section - Ticket End -->


<!-- Section - Sponsors Start -->
{{--<section id="sponsors" class="bg-white">--}}
    {{--<div class="container">--}}
        {{--<div class="row no-padding-rl no-padding-top padding-8">--}}
            {{--<div class="col-md-8 col-md-offset-2 text-center">--}}
                {{--<h3 class="font-family-alt font-weight-700 letter-spacing-2 text-uppercase xs-title-small title-medium title-sideline-base-color">--}}
                    {{--Sponsors</h3>--}}
                {{--<p class="font-family-alt margin-3 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">Dione--}}
                    {{--Conference wouldn't be possible without our amazing sponsors. Lorem<br>Ipsum is simply dummy text of--}}
                    {{--the printing and typesetting.</p>--}}
            {{--</div>--}}
            {{--<!-- //.col-md-8 -->--}}
        {{--</div>--}}
        {{--<!-- //.row -->--}}

        {{--<div class="row">--}}
            {{--<div class="col-md-10 col-md-offset-1">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-6 col-sm-4 text-center">--}}
                        {{--<img width="200" src="/assets/images/sponsor-1.png" alt=""/>--}}
                    {{--</div>--}}
                    {{--<!-- //.col-xs-6 -->--}}

                    {{--<div class="col-xs-6 col-sm-4 xs-margin-3 xs-no-margin-bottom xs-no-margin-rl text-center">--}}
                        {{--<img width="200" src="/assets/images/sponsor-2.png" alt=""/>--}}
                    {{--</div>--}}
                    {{--<!-- //.col-xs-6 -->--}}

                    {{--<div class="col-xs-6 col-sm-4 xs-margin-3 xs-no-margin-bottom xs-no-margin-rl text-center">--}}
                        {{--<img width="200" src="/assets/images/sponsor-3.png" alt=""/>--}}
                    {{--</div>--}}
                    {{--<!-- //.col-xs-6 -->--}}

                    {{--<div class="col-xs-6 col-sm-4 margin-3 no-margin-bottom no-margin-rl text-center">--}}
                        {{--<img width="200" src="/assets/images/sponsor-4.png" alt=""/>--}}
                    {{--</div>--}}
                    {{--<!-- //.col-xs-6 -->--}}

                    {{--<div class="col-xs-6 col-sm-4 margin-3 no-margin-bottom no-margin-rl text-center">--}}
                        {{--<img width="200" src="/assets/images/sponsor-5.png" alt=""/>--}}
                    {{--</div>--}}
                    {{--<!-- //.col-xs-6 -->--}}

                    {{--<div class="col-xs-6 col-sm-4 margin-3 no-margin-bottom no-margin-rl text-center">--}}
                        {{--<img width="200" src="/assets/images/sponsor-6.png" alt=""/>--}}
                    {{--</div>--}}
                    {{--<!-- //.col-xs-6 -->--}}
                {{--</div>--}}
                {{--<!-- //.row -->--}}
            {{--</div>--}}
            {{--<!-- //.col-md-10 -->--}}
        {{--</div>--}}
        {{--<!-- //.row -->--}}
    {{--</div>--}}
    {{--<!-- //.container -->--}}
{{--</section>--}}
<!-- //Section - Sponsors End -->


<!-- Section - Register Start -->
<section id="register" class="bg-cover bg-overlay-black-6">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-7 xs-text-center">
                <span class="display-block font-family-alt letter-spacing-1 opacity-9 margin-7 no-margin-bottom no-margin-rl text-white text-medium text-uppercase">Register Now and Guarantee Your Seat!</span>
                <h2 class="display-block font-family-alt font-weight-700 letter-spacing-2 margin-5 no-margin-bottom no-margin-rl text-white xs-title-medium title-extra-large-3 text-uppercase">
                    Don't Hesitate<br>Book Your Place<br>Right Now!</h2>
                <span class="bg-base-color display-inline-block margin-5-5 no-margin-rl separator-line-medium-thick-long"></span>
            </div>
            <!-- //.col-sm-6 -->

            <div class="col-sm-6 col-md-7 text-center">
                <div class="form-wrapper border-round padding-8">
                        <a id="btn-form-register" target="_blank" href="https://www.tickettailor.com/checkout/view-event/id/97243/chk/cf13" class="btn btn-base-color btn-medium">Book Now
                        </a>
                </div>
                <!-- //.form-wrapper -->
            </div>
            <!-- //.col-sm-6 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</section>
<!-- //Section - Register End -->


<!-- Section - Contact Start -->
<section id="contact" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                {{--<h3 class="display-block font-weight-300 letter-spacing-1 title-large">157 Sunset Road<br>Cikampek--}}
                    {{--Utara, Jawa Barat</h3>--}}

                <div class="margin-5 no-margin-bottom no-margin-rl">
                    <div class="display-inline-block margin-7 no-margin-left no-margin-tb">
                        <i class="fa fa-envelope-o display-block text-base-color xs-title-large title-extra-large-2"></i>
                        <span class="display-block margin-5 no-margin-bottom no-margin-rl text-gray-dark-2 xs-text-large title-small">viraj@freelancingpeople.com
                            </span>
                    </div>
                    <!-- //.display-inline-block -->

                    {{--<div class="display-inline-block">--}}
                        {{--<i class="fa fa-phone display-block text-base-color xs-title-large title-extra-large-2"></i>--}}
                        {{--<span class="display-block margin-5 no-margin-bottom no-margin-rl text-gray-dark-2 xs-text-large title-small">P: +0264 123 4567</span>--}}
                    {{--</div>--}}
                    <!-- //.display-inline-block -->
                </div>
                <!-- //.margin-5 -->

                <p class="margin-5 no-margin-bottom no-margin-rl text-gray-dark-2 title-small">Drop us an e-mail
                    anytime, we endeavour to answer all enquiries<br>within 24 hours on business days.</p>
                {{--<p class="margin-5 no-margin-bottom no-margin-rl text-gray-dark-2 title-small">We are open from 8.30 AM--}}
                    {{--— 4.00 PM week days.</p>--}}
            </div>
            <!-- //.col-md-8 -->
        </div>
        <!-- //.row -->

        {{--<div class="row">--}}
            {{--<div class="col-md-10 col-md-offset-1">--}}
                {{--<span class="bg-gray-light-2 margin-7 no-margin-bottom no-margin-rl separator-line-full"></span>--}}

                {{--<form action="contact/send_mail.php" method="post" id="form-contact"--}}
                      {{--class="margin-8 no-margin-bottom no-margin-rl">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6" data-mh="mh-col-contact">--}}
                            {{--<input type="text" placeholder="Your Name" name="name" class="required">--}}
                            {{--<input type="text" placeholder="Your Email" name="email" class="required email">--}}
                        {{--</div>--}}
                        {{--<!-- //.col-md-6 -->--}}

                        {{--<div class="col-md-6" data-mh="mh-col-contact">--}}
                            {{--<textarea placeholder="Your Message" name="message" class="required"></textarea>--}}
                        {{--</div>--}}
                        {{--<!-- //.col-md-6 -->--}}
                    {{--</div>--}}
                    {{--<!-- //.row -->--}}

                    {{--<div class="row">--}}
                        {{--<div class="col-md-6">--}}
                            {{--<span class="display-block font-family-alt letter-spacing-1 text-gray-dark-2 text-small text-uppercase">*Please complete all fields correctly</span>--}}
                        {{--</div>--}}
                        {{--<!-- //.col-md-6 -->--}}

                        {{--<div class="col-md-6">--}}
                            {{--<button id="btn-form-contact" type="submit" class="btn btn-base-color btn-medium">Send--}}
                                {{--Message--}}
                            {{--</button>--}}
                        {{--</div>--}}
                        {{--<!-- //.col-md-6 -->--}}
                    {{--</div>--}}
                    {{--<!-- //.row -->--}}
                {{--</form>--}}
            {{--</div>--}}
            {{--<!-- //.col-md-10 -->--}}
        {{--</div>--}}
        <!-- //.row -->
    </div>
    <!-- //.container -->
</section>
<!-- //Section - Contact End -->


<!-- Footer Start -->
<footer class="footer bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="footer-logo xs-text-center">
                    <img src="/assets/images/logo-text-dark.png" alt="" class="opacity-4">
                </div>
                <!-- //.footer-logo -->
            </div>
            <!-- //.col-sm-4 -->

            <div class="col-sm-8">
                <div class="footer-social text-right">
                    <ul class="list-inline list-unstyled no-margin xs-text-center xs-title-small title-medium">
                        <li><a href="https://twitter.com/freelancingclub" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/khatavkarviraj/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                    </ul>
                </div>
                <!-- //.footer-social -->
            </div>
            <!-- //.col-sm-8 -->
        </div>
        <!-- //.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright text-center border-top border-gray-light">
                    <span class="font-family-alt letter-spacing-1 text-gray-dark text-small text-uppercase">&copy; 2017 The Consulting and Freelancing Club, Inc.. All rights reserved.</span>
                </div>
                <!-- //.footer-copyright -->
            </div>
            <!-- //.col-md-12 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</footer>
<!-- //Footer End -->


<!-- Scroll to top -->
<a href="#page-top" class="page-scroll scroll-to-top"><i class="fa fa-angle-up"></i></a>


<!-- Loading jQuery -->
<script src="/assets/js/jquery.min.js"></script>

<!-- Loading Bootstrap JS -->
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Include all js plugins (below) -->
<script src="/assets/js/pace.min.js"></script>
<script src="/assets/js/debouncer.min.js"></script>
<script src="/assets/js/jquery.easing.min.js"></script>
<script src="/assets/js/jquery.inview.min.js"></script>
<script src="/assets/js/jquery.matchHeight.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/flickity.pkgd.min.js"></script>
<script src="/assets/js/jquery.countTo.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/jquery.validate.min.js"></script>

<!-- Countdown JS -->
<script src="/assets/js/jquery.countdown.min.js"></script>

<!-- Loading Theme JS -->
<script src="/assets/js/main.js"></script>

</body>
</html>