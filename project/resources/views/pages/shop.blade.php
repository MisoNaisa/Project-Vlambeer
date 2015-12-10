@extends('layout.master')

@section('bodyAttributes')
    class="shop"
@endsection

@section('section')
    <div class="container">
        <div class="shop-header">
            <div class="posfixed">
                <ul>
                    <li class="noselect"></li>
                    <li>Login</li>
                    <li>Register</li>
                    <li><i class="fa fa-shopping-cart"></i></li>
                    <li class="noselect"></li>
                </ul>
            </div>
        </div>

        <h1 id="shop-title" >Merchandise</h1>

        <div class="flexslider">
            <ul class="slides">
                @foreach($gameInfo['images'] as $img)
                    <li><img src="{{ $img['medium_url'] }}" /></li>
                @endforeach
            </ul>
        </div>

        <div class="products-overview">
            <div class="row col-md-12">
                <div class="col-md-3">
                    <div class="product-box">
                        <a href="#"></a>
                        <div class="product-photo" style="background: url('http://lorempixel.com/200/200');"></div>
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-box">
                        <div id="sale">Sale</div>
                        <a href="#"></a>
                        <div class="product-photo" style="background: url('http://lorempixel.com/200/200');"></div>
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-box">
                        <a href="#"></a>
                        <div class="product-photo" style="background: url('http://lorempixel.com/200/200');"></div>
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-box">
                        <a href="#"></a>
                        <div class="product-photo" style="background: url('http://lorempixel.com/200/200');"></div>
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-overview">
            <div class="row col-md-12">
                <div class="col-md-3">
                    <div class="product-box">
                        <a href="#"></a>
                        <div class="product-photo" style="background: url('http://lorempixel.com/200/200');"></div>
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-box">
                        <a href="#"></a>
                        <div class="product-photo" style="background: url('http://lorempixel.com/200/200');"></div>
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-box">
                        <div id="sale">Sale</div>
                        <a href="#"></a>
                        <div class="product-photo" style="background: url('http://lorempixel.com/200/200');"></div>
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-box">
                        <a href="#"></a>
                        <div class="product-photo" style="background: url('http://lorempixel.com/200/200');"></div>
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection