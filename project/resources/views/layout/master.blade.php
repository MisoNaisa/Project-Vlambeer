
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
                <li><a href="/overview_games">Games</a></li>
                <li><a href="/contact">Contact</a></li>
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
                    <a href="">rami@vlambeer.com</a>
                    <a href="">@tha_rami</a>
                </div>
                <div class="contact-jan">
                    <p>Jan Willem Nijman</p>
                    <p>Game Design</p>
                    <a href="">jw@vlambeer.com</a>
                    <a href="">@jwaaaap</a>
                </div>
                <div class="contact-vlambeer">
                    <p>Vlambeer</p>
                    <a href="">@vlambeer</a>
                </div>

                <div class="contact-friends">
                    <a href="">Friends</a>
                </div>

                <div class="contact-info">
                    <p><a href="">info@vlambeer.com</a> | Neude 5, 3512 AD, Utrecht, the Netherlands | +31621206363</p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Footer-->
</div>

</body>
</html>
