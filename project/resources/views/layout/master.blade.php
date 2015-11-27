
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="vendors/bootstrap.css">
    <link rel="stylesheet" href="vendors/main.css">
    <link rel="stylesheet" href="css/alex.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Vlambeer</title>
</head>
<body>
<!-- Begin header -->
<div class="header">
    <div class="container">
            <div class="title">
                <a href="/">
                <div class="logo">
                    <img src="../img/vlambeer-logo.png" alt="logo">
                    <h1>Vlambeer</h1>
                </div>
                </a>
                <div class="slogan">
                    <h3>
                        <?php
                        $vlambeer_year = '1' . rand(7,9) . rand(2,8) . rand(1,9);
                        echo "Bringing back arcade since ". $vlambeer_year
                        ?>
                    </h3>
                </div>
            </div>
        <div class="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/overview_games">Games</a></li>
                <li><a href="/overview_merchandise">Shop</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End of header-->
<div class="container">


    <div class="section">
        @yield('section')
    </div>

<!-- Begin Footer -->
    <div class="footer">
        <div class="row">
            <div class="footer-left col-xs-8">
                <p>VLAMBEER IS A DUTCH INDEPENDENT GAME STUDIO</p>
                <p>made up of Rami Ismail and Jan Willem Nijman,
                <?php
                $vlambeer_year = '1' . rand(7,9) . rand(2,8) . rand(1,9);
                echo "bringing back arcade since ". $vlambeer_year
                ?>

                <div class="tweets">
                    <h3>Tweets <i class="fa fa-twitter"></i></h3>
                    <div class="tweet">
                        <div class="row">
                        <img src="{{$tweetV->profile_image_url}}" class="col-md-2">
                        <div class="tweet-content col-md-10">
                            <h3><a href="https://twitter.com/{{$tweetV->screen_name}}">
                                     {{$tweetV->screen_name}}</a></h3>
                            <p>{{$tweetV->status->text}}</p>
                        </div>
                        </div>
                    </div>
                    <div class="tweet">
                        <div class="row">
                        <img src="{{$tweetR->profile_image_url}}" class="col-md-2">
                            <div class="tweet-content col-md-10">
                            <h3><a href="https://twitter.com/{{$tweetR->screen_name}}">
                                    {{$tweetR->screen_name}}</a></h3>
                            <p>{{$tweetR->status->text}}</p>
                        </div>
                        </div>
                    </div>
                    <div class="tweet">
                        <div class="row">
                        <img src="{{$tweetJ->profile_image_url}}" class="col-md-2">
                            <div class="tweet-content col-md-10">
                                <h3><a href="https://twitter.com/{{$tweetJ->screen_name}}">
                                    {{$tweetJ->screen_name}}</a></h3>
                                <p>{{$tweetJ->status->text}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-right col-xs-3">
                <h3>Contact</h3>
                <div class="contact-rami">
                    <p>Rami Ismail</p>
                    <p>Business and Development</p>
                    <a href="mailto:rami@vlambeer.com">rami@vlambeer.com</a>
                    <a href="https://twitter.com/search?q=tha_rami&src=typd">@tha_rami <i class="fa fa-twitter"></i></a>
                </div>
                <div class="contact-jan">
                    <p>Jan Willem Nijman</p>
                    <p>Game Design</p>
                    <a href="mailto:jw@vlambeer.com">jw@vlambeer.com</a>
                    <a href="https://twitter.com/jwaaaap">@jwaaaap <i class="fa fa-twitter"></i></a>
                </div>
                <div class="contact-vlambeer">
                    <p>Vlambeer</p>
                    <a href="https://twitter.com/search?q=vlambeer&src=typd">@vlambeer <i class="fa fa-twitter"></i></a>
                </div>

                <div class="contact-fb">
                    <a href="https://www.facebook.com/Vlambeer/?fref=ts">Like us on Facebook! <i class="fa fa-facebook-square"></i></a>

                </div>

                </div>
            </div>

                <div class="footer-bottom">
                <div class="contact-info">
                    <p><a href="mailto:info@vlambeer.com">info@vlambeer.com</a> | Neude 5, 3512 AD, Utrecht, the Netherlands | +31621206363</p>
                </div>

            </div>
    </div>
    <!-- End Footer-->
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</html>
