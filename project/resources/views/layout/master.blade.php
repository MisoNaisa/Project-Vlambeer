<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link rel="stylesheet" href="/vendors/bootstrap.css">
    <link rel="stylesheet" href="/vendors/main.css">
    <link rel="stylesheet" href="/vendors/flexslider.css">
    <link rel="stylesheet" href="/css/alex.css">
    <link rel="stylesheet" href="/vendors/smoke.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Vlambeer</title>
</head>
<body @yield('bodyAttributes')>

<!-- Begin header -->
<div class="header">
    <div class="container">
            <div class="title">
                <a href="/">
                <div class="logo">
                    <img src="/img/vlambeer-logo.png" alt="logo">
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
                <li><a href="/shop">Shop</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End of header-->

    <div class="section">
        @if (session('message'))

            <ul class="list-group">
                <li class="list-group-item list-group-item-success">
                    {{ session('message') }}

                </li>
            </ul>
        @endif
        @yield('section')
    </div>

<!-- Begin Footer -->
    <div class="container">
        <div class="footer">
            <div class="row">
                <div class="footer-left col-xs-8">
                    <p>VLAMBEER IS A DUTCH INDEPENDENT GAME STUDIO</p>
                    <p>made up of Rami Ismail and Jan Willem Nijman,
                    <?php
                    $vlambeer_year = '1' . rand(7,9) . rand(2,8) . rand(1,9);
                    echo "bringing back arcade since ". $vlambeer_year
                    ?>


                    <div class="twitter">
                        <a class="twitter-timeline" width="100%" height="300" data-dnt="true" href="https://twitter.com/SGvdBosch/lists/vlambeer" data-widget-id="687944200990670848" data-chrome="noheader"></a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>

                </div>
            <div class="footer-right col-xs-4">
                <h3>Contact</h3>
                <div class="contact-default-styling contact-rami">
                    <p>Rami Ismail</p>
                    <p>Business and Development</p>
                    <a href="mailto:rami@vlambeer.com">rami@vlambeer.com</a>
                    <a href="https://twitter.com/search?q=tha_rami&src=typd">@tha_rami <i class="fa fa-twitter"></i></a>
                </div>
                <div class="contact-default-styling contact-jan">
                    <p>Jan Willem Nijman</p>
                    <p>Game Design</p>
                    <a href="mailto:jw@vlambeer.com">jw@vlambeer.com</a>
                    <a href="https://twitter.com/jwaaaap">@jwaaaap <i class="fa fa-twitter"></i></a>
                </div>
                <div class="contact-default-styling contact-vlambeer">
                    <p>Vlambeer</p>
                    <a href="https://twitter.com/search?q=vlambeer&src=typd">@vlambeer <i class="fa fa-twitter"></i></a>
                </div>

                <div class="contact-fb">
                    <a href="https://www.facebook.com/Vlambeer/?fref=ts">Like us on Facebook! <i class="fa fa-facebook-square"></i></a>

                </div>

<<<<<<< HEAD
                <div class="newsletter">
                    <div class="btn btn-primary">
                        Newsletter
                    </div>
                </div>

                </div>
=======
>>>>>>> origin/master
            </div>
        </div>

        <div class="footer-bottom">
            <div class="row">
                <div class="contact-info col-md-9">
                    <p><a href="mailto:info@vlambeer.com">info@vlambeer.com</a> | Neude 5, 3512 AD, Utrecht, the Netherlands | +31621206363</p>
                </div>
                <div class="terror col-md-2">
                    <p>Made by &#169; TerrorTeddies</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-->
</div>

<div class="csrf">
    {{csrf_field()}}
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/js/jquery.vide.js"></script>
<script src="/js/jquery.cookie.js"></script>
<script src="/js/jquery.smoke.js"></script>
<script src="/js/main.js"></script>
<!-- SSlider Javascript file -->
<script src="/js/jquery.flexslider.js"></script>
<script src="/js/kim.js"></script>
</body>

</html>
