@extends('layout.master')

@section('section')
    <div class="container contact">
        <div class="col-xs-6">
            <h3>Contact</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Adipisci aliquid autem dignissimos eum ex explicabo illo ipsum laboriosam laborum,
                maxime minus molestias natus odio porro quibusdam tenetur voluptas voluptate voluptatibus.
            </p>
        </div>

        <div class="col-xs-6">
            <div class="col-xs-2 rami picture">
                {{--<img src="img/team_rami.png" alt="team_rami">--}}
            </div>
            <div class="col-xs-10">
                <p>
                    Rami Ismail<br>
                    Business and Development <br>
                    rami@vlambeer.com <br>
                    @tha_rami <br>
                </p>
            </div>
            <div class="col-xs-2 jan picture">
                {{--<img src="img/team_jw.png" alt="team_jw">--}}
            </div>
            <div class="col-xs-10">
                <p>
                    Rami Ismail<br>
                    Business and Development <br>
                    rami@vlambeer.com <br>
                    @tha_rami <br>
                </p>
            </div>
        </div>
        <div class="companyLocation col-xs-12">
            <p>
                Facebook<br><br>
                info@vlambeer.com | Neude 5, 3512 AD<br>
                Utrecht, The Netherlands | +316 21 20 63 63
            </p>
            <iframe class="maps" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJvwsb9kRvxkcR1a9sC9TEo9k&key=AIzaSyCcK7dBjnowNw9k4E0pfeLCN-7wcEil66E" allowfullscreen></iframe>
        </div>
    </div>
@endsection