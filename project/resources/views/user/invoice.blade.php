<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="/vendors/bootstrap.css">
    <link rel="stylesheet" href="/vendors/main.css">
</head>
<body>
<div class="container">
    <div class="pdf">
        <div class="row col-md-12">
            <div class="company-info col-md-6">
                <div class="title">
                    <img class="col-md-3" src="img/vlambeer-logo.png" alt="logo">
                    <h1 class="col-md-3" >Vlambeer</h1>
                </div>
                <ul>
                    <li>Vlambeer</li>
                    <li>Neude 5, 3512 AD Utrecht, The Netherlands</li>
                    <li>KvK Utrecht: 50851314</li>
                    <li>BTW nr. NL: 4292.28.999.B.01</li>
                    <li>IBAN: NL26INGB0220026800</li>
                    <li>BIC: INGBNZ9C</li>
                </ul>
            </div>
            <div class="user-info col-md-6">
                <ul>
                        <li>{{$user->first_name}}</li>
{{--                    <li>{{ echo 'cheese'}}</li>--}}
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
