@extends('layouts.app')
@section('content')
        <!-- Start Body Content -->
        <div class="main" role="main">
            <div id="content" class="content full">
                <div class="container">
                    <div class="row">
                        <!-- Listing Results -->
                        <div class="col-md-12 results-container" align="center">
                            <div class="results-container-in" align="center">
                                <div id="results-holder" class="results-grid-view">
                                    <!-- Result Item -->
                                    @foreach($products as $product)
                                    <div class="result-item format-standard">
                                        <div class="result-item-image">
                                            <a href="{{ route('productDetails',$product->id) }}" class="media-box"><img src="{{ asset('img/products') }}/{{ $product->image }}" alt="{{ $product->name_english }}"></a>
                                            <span class="label label-default vehicle-age">{{ \App\SubCategory::find($product->subcategory_id)->name_english }}</span>
                                            @if(isset($product['sub_subcategory_id']))
                                            <span class="label label-default vehicle-age">{{ \App\SubSubCategory::find($product->sub_subcategory_id)->name_english }}</span>
                                            @endif
                                            <span class="label label-success premium-listing">{{ $product->name_english }}</span>
                                            <div class="result-item-view-buttons">
                                                <a href="{{ route('productDetails',$product->id) }}"><i class="fa fa-plus"></i> View details</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Body Content -->
    @endsection
