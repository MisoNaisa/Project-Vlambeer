
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Vlambeer</title>
</head>
<body>

<div class="container">

<!-- Begin header -->
    <div class="header">
        <div class="header-content">
            <div class="title">
                <a href="#"></a>
                <h1>Vlambeer</h1>
                <h3>Bringing back arcade since 1982</h3>
            </div>
        </div>
        <div class="nav">
            <ul>
                <li><a href="/index">Home</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
<!-- End of header-->

    <div class="section">
        @yield('section')
    </div>

<!-- Begin Footer -->
    <div class="footer">

        <div class="footer-left col-xs-8">
            <p>VLAMBEER IS A DUTCH INDEPENDENT GAME STUDIO made up of
            Rami Ismail and Jan Willem Nijman,
            bringing back arcade games since 1864.</p>
        </div>

        <div class="footer-right col-xs-4">
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
    <!-- End Footer-->
</div>

</body>
</html>
