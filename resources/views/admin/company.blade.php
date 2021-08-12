@extends('admin.layout.app')
@section('title', 'Users')
@section('content')

    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid  ">
            <div class="kt-subheader__main">
                {{--                <span class="kt-subheader__desc">Drivers</span>--}}
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__breadcrumbs">
                    <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Drivers</span>
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
        {{--        @include('admin.setting.aside_setting')--}}
        <!-- end:: Aside -->
            <!--End::Aside-->
            <!--Begin:: Inbox List-->
            <div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown" id="kt_inbox_list" id="form_data">

                <div class="kt-portlet__body kt-portlet__body--fit-x">
                    <div class="col-lg-12">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                </h3>
                            </div>
                            <div class="kt-portlet__head-label" >
                                <h3 class="kt-portlet__head-title">
                                    {{--                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#add_vehicle"><i class="fas fa-plus"></i></button>--}}
                                </h3>
                            </div>
                        </div>
                        <div id="save_msg" style="margin-top: 5px !important; background-color: #c2ffcc !important; display: none; color: #08751a !important; border: 1px solid; border-radius: 8px !important; border-color: green !important; padding: 5px!important; text-align: center; font-size: 25px !important;"></div>
                        <div class="kt-portlet__body kt-portlet__body--fit-x">
                            <div class="col-lg-12">
                                <table class="table" id="vehicle_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Shipments</th>
                                        <th scope="col">Email verified</th>
                                        <th scope="col">Documents status</th>
                                        <th scope="col">Documents</th>
                                        <th scope="col">Shipments</th>
                                        <th scope="col">Profile Edit Request</th>
                                        {{--  <th scope="col">Status</th>--}}
                                        {{--                                        <th scope="col">Action</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($users as $user)
                                        <tr>
                                            <td class="count"><a href="{{route('show.profile',$user->id)}}">{{ $user->id }} </a></td>
                                            <td class="name">{{ucfirst($user->name)}}</td>
                                            <td class="name">{{$user->phone}}</td>
                                            <td class="name">{{$user->email}}</td>
                                            <td class="name">{{($user->city)?$user->city->name:'N/a'}}</td>
                                            <td class="name">{{($user->assignedShipments->count())}}</td>
                                            <td class="name">{{($user->email_verified_at)?'Yes':'No'}}</td>
                                            <td class="name">{{($user->documents_verified)?'Verified':'Not Verified'}}</td>
                                            <td class="name"><a href="#" onclick="viewDocs('{{$user->cnic_number}}','{{$user->cnic_image}}','{{$user->cnic_back_image}}','{{$user->license_number}}','{{$user->license_image}}','{{$user->license_back_image}}','{{$user->documents_verified}}','{{$user->id}}')"  ><span class="fa fa-eye text-warning"></span></a></td>
                                            <td class="name"><span class="fa fa-eye text-info"  onclick="viewShips('{{$user->assignedShipments}}')" style="cursor: pointer"></span></td>
                                            <td class="name"><a href="{{route('approveEditRequest',$user->id)}}">{{($user->edit_request==3)?'request received':''}}</a></td>
                                            {{--                                            <td>--}}
                                            {{--                                                <label class="switch">--}}
                                            {{--                                                    <input type="checkbox" id="type_status{{$vehicle->id}}"--}}
                                            {{--                                                           {{($vehicle->status == 1)?'checked':''}} onchange="updatestatus({{$vehicle->id}})">--}}
                                            {{--                                                    <span class="slider round"></span>--}}
                                            {{--                                                </label>--}}
                                            {{--                                            </td>--}}
                                            {{--                                            <td>--}}
                                            {{--                                                <a href="#" onclick="edit_vehicle({{$vehicle->id}})" class=" text-warning"> <i class="fa fa-edit"></i> </a>--}}
                                            {{--                                                <a onclick="delete_vehicle({{$vehicle->id}})" class="btn btn-danger btn-sm"> <i class="far fa-trash-alt"></i>  </a>--}}
                                            {{--                                            </td>--}}
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" style="text-align: center">No User found</td>
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
    <div class="modal fade show" id="docx" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Documents</h5>
                    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--                        <i aria-hidden="true" class="ki ki-close"></i>--}}
                    {{--                    </button>--}}
                    <span class="doc_status "><span class="fa fa-check-circle text-success"></span> </span>
                    <span class="doc_status1"><a href="#" class="url" ><span class="fa fa-pause-circle text-warning"></span></a></span>
                </div>
                <div class="modal-body">
                    <div class="card card-custom">
                        <div class="card-body p-0">
                            <div class="row justify-content-center pl-4 p-1 px-md-0">
                                <div class="col-md-12">
                                    <div class="form-group  pl-4">
                                        <div class="row">
                                            <div class="col-md-12 mt-3 ">
                                                {{-- <span class="text-center d-block"><h5 class="d-inline">Campaign Id: </h5> <span id="camp_id"></span></span>--}}
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <label>Cnic Number: </label>
                                                    <span class="cnic"></span>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-10 offset-1">
                                                <div class="form-check">
                                                    <label>Cnic Front Image:</label>
                                                    <img alt="" width="600px"  height="420px" class="cnic_pic">

                                                </div>
                                            </div>
                                            <div class="col-lg-10 offset-1">
                                                <div class="form-check">
                                                    <label>Cnic Back Image:</label>
                                                    <img alt="" width="600px"  height="420px" class="cnic_back_pic">

                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <label>License Number: </label>
                                                    <span class="lic"></span>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-10 offset-1">
                                                <div class="form-check">
                                                    <label>License Front Image:</label>
                                                    <img alt="" width="600px" height="420px" class="licence_pic">
                                                </div>
                                            </div>
                                            <div class="col-lg-10 offset-1">
                                                <div class="form-check">
                                                    <label>License Back Image:</label>
                                                    <img alt="" width="600px" height="420px" class="licence_back_pic">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end::Invoice-->
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="modal fade show" id="ships" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Shipments</h5>
                    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--                        <i aria-hidden="true" class="ki ki-close"></i>--}}
                    {{--                    </button>--}}

                </div>
                <div class="modal-body">
                    <div class="card-body  p-0">
                        <!--begin::Invoice-->
                        <div class="col-md-10 offset-1 ">
                            <table class="table" id="jqueryTable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>From Address</th>
                                    <th>To Address</th>
                                    <th>Delivered date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody id="bid_list"><tr>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <script>
        @if (\Session::has('success'))
        toastr.success('{!! \Session::get('success') !!}');
        @endif
        function viewDocs(cnic,cnic_image,cnic_back_image, license,license_image, license_back_image,status,id){
            $('.cnic').text(cnic);
            $('.cnic_pic').attr('src',window.location.origin+'/setting/cnic/'+cnic_image);
            $('.cnic_back_pic').attr('src',window.location.origin+'/setting/cnic/'+cnic_back_image);
            $('.lic').text(license);
            $('.licence_pic').attr('src',window.location.origin+'/images/license/'+license_image);
            $('.licence_back_pic').attr('src',window.location.origin+'/images/license/'+license_back_image);
            $('.doc_status1,.doc_status').css('display','none');
            if(status==0){
                $('.doc_status1').css('display','block');
                $('.url').attr('href','{{route('docVerify')}}/'+id);
            }
            if(status==1){
                $('.doc_status').css('display','block');
            }
            $('#docx').modal('show');
        }


        function viewShips(data){
            data=JSON.parse(data);
            $('#jqueryTable tbody').html('');
            var html='';
            $.each(data, function (index, value) {
                // console.log(value)
                html += "<tr><td>" + value.id + "</td><td>" + value.sender.user.name + "</td><td>" + value.receiver.user.name + "</td><td >" + value.sender.address + "</td><td >" + value.receiver.address +  "</td><td>" + value.ship_date+' '+ value.ship_time + "</td></td><td >" + value.status.name+ "</td></tr>"
            });
            $('#jqueryTable').append(html);
            $('#ships').modal('show');
        }


    </script>
@stop

