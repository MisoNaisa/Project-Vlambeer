
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vendors/bootstrap.css">
    <link rel="stylesheet" href="vendors/main.css">


    <title>Vlambeer</title>
</head>
<body>

<div class="container">

<!-- Begin header -->
    <div class="header">
        <div class="header-content">
            <div class="title">
                <a href="/index"></a>
                <h1>Vlambeer</h1>
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
                <li><a href="/index">Home</a></li>
                <li><a href="/overview_games">Webshop Games</a></li>
                <li><a href="/contact">Webshop Merchandise</a></li>
            </ul>
        </div>
    </div>
<!-- End of header-->


    <div class="section">
        @yield('section')
    </div>

<!-- Begin Footer -->
    <div class="footer">
        <div class="row">
            <div class="footer-left col-xs-7">
                <p>VLAMBEER IS A DUTCH INDEPENDENT GAME STUDIO made up of
                Rami Ismail and Jan Willem Nijman,
                bringing back arcade games since 1864.</p>
            </div>

            <div class="footer-right col-xs-5">
                <h3>Contact</h3>
                <div class="contact-rami">
                    <p>Rami Ismail</p>
                    <p>Business and Development</p>
                    <a href="mailto:rami@vlambeer.com">rami@vlambeer.com</a>
                    <a href="https://twitter.com/search?q=tha_rami&src=typd">@tha_rami</a>
                </div>
                <div class="contact-jan">
                    <p>Jan Willem Nijman</p>
                    <p>Game Design</p>
                    <a href="mailto:jw@vlambeer.com">jw@vlambeer.com</a>
                    <a href="https://twitter.com/jwaaaap">@jwaaaap</a>
                </div>
                <div class="contact-vlambeer">
                    <p>Vlambeer</p>
                    <a href="https://twitter.com/search?q=vlambeer&src=typd">@vlambeer</a>
                </div>

                <div class="contact-friends">
                    <a href="https://www.facebook.com/Vlambeer/?fref=ts">Like us on Facebook!</a>
                </div>

                <div class="contact-info">
                    <p><a href="mailto:info@vlambeer.com">info@vlambeer.com</a> | Neude 5, 3512 AD, Utrecht, the Netherlands | +31621206363</p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Footer-->
</div>

</body>
</html>
