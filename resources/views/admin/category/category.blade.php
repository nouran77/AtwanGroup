@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('plugins/datatable/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/expandable-table/css/bootstrap-table-expandable.css') }}">
    <style>
        .lh-80 {
            line-height: 80px!important;
        }
        .mt-20 {
            margin-top: 20px;
        }
        .mt-50 {
            margin-top: 50px;
        }
        .pl-0 {
            padding-left: 0;
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
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                <button class="btn btn-info btn-block" data-toggle="modal" data-target="#add-new-category"> اضف كاتجوري جديد</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#add-subCategory-modal"> اضف كاتجوري فرعي</button>
            </div>
        </div>

        <div class="col-md-12 mt-20">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach($categories as $category)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $category->id }}">
                                    {{ $category->name_english }}
                                </a>
                                <span class="badge">{{ count($category->subCategories) }}</span>
                                <span class="pull-left">
                                    <i class="btn btn-info glyphicon glyphicon-edit edit-category" href="javascript:;" data-edit="{{ $category->id }}"></i>
                                    <i class="btn btn-danger glyphicon glyphicon-trash delete-category" href="javascript:;" data-delete="{{ $category->id }}"></i>
                                </span>
                            </h4>
                        </div>
                        <div id="collapse{{ $category->id }}" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <table class="table table-hover table-striped subCategory-table">
                                    <thead>
                                    <tr>
                                        <th class="text-center"> اسم الكاتجوري الفرعي بالانجليزي</th>
                                        <th class="text-center"> اسم الكاتجوري الفرعي بالعربي</th>
                                        {{--<th class="text-center">اسم الرابط</th>--}}
                                        <th class="text-center">الاعدادات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category->subCategories as $subCategory)
                                        <tr>
                                            <td class="text-center lh-20">{{ $subCategory->name_english }}</td>
                                            <td class="text-center lh-20">{{ $subCategory->name_arabic }}</td>
                                            {{--<td class="text-center lh-20">{{ $subCategory->slug->slug }}</td>--}}
                                            <td class="text-center lh-20">
                                                <a href="{{ url('admin/categories/edit-subCategory') }}/{{ $subCategory->id }}" data-edit="{{ $subCategory->id }}"><i class="btn btn-info glyphicon glyphicon-edit edit-subCategory"></i></a>
                                                <i class="btn btn-danger glyphicon glyphicon-trash delete-subCategory"  data-delete="{{ $subCategory->id }}"></i>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade mt-50" id="add-new-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" id="add-category">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">اضف كاتجوري جديد</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label for="category-name">اسم الكاتجوري بالانجليزي<span class="mandatory">*</span></label>
                                    <input autofocus id="category-name" type="text" name="name_english" class="form-control" placeholder="اسم الكاتجوري بالانجليزي">
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="category-name">اسم الرابط<span class="mandatory">*</span></label>--}}
                                    {{--<input autofocus id="category-slug" type="text" name="slug" class="form-control" placeholder="اسم الرابط">--}}
                                {{--</div>--}}

                                <div class="form-group">
                                    <label for="category-name">اسم الكاتجوري بالعربي<span class="mandatory">*</span></label>
                                    <input autofocus id="category-name" type="text" name="name_arabic" class="form-control" placeholder="اسم الكاتجوري بالعربي">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" id="edit-category-form">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">تعديل الكاتجوري</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id">
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>اسم الكاتجوري بالانجليزي <span class="mandatory">*</span></label>
                                    <input type="text" name="name_english" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>اسم الكاتجوري بالعربي <span class="mandatory">*</span></label>
                                    <input type="text" name="name_arabic" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>اسم الرابط <span class="mandatory">*</span></label>
                                    <input type="text" name="slug" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade mt-50" id="add-subCategory-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" id="add-subCategory">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">اسم الكاتجوري الفرعي</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>اسم الكاتجوري الفرعي بالانجليزي<span class="mandatory">*</span></label>
                                    <input type="text" name="name_english" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>اسم الكاتجوري الفرعي بالعربي<span class="mandatory">*</span></label>
                                    <input type="text" name="name_arabic" class="form-control">
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label>اسم الرابط <span class="mandatory">*</span></label>--}}
                                    {{--<input type="text" name="slug" class="form-control">--}}
                                {{--</div>--}}
                                <div class="form-group clearfix">
                                    <div class="col-md-6 pl-0">
                                        <label for="category">الكاتجوري الرئيسي</label>
                                        <select name="category" id="category" class="form-control">
                                            <option selected disabled>اختار الكاتجوري</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name_english }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('plugins/expandable-table/js/bootstrap-table-expandable.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('.subCategory-table').DataTable();
        });

        $("form#add-category").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: 'addNewCategory',
                data: new FormData(this),
                processData: false,
                contentType: false,
                type: "POST",
                success: function(response) {
                    window.location.reload();
                },
                error: function(response) {
                    var errors = response.responseJSON;
                    $.each(errors, function(name, error) {
                        $("form#add-category input[name='"+name_english+"']").parents('.form-group').addClass('has-error').append("<p class='text-danger'>"+error+"</p>");

                    });
                },
                beforeSend: function() {
                }
            });
        });

        $(".edit-category").on("click", function() {
            var id = $(this).data('edit');
            $.ajax({
                url: 'editCategory',
                data: {id: id},
                type: "GET",
                success: function(response) {
                    $("form#edit-category-form input[name='id']").val(response.id);
                    $("form#edit-category-form input[name='name_english']").val(response.name_english);
                    $("form#edit-category-form input[name='name_arabic']").val(response.name_arabic);
                    $("#edit-category-modal").modal('show');


                },
                error: function(response) {

                },
                beforeSend: function() {
                }
            });
        });

        $("form#edit-category-form").on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: 'updateCategory',
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
//                    console.log(response);
                    window.location.reload();
                },
                error: function(response) {

                },
                beforeSend: function() {
                }
            });
        });

        $(".delete-category").on("click", function() {
            var id = $(this).data('delete');
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this Category!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    $.ajax({
                        url: 'deleteCategory',
                        data: {id: id, _token: '{{ csrf_token() }}', _method: 'DELETE'},
                        type: "DELETE",
                        success: function(response) {
                            swal("Deleted!", "Category has been deleted.", "success");
                            window.location.reload();
                        },
                        error: function(response) {

                        },
                        beforeSend: function() {
                        }
                    });
                });
        });

        $("form#add-subCategory").on('submit', function(event){
            event.preventDefault();

            $.ajax({
                url: '{{ URL("admin/addSubCategory") }}',
                data: new FormData(this),
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(response) {
                    window.location.reload();
                },
                error: function(response) {

                },
                beforeSend: function () {

                }
            });
        });

        $(".delete-subCategory").on("click", function() {
            var id = $(this).data('delete');
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this sub Category!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    $.ajax({
                        url: 'deleteSubCategory',
                        data: {id: id, _token: '{{ csrf_token() }}', _method: 'DELETE'},
                        type: "DELETE",
                        success: function(response) {
                            swal("Deleted!", "Sub Category has been deleted.", "success");
                            window.location.reload();
                        },
                        error: function(response) {

                        },
                        beforeSend: function() {
                        }
                    });
                });
        });
    </script>
@endsection