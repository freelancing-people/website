<!DOCTYPE html>
<html>
<head>
    <title>Conference</title>
    <meta charset="utf-8"> <!-- Meta for unicode encoding -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Meta for responsiveness -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Meta for Edge style rendering in IE -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Satisfy|Ubuntu" rel="stylesheet"> <!-- External font - Open Sans -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/app.css"> <!-- Compiled css -->
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
                    <a class="navbar-brand" href="/">FreelancingConf</a>

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
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>This year, we're bringing an online conference for <span class="animate-word"><span class="freelance">FREELANCERS!</span><span class="design">DESIGNERS!</span><span class="agency">AGENCIES!</span></span> </h1>
                    </div>
                </div>
                {{--<p>10th – 13th July 2015</p>--}}
                <p>15th October, 2017</p>
                <div class="action-buttons">
                    <button class="primary-btn">Buy Tickets Now</button>
                    <button class="secondary-btn" id="learn-more">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- End of landing section -->


    <!-- About Section -->

        <section class="conf-section about-section">
            <div class="container">
                <header class="conf-header">
                    <img src="/img/about.png">
                    <h2>About Conference</h2>
                </header>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi. dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi. dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi. dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi.</p>
                    </div>
                </div>
            </div>
        </section>

    <!-- End of acbout section -->


    <!-- Speakers section -->

        <section class="conf-section speaker-section gray-section">
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
                                <a href="#profile-1" data-toggle="modal">
                                    <img src="/img/female-user.png" alt="Speaker 4">
                                </a>
                                <div class="open-pro-modal">
                                    <a href="#profile-1" data-toggle="modal">
                                       <h2>Speaker 4</h2>
                                    </a>
                                </div>
                                <a href="javascript:void(0)" class="site-link">speaker4.com</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="speaker">
                                <a href="#profile-1" data-toggle="modal">
                                    <img src="/img/female-user.png" alt="Speaker 5">
                                </a>
                                <div class="open-pro-modal">
                                    <a href="#profile-1" data-toggle="modal">
                                       <h2>Speaker 5</h2>
                                    </a>
                                </div>
                                <a href="javascript:void(0)" class="site-link">speaker5.com</a>
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
                    <div class="pricing-info">
                        <h3>15th October, 2017</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>



                    <div class="price">
                        <div class="p-icon">
                           <i class="fa fa-dollar"> </i>
                        </div>
                        <div class="p-type">
                            <h6>Price</h6>
                            Access to all keynotes, workshops and parties across three days.
                        </div>
                        <div class="p-amount">
                            <span class="p-act-amount">$799<span class="p-current-amount"></span></span>
                            $599
                        </div>
                        <div class="p-btn">
                            <a href="javascript:void(0)" class="primary-btn">Register Now</a>
                        </div>
                    </div>

                     <div class="pricing-details">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li><p>Lorem ipsum is a dummy text.</p></li>
                                    <li><p>Lorem ipsum is a dummy text.</p></li>
                                    <li><p>Lorem ipsum is a dummy text.</p></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li><p>Lorem ipsum is a dummy text.</p></li>
                                    <li><p>Lorem ipsum is a dummy text.</p></li>
                                    <li><p>Lorem ipsum is a dummy text.</p></li>
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
                    Part of the excitement of a conference is the chance to network and make new connections. For Consulting People Conference, we’re creating a dedicated Slack room just for attendees which you can use before,
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

                                    <p>Sunday 25 June, 3:15pm</p>

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
                                    <a href="https://kaidavis.com/" class="" target="_blank">kaidavis.com</a>. You aren't
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

                                    <p>Sunday 25 June, 3:15pm</p>

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
                                    running the very successful website <a href="https://psychotactics.com" target="_blank">psychotactics.com</a>.
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

                                    <p>Sunday 25 June, 3:15pm</p>

                                    <a href="javascript:void(0)">
                                        Offline Networking to increase your funnel
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>Christopher Hawkins</h2>
                                <a href="https://christopherhawkins.com" class="site-target"
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
                        Conference
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
        
        function funHide(div,num,divNum){
            console.log(div);
            console.log(num);
            console.log(divNum);
            if(num == 0){
                 div.animate({
                    maxWidth: "0",
                  }, 3000 );
            }else{
                  div.animate({
                    maxWidth: "500px",
                  }, 3000 );
            }
            switch(divNum){
                case 2:
                setTimeout(function(){
                    funHide($('.design'),1,3)
                },3000);
                break;
                case 3:
                 setTimeout(function(){
                    funHide($('.design'),0,4)
                },3000);
                break;
                case 4:
                setTimeout(function(){
                    funHide($('.agency'),1,5)
                },3000);
                break;
                case 5:
                setTimeout(function(){
                    funHide($('.agency'),0,6)
                },3000);
                break;
                case 6:
                setTimeout(function(){
                    funHide($('.freelance'),1,7)
                },3000);
                break;
                case 7:
                setTimeout(function(){
                    funHide($('.freelance'),0,2)
                },3000);
                break;
                default:
                break;
            }       
        }

        setTimeout(function(){
            funHide($('.freelance'),0,2);
        },1000)


        /* Navigation Functionality */
            $('.conf-nav li a').on('click', function () {
                $('.conf-nav li a').removeClass('active');
                var $this = $(this);
                var moveSection = $this.data('move');
                $('html, body').animate({
                    scrollTop: $('.' + moveSection).offset().top - 73
                }, 1000);
                if($(window).width() < 768){
                    $('.navbar-toggle').addClass('collapsed')
                                        .attr('aria-expanded',false);
                    $('.navbar-collapse').removeClass('in');
                }
            })


            $('#learn-more').on('click',function(){
                $('html, body').animate({
                    scrollTop: $('.about-section').offset().top - 73
                }, 1000);
            })

        /* End of navigation functionality */

        /* Responsive header & animation */
        var speakerSection = $('.speaker-section').offset().top - 100;
        var priceSection = $('.price-section').offset().top -100;
        var slackSection = $('.slack-section').offset().top - 100;
        var sponsorSection = $('.sponsor-section').offset().top - 100;
        var faqSection = $('.faq-section').offset().top - 100;
        var footer = $('footer').offset().top - 100;


        if ($(window).width() < 768) {
            $('.navbar-default').addClass('white-nav');
        } else {

            $(window).scroll(function () {
                var scrollTop = $(this).scrollTop();

                if(scrollTop > speakerSection && scrollTop < priceSection){
                    $('.conf-nav li a').removeClass('active');
                    $('a[data-move="speaker-section"]').addClass('active');
                }else if(scrollTop > priceSection && scrollTop < slackSection){
                    $('.conf-nav li a').removeClass('active');
                    $('a[data-move="price-section"]').addClass('active');
                }else if(scrollTop > sponsorSection && scrollTop < faqSection){
                    $('.conf-nav li a').removeClass('active');
                    $('a[data-move="sponsor-section"]').addClass('active');
                }else if(scrollTop > faqSection && scrollTop < footer){
                    $('.conf-nav li a').removeClass('active');
                    $('a[data-move="faq-section"]').addClass('active');
                }else{
                    $('.conf-nav li a').removeClass('active');
                }

                if (scrollTop > 0) {
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
