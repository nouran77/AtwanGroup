@extends('layouts.app')
@section('content')
    {{--<div class="hero-area">--}}
        <!-- START REVOLUTION SLIDER 4.5.0 fullwidth mode -->
        <!--banner-starts-->
    <div class="skitter skitter-large" style="margin-top: 16px;">
        <ul>
            <li>
                <a href="#cut">
                    <img src="{{ asset('images/slider/slider1.jpg') }}" class="cut" />
                </a>
            </li>
            <li>
                <a href="#swapBlocks">
                    <img src="{{ asset('images/slider/slider2.jpg') }}" class="swapBlocks" />
                </a>
            </li>
            <li>
                <a href="#horizontal">
                    <img src="{{ asset('images/slider/slider4.jpg') }}" class="horizontal" />
                </a>
            </li>
            <li>
                <a href="#circlesInside">
                    <img src="{{ asset('images/slider/slider3.jpg') }}" class="circlesInside" />
                </a>
            </li>
            <li>
                <a href="#swapBlocks">
                    <img src="{{ asset('images/slider/slider8.jpg') }}" class="swapBlocks" />
                </a>
            </li>
            <li>
                <a href="#circlesRotate">
                    <img src="{{ asset('images/slider/slider6.jpg') }}" class="circlesRotate" />
                </a>
            </li>
            <li>
                <a href="#fadeFour">
                    <img src="{{ asset('images/slider/slider7.jpg') }}" class="fadeFour" />
                </a>
            </li>
            <li>
                <a href="#cubeHide">
                    <img src="{{ asset('images/slider/slider5.jpg') }}" class="cubeHide" />
                </a>
            </li>
        </ul>
    </div>
        {{--<!--banner-ends-->--}}
        <script>
            $(document).ready(function () {
                $(".skitter-large").skitter({
                    navigation: true,
                    auto_play: true,
                    interval: 1000
                });
            });
        </script>
    {{--</div>--}}
    <!-- Utiity Bar -->
    <div class="utility-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-8">
                    <div class="toggle-make">
                        <a href="#"><i class="fa fa-navicon"></i></a>
                        <span>Browse by body style</span>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-4">
                    <ul class="utility-icons social-icons social-icons-colored">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="by-type-options">
            <div class="container">
                <div class="row">
                    <ul class="owl-carousel carousel-alt" data-columns="6" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="3" data-items-tablet="4">
                        <li class="item"> <a href="results.grid.html"><img src="images/body-types/wagon.png" alt=""> <span>Wagon</span></a></li>
                        <li class="item"> <a href="results.grid.html"><img src="images/body-types/minivan.png" alt=""> <span>Minivan</span></a></li>
                        <li class="item"> <a href="results.grid.html"><img src="images/body-types/coupe.png" alt=""> <span>Coupe</span></a></li>
                        <li class="item"> <a href="results.grid.html"><img src="images/body-types/convertible.png" alt=""> <span>Convertible</span></a></li>
                        <li class="item"> <a href="results.grid.html"><img src="images/body-types/crossover.png" alt=""> <span>Crossover</span></a></li>
                        <li class="item"> <a href="results.grid.html"><img src="images/body-types/suv.png" alt=""> <span>SUV</span></a></li>
                        <li class="item"> <a href="results.grid.html"><img src="images/body-types/minicar.png" alt=""> <span>Minicar</span></a></li>
                        <li class="item"> <a href="results.grid.html"><img src="images/body-types/sedan.png" alt=""> <span>Sedan</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full padding-b0">
            <div class="container">
                    <!-- Left Column -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Welcome text -->
                            <h1 class="page-title">{{ trans('home.welcome') }}</h1>
                            <p>{{ trans('home.about1') }}</p>
                            <p>{{ trans('home.about2') }}</p>
                            <p><a href="{{ url('about-us') }}" class="btn btn-lg btn-primary">{{ trans('home.about') }}</a></p>

                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6">
                            <!-- Additional Service -->
                            <div class="service-block">
                                <a href="about.html"><img src="{{ asset('images/about/about1.jpg') }}" alt="" style="margin-top: 60px;"></a>
                            </div>
                        </div>
                </div>
                <div class="spacer-60"></div>
            </div>
            <div class="dark-bg parallax parallax1" style="background-image:url({{ asset('images/slider/s2.jpg') }});">
                <div class="overlay-transparent padding-tb75">
                    <div class="container">
                        <!-- Recently Listed Vehicles -->
                        <section class="listing-block recent-vehicles">
                            <div class="listing-container">
                                <div class="carousel-wrapper">
                                    <div class="row">
                                        <ul class="owl-carousel" id="vehicle-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="yes" data-single-item="no" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="3" data-items-mobile="1">
                                            <li class="item">
                                                <div class="vehicle-block format-standard">
                                                    <img src="{{ asset('images/products/product1.jpeg.png') }}" alt="">
                                                    <div class="vehicle-block-content">
                                                        <span class="label label-default vehicle-age">LTR</span>
                                                        <span class="label label-success premium-listing">Bridgestone</span>
                                                        <h5 class="vehicle-title">ALENZA PLUS</h5>
                                                        <h5 class="vehicle-meta">Atwan Group</h5>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="vehicle-block format-standard">
                                                    <img src="{{ asset('images/products/product2.png') }}" alt="">
                                                    <div class="vehicle-block-content">
                                                        <span class="label label-default vehicle-age">PCR</span>
                                                        <span class="label label-success premium-listing">Bridgestone</span>
                                                        <h5 class="vehicle-title">RE760 SPORT</h5>
                                                        <span class="vehicle-meta">Atwan Group</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="vehicle-block format-standard">
                                                    <img src="{{ asset('images/products/product3.png') }}" alt="">
                                                    <div class="vehicle-block-content">
                                                        <span class="label label-default vehicle-age">TBR</span>
                                                        <span class="label label-success premium-listing">Bridgestone</span>
                                                        <h5 class="vehicle-title"><a href="#">G580</a></h5>
                                                        <span class="vehicle-meta">Atwan Group</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="lgray-bg make-slider">
                <div class="container">
                    <!-- Search by make -->
                    <div class="row">
                        <div class="col-md-12 col-sm-8">
                            <div class="row">
                                <ul class="owl-carousel" id="make-carousel" data-columns="6" data-autoplay="1000" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="5" data-items-desktop-small="4" data-items-tablet="4" data-items-mobile="3">
                                    @foreach($brands as $brand)
                                    <li class="item"><img src="{{ asset('img/brands') }}/{{ $brand->image }}" alt="{{ $brand->name_english }}" class="grow"></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
    <!-- Start site footer -->
@endsection