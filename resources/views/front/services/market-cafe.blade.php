@extends('layouts.app')
@section('content')
    <section id="company-information" class="wow fadeIn" data-wow-duration="400ms" data-wow-delay="300ms" style="margin-top: 40px;">
        {{--<div class="col-sm-6 wow bounceInLeft" data-wow-duration="2000ms" data-wow-delay="1000ms" align="center">--}}
            {{--<h2 style="font-size: 25px;">{{ trans('cafe.cafe') }}</h2>--}}
        {{--</div>--}}
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow bounceInLeft" data-wow-duration="2000ms" data-wow-delay="1000ms">
                    <img src="{{asset('images/cafe/cafe1.jpg')}}" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top wow bounceInRight" data-wow-duration="2000ms" data-wow-delay="1000ms" style="top:50px;">
                    <p style="font-size: 20px;">{{ trans('cafe.cafe1') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section id="company-information" class="wow fadeIn" data-wow-duration="600ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 padding-top wow bounceInLeft" data-wow-duration="2000ms" data-wow-delay="2000ms" style="top:50px;">
                    <p style="font-size: 20px;">{{ trans('cafe.cafe2') }}</p>
                </div>
                <div class="col-sm-6 wow bounceInRight" data-wow-duration="2000ms" data-wow-delay="2000ms">
                    <img src="{{asset('images/cafe/cafe2.jpg')}}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="company-information" class="wow fadeIn" data-wow-duration="700ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow bounceInLeft" data-wow-duration="2000ms" data-wow-delay="2500ms" style="top:-50px;">
                    <img src="{{asset('images/cafe/cafe3.jpg')}}" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top wow bounceInRight" data-wow-duration="2000ms" data-wow-delay="2500ms">
                    <p style="font-size: 20px;">{{ trans('cafe.cafe3') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection