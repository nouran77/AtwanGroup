@extends('layouts.app')
@section('content')
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <ul class="sort-destination gallery-grid" data-sort-id="gallery">
                        <li class="col-md-6 col-sm-6 grid-item format-image images">
                            <div class="grid-item-inner">
                                <a href="{{ asset('images/exclusive/Finixx.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('images/exclusive/Finixx.jpg') }}" alt=""> </a>
                                <div class="grid-content">
                                    <h3 class="post-title">{{ trans('finixx.title') }}</h3>
                                </div>
                                <div class="grid-content">
                                    <h3 style="color: #ff0000; font-weight: bold;">{{ trans('finixx.history') }}</h3>
                                    <p>{{ trans('finixx.history1') }}</p>
                                </div>
                                <div class="grid-content">
                                    <h3 style="color: #ff0000; font-weight: bold;">{{ trans('finixx.green') }}</h3>
                                    <p>{{ trans('finixx.green1') }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6 col-sm-6 grid-item format-image images">
                            <div class="grid-item-inner">
                                <a href="{{ asset('images/exclusive/EAS.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('images/exclusive/EAS.jpg') }}" alt=""> </a>
                                <div class="grid-content">
                                    <h3 class="post-title">{{ trans('eas.title') }}</h3>
                                </div>
                                <div class="grid-content">
                                    <h3 style="color: #ff0000; font-weight: bold;">{{ trans('eas.history') }}</h3>
                                    <p>{{ trans('eas.history1') }}</p>
                                </div>
                                <div class="grid-content">
                                    <h3 style="color: #ff0000; font-weight: bold;">{{ trans('eas.mission') }}</h3>
                                    <p>{{ trans('eas.mission1') }}</p>
                                </div>
                                <div class="grid-content">
                                    <h3 style="color: #ff0000; font-weight: bold;">{{ trans('eas.vission') }}</h3>
                                    <p>{{ trans('eas.vission1') }}</p>
                                </div>
                                <div class="grid-content">
                                    <h3 style="color: #ff0000; font-weight: bold;">{{ trans('eas.environment') }}</h3>
                                    <p>{{ trans('eas.environment1') }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
    @endsection