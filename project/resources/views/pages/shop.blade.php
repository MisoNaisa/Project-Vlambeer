@extends('layout.master')

@section('bodyAttributes')
    class="shop"
@endsection

@section('section')
    <div class="container">
        <div class="shop-header">
            <ul>
                <li>Login</li>
                <li>Register</li>
                <li><i class="fa fa-shopping-cart"></i></li>
            </ul>
        </div>
        <h1>Merchandise</h1>

        <ul id="slippry-demo">
            <li>
                <a href="#slide1"><img src="assets/img/slippry-01.jpg" alt="Welcome to Slippry!"></a>
            </li>
            <li>
                <a href="#slide2"><img src="assets/img/slippry-02.jpg"  alt="This is an awesome jQuery slider plugin."></a>
            </li>
            <li>
                <a href="#slide3"><img src="assets/img/slippry-03.jpg" alt="Check it out, you are going to <span class='red'>?</span> it :)"></a>
            </li>
        </ul>

        <div class="products-overview">
            <div class="row col-md-12">
                <div class="col-md-4">
                    <div class="product-box">
                        <a href="#"></a>
                        <img src="http://lorempixel.com/200/200" alt="product">
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-box">
                        <a href="#"></a>
                        <img src="http://lorempixel.com/200/200" alt="product">
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-box">
                        <a href="#"></a>
                        <img src="http://lorempixel.com/200/200" alt="product">
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-md-12">
                <div class="col-md-4">
                    <div class="product-box">
                        <a href="#"></a>
                        <div id="sale">
                            <h3>Sale</h3>
                        </div>
                        <img src="http://lorempixel.com/200/200" alt="product">
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-box">
                        <a href="#"></a>
                        <img src="http://lorempixel.com/200/200" alt="product">
                        <div class="product-info">
                            <h3>Product</h3>
                            <div class="price">
                                <p>$67,95</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-box">
                        <a href="#"></a>
                        <div id="sale">
                            <h3>Sale</h3>
                        </div>
                        <img src="http://lorempixel.com/200/200" alt="product">
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