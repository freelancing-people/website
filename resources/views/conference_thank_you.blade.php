<!DOCTYPE html>
<html>
<head>
    <title>Freelancing People</title>
    <meta charset="utf-8"> <!-- Meta for unicode encoding -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Meta for responsiveness -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Meta for Edge style rendering in IE -->
    <link rel='shortcut icon' href="{{asset('img/favicon.png')}}" type='image/x-icon'>
    <!-- External font - Open Sans -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    <!-— Facebook and Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://freelancingpeople.com" />
    <meta property="og:title" content="Free E-mail Course: Turn your website into a Lead Magnet" />
    <meta property="og:description" content="Not getting enough lead from website? Join a free, 5 lesson course and learn how to generate a continuous pipeline of leads from your website." />
    <meta property="og:image" content="{{asset('img/free-email-course.png')}}" />

    <!-— Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" value="https://freelancingpeople.com" />
    <meta name="twitter:title" value="Free E-mail Course: Turn your website into a Lead Magnet" />
    <meta name="twitter:description" value="Not getting enough lead from website? Join a free, 5 lesson course and learn how to generate a continuous pipeline of leads from your website." />
    <meta name="twitter:image" content="{{asset('img/free-email-course.png')}}" />
    <meta name="twitter:url" value="http://freelancingpeople.com" />
    @include('includes.pixel')
</head>
<body>

<section class="top-section">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <h1>Thanks for being awesome!!!</h1>
                <h3 class="text-center">You'll receive an e-mail with more details.</h3>
            </div>
        </div>
    </div>
</section>
<script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>

</body>
</html>