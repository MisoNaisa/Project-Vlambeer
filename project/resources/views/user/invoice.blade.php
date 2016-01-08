<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style>

        .pdf {
            position: relative;
            width: 100%;
        }

        .pdf ul {
            padding-left: 0;
        }

        .pdf li {
            list-style-type: none;
        }
        /*eind globla pdf css*/

        .pdf .title {
            height: 60px;
            width: 100%;
        }

        .pdf .title img {
            width: 60px;
            display: inline-block;
        }

        .pdf .title h1 {
            display: inline-block;
        }
        /*eind title css*/

        .pdf .company-info {
            width: 50%;
            display: inline-block;
        }
        /*eind company info css*/

        .pdf .user-info {
            margin-top: 60px;
            width: 50%;
            display: inline-block;
        }
        /*eind user info css*/

    </style>

    {{--AANGEZIEN PDF GEEN REFERENTIE NAAR EEN CSS STYLESHEET PAKT IS HET HIER GESCHREVEN--}}

</head>

<body>
    <div class="container">
        <div class="pdf">
            <div class="title">
                <img src="img/vlambeer-logo.png" alt="logo">
                <h1>Vlambeer</h1>
            </div>
            <div class="company-info">
                <ul>
                    <li>Vlambeer</li>
                    <li>Neude 5, 3512 AD Utrecht, The Netherlands</li>
                    <li>KvK Utrecht: 50851314</li>
                    <li>BTW nr. NL: 4292.28.999.B.01</li>
                    <li>IBAN: NL26INGB0220026800</li>
                    <li>BIC: INGBNZ9C</li>
                </ul>
            </div>
            <div class="user-info">
                <ul>
                    <li><?php echo $first_name ?></li>
                    <li><?php ?></li>
                    <li><?php ?></li>
                    <li><?php ?></li>
                    <li><?php ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
