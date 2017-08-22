@extends('layouts.app')
@section('content')
    <section id="company-information" class="padding wow fadeIn" data-wow-duration="400ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow bounceInLeft" data-wow-duration="1500ms" data-wow-delay="300ms" align="center">
                    <img src="{{ asset('images/about/ceo.jpg') }}" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 wow bounceInRight" data-wow-duration="1500ms" data-wow-delay="300ms" align="left">
                    <h1 align="left" style="font-weight: bold;color: #000;">{{ trans('ceo.message') }}</h1>
                    <p style="font-size: 15px; color: #000;">{{ trans('ceo.ceo1') }}</p>
                    <p style="font-size: 15px; color: #000;">{{ trans('ceo.ceo2') }}</p>
                    <p style="font-size: 15px; color: #000;">{{ trans('ceo.ceo3') }}</p>
                    <p style="font-size: 15px; color: #000;">{{ trans('ceo.ceo4') }}</p>
                    <h2 align="right" style="color: #000;">{{ trans('ceo.name') }}</h2>
                    <h5 align="right" style="color: #000;">{{ trans('ceo.title') }}</h5>
                </div>
            </div>
        </div>
    </section>
    @endsection