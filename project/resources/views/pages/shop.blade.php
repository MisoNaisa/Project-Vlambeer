@extends('layout.master')

@section('bodyAttributes')
    class="shop"
@endsection

@section('section')
        <div class="container">
            <div class="row shop-hotfix">
                <div class="col-md-2 aside">
                    <p class="title">Vlambeer Shop</p>

                    <div class="list-group">
                        <a href="#" class="list-group-item">Clothes</a>
                        <a href="#" class="list-group-item">Music</a>
                        <a href="#" class="list-group-item">Bundles</a>
                        <a href="#" class="list-group-item">Miscellaneous</a>
                    </div>

                    <div class="login list-group">
                        <a href="#" class="list-group-item">Login</a>
                        <a href="#" class="list-group-item">Register</a>
                        <p class="list-group-item"><i class="fa fa-shopping-cart"></i></p>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="flexslider">
                        <ul class="slides">
                            @foreach($gameInfo['images'] as $img)
                            <li><img src="{{ $img['medium_url'] }}" /></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="row">

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <a href="#"></a>
                                <div id="sale"></div>
                                <img src="http://lorempixel.com/320/150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$94.99</h4>
                                    <h4><a href="#">Product</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <a href="#"></a>
                                <img src="http://lorempixel.com/320/150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$94.99</h4>
                                    <h4><a href="#">Product</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <a href="#"></a>
                                <img src="http://lorempixel.com/320/150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$94.99</h4>
                                    <h4><a href="#">Product</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <a href="#"></a>
                                <div id="sale"></div>
                                <img src="http://lorempixel.com/320/150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$94.99</h4>
                                    <h4><a href="#">Product</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <a href="#"></a>
                                <div id="sale"></div>
                                <img src="http://lorempixel.com/320/150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$94.99</h4>
                                    <h4><a href="#">Product</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <a href="#"></a>
                                <img src="http://lorempixel.com/320/150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$94.99</h4>
                                    <h4><a href="#">Product</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <a href="#"></a>
                                <img src="http://lorempixel.com/320/150" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$94.99</h4>
                                    <h4><a href="#">Product</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
@endsection