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
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#add-new-subsubCategory-modal">
                    <i class="fa fa-plus"></i> إضافة كاتجوري فرع الفرع جديدة
                </button>
            </div>
        </div>
        <div class="col-md-12 mt-20">
            <table class="table table-hover table-striped" id="subsubcategories-table">
                <thead>
                <tr>
                    <th>إسم فرع الكاتجوري بالانجليزي</th>
                    <th>اسم فرع الكاتجوري بالعربي</th>
                    <th>اسم الكاتجوري الفرعي</th>
                    <th>الإعدادات</th>
                </tr>
                </thead>
                <tbody id="subsubcategories-output">
                @if(isset($subsubCategories))
                    @forelse($subsubCategories as $subsubCategory)
                        <tr role="row">
                            <td>{{ $subsubCategory->name_english }}</td>
                            <td>{{ $subsubCategory->name_arabic }}</td>
                            <td>{{ ($subsubCategory->subcategory->name_english) }}</td>
                            <td></td>
                        </tr>
                    @empty
                        <h3>No SubSubCategories</h3>
                    @endforelse
                @else
                    <h3>No SubSubCategories</h3>
                @endif
                </tbody>
            </table>
        </div>
    </div>


    <!--========================================
	=            Add New SubSubCategory Modal            =
	=========================================-->
    <div class="modal fade" tabindex="-1" role="dialog" id="add-new-subsubCategory-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">إضافة براند جديدة</h4>
                </div>
                <form action="#" id="add-new-subsubCategory-form" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <input type="hidden" name="type" value="subsubCategory">
                                    <label>إسم براند بالانجليزي <span class="mandatory">*</span></label>
                                    <input type="text" name="name_english" class="form-control" placeholder="إسم البراند بالانجليزي">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 prl-20">
                                <div class="form-group">
                                    <label>اسم البراند بالعربي<span class="mandatory">*</span></label>
                                    <input type="text" name="name_arabic" placeholder="اسم البراند بالعربي" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 prl-20">
                                <div class="form-group">
                                    <label>إسم الكاتجوري الفرعي</label>
                                    <select type="text" name="subcategory" class="form-control" placeholder="إسم الكاتجوري الفرعي">
                                        @foreach($subCategories as $subCategory)
                                            <option value="{{ $subCategory->id }}">{{ $subCategory->name_english }}</option>
                                        @endforeach
                                    </select>
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
    <!--====  End of Add New SubSubCategory Modal  ====-->

    <!--========================================
    =            Edit SubSubCategory Modal            =
    =========================================-->
    <div class="modal fade" tabindex="-1" role="dialog" id="edit-new-subsubCategory-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">تعديل البراند</h4>
                </div>
                <form action="#" id="edit-new-subsubCategory-form" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label>إسم كاتجوري فرعي بالانجليزي<span class="mandatory">*</span></label>
                            <input type="hidden" name="id">
                            <input type="text" name="name_english" class="form-control" placeholder="إسم البراند بالانجليزي">
                        </div>
                        <div class="form-group">
                            <label>إسم كاتجوري فرعي بالعربي <span class="mandatory">*</span></label>
                            <input type="text" name="name_arabic" placeholder="وصف الدولة" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6 prl-20">
                                <div class="form-group">
                                    <label>إسم الكاتجوري الفرعي</label>
                                    <select type="text" name="subcategory" class="form-control" placeholder="إسم الكاتجوري الفرعي">
                                        @foreach($subCategories as $subCategory)
                                            <option value="{{ $subCategory->id }}">{{ $subCategory->name_english }}</option>
                                        @endforeach
                                    </select>
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
    <!--====  End of Edit SubSubCategory Modal  ====-->

@endsection


@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#subsubcategories-table').DataTable();
        });

        $(function(){

            var getSubSubCategories = function(){
                $.ajax({
                    url: 'getAllSubSubCategories',
                    type: 'GET',
                    success: function(response) {
                        var subsubcategories_output = '';
                        $.each(response.subsubcategories, function(index, value){
                            subsubcategories_output += '<tr><td class="text-center">'+
                                value.name_english+'</td><td>'+
                                value.name_arabic+'</td><td>' +
                                value.subcategory.name_english+'</td>'+
                                '<td class="text-center"><i class="btn btn-info glyphicon glyphicon-edit view-subsubCategory" data-edit="'+value.id+'"></i></td>'+
                                '<td class="text-center"><i class="btn btn-danger glyphicon glyphicon-trash remove-subsubCategory" data-delete="'+value.id+'"></i></td></tr>';


                        });
                        $('#subsubcategories-output').html(subsubcategories_output);
                    }
                });
            }

            getSubSubCategories();


            $("form#add-new-subsubCategory-form").on('submit', function(event){
                event.preventDefault();

                $.ajax({
                    url: "",
                    type: 'POST',
                    data: $(this).serialize(), // $(this).serializeArray(), new FormData(this)
                    success: function(response) {
                        getSubSubCategories();
                        document.getElementById("add-new-subsubCategory-form").reset();
                        $('#add-new-subsubCategory-modal').modal('hide');
                    },
                    error: function(response) {

                    },
                    beforeSend: function() {

                    }
                });
            });

            $('#subsubcategories-output').on('click', '.view-subsubCategory',function(){
                var id = $(this).data('edit');

                $.ajax({
                    url: 'editSubSubCategory',
                    data: {id: id},
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        $('#edit-new-subsubCategory-form input[name=id]').val(response.id);
                        $('#edit-new-subsubCategory-form input[name=name_english]').val(response.name_english);
                        $('#edit-new-subsubCategory-form input[name=name_arabic]').val(response.name_arabic);
                        $("#edit-new-subsubCategory-modal").modal('show');
                    }
                });
            });

            $('#edit-new-subsubCategory-form').on('submit', function(event){
                event.preventDefault();

                $.ajax({
                    url: 'updateSubSubCategory',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(response) {
                        getSubSubCategories();
                        console.log(response);
                        $("#edit-new-subsubCategory-modal").modal('hide');
                    }
                });
            });
            $('#subsubcategories-output').on('click', '.remove-subsubCategory', function(){
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
                            url: 'deleteSubSubCategory',
                            data: {id: id, _token: '{{ csrf_token() }}'},
                            type: 'DELETE',
                            success: function(response) {

                            }
                        });
                        swal("Deleted!", "Your SubSubCategory has been deleted.", "success");
                        getSubSubCategories();
                    });
            });

        });

    </script>

@endsection