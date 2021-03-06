<!DOCTYPE html>
<html>
<head>
    <title>Freelancing Conf</title>
    <meta charset="utf-8"> <!-- Meta for unicode encoding -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Meta for responsiveness -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Meta for Edge style rendering in IE -->
    <link rel='shortcut icon' href="{{asset('img/favicon.png')}}" type='image/x-icon'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Satisfy|Ubuntu" rel="stylesheet">
    <!-- External font - Open Sans -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/app.css"> <!-- Compiled css -->

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
<body>
<div id="app">


    <!-- Landing section -->

    <section class="conference-landing">
        {{--<a class="site-logo" href="javascript:void(0)">FreelancingConf</a>--}}
        <div class="container">
            <div class="welcome-message">
                {{--<h1>A Event For Freelancers, Consultants & Agencies</h1>--}}
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="landing-logo">
                            <img src="{{asset('img/without-text.png')}}" height="200px">
                        </div>
                        <h1>This year, we're bringing an online conference for FREELANCERS!</h1>
                    </div>
                </div>
                {{--<p>10th – 13th July 2015</p>--}}
                <p>15th October, 2017</p>
                <div class="action-buttons">
                    <a href="https://www.tickettailor.com/checkout/view-event/id/97243/chk/cf13" target="_blank"
                       class="primary-btn">Buy Tickets Now</a>
                    <!-- <button class="secondary-btn" id="learn-more">Learn More</button> -->
                </div>
            </div>
        </div>
    </section>

    <!-- End of landing section -->


    <!-- About Section -->


    <section class="conf-section about-section">
        <div class="container">
            <header class="conf-header">
                {{--<img src="/img/about.png">--}}
                <h2 class="dark">Get Actionable Advice</h2>
            </header>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p>
                        In regular conferences, speakers talk about a given topic, give ideas and introduce concepts.
                        These ideas open up a new world for you, but it's up to your discipline and procrastination -
                        you need to go home, take out time, learn stuff and PRACTICE it. This technique works, but most
                        of the times, you lose the tempo and go back to normal life eventually not making any real
                        progress.
                    </p>
                    <p>
                        I visualize Freelancing Conference with a single objective. FreelancingConf gives actionable
                        advice, period. You'll leave with a framework ready in your hands which can be put into action
                        the next moment. I have something planned out after the conference that will help me track and
                        motivate you to implement the framework that you've have learned in the convention.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- End of about section -->

    <!-- Speakers section -->

    <section class="conf-section speaker-section gray-section">
        <div class="container">
            <header class="conf-header">
                <img src="/img/microphone.png">
                <h2>Our Speakers</h2>
            </header>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p>
                        We’ve lined up some brilliant personalities from the freelancing community to share their inside
                        experience with YOU, and we're streaming them directly to your screen.
                    </p>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-1" data-toggle="modal">
                                <img src="/img/kai-davis.jpg" alt="Kai Davis">
                            </a>
                            <div class="open-pro-modal">
                                <a href="#profile-1" data-toggle="modal">
                                    <h2>Kai Davis</h2>
                                </a>
                            </div>
                            <a href="https://kaidavis.com" class="site-link" target="_blank">kaidavis.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-2" data-toggle="modal">
                                <img src="/img/sean-dsouza.jpg" alt="Sean D'Souza">
                            </a>
                            <div class="open-pro-modal">
                                <a href="#profile-2" data-toggle="modal">
                                    <h2>Sean D'Souza</h2>
                                </a>
                            </div>
                            <a href="javascript:void(0)" class="site-link" target="_blank">psychotactics.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-3" data-toggle="modal">
                                <img src="/img/christopher-hawkins.jpg" alt="Christopher Hawkins">
                            </a>
                            <div class="open-pro-modal">
                                <a href="#profile-3" data-toggle="modal">
                                    <h2>Christopher Hawkins</h2>
                                </a>
                            </div>
                            <a href="https://christopherhawkins.com" class="site-link">christopherhawkins.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-4" data-toggle="modal">
                                <img src="/img/jane-portman.png" alt="Speaker 4">
                            </a>
                            <div class="open-pro-modal">
                                <a href="#profile-1" data-toggle="modal">
                                    <h2>Jane Portman</h2>
                                </a>
                            </div>
                            <a href="http://uibreakfast.com/" target="_blank" class="site-link">uibreakfast.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#mojca-mars" data-toggle="modal">
                                <img src="/img/mojca-mars.png" alt="Speaker 5">
                            </a>
                            <div class="open-pro-modal">
                                <a href="#profile-1" data-toggle="modal">
                                    <h2>Mojca Mars</h2>
                                </a>
                            </div>
                            <a href="javascript:void(0)" class="site-link">superspicymedia.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="speaker">
                            <a href="#profile-1" data-toggle="modal">
                                <img src="/img/female-user.png" alt="Speaker 6">
                            </a>
                            <div class="open-pro-modal">
                                <a href="#profile-1" data-toggle="modal">
                                    <h2>Speaker 6</h2>
                                </a>
                            </div>
                            <a href="javascript:void(0)" class="site-link">speaker6.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of speakers section -->


    <!-- Pricing section -->

    <section class="conf-section price-section">
        <div class="container">
            <header class="conf-header">
                <img src="/img/pricing.png">
                <h2>Pricing</h2>
            </header>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                </div>

            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="pricing-info">
                        <h3>15th October, 2017</h3>
                        <p>
                            There's nothing like attending a conference in person, but unfortunately, everyone of us
                            cannot make it to wonderful conferences around the world. We've curated a very special
                            experience for YOU.
                        </p>
                    </div>


                    <div class="price">
                        <div class="p-icon">
                            <i class="fa fa-dollar"> </i>
                        </div>
                        <div class="p-type">
                            <h6>Price</h6>
                            Access to all sessions, offline videos and conference swag.
                        </div>
                        <div class="p-amount">
                            <span class="p-act-amount">$50<span class="p-current-amount"></span></span>
                            $25
                        </div>
                        <div class="p-btn">
                            <a href="https://www.tickettailor.com/checkout/view-event/id/97243/chk/cf13" target="_blank"
                               class="primary-btn">Register Now</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p>
                                You'll get to experience every exciting aspect of a conference -
                                mingling with fellow attendees, swag, discussions with speakers, parties and lastly tons
                                of
                                knowledge to grow your business.
                            </p>
                            <p class="green">
                                Worried you can't make it on 15th October? We'll be recording all talks for offline
                                download
                                after the conference.
                            </p>
                        </div>
                    </div>
                    <div class="pricing-details">
                        <div class="row">
                            <div class="col-sm-12">
                                <hr />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul>
                                    <li><p>Exclusive discounts on courses and e-books for freelancers</p></li>
                                    <li><p>Access to digital swag from sponsors (discounts, T-shirts)</p></li>
                                    <li><p>First hand look at the inner workings of freelancers generating $100K + revenue</p></li>
                                </ul>
                            </div>
                        </div>
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
                    <p>
                        Part of the excitement of a conference is the chance to network and make new connections. For
                        Freelancing Conf, we’re creating a dedicated Slack room just for attendees which you
                        can use before,
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
                            <img src="/img/sponsor-1.png" alt="Facebook">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/sponsor-2.png" alt="Wordpress">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/sponsor-3.png" alt="Blogger">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/sponsor-1.png" alt="Amazon">
                        </div>
                    </div>

                    <div class="row last-row">
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/sponsor-2.png" alt="Linkedin">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/sponsor-3.png" alt="Chrome">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/sponsor-1.png" alt="Pinterest">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="/img/sponsor-2.png" alt="Microsoft">
                        </div>
                    </div>

                    <div class="sponsor-btn text-center">
                        <a href="javascript:void(0)" class="primary-btn" target="_blank">Become a Sponsor</a>
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

                                    <p>TBD</p>

                                    <a href="javascript:void(0)">
                                        Generating client referrals and repeat projects through outreach.
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>Kai Davis</h2>
                                <a href="https://kaidavis.com/" class="site-target" target="_blank">kaidavis.com</a>
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
                                    <a href="https://kaidavis.com/" class="" target="_blank">kaidavis.com</a>. You
                                    aren't
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

                                    <p>TBD</p>

                                    <a href="javascript:void(0)">
                                        How To Get To Your Uniqueness For Your Consultancy/Freelancing Business.
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>Sean D'Souza</h2>
                                <a href="https://psychotactics.com" class="site-target" target="_blank">psychotactics.com</a>
                                <p></p>
                                <p>
                                    Sean has always followed his dreams, putting in the effort required to achieve them.
                                    He was running a successful business as a freelance cartoonist in Mumbai, when he
                                    and his wife decided to embark on a completely new adventure – moving to beautiful
                                    New Zealand. Through relentless perseverance, springing out of bed at 4am, he once
                                    again built up a portfolio of delighted clients. Eventually he developed a
                                    three-pronged strategy that allows him to take three months off every year, while
                                    running the very successful website <a href="https://psychotactics.com"
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

                                    <p>TBD</p>

                                    <a href="javascript:void(0)">
                                        Offline Networking to improve your sales funnel
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>Christopher Hawkins</h2>
                                <a href="https://christopherhawkins.com" class="site-target"
                                   target="_blank">christopherhawkins.com</a>
                                <p></p>
                                <p>
                                    Just before turning 30, Chris walked away from his successful career leading
                                    technical projects for large enterprises, launching his own consulting practice
                                    instead. He quickly built a 6-figure practice that provides consulting and web
                                    development for businesses of every size, from Fortune 500s on down.
                                </p>
                                <p>
                                    Chris writes extensively on the software consulting industry and hosts the $100K
                                    Freelancing show, teaching other consultants and freelancers how to run an effective
                                    and profitable practice.
                                </p>
                                <p>
                                    Having built a reputation as an expert in handling crisis projects, difficult
                                    clients, and recurring engagements, Chris says "When I teach consultants how to hold
                                    professional boundaries, manage crises, and re-sell new projects to old clients, I'm
                                    teaching them how to sustain an entire 6-figure career."
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

    <!-- Jane Portman Modal -->

    <div id="profile-4" class="modal speaker-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="container">

            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-close"></i></button>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="speaker-data">
                                    <img src="/img/jane-portman.png" alt="Jane Portman">

                                    <p>TBD</p>

                                    <a href="javascript:void(0)">
                                        Productizing your Consulting Services
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>Jane Portman</h2>
                                <a href="http://uibreakfast.com/" class="site-target"
                                   target="_blank">uibreakfast.com</a>
                                <p></p>
                                <p>
                                    Jane is an independent UI/UX consultant from Russia who helps software companies
                                    build focused, profitable web applications.
                                </p>
                                <p>
                                    Previously a creative director at a large agency, Jane went solo after having two
                                    boys. Since then, she's written three books on UI/UX design, given talks at multiple
                                    conferences, and grown a successful podcast. These days she's focused on building
                                    her own software product called Tiny Reminder.
                                </p>
                                <p>
                                    Besides helping founders, she teaches other consultants and freelancers build their
                                    authority. Her favorite topics include productized consulting, product strategy, and
                                    action-driven consulting websites. "Start building your own platform as early as
                                    possible," — Jane recommends.
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

    <!-- End of Jane Portman Modal -->

    <!-- Mojca Mars Modal -->

    <div id="mojca-mars" class="modal speaker-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="container">

            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-close"></i></button>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="speaker-data">
                                    <img src="/img/mojca-mars.png" alt="Mojca Mars">

                                    <p>TBD</p>

                                    <a href="javascript:void(0)">
                                        Using Social Media to Boost Sales Funnel
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>Mojca Mars</h2>
                                <a href="http://superspicymedia.com/" class="site-target"
                                   target="_blank">superspicymedia.com</a>
                                <p></p>
                                <p>
                                    TBD
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

    <!-- End of Jane Portman Modal -->


    <!-- Footer section -->
    <!-- <a href="javascript:void(0)" class="slideUp"><i class="fa fa-chevron-up"></i></a> -->
    <footer>
        <div class="container">
            <div class="row">
                {{--<div class="col-sm-4">--}}
                {{--<p class="footer-links">--}}
                {{--<a href="javascript:void(0)">Terms</a>--}}
                {{--<a href="javascript:void(0)">Privacy</a>--}}
                {{--<a href="javascript:void(0)">Blog</a>--}}
                {{--</p>--}}
                {{--</div>--}}
                <div class="col-sm-12">
                    <div class="copy-div">
                        FreelancingConf
                    </div>
                    <p class="copy-text">© {{ date('Y') }} The Consulting and Freelancing Club, Inc.</p>
                </div>
                {{--<div class="col-sm-4">--}}
                {{--<p class="footer-contact-head">Contact Us</p>--}}
                {{--<ul class="social">--}}
                {{--<li>--}}
                {{--<a href="" data-toggle="modal" data-target="#modal-contact-form">--}}
                {{--<i class="fa fa-envelope-o"></i>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="https://twitter.com/" target="_blank">--}}
                {{--<i class="fa fa-twitter"></i>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="https://www.facebook.com/" target="_blank">--}}
                {{--<i class="fa fa-facebook"></i>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
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
