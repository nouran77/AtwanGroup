@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('plugins/slim/slim.min.css') }}">
    <style>
        .height-80 {
            height: 80px;
        }
        .mt-20 {
            margin-top: 20px;
        }
        .mt-50 {
            margin-top: 50px;
        }
        .prl-0 {
            padding-right: 0;
            padding-left: 0;
        }
        .pl-0 {
            padding-left: 0;
        }
        .pr-0 {
            padding-right: 0;
        }
        .badge-success {
            background: #080;
            color: #fff;
        }
        .remove_field {
            position: absolute;
            right: 10px;
            top: 7px;
        }
        .remove_input {
            position: relative!important;
        }
        i.btn {
            padding: 5px!important;
            line-height: 10px!important;
            font-size: 10px!important;
        }
    </style>
@endsection

@section('content')
    <div class="col-md-12">
        <form method="POST" id="edit-subCategory-form">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="modal-header">
                <h4 class="modal-title text-center">تعديل كاتجوري فرعي</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 prl-20">
                        <div class="form-group clearfix">
                            <div class="col-md-12 prl-0">
                                <input type="hidden" name="id" value="{{ $subCategory->id }}">
                                <div class="form-group">
                                    <label for="name">اسم الكاتجوري الفرعي</label>
                                    <input type="text" value="{{ $subCategory->name_english }}" name="name_english" id="name" class="form-control" placeholder="اسم الكاتجوري الفرعي">
                                </div>
                                <div class="form-group">
                                    <label for="description">وصف الكاتجوري الفرعي</label>
                                    <input type="text" value="{{ $subCategory->name_arabic }}" name="name_arabic" id="description" class="form-control" placeholder="اسم الكاتجوري الفرعي">
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="name">اسم الرابط</label>--}}
                                    {{--<input type="text" value="{{ $subCategory->slug->slug }}" name="slug" id="slug" class="form-control" placeholder="اسم الرابط">--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <div class="col-md-6 pl-0">
                                <label for="category">الكاتجوري الرئيسي</label>
                                <select name="category" id="category" class="form-control">
                                    <option selected disabled>الكاتجوري الرئيسي</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if($category->id == $subCategory->category_id) {{ 'selected' }} @endif>{{ $category->name_english }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ URL('admin/categories') }}" class="btn btn-default"><i class="fa fa-arrow-back"></i> Back</a>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/slim/slim.kickstart.min.js') }}"></script>
    <script>

        $("form#edit-subCategory-form").on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ URL('admin/categories/edit-subCategory') }}',
                data: new FormData(this),
                type: 'POST',
                processData: false,
                contentType: false,
                success: function(response) {
                    window.location = '{{ URL('admin/categories') }}';
                },
                error: function(response) {

                },
                beforeSend: function() {

                }
            });
        });
    </script>
@endsection