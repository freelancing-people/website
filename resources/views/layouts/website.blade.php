<!DOCTYPE html>
<html>
<head>
    <title>Freelancing People</title>
    <meta charset="utf-8"> <!-- Meta for unicode encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Meta for responsiveness -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Meta for Edge style rendering in IE -->
    <link rel='shortcut icon' href="{{asset('img/favicon.png')}}" type='image/x-icon'>
    <link rel="stylesheet" type="text/css" href="css/main.css"> <!-- Compiled css -->

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{asset('img/logo-color.png')}}"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Articles</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Conference</a></li>
                <li><a href="#">Interviews</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer>
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2 text-center">
            <p>Copyright © 2017 The Consulting and Freelancing Club, Inc.</p>
        </div>
    </div>
</footer>

<script type="text/javascript" src="/js/app.js"></script> <!-- compiled js -->

<script type="text/javascript">

    $(window).on('load', function () {
        if ($(window).width() > 768) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 0) {
                    $('.navbar-default').addClass('white-nav');
                } else {
                    $('.navbar-default').removeClass('white-nav');
                }
            });
        }

        $('.content').on('scroll',function(){
            $('.profile-info').addClass('animate');
            setTimeout(function(){
               $('.profile-info').removeClass('animate'); 
            },500);
        })

        $('.service-btn').on('click',function(){
            $('.fp-modal').addClass('open');
        })

        $('.fp-modal-backdrop').on('click',function(){
            $('.fp-modal').removeClass('open');
            $('#fp-form')[0].reset();
        });
        $('.close-btn').on('click',function(){
            $('.fp-modal').removeClass('open');
            $('#fp-form')[0].reset();
        });
    })

</script>

</body>
</html>