<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/main.css">
    <link rel="stylesheet" href="/vendors/flexslider.css">
    <link rel="stylesheet" href="/css/alex.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Vlambeer</title>
</head>
<body class="admin">

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
    @yield('section')
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/js/jquery.vide.js"></script>
<script src="/js/main.js"></script>
<!-- SSlider Javascript file -->
<script src="/js/jquery.flexslider.js"></script>
</body>

</html>
