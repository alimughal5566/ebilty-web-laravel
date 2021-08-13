@extends('admin.layout.app')
@section('content')
    {{--    <link rel="stylesheet" href="http://127.0.0.1:8002/themes/spotlayer/assets/admin/css/demo1/style.bundle.css">--}}
    <style>
        .progress {
            width: 100px;
            height: 100px;
            background: none;
            position: relative;
        }
        .progress::after {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 6px solid #eee;
            position: absolute;
            top: 0;
            left: 0;
        }

        .progress>span {
            width: 50%;
            height: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 1;
        }

        .progress .progress-left {
            left: 0;
        }

        .progress .progress-bar {
            width: 100%;
            height: 100%;
            background: none;
            border-width: 6px;
            border-style: solid;
            position: absolute;
            top: 0;
        }

        .progress .progress-left .progress-bar {
            left: 100%;
            border-top-right-radius: 80px;
            border-bottom-right-radius: 80px;
            border-left: 0;
            -webkit-transform-origin: center left;
            transform-origin: center left;
        }

        .progress .progress-right {
            right: 0;
        }

        .progress .progress-right .progress-bar {
            left: -100%;
            border-top-left-radius: 80px;
            border-bottom-left-radius: 80px;
            border-right: 0;
            -webkit-transform-origin: center right;
            transform-origin: center right;
        }

        .progress .progress-value {
            position: absolute;
            top: 0;
            left: 0;
        }

        /*
        *
        * ==========================================
        * FOR DEMO PURPOSE
        * ==========================================
        *
        */

        .rounded-lg {
            border-radius: 1rem;
        }

        .text-gray {
            color: #aaa;
        }

        div.h4 {
            line-height: 1rem;
        }

    </style>
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid  ">
            <div class="kt-subheader__main">
                {{--         <h3 class="kt-subheader__title"><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>Create New Shipment</h3>--}}
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__breadcrumbs">
                    {{--            <a href="#" class="kt-subheader__breadcrumbs-home">--}}
                    {{--               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">--}}
                    {{--                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                    {{--                     <rect id="bound" x="0" y="0" width="24" height="24"></rect>--}}
                    {{--                     <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" id="Combined-Shape" fill="#000000"></path>--}}
                    {{--                  </g>--}}
                    {{--               </svg>--}}
                    {{--            </a>--}}
                    <a href="#" class="kt-subheader__breadcrumbs-home">
                        Shipment#{{@$shipment->id}}</a>
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

        <div class="kt-portlet ">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="javascript:;" class="kt-widget__username">
                                    {{--                                    AWB557--}}
                                </a>
                                <div class="kt-widget__action">
                                    <a href="{{route('downloadPdf',$shipment->id)}}" class="btn btn-label-brand btn-bold btn-sm" >
                                        <small class="fa fa-download"></small> Download
                                    </a>
                                {{--                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">--}}
                                <!--begin::Nav-->
                                {{--                                        <ul class="kt-nav">--}}
                                <!-- <li class="kt-nav__item">
                                                <a href="javascript:;" data-toggle="modal" data-target="#paypal_modal" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon-cancel"></i>
                                                    <span class="kt-nav__link-text">Pay</span>
                                                </a>
                                            </li> -->
                                    <!--                                                          <li class="kt-nav__item">
<a href="javascript:;" data-toggle="modal" data-target="#transfer_office" class="kt-nav__link">
<i class="kt-nav__link-icon flaticon-logout"></i>
<span class="kt-nav__link-text">Transfer To Branch</span>
</a>
</li>
-->
                                {{--                                            <li class="kt-nav__item">--}}
                                {{--                                                <a href="javascript:;" id="stock" class="kt-nav__link">--}}
                                {{--                                                    <i class="kt-nav__link-icon flaticon-user-ok"></i>--}}
                                {{--                                                    <span class="kt-nav__link-text">Save in stock</span>--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                <!--                                                     <li class="kt-nav__item">
    <a href="javascript:;" data-toggle="modal" data-target="#postpone" class="kt-nav__link">
        <i class="kt-nav__link-icon flaticon-refresh"></i>
        <span class="kt-nav__link-text">Postpone</span>
    </a>
</li>
-->
                                    <!--  -->


                                    <!--  -->

                                {{--                                            <li class="kt-nav__item">--}}
                                {{--                                                <a href="https://ebilty.com/en/dashboard/shipments/57/print/label" target="_blank" class="kt-nav__link">--}}
                                {{--                                                    <i class="kt-nav__link-icon flaticon2-print"></i>--}}
                                {{--                                                    <span class="kt-nav__link-text">Print Label</span>--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                        </ul>--}}
                                <!--end::Nav-->
                                    {{--                                    </div>--}}
                                </div>
                            </div>

                            <div class="kt-widget__subhead float-right">
                                @if(file_exists(public_path('images/qrcodes/'.$shipment->id.'.svg')))
                                    {!! file_get_contents(public_path('images/qrcodes/'.$shipment->id.'.svg')) !!}
                                @endif
                            </div>
                            {{--                            <div class="kt-widget__subhead">--}}
                            {{--                                <div style="font-size:0;position:relative;width:144px;height:30px;">--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:0px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:4px;height:30px;position:absolute;left:4px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:12px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:18px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:22px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:26px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:30px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:4px;height:30px;position:absolute;left:36px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:42px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:46px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:50px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:4px;height:30px;position:absolute;left:56px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:62px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:66px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:70px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:4px;height:30px;position:absolute;left:76px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:4px;height:30px;position:absolute;left:82px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:88px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:92px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:98px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:102px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:108px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:4px;height:30px;position:absolute;left:112px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:118px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:122px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:4px;height:30px;position:absolute;left:126px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:134px;top:0px;">&nbsp;</div>--}}
                            {{--                                    <div style="background-color:black;width:2px;height:30px;position:absolute;left:140px;top:0px;">&nbsp;</div>--}}
                            {{--                                </div>--}}

                            {{--                            </div>--}}

                            <div class="kt-widget__info">

                                <div class="kt-widget__stats d-flex align-items-center flex-fill">
                                    <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                    Bids
                                </span>
                                        <div class="kt-widget__label notes_scroll">
                                            <span class="btn btn-label-brand btn-sm btn-bold btn-upper">{{$shipment->bids->count()}}</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                    Created Date
                                </span>
                                        <div class="kt-widget__label">
                                            <span class="btn btn-label-brand btn-sm btn-bold btn-upper">{{$shipment->created_at->format('d/m/Y')}}</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                    Last update
                                </span>
                                        <div class="kt-widget__label">
                                            <span class="btn btn-label-danger btn-sm btn-bold btn-upper">{{$shipment->updated_at->format('d/m/Y')}}</span>
                                        </div>
                                    </div>
                                    @php $percentage=0;
                        if($shipment->status_id==1){
                        $percentage=30;
                        }
                        if($shipment->status_id==6){
                        $percentage=20;
                        }
                        if($shipment->status_id==4){
                        $percentage=40;
                        }
                        if($shipment->status_id==6){
                        $percentage=35;
                        }
                        if($shipment->status_id==8){
                        $percentage=100;
                        }
                        if($shipment->status_id==7){
                        $percentage=90;
                        }
                        if($shipment->status_id==3){
                        $percentage=50;
                        }
                                    @endphp
                                    <div class="kt-widget__item flex-fill">
                                        <span class="kt-widget__subtitel">Progress</span>
                                        <div class="kt-widget__progress d-flex  align-items-center">
                                            <div class="progress" style="height: 5px;width: 100%;">
                                                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="kt-widget__stat">
                                        {{$percentage}}%
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end:: Portlet-->


        <div class="row">
            <div class="col-xl-6">
                <!--begin:: Widgets/Order Statistics-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Order Details
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fluid">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">
                                <div class="kt-widget12__item">
{{--                                    <div class="kt-widget12__info">--}}
{{--                                        <span class="kt-widget12__desc">Created by</span>--}}
{{--                                        <span class="kt-widget12__value">--}}
{{--                                        {{ucfirst($shipment->user->name)}}--}}
{{--                                                                    </span>--}}
                                    {{--                                    </div>--}}
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Status</span>
                                        <span class="kt-widget12__value">
                                     <span class=" btn-bold "></span>{{$shipment->status->name}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Vehicle</span>
                                        <span class="kt-widget12__value"><img src="{{ asset('images/vehicles/web').'/'.$shipment->vehicle->web_image }}" width="100px" height="50px"></span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Payment Type</span>
                                        <span class="kt-widget12__value">
{{--                                    <span class="btn btn-label- btn-sm btn-bold btn-upper"></span>--}}
                                     <span class=" btn-bold "></span>{{ ($shipment->payment_type== 1) ? "Cash on Delivery" : "Online Payment" }}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Delivery Type</span>
                                        <span class="kt-widget12__value">{{$shipment->delivery_type == 1 ? "Vehicle" : "Package"}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Departure Time</span>
                                        <span class="kt-widget12__value">{{$shipment->ship_date}} | {{date('h:i A', strtotime($shipment->ship_time))}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Insurance </span>
                                        <span class="kt-widget12__value">{{ $shipment->is_insured == 1 ? "Yes (Rs. ".$shipment->package_cost.")" : "No" }}</span>
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
            <div class="col-xl-6">
                <!--begin:: Widgets/Order Statistics-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Package Details
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fluid">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Name</span>
                                        <span class="kt-widget12__value">{@$shipment->package->name}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Package Category</span>
                                        <span class="kt-widget12__value">{{@$shipment->package->category->name}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Quantity</span>
                                            <span class="kt-widget12__value">{{@$shipment->package->quantity}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Package Weight</span>
                                        <span class="kt-widget12__value">{{@$shipment->package->weight}} (kg)</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Dimensions</span>
                                            <span class="kt-widget12__value">{{@$shipment->package->length}} x {{$shipment->package->width}} x {{$shipment->package->height}} (cm)</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Package description</span>
                                        <span class="kt-widget12__value">{{@$shipment->package->description}}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Order Statistics-->
            </div>

        </div>
        <div class="row">
            <div class="col-xl-6">
                <!--begin:: Widgets/Order Statistics-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Pickup details
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fluid">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Name</span>
                                        <span class="kt-widget12__value">{{$shipment->sender->user_name}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Floor</span>
                                        <span class="kt-widget12__value">{{$shipment->sender->floor}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Building</span>
                                        <span class="kt-widget12__value">{{$shipment->sender->building}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Street</span>
                                        <span class="kt-widget12__value">{{$shipment->sender->street}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">State</span>
                                        <span class="kt-widget12__value">{{$shipment->sender->state->name}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">City</span>
                                        <span class="kt-widget12__value">{{$shipment->sender->city->name}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Country</span>
                                        <span class="kt-widget12__value">{{$shipment->sender->country->name}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Pickup Address</span>
                                        <span class="kt-widget12__value">{{$shipment->sender->address}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Order Statistics-->
            </div>
            <div class="col-xl-6">
                <!--begin:: Widgets/Order Statistics-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Drop off details
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fluid">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Name</span>
                                        <span class="kt-widget12__value">{{$shipment->receiver->user_name}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Floor</span>
                                        <span class="kt-widget12__value">{{$shipment->receiver->floor}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Building</span>
                                        <span class="kt-widget12__value">{{$shipment->receiver->building}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Street</span>
                                        <span class="kt-widget12__value">{{$shipment->receiver->street}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">State</span>
                                        <span class="kt-widget12__value">{{$shipment->receiver->state->name}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">City</span>
                                        <span class="kt-widget12__value">{{$shipment->receiver->city->name}}</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Country</span>
                                        <span class="kt-widget12__value">{{$shipment->receiver->country->name}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Dropoff Address</span>
                                        <span class="kt-widget12__value">{{$shipment->receiver->address}}</span>
                                    </div>
                                </div>
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
                        <div class="kt-portlet__head-label ">
                            <h3 class="kt-portlet__head-title">
                                Location
                            </h3>
                        </div>
                        <a href="{{route('tracking',[$shipment->id])}}" class="float-right text-right btn btn-warning btn-sm mb-1 mt-4"   style="max-height: 30px" >
                            Get Directions
                        </a>
{{--                        <a href="{{route('tracking',[$shipment->id])}}" class="float-right text-right btn btn-warning btn-sm mb-1 mt-4"   style="max-height: 30px" onclick="getLatlong()">--}}
{{--                            Get Directions--}}
{{--                        </a>--}}
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fluid">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">

                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">

                                        <div class="kt-widget15">

                                            <div class="kt-widget15__map">
                                                <div id="map"></div>
                                            </div>
                                        </div>
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

    <style>
        #map {
            height: 500px;
            position: relative;
        }


    </style>
    {{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">--}}
    {{--     modalOpen--}}
    {{--    </button>--}}

    <!-- The Modal -->

    @php
        $dist=abs($shipment->receiver->lat-$shipment->sender->lat);

            if($dist<1){
            $zoom=15;
        }      elseif($dist<2){
            $zoom=10;
        }  elseif($dist<3){
            $zoom=7;
        }elseif($dist<10){
            $zoom=5;
        }elseif($dist<30){
            $zoom=4;
        }else{
          $zoom=3;
        }

    @endphp

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoM2N8BXBveNHlX96-EjCkpaQDd7mVrLI&libraries=places&callback=initialize&libraries=places" async></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCoM2N8BXBveNHlX96-EjCkpaQDd7mVrLI&callback=initMap" async></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

    <script>
        @if (\Session::has('success'))
        toastr.success( 'Shipment Created successfully');
        @endif
            function initMap(){
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: {{$zoom}},
                    center: { lat: {{$shipment->sender->lat}}, lng: {{$shipment->sender->lng}} },
                });
                const tourStops = [
                    [{ lat: {{$shipment->receiver->lat}}, lng:  {{$shipment->receiver->lng}} }, "{{$shipment->receiver->address}}"],
                    [{ lat: {{$shipment->sender->lat}}, lng:  {{$shipment->sender->lng}} }, "{{$shipment->sender->address}}"],
                ];
                const infoWindow = new google.maps.InfoWindow();
                tourStops.forEach(([position, title], i) => {
                    const marker = new google.maps.Marker({
                        position,
                        map,
                        title: `${i + 1}. ${title}`,
                        label: `${i + 1}`,
                        optimized: false,
                        animation: google.maps.Animation.DROP,

                    });
                    // Add a click listener for each marker, and set up the info window.
                    marker.addListener("click", () => {
                        infoWindow.close();
                        infoWindow.setContent(marker.getTitle());
                        infoWindow.open(marker.getMap(), marker);
                    });
                });
            }



        function getLatlong() {
            window.open("https://maps.google.com/maps/dir/{{$shipment->receiver->lat}},{{$shipment->receiver->lng}}/{{$shipment->sender->lat}},{{$shipment->sender->lng}}", "_blank");
        }
    </script>
@endsection
