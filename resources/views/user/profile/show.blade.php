@extends('admin.layout.app')
@section('content')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid  ">
            <div class="kt-subheader__main">
                {{--         <h3 class="kt-subheader__title"><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>Create New Shipment</h3>--}}
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                < class="kt-subheader__breadcrumbs">
                    {{--            <a href="#" class="kt-subheader__breadcrumbs-home">--}}
                    {{--               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">--}}
                    {{--                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                    {{--                     <rect id="bound" x="0" y="0" width="24" height="24"></rect>--}}
                    {{--                     <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" id="Combined-Shape" fill="#000000"></path>--}}
                    {{--                  </g>--}}
                    {{--               </svg>--}}
                    {{--            </a>--}}
                    <a href="#" class="kt-subheader__breadcrumbs-home">
                        Profile</a>
                    <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active"></span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                </div>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


        <!--end:: Portlet-->


        <div class="row">
            <div class="col-xl-12">
                <!--begin:: Widgets/Order Statistics-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Personal Details
                            </h3>
                        </div>
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

{{--                                <div class="kt-widget12__item">--}}
{{--                                    <div class="kt-widget12__info">--}}
{{--                                        <span class="kt-widget12__desc">Office</span>--}}
{{--                                        <span class="kt-widget12__value">Lahore</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="kt-widget12__info">--}}
{{--                                        <span class="kt-widget12__desc">Delivery Time</span>--}}
{{--                                        <span class="kt-widget12__value">Morning</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Order Statistics-->
            </div>
            <div class="col-xl-12">
                <!--begin:: Widgets/Order Statistics-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                               Documents
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fluid">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">

                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Passport</span>
                                        <span class="kt-widget12__value"><img src="{{public_path('/uploads/no-image.jpg')}}" width="100" >
                                                        <img alt="Logo" src="http://localhost/ebilty-web/storage/app/uploads/public/605/adf/deb/605adfdeb172d020773592.png" style="max-height:50px;">
</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Shipping Cost</span>
                                        <span class="kt-widget12__value"> gfgf</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Total Requested From The Receiver</span>
                                        <span class="kt-widget12__value">
                                        $00<!-- <span class="btn btn-label-danger btn-sm btn-bold btn-upper" data-toggle="kt-tooltip" data-placement="top" title="The actual cost will be calculated when we receive the package" data-original-title="The actual cost will be calculated when we receive the package" data-skin="dark">Not confirmed yet</span>-->
                                                                            </span>
                                        <!--
                                            </span>
                                        -->
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Total Requested From The Sender</span>
                                        <span class="kt-widget12__value">
                                        $00<!-- <span class="btn btn-label-danger btn-sm btn-bold btn-upper" data-toggle="kt-tooltip" data-placement="top" title="The actual cost will be calculated when we receive the package" data-original-title="The actual cost will be calculated when we receive the package" data-skin="dark">Not confirmed yet</span>-->
                                                                            </span>
                                        <!--
                                                                                -->
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Total received</span>
                                        <span class="kt-widget12__value">$00</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Total remaining</span>
                                        <span class="kt-widget12__value">
                                                                                    $00
                                            <!--<span class="btn btn-label-danger btn-sm btn-bold btn-upper" data-toggle="kt-tooltip" data-placement="top" title="The actual cost will be calculated when we receive the package" data-original-title="The actual cost will be calculated when we receive the package" data-skin="dark">Not confirmed yet</span>-->
                                    </span>
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


    {{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">--}}
    {{--     modalOpen--}}
    {{--    </button>--}}

    <!-- The Modal -->


@endsection
