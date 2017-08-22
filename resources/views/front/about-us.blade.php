@extends('layouts.app')
@section('content')

    <section id="company-information" class="padding wow fadeIn" data-wow-duration="400ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow bounceInLeft" data-wow-duration="1500ms" data-wow-delay="300ms" align="center">
                    <img src="{{ asset('images/slider/slider2.JPG') }}" class="img-responsive" alt="">
                </div>
                <div class="col-sm-12 padding-top wow bounceInRight" data-wow-duration="1500ms" data-wow-delay="300ms" align="left">
                    <p style="font-weight: 500; font-size: 18px;">{{ trans('about.about1') }}</p>
                    <p style="font-weight: 500; font-size: 18px;">{{ trans('about.about2') }}</p>
                    <p style="font-weight: 500; font-size: 18px;">{{ trans('about.about3') }}</p>
                    <p style="font-weight: 500; font-size: 18px;">{{ trans('about.about4') }}</p>
                </div>
            </div>
        </div>
    </section>
    @endsection