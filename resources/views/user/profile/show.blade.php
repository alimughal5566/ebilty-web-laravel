@extends('admin.layout.app')
@section('content')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid  ">
            <div class="kt-subheader__main">
                {{--         <h3 class="kt-subheader__title"><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>Create New Shipment</h3>--}}
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
{{--                < class="kt-subheader__breadcrumbs">--}}
                    {{--            <a href="#" class="kt-subheader__breadcrumbs-home">--}}
                    {{--               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">--}}
                    {{--                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                    {{--                     <rect id="bound" x="0" y="0" width="24" height="24"></rect>--}}
                    {{--                     <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" id="Combined-Shape" fill="#000000"></path>--}}
                    {{--                  </g>--}}
                    {{--               </svg>--}}
                    {{--            </a>--}}
                    <a href="#" class="kt-subheader__breadcrumbs-home">Profile</a>
                    <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active"></span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                </div>
            </div>
        </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--end:: Portlet-->
        <div class="row">
            <div class="col-xl-3">
                <!--begin:: Widgets/Order Statistics-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fluid ">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">

                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info ">
                                        <span class="kt-widget12__desc d-inline-flex "><b>License</b></span>
                                        <span class="fa {{($user->documents_verified==1)?'fa-check-circle text-success':'fa-times-circle text-danger'}}"></span>

                                    @if($user->edit_request==1 && $user->id==auth()->user()->id)
                                             <span data-toggle="modal" data-target="#edit2" title="Edit" class="text-right float-right fa fa-edit" style="cursor: pointer"></span>
                                        @endif
                                        @php $license='/images/noimage.jpg'; @endphp
                                        @if($user->license_image)
                                            @php    $license= '/images/license/'.$user->license_image; @endphp
                                        @endif
                                        <span class="kt-widget12__value"><img src="{{url($license)}}"  alt="" width="300" ></span>
                                    </div>

                                </div>
                                <div class="kt-widget12__item">
                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc d-inline-flex"><b>License</b></span>
                                            <span class="fa {{($user->documents_verified==1)?'fa-check-circle text-success':'fa-times-circle text-danger'}}"></span>

                                        @if($user->edit_request==1 && $user->id==auth()->user()->id)
                                                 <span data-toggle="modal" data-target="#edit" title="Edit" class="text-right float-right fa fa-edit" style="cursor: pointer"></span>
                                           @endif
                                            @php $cnic='/images/noimage.jpg'; @endphp
                                            @if($user->cnic_image)
                                                @php  $cnic= '/setting/cnic/'.$user->cnic_image; @endphp
                                            @endif
                                            <span class="kt-widget12__value">
                                                <img src="{{url($cnic)}}"  alt="" width="300">
                                            </span>
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Order Statistics-->
            </div>



            <div class="col-xl-9">
                <!--begin:: Widgets/Order Statistics-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label d-flex align-items-center">
                            <h3 class="kt-portlet__head-title">
                                Personal Details
                            </h3>
                        </div>
                        @if($user->documents_verified==1 && $user->id==auth()->user()->id)
                            <h4 class=" text-right float-right pt-3">
                                <a href="{{route('requestToEdit')}}">request to edit</a>
                            </h4>
                        @endif
                        @if($user->edit_request=='' && $user->edit_request!=3 && $user->id==auth()->user()->id )
                            <span class="text-right float-right pt-4 ml-auto">
                                <a href="{{route('requestToEdit')}}"> request to edit</a>
                            </span> &nbsp
                        @endif
                        @if($user->edit_request==1 && $user->id==auth()->user()->id)
                            <span data-toggle="modal" data-target="#edit3" title="Edit" class="text-right float-right fa fa-edit text-warning pt-4" style="cursor: pointer"></span>
                        @endif

                        @if($user->documents_verified==0)
                            <h4 class="text-right float-right pt-3 ">
                                <span class="text-danger"> Not verified</span>
                            </h4>
                        @endif

                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fluid">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Name</span>
                                        <span class="kt-widget12__value">
                                        {{ucfirst($user->name)}}
                                                </span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Email</span>
                                        <span class="kt-widget12__value">{{$user->email}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Phone</span>
                                        <span class="kt-widget12__value">
                                            {{$user->phone}}
{{--                                    <span class="btn btn-label- btn-sm btn-bold btn-upper"></span>--}}
                                     <span class=" btn-bold "></span></span>
                                   </div>

                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Registered date</span>
                                        <span class="kt-widget12__value">
                                            {{$user->created_at->format('d-M-Y')}}
{{--                                    <span class="btn btn-label- btn-sm btn-bold btn-upper"></span>--}}
                                     <span class=" btn-bold "></span></span>
                                   </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Order Statistics-->
            </div>


        </div>



    </div>


    <div class="modal fade show" id="edit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm"  aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload license</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
          <form method="POST" action="{{route('updateLicense')}}" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card card-custom">
                        <div class="card-body p-0">
                            <div class="row justify-content-center pl-4 p-1 px-md-0">
                                <div class="col-md-12">
                                    <div class="form-group row pl-4">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mt-3 ">
                                                    {{--                                                 <span class="text-center d-block"><h5 class="d-inline">Campaign Id: </h5> <span id="camp_id"></span></span>--}}
                                                </div>

                                                <div class="col-lg-11">
                                                    <div class="form-check">
                                                        <label>License Number:</label>
                                                        <input name="license_number" value="{{$user->license_number}}" class="form-control" type="text" required/>

                                                    </div>
                                                </div>
                                                <div class="col-lg-11">
                                                    <div class="form-check">
                                                        <label>License Picture:</label>
                                                        <input name="license_image" class="form-control"  type="file" accept="image/*" required/>
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
                <div class="modal-footer">
                    <input type="submit" value="Update" class="btn btn-sm btn-warning">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">back
                    </button>
                </div>
              </form>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm"  aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Campaign Sticker details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form method="POST" action="{{route('updateCnic')}}" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="card card-custom">
                            <div class="card-body p-0">
                                <div class="row justify-content-center pl-4 p-1 px-md-0">
                                    <div class="col-md-12">
                                        <div class="form-group row pl-4">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mt-3 ">
                                                    {{--                                                 <span class="text-center d-block"><h5 class="d-inline">Campaign Id: </h5> <span id="camp_id"></span></span>--}}
                                                </div>

                                                <div class="col-lg-11">
                                                    <div class="form-check">
                                                        <label>Cnic Number:</label>
                                                        <input name="cnic_number" value="{{$user->cnic_number}}" class="form-control" type="text" required/>

                                                    </div>
                                                </div>
                                                <div class="col-lg-11">
                                                    <div class="form-check">
                                                        <label>License Picture:</label>
                                                        <input name="cnic_image" class="form-control"  type="file" accept="image/*" required/>
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
                    <div class="modal-footer">
                        <input type="submit" value="Update" class="btn btn-sm btn-warning">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">back
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade show" id="edit3" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm"  aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form method="POST" action="{{route('updatePersonalInfo')}}" >
                    <div class="modal-body">
                        <div class="card card-custom">
                            <div class="card-body p-0">
                                <div class="row justify-content-center pl-4 p-1 px-md-0">
                                    <div class="col-md-12">
                                        <div class="form-group row pl-4">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mt-3 ">
                                                    {{--                                                 <span class="text-center d-block"><h5 class="d-inline">Campaign Id: </h5> <span id="camp_id"></span></span>--}}
                                                </div>

                                                <div class="col-lg-11">
                                                    <div class="form-check">
                                                        <label>Name:</label>
                                                        <input name="nam" value="{{$user->name}}" class="form-control" type="text" required/>

                                                    </div>
                                                </div>
                                                <div class="col-lg-11">
                                                    <div class="form-check">
                                                        <label>Phone:</label>
                                                        <input name="phone" class="form-control"  value="{{$user->phone}}" type="text"  required/>
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
                    <div class="modal-footer">
                        <input type="submit" value="Update" class="btn btn-sm btn-warning">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">back
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

    <script>
        @if (\Session::has('success'))
           toastr.success('{!! \Session::get('success') !!}');
        @endif
        </script>
@endsection
