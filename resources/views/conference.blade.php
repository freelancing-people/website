<!-- We're brewing something awesome for freelancers. If you're here for the conference website, please <a href="/conference">click here</a>.
 -->

<!DOCTYPE html>
<html>
<head>
    <title>Conference</title>
    <meta charset="utf-8"> <!-- Meta for unicode encoding -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Meta for responsiveness -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Meta for Edge style rendering in IE -->
    <link rel="icon" type="image/png" href="{{asset('img/logo-favi.svg')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Satisfy|Ubuntu" rel="stylesheet">
    <!-- External font - Open Sans -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
</head>
<body>
	
    <section class="top-section">
    	<div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                        <h1>If your dev shop got fewer than 10 leads last week, you need to take this free email course</h1>
                </div>
          
                <div class="des-box">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <ul class="list-unstyled">
                                <li><strong>Lesson 1:</strong> Positioning and commoditization</li>
                                <li><strong>Lesson 2:</strong> Positioning and upward rate mobility</li>
                                <li><strong>Lesson 3:</strong> A marketing advantage</li>
                                <li><strong>Lesson 4:</strong> An expertise advantage</li>
                                <li><strong>Lesson 5:</strong> The positioning process</li>
                            </ul>
                        </div>
                    </div>
                    <h2>Start building a strong pipeline of profitable clients. Sign up now:</h2>
                    <div class="form">
                        <form>
                            <input type="text" name="name" class="form-control flex-part" placeholder="Name">
                            <input type="email" name="email" class="form-control flex-part" placeholder="Email">
                            <button class="submit-btn flex-part">Send</button>
                        </form>
                    </div>
                </div>

                <div class="para-info">
                    <p>Write a proof-drenched, factual story explaining how you helped a previous client of yours move from the problem described in your headline to a solution. Try to keep this story relatively succinct.</p>

                    <p>In every way possible, drown your story in proof elements: specific numbers about how bad the problem was/good the solution was, credibility indicators RE: your client or the approach you used to solve their problem, and anything else that would serve as proof to a critical reader who is feeling the pain of the problem you solve.</p>

                    <p>You can do nothing to get the attention and interest of someone who is not suffering the problem you solve, so don’t worry about proving anything to that kind of reader.</p>
                </div>

                <div class="info-box">
                    <h2>Whisker-Free Lead Magnet Opt-in</h2>
                    <p>Offer a lead magnet.</p>
                    <p>The opt-in to the lead magnet should be 100% whisker-free, meaning that you ask for the minimum amount of information needed to deliver the lead magnet (usually only email address) and there is zero threat of your new lead being sold to.</p>
                    <p>Your lead magnet should help leads do one of the below while also being very short and easy to make use of:</p>
                    <ul>
                        <li>Solve some aspect of your headline problem for themselves</li>
                        <li>Plan or prepare to solve the problem</li>
                        <li>Better understand the problem you solve</li>
                        <li>Estimate what the problem is costing them, the ROI of a solution, or both</li>
                    </ul>
                    <div class="form">
                        <form>
                            <input type="text" name="name" class="form-control flex-part" placeholder="Name">
                            <input type="email" name="email" class="form-control flex-part" placeholder="Email">
                            <button class="submit-btn flex-part">Send</button>
                        </form>
                    </div>
                </div>
            </div>
    	</div>
    </section>

    <footer>
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <p>Copyright © 2017</p>
            </div>
        </div>
    </footer>

</body>
</html>