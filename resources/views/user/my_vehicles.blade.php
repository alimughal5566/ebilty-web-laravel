@extends('admin.layout.app')
@section('title', 'Users')
@section('content')

    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid  ">
            <div class="kt-subheader__main">
                {{--                <span class="kt-subheader__desc">Drivers</span>--}}
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__breadcrumbs">
                    <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">My Registered Drivers</span>
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
            <div class="kt-grid__item kt-grid__item--fluid    kt-portlet kt-inbox__list kt-inbox__list--shown" id="form_data">
                <div class="kt-portlet__body kt-portlet__body--fit-x">
                    <div class="col-lg-12">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                </h3>

                            </div>
                            <div class="kt-portlet__head-label" >
                                <h3 class="kt-portlet__head-title">
                                    <a href="#" class="text-warning" data-toggle="modal" data-target="#add_user"><i class="fas fa-plus"></i></a>
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
                                        <th scope="col">Vehicle</th>
                                        <th scope="col">Vehicle Number</th>
                                        <th scope="col">License Front Image</th>
                                        <th scope="col">License Back Image</th>
                                        <th scope="col">Vehicle Registration Image</th>
                                        <th scope="col">Model</th>
                                        <th scope="col">Registration City</th>
                                        <th scope="col">Body Size</th>
                                        <th scope="col">Capacity</th>
                                        <th scope="col">Owner Name</th>
                                        <th scope="col">Phone</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($vehicles as $key => $vehicle)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$vehicle->name}}</td>
                                            <td>{{@$vehicle->vehicle->name}}</td>
                                            <td>{{$vehicle->vehicle_number}}</td>
                                            <td><img src="{{asset('images/user_vehicles').'/'.$vehicle->license_front_image}}" width="100px" height="65px" ></td>
                                            <td><img src="{{asset('images/user_vehicles').'/'.$vehicle->license_back_image}}" width="100px" height="65px" ></td>
                                            <td><img src="{{asset('images/user_vehicles').'/'.$vehicle->vehicle_registration_image}}" width="100px" height="65px" ></td>
                                            <td>{{$vehicle->model}}</td>
                                            <td>{{$vehicle->registration_city}}</td>
                                            <td>{{$vehicle->body_size}}</td>
                                            <td>{{$vehicle->capacity}}</td>
                                            <td>{{$vehicle->owner_name}}</td>
                                            <td>{{$vehicle->phone}}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" style="text-align: center">No User found</td>
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
                                            <div class="col-lg-10 offset-1">
                                                <div class="form-check">
                                                    {{--                                                        <label>Cnic Picture:</label>--}}
                                                    <img alt="" width="600px"  height="420px" class="cnic_pic">

                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <label>License Number: </label>
                                                    <span class="lic"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 offset-1">
                                                <div class="form-check">
                                                    {{--                                                        <label>License Picture:</label>--}}
                                                    <img alt="" width="600px" height="420px" class="licence_pic">
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
    <div class="modal fade show" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add</h5>
                    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--                        <i aria-hidden="true" class="ki ki-close"></i>--}}
                    {{--                    </button>--}}

                </div>
                <div class="modal-body">
                    <div class="card-body  p-0">
                        <form method="post" action="{{route('createVehicle')}}" enctype="multipart/form-data">
                        @csrf
                        <!--begin::Invoice-->
                            <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                       <span class="kt-portlet__head-icon">
                                           <i class="flaticon2-user"></i>
                                       </span>
                                        <h3 class="kt-portlet__head-title">
                                            Add Vehicle
                                        </h3>
                                    </div>
                                </div>

                                <div class="kt-portlet__body">
                                    @if(count($errors) > 0)
                                        <div class="alert alert-warning alert-dismissible fade show">
                                            @foreach($errors->all() as $error)
                                                <ul class="text-white pl-1">{{$error}}</ul> <br>
                                            @endforeach
                                        </div>
                                    @endif
                                        <div class="kt-portlet__head border bg-warning mb-3">
                                            <div class="kt-portlet__head-label">
                                           <span class="kt-portlet__head-icon">
                                               <i class="flaticon2-user"></i>
                                           </span>
                                                <h3 class="kt-portlet__head-title ">
                                                    Vehicle Details
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="form-group col-md-4">
                                                <label class="">Name</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="name" placeholder="Name" required="" value="{{old('name')}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">Vehicle Number</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="vehicle_number" placeholder="Vehicle Number" required="" value="{{old('vehicle_number')}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">Model</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="model" placeholder="Model" required="" value="{{old('model')}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">Registration City</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="registration_city" placeholder="Model" required="" value="{{old('registration_city')}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">Body Size</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="body_size" placeholder="Body Size" required="" value="{{old('body_size')}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">Capacity</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="capacity" placeholder="Capacity" required="" value="{{old('capacity')}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">Owner Name</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="owner_name" placeholder="Owner Name" required="" value="{{old('owner_name')}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">Phone</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="phone" placeholder="Phone" required="" value="{{old('phone')}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Vehicle</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="dropdown bootstrap-select">
                                                        <select id="vehicle_id" required="" name="vehicle_id" class="" tabindex="-98">
                                                            <option value="" selected="" disabled="">Nothing selected</option>
                                                            @foreach($vehs as $veh)
                                                                <option value="{{$veh->id}}" >{{$veh->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">License Front Image</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="file" name="license_front_image" placeholder="Phone" required="" value="{{old('phone')}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">License Back Image</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="file" name="license_back_image" placeholder="Phone" required="" value="{{old('phone')}}">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="">Vehicle Registration Image</label>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="file" name="vehicle_registration_image" placeholder="Phone" required="" value="{{old('phone')}}">
                                                </div>
                                            </div>
                                        </div>
{{--                                        @if(auth()->check())--}}
{{--                                            @if(auth()->user()->hasRole('company'))--}}
{{--                                                <div class="row ">--}}
{{--                                                    <div class="col-md-4">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label class="">License Number</label>--}}
{{--                                                            <div class="">--}}
{{--                                                                <input class="form-control" type="text"  name="license_number" placeholder="License Number" required="" value="{{old('license_number')}}">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-4">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label class="">Licence Image</label>--}}
{{--                                                            <div class="">--}}
{{--                                                                <input class="form-control" type="file" accept="image/*"  name="license_image" required="">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-4">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label class="">CNIC Image</label>--}}
{{--                                                            <div class="">--}}
{{--                                                                <input class="form-control" type="file" accept="image/*"  name="cnic_image" required="">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        @endif--}}

                                    <div class="kt-portlet__foot">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 offset-9">
                                                <input type="submit" class="btn btn-success" value="Save">
                                                <button type="button" class="btn btn-secondary cancel">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </form>

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

        @if ($errors->has('full_name')||$errors->has('email')||$errors->has('phone')||$errors->has('password'))
        $('#add_user').modal('show')
        toastr.error('Validation error occured');
        @endif
        function viewDocs(cnic,cnic_image,license,license_image,status,id){
            $('.cnic').text(cnic);
            $('.cnic_pic').attr('src',window.location.origin+'/cnic/'+cnic_image);
            $('.lic').text(license);
            $('.licence_pic').attr('src',window.location.origin+'/license_image/'+license_image);
            $('.doc_status1,.doc_status').css('display','none');
            if(status==0){
                $('.doc_status1').css('display','block');
                {{--                $('.url').attr('href','{{route('docVerify')}}/'+id);--}}
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
        function getVehicles(id, vehicl) {
            $.ajax({
                type: 'GET',
                url: "{{route('getVehicles')}}",
                data: {'id': id},
                success: function (data) {
                    var html='';
                    html += "<option value='' selected disabled>Choose Vehicle</option>";
                    $.each(data.data,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#'+vehicl).empty().append(html);
                    $('#'+vehicl).selectpicker('refresh');
                }
            })
        }


    </script>
@stop

