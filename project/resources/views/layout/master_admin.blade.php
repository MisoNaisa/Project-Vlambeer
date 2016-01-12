<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/vendors/bootstrap.css">
    <link rel="stylesheet" href="/vendors/main.css">
    <link rel="stylesheet" href="/vendors/flexslider.css">
    <link rel="stylesheet" href="/css/alex.css">
    <link rel="stylesheet" href="/vendors/smoke.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Vlambeer</title>
</head>
<body class="admin">

<!-- Begin header -->
<div class="header">
    <div class="container adminpanel">
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
    </div>
</div>
<!-- End of header-->
<div class="row col-md-12">
    <div class="nav col-md-2">
        <ul>
            <li>Go to site</li>
            <li>Games</li>
            <li>Shop
                <ul>
                    <li>Products</li>
                    <li>Orders</li>
                </ul>
            </li>
            <li>Users</li>
        </ul>
    </div>
    <div class="section col-md-10">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur beatae consectetur dicta dolor ea ex iure labore necessitatibus nihil, nisi perferendis quam quasi ratione sit tempora ullam, unde velit voluptatibus.</p>
    </div>
    {{--<div class="section col-md-10">--}}
        {{--@if (session('message'))--}}

            {{--<ul class="list-group">--}}
                {{--<li class="list-group-item list-group-item-success">--}}
                    {{--{{ session('message') }}--}}

                {{--</li>--}}
            {{--</ul>--}}
        {{--@endif--}}
        {{--@if($errors->has())--}}
            {{--<ul class="list-group">--}}
                {{--@foreach($errors->all()as $error)--}}
                    {{--<li class="list-group-item list-group-item-danger">{{ $error }}</li>--}}

                {{--@endforeach--}}
            {{--</ul>--}}
        {{--@endif--}}
        {{--@yield('section')--}}
    {{--</div>--}}
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/js/requirejs.js"></script>
<script src="/js/jquery.vide.js"></script>
<script src="/js/jquery.smoke.js"></script>
<script src="/js/main.js"></script>
<!-- Slider Javascript file -->
<script src="/js/jquery.flexslider.js"></script>
</body>

</html>
