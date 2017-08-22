@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('plugins/datatable/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert/sweetalert.css') }}">
    <style>
        .mt-20 {
            margin-top: 20px;
        }
        .mt-50 {
            margin-top: 50px;
        }
        .slim.img-responsive {
            height: 150px !important;
            width: 150px !important;
        }
    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#add-new-brand-modal">
                    <i class="fa fa-plus"></i> إضافة براند جديدة
                </button>
            </div>
        </div>
        <div class="col-md-12 mt-20">
            <table class="table table-hover table-striped" id="brands-table">
                <thead>
                <tr>
                    <th>إسم البراند بالانجليزي</th>
                    <th>اسم البراند بالعربي</th>
                    <th>صورة البراند</th>
                    <th>الإعدادات</th>
                </tr>
                </thead>
                <tbody id="brands-output">
                @if(isset($brands))
                    @forelse($brands as $brand)
                        <tr role="row">
                            <td>{{ $brand->name_english }}</td>
                            <td>{{ $brand->name_arabic }}</td>
                            <td>
                                <img src="{{  asset('img/brands') }}/{{ $brand->image }}" alt="{{ $brand->name_english }}" class="img-responsive img-center"/>
                            </td>
                            <td></td>
                        </tr>
                    @empty
                        <h3>No Brands</h3>
                    @endforelse
                @else
                    <h3>No Brands</h3>
                @endif
                </tbody>
            </table>
        </div>
    </div>


    <!--========================================
	=            Add New Brand Modal            =
	=========================================-->
    <div class="modal fade" tabindex="-1" role="dialog" id="add-new-brand-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">إضافة براند جديدة</h4>
                </div>
                <form action="#" id="add-new-brand-form" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <input type="hidden" name="type" value="brand">
                                    <label>إسم براند بالانجليزي <span class="mandatory">*</span></label>
                                    <input type="text" name="name_english" class="form-control" placeholder="إسم البراند بالانجليزي">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>اسم البراند بالعربي<span class="mandatory">*</span></label>
                                    <textarea type="text" name="name_arabic" placeholder="اسم البراند بالعربي" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="form-group clearfix">
                                    <div class="slim"
                                         data-label="اضع صورة البراند هنا"
                                         data-size="150,150"
                                         data-ratio="1:1" style="height: 150px; width: 150px;">
                                        <input type="file" name="image" class="form-control">
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
    <!--====  End of Add New Brand Modal  ====-->

    <!--========================================
    =            Edit Brand Modal            =
    =========================================-->
    <div class="modal fade" tabindex="-1" role="dialog" id="edit-new-brand-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">تعديل البراند</h4>
                </div>
                <form action="#" id="edit-new-brand-form" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label>إسم البراند بالانجليزي<span class="mandatory">*</span></label>
                            <input type="hidden" name="id">
                            <input type="text" name="name_english" class="form-control" placeholder="إسم البراند بالانجليزي">
                        </div>
                        <div class="form-group">
                            <label>إسم البراند بالعربي <span class="mandatory">*</span></label>
                            <textarea type="text" name="name_arabic" placeholder="وصف الدولة" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group clearfix">
                                    <div class="edit-flag"
                                         data-label="اضع صورة البراند هنا"
                                         data-size="150,150"
                                         data-ratio="1:1" style="height: 150px; width: 150px;">
                                        <input type="file" class="image" name="image" class="form-control">
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
    <!--====  End of Edit Brand Modal  ====-->

@endsection


@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#brands-table').DataTable();
        });

        $(function(){

            var getBrands = function(){
                $.ajax({
                    url: 'getAllBrands',
                    type: 'GET',
                    success: function(response) {
                        var brands_output = '';
                        $.each(response.brands, function(index, value){
                            brands_output += '<tr><td class="text-center">'+
                                value.name_english+'</td><td>'+
                                value.name_arabic+'</td><td>' +
                                '</td><td><img src="{{ asset('img/brands') }}/'+value.image+'" class="img-responsive"></td>'+
                                '<td class="text-center"><i class="btn btn-info glyphicon glyphicon-edit view-brand" data-edit="'+value.id+'"></i></td>'+
                                '<td class="text-center"><i class="btn btn-danger glyphicon glyphicon-trash remove-brand" data-delete="'+value.id+'"></i></td></tr>';


                        });
                        $('#brands-output').html(brands_output);
                    }
                });
            }

            getBrands();


            $("form#add-new-brand-form").on('submit', function(event){
                event.preventDefault();

                $.ajax({
                    url: "",
                    type: 'POST',
                    data: $(this).serialize(), // $(this).serializeArray(), new FormData(this)
                    success: function(response) {
                        getBrands();
                        document.getElementById("add-new-brand-form").reset();
                        $('#add-new-brand-modal').modal('hide');
                    },
                    error: function(response) {

                    },
                    beforeSend: function() {

                    }
                });
            });

            $('#brands-output').on('click', '.view-brand',function(){
                var id = $(this).data('edit');

                $.ajax({
                    url: 'editBrand',
                    data: {id: id},
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        $('#edit-new-brand-form input[name=id]').val(response.id);
                        $('#edit-new-brand-form input[name=name_english]').val(response.name_english);
                        $('#edit-new-brand-form textarea[name=name_arabic]').val(response.name_arabic);
                        $('#edit-new-brand-form input.image').append("<img class='img-responsive edit-brand-image' name='image' src='{{ asset('img/brands') }}/"+response.image+"'/>");
                        $('.edit-flag').slim();
                        $("#edit-new-brand-modal").modal('show');
                    }
                });
            });

            $('#edit-new-brand-form').on('submit', function(event){
                event.preventDefault();

                $.ajax({
                    url: 'updateBrand',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(response) {
                        getBrands();
                        console.log(response);
                        $("#edit-new-brand-modal").modal('hide');
                    }
                });
            });
            $('#brands-output').on('click', '.remove-brand', function(){
                var id = $(this).data('delete');

                swal({
                        title: "هل انت متأكد؟",
                        text: "لا يمكن ارجعها مرة اخرى",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function(){
                        $.ajax({
                            url: 'deleteBrand',
                            data: {id: id, _token: '{{ csrf_token() }}'},
                            type: 'DELETE',
                            success: function(response) {

                            }
                        });
                        swal("Deleted!", "Your Brand has been deleted.", "success");
                        getBrands();
                    });
            });

        });

    </script>

@endsection