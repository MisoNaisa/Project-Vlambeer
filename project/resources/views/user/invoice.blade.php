<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style>
        .pdf {
            position: relative;
            width: 100%;
            font-family: 'Open Sans', sans-serif;
        }

        .pdf .bold {
            font-weight: 600;
        }

        .pdf ul {
            padding-left: 0;
        }

        .pdf li {
            list-style-type: none;
        }
        /*eind global pdf css*/

        .pdf .title {
            height: 60px;
            margin: 0 0 10px -10px;
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
            width: 70%;
            display: inline-block;
        }
        /*eind company info css*/

        .pdf .user-info {
            display: inline-block;
        }
        /*eind user info css*/
        /*begin product info*/
        .pdf table .bold td {
            font-weight: 600;
        }
        /*eind product info*/
    </style>

</head>
<body>
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
                <li>BTW nr: NL: 4292.28.999.B.01</li>
                <li>IBAN: NL26INGB0220026800</li>
                <li>BIC: INGBNZ9C</li>
            </ul>
        </div>

        <div class="user-info">
            <ul>
                @if(isset($user['insertion']))
                    <li>{{$first_name . ' ' . $insertion . ' ' . $last_name}}</li>
                    @else
                    <li>{{$first_name . ' ' . $insertion . ' ' . $last_name}}</li>
                @endif
                <li>{{$address . ' ' . $housenumber}}</li>
                <li>{{$zipcode . ' ' . $city }}</li>
                <li>{{$country}}</li>
                <li>{{$phonenumber}}</li>
           </ul>
        </div>

        <div class="product-info">
                <table style="width: 100%" class="table">
                    <tr class="bold">
                        <td>Product id</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Amount</td>
                        <td>Subtotal in euro</td>
                    </tr>
                    @foreach($items as $item)
                        <tr>
                            <td>{{$item['product_id']}}</td>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['unitprice']}}</td>
                            <td>{{$item['amount']}}</td>
                            <td>{{$item['subtotal']}}</td>
                        </tr>
                    @if($item === end($items))
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bold">Ex. BTW</td>
                            <td>{{ round($item['exbtw']*0.79, 2) }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bold">BTW</td>
                            <td>{{ round($item['exbtw']*0.21, 2) }}</td>
                        </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="bold">BTW percentage</td>
                                <td>21%</td>
                            </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bold">Total</td>
                            <td>{{ $item['exbtw'] }}</td>
                        </tr>
                        @endif
                    @endforeach
                </table>
            </ul>
        </div>
    </div>
</body>
</html>#