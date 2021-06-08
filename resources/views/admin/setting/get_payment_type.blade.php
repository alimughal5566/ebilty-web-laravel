@extends('admin.layout.app')

@section('content')

    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid  ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title"><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle" style="display: block;"><span></span></button>Settings</h3>
                <span class="kt-subheader__desc">System Configuration</span>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="" class="kt-subheader__breadcrumbs-home">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>
                    </a>
                    <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Settings</span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                </div>
            </div>
        </div>
    </div>
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
            <!--Begin:: App Aside Mobile Toggle-->
            <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                <i class="la la-close"></i>
            </button>
            <!--End:: App Aside Mobile Toggle-->
            <!-- begin:: Aside -->
            @include('admin.setting.aside_setting')
            <!-- end:: Aside -->
            <!--End::Aside-->
            <!--Begin:: Inbox List-->
            <div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown" id="kt_inbox_list" id="form_data">

                <div class="kt-portlet__body kt-portlet__body--fit-x">
                    <div class="col-lg-12">
                        <style>
                            .switch {
                                position: relative;
                                display: inline-block;
                                width: 60px;
                                height: 34px;
                            }

                            .switch input {
                                opacity: 0;
                                width: 0;
                                height: 0;
                            }

                            .slider {
                                position: absolute;
                                cursor: pointer;
                                top: 0;
                                left: 0;
                                right: 0;
                                bottom: 0;
                                background-color: #ccc;
                                -webkit-transition: .4s;
                                transition: .4s;
                            }

                            .slider:before {
                                position: absolute;
                                content: "";
                                height: 26px;
                                width: 26px;
                                left: 4px;
                                bottom: 4px;
                                background-color: white;
                                -webkit-transition: .4s;
                                transition: .4s;
                            }

                            input:checked + .slider {
                                background-color: #2196F3;
                            }

                            input:focus + .slider {
                                box-shadow: 0 0 1px #2196F3;
                            }

                            input:checked + .slider:before {
                                -webkit-transform: translateX(26px);
                                -ms-transform: translateX(26px);
                                transform: translateX(26px);
                            }

                            /* Rounded sliders */
                            .slider.round {
                                border-radius: 34px;
                            }

                            .slider.round:before {
                                border-radius: 50%;
                            }
                        </style>
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Payment Type(s)
                                </h3>
                            </div>
                            <div class="kt-portlet__head-label" >
                                <h3 class="kt-portlet__head-title">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_payment_type"><i class="fas fa-plus"></i></button>
                                </h3>
                            </div>
                        </div>
                        <div id="save_msg" style="margin-top: 5px !important; background-color: #c2ffcc !important; display: none; color: #08751a !important; border: 1px solid; border-radius: 8px !important; border-color: green !important; padding: 5px!important; text-align: center; font-size: 25px !important;"></div>
                        <div class="kt-portlet__body kt-portlet__body--fit-x">
                            <div class="col-lg-12">
                                <table class="table" id="payment_type_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php $count = 1; @endphp
                                        @forelse($types as $type)
                                            <tr>
                                                <td class="count">{{ $count++ }}</td>
                                                <td class="name">{{$type->name}}</td>
                                                <td >
                                                    @if($type->status == 0)
                                                        <label class="switch">
                                                            <input type="checkbox" id="type_status{{$type->id}}" onchange="make_status_active({{$type->id}})">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    @else
                                                        <label class="switch">
                                                            <input type="checkbox" id="type_status{{$type->id}}" checked onchange="make_status_inactive({{$type->id}})">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a onclick="edit_payment_type({{$type->id}})" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i>  </a>
                                                    <a onclick="delete_payment_type({{$type->id}})" class="btn btn-danger btn-sm"> <i class="far fa-trash-alt"></i>  </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" style="text-align: center">There is no record in table</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Content -->
    <div class="modal fade" id="add_payment_type" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Payment Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add_payment_form" method="get" >
                        @csrf
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter payment type" required="">
                                                <input class="form-control" type="hidden" id="status" status="name" value="1" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_payment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Payment Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit_payment_form" method="get" >
                        @csrf
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control" type="text" id="edit_name" name="edit_name" placeholder="Enter payment type" required="">
                                                <input class="form-control" type="hidden" id="edit_status" name="edit_status" value="1" >
                                                <input class="form-control" type="hidden" id="payment_type_id" name="payment_type_id" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('#add_payment_form').on('submit', function(e) {
            e.preventDefault();
            var url = '{{route('admin.setting.add_payment_type')}}';
            var token = $('#_token').val();
            var name = $('#name').val();
            var status = $('#status').val();
            $.ajax({
                type: "get",
                url: url,
                data: {name:name, status:status},
                success: function( msg ) {
                    $("#save_msg").html()
                    $('#add_payment_type').modal('hide');
                    $('#save_msg').css('display','block');
                    $("#save_msg").append(msg.msg);
                    var toggle_button = '';
                    var number = $('#payment_type_table tr:last').attr('id');
                    console.log(number)
                    if(msg.row.status == 0){
                        toggle_button = '<label class="switch"><input type="checkbox"><span class="slider round"></span></label>'
                    }else{
                        toggle_button = '<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>'
                    }
                    markup = '<tr><td>  </td><td>'+ msg.row.name + '</td>><td>'+ toggle_button +'</td><td> <a onclick="delete_payment_type('+ msg.row.id +')" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i>  </a> <a onclick="edit_payment_type('+ msg.row.id +')" class="btn btn-danger btn-sm"> <i class="far fa-trash-alt"></i>  </a></td></tr>';
                    tableBody = $("#payment_type_table tbody");
                    tableBody.append(markup);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        });
        $('#edit_payment_form').on('submit', function(e) {
            e.preventDefault();
            var url = '{{route('admin.setting.update_payment_type')}}';
            var token = $('#_token').val();
            var name = $('#edit_name').val();
            var status = $('#edit_status').val();
            var payment_type_id = $('#payment_type_id').val();
            $.ajax({
                type: "get",
                url: url,
                data: {id:payment_type_id, name:name, status:status},
                success: function( msg ) {
                    $("#save_msg").html()
                    $('#edit_payment_modal').modal('hide');
                    $('#save_msg').css('display','block');
                    $("#save_msg").append(msg.msg);
                    var toggle_button = '';
                    // var number = $('#payment_type_table tr:last').attr('id');
                    var item = $(this).closest("tr").find(".count").text();
                    //for verification purposes
                    console.log(item);
                    if(msg.row.status == 0){
                        toggle_button = '<label class="switch"><input type="checkbox"><span class="slider round"></span></label>'
                    }else{
                        toggle_button = '<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>'
                    }
                    markup = '<tr><td>  </td><td>'+ msg.row.name + '</td>><td>'+ toggle_button +'</td><td> <a onclick="delete_payment_type('+ msg.row.id +')" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i>  </a> <a onclick="edit_payment_type('+ msg.row.id +')" class="btn btn-danger btn-sm"> <i class="far fa-trash-alt"></i>  </a></td></tr>';
                    tableBody = $("#payment_type_table tbody");
                    // tableBody.append(markup);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        });
        function edit_payment_type(id) {
            var url = '{{route('admin.setting.edit_payment_type')}}'
            $.ajax({
                type: "get",
                url: url,
                data: {id:id},
                success: function( msg ) {
                    $("#save_msg").html()
                    console.log(msg)
                    $('#edit_payment_modal').modal('show');
                    $('#edit_name').val(msg.name);
                    $('#payment_type_id').val(msg.id);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        }
        function delete_payment_type(id) {
            $(this).parents('tr').first().remove();
            var url = '{{route('admin.setting.delete_payment_type')}}'
            $.ajax({
                type: "get",
                url: url,
                data: {id:id},
                success: function( msg ) {
                    $("#save_msg").html()
                    $('#save_msg').css('display','block');
                    $('#save_msg').css('background-color','#c2ffcc');

                    $("#save_msg").append(msg.msg);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        }
        function make_status_active(id){
            $(this).parents('tr').first().remove();
            var url = '{{route('admin.setting.make_status_active')}}'
            $.ajax({
                type: "get",
                url: url,
                data: {id:id},
                success: function( msg ) {
                    $("#save_msg").html()
                    $('#save_msg').css('display','block');
                    $('#save_msg').css('background-color','#c2ffcc');

                    $("#save_msg").append(msg.msg);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        }
        function make_status_inactive(id){
            $(this).parents('tr').first().remove();
            var url = '{{route('admin.setting.make_status_inactive')}}'
            $.ajax({
                type: "get",
                url: url,
                data: {id:id},
                success: function( msg ) {
                    $("#save_msg").html()
                    $('#save_msg').css('display','block');
                    $('#save_msg').css('background-color','#c2ffcc');

                    $("#save_msg").append(msg.msg);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        }
    </script>
@stop
