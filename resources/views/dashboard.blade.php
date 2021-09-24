@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')
    {{--    <link rel="stylesheet" href="http://127.0.0.1:8002/themes/spotlayer/assets/admin/css/demo1/style.bundle.css">--}}
    <style xmlns="">
        .progress {
            width: 90px;
            height: 90px;
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

        @media (min-width: 576px) {
            #showDriverList .modal-dialog {
                max-width: 1000px !important;
                margin: 1.75rem auto;
            }
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
                        Shipments</a>
                    <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active"></span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                </div>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid bg-white">

        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__body">

                <div class="row">
                    <div class="col-12 col-md-4">

                        <div class="dashboard-top-container ">
                            <div class="text-center img-container summary_logo">
                                <img alt="Logo" src="{{url('/uploads/logos/company-logo.png')}}" class="img-fluid">

                            </div>

                            <div class="top-dashbord-left-container d-flex flex-column align-items-stretch h-100 align_form_top">
                                <h5 class="text-center">Summary</h5>
                                <div class="container-info">
                                    <div>
                                        <!-- <i class="flaticon-map-location"></i>  -->
                                        <i class="fas fa-clipboard-list"></i>
                                        No of transactions
                                    </div>
                                    <div>
                                        <h2>{{$shipments->count()}}</h2>
                                    </div>
                                </div>
{{--                                <div class="container-info">--}}
{{--                                    <div>--}}
{{--                                        <i class="fas fa-chart-line"></i>--}}
{{--                                        Ranking--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <h2>00</h2>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="container-info">
                                    <div>
                                        <i class="fas fa-money-bill"></i>
                                        Payments
                                    </div>
                                    <div>
                                        <h2>00</h2>
                                    </div>
                                </div>
                                <div class="container-info">
                                    <div>
                                        <i class="fas fa-chart-bar"></i>
                                        Revenue
                                    </div>
                                    <div>
                                        <h2>00</h2>
                                    </div>
                                </div>
                                <div class="container-info">
                                    <div>
                                        <i class="far fa-window-close"></i>
                                        Cancelled Shipment/Rides
                                    </div>
                                    <div>
                                        <h2>00</h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="kt-widget kt-widget--user-profile-3 custom-widget" >
                            <div class="kt-widget__top" style="padding-left: 6px;">
                                <div class="kt-widget__pic kt-widget__pic--brand kt-font-boldest kt-font-light boxnameShow bg-white">
                                    @php $profile_image='/images/noimage.jpg'; @endphp
                                    @if(auth()->user()->profile_image)
                                        @php    $profile_image= '/images/profile/'.auth()->user()->profile_image; @endphp
                                    @endif
                                    <span class=""><img style="border-radius: 5px" src="{{url($profile_image)}}"  alt="" width="120px" height="110px"  ></span>

                                </div>
                                <div class="kt-widget__content">
                                    <div class="kt-widget__head">
                                        <a href="javascript:void(0);" class="kt-widget__username">
                                            {{auth()->user()->name}}
                                        </a>

                                        <div class="kt-widget__action">
{{--                                            <a href="http://ebilty.com/en/dashboard/account" class="btn btn-brand btn-sm btn-upper">Edit</a>--}}
                                        </div>
                                    </div>

                                    <div class="kt-widget__subhead">
                                        <a href="javascript:void(0);"><i class="flaticon2-calendar-3"></i> {{auth()->user()->phone}}</a>
{{--                                        <a href="javascript:void(0);"><i class="flaticon-alarm-1"></i>{{auth()->user()->phone}}</a>--}}
                                    </div>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__desc">
                                            {{auth()->user()->email}}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                             @hasrole('admin')
                                <div class="col-6">
                                    <div class="dashboardcontainainer a">
                                        <div class="headers">
                                            <h4>Malaysia</h4>
                                            <div><img src="https://www.countryflags.io/ca/flat/64.png" alt=""></div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <!-- <i class="flaticon-map-location"></i>  -->
                                                <i class="fas fa-clipboard-list"></i>
                                                No of transactions
                                            </div>
                                            <div>
                                                <h3>1500</h3>
                                            </div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <i class="fas fa-chart-line"></i>
                                                Ranking
                                            </div>
                                            <div>
                                                <h3>25</h3>
                                            </div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <i class="fas fa-money-bill"></i>
                                                Payments
                                            </div>
                                            <div>
                                                <h3>3222</h3>
                                            </div>
                                        </div>

                                        <div class="container-info">
                                            <div>
                                                <i class="fas fa-chart-bar"></i>
                                                Revenue
                                            </div>
                                            <div>
                                                <h3>1212</h3>
                                            </div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <i class="far fa-window-close"></i>
                                                Cancelled Rides
                                            </div>
                                            <div>
                                                <h3>10</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-4">
                                    <div class="dashboardcontainainer b">
                                        <div class="headers">
                                            <h4>United Kingdom</h4>

                                            <div><img src="https://www.countryflags.io/gb/flat/64.png" alt=""></div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <!-- <i class="flaticon-map-location"></i>  -->
                                                <i class="fas fa-clipboard-list"></i>
                                                No of shippments
                                            </div>
                                            <div>
                                                <h3>1111</h3>
                                            </div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <i class="fas fa-chart-line"></i>
                                                Ranking
                                            </div>
                                            <div>
                                                <h3>25</h3>
                                            </div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <i class="fas fa-money-bill"></i>
                                                Payments
                                            </div>
                                            <div>
                                                <h3>3222</h3>
                                            </div>
                                        </div>

                                        <div class="container-info">
                                            <div>
                                                <i class="fas fa-chart-bar"></i>
                                                Revenue
                                            </div>
                                            <div>
                                                <h3>1212</h3>
                                            </div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <i class="far fa-window-close"></i>
                                                Cancelled Rides
                                            </div>
                                            <div>
                                                <h3>10</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-6">
                                    <div class="dashboardcontainainer c">
                                        <div class="headers">
                                            <h4>Pakistan</h4>
                                            <div><img src="https://www.countryflags.io/PK/shiny/64.png" alt=""></div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <!-- <i class="flaticon-map-location"></i>  -->
                                                <i class="fas fa-clipboard-list"></i>
                                                No of transactions
                                            </div>
                                            <div>
                                                <h3>1500</h3>
                                            </div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <i class="fas fa-chart-line"></i>
                                                Ranking
                                            </div>
                                            <div>
                                                <h3>25</h3>
                                            </div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <i class="fas fa-money-bill"></i>
                                                Payments
                                            </div>
                                            <div>
                                                <h3>3222</h3>
                                            </div>
                                        </div>

                                        <div class="container-info">
                                            <div>
                                                <i class="fas fa-chart-bar"></i>
                                                Revenue
                                            </div>
                                            <div>
                                                <h3>1212</h3>
                                            </div>
                                        </div>
                                        <div class="container-info">
                                            <div>
                                                <i class="far fa-window-close"></i>
                                                Cancelled Rides
                                            </div>
                                            <div>
                                                <h3>10</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endhasrole

                             @hasanyrole('driver||customer||company')
                                 <div class="col-12">
                                    <div class="dashboardcontainainer ">
                                        <div class="container-info">
                                            <div class="main_img_banner_DB">
                                                <!-- <i class="flaticon-map-location"></i>  -->
                                                @php $profile_image='https://blog.ipleaders.in/wp-content/uploads/2020/04/advertising-agency-e1586694068452.jpg'; @endphp
                                                @if($add )
                                                    @php  $profile_image= '/setting/advertisements/'.$add->content; @endphp
                                                @endif
                                                <img  alt="" src="{{url($profile_image)}}"   style="width: 100%">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            @endhasanyrole
                            </div>

                        </div>
                    </div>

                </div>
            </div>

{{--        </div>--}}









<div  class="m-4">
        <table class="table table-fluid table-bordered " style="font-size: initial" >
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col" class="text-center">Total Weight</th>
                <th scope="col">Shipment Time</th>
                <th scope="col">Status</th>
                <th scope="col">%|Completion</th>
                <th scope="col">Quick View</th>
                @hasanyrole('admin||customer')
                @endhasanyrole
                @hasanyrole('company||cracker')
                <th scope="col">Assign To</th>
                @endhasanyrole
            </tr>
            </thead>
            <tbody>
            @forelse($shipments as $shipment)
{{--@dd($shipment)--}}
                <tr>
                    @if(auth()->user()->hasRole('customer') || auth()->user()->hasRole('brocker_driver') || auth()->user()->hasRole('company_driver') || auth()->user()->hasRole('admin'))
                        <th scope="row"><a href="{{route('shipmentDetail',[$shipment->id])}}">{{$shipment->id}}</a></th>
                    @else
                        <th scope="row"><a href="{{route('shipmentDetail',[$shipment->id])}}">{{$shipment->id}}</a></th>
                    @endif
                    <td>{{@$shipment->sender->address}}<small> ({{@$shipment->sender->user_name}})</small></td>
                    <td>{{@$shipment->receiver->address}}<small> ({{@$shipment->receiver->user_name}})</small></td>
                    <td class="text-center">{{@$shipment->package->weight}}</td>
                    <td>{{@$shipment->ship_date}}<br>{{@$shipment->ship_time}}</td>
                    <td>{{@$shipment->stat->name}}</td>
                    <td>
                        @php
                         $percentage=0;
                        if($shipment->statuid==1){
                        $percentage=30;
                        }
                        if($shipment->statuid==6){
                        $percentage=20;
                        }
                        if($shipment->statuid==4){
                        $percentage=40;
                        }
                        if($shipment->statuid==6){
                        $percentage=35;
                        }
                        if($shipment->statuid==8){
                        $percentage=100;
                        }
                        if($shipment->statuid==7){
                        $percentage=90;
                        }
                        if($shipment->statuid==3){
                        $percentage=50;
                        }
                        @endphp
                        <div class="progress mx-auto" data-value='{{$percentage}}'>
                                          <span class="progress-left">
                                              <span class="progress-bar {{($percentage<21)?'border-warning':(($percentage<51)?'border-info':(($percentage<81)?'border-danger':'border-success'))}}"></span>
                                          </span>
                            <span class="progress-right">
                                  <span class="progress-bar {{($percentage<21)?'border-warning':(($percentage<51)?'border-info':(($percentage<81)?'border-danger':'border-success'))}}"></span>
                                          </span>
                            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">{{$percentage}}<sup class="small">%</sup></div>
                            </div>
                        </div>
                    </td>

                        @hasanyrole('admin||customer')
                    <td>
                        @if(count($shipment->bids)>0)
                            <span class="example-tools justify-content-center">
                            <a class=" btn btn-sm btn-default btn-text-primary btn-hover-danger btn-icon" onclick="showBids('{{$shipment->bids}}')" data-toggle="modal" data-target="#myModal"   style="position: relative; cursor: pointer; z-index: 0" aria-describedby="tooltip797420">
                                 <span class=" text-success" style=" position: absolute;top: -6px; right: -2px;">●</span>
                           <i class="la la-car"></i></a>
                       </span>
                        @else
                            <span class="example-tools justify-content-center">
                            <a class=" btn btn-sm btn-default btn-text-primary btn-hover-danger btn-icon"   data-target="#myModal" title=" 0 Bids"  style="position: relative; cursor: default; z-index: 0" aria-describedby="tooltip797420">
                                 <span class=" text-danger" style=" position: absolute;top: -6px; right: -2px;">●</span>
                           <i class="la la-car"></i></a>
                       </span>
                        @endif

                    </td>
                        @endhasanyrole
                    <td>
                        @if($shipment->packages)
                            <i class="fa fa-eye" aria-hidden="true" onclick="show_packages({{$shipment->packages}})"></i>
                        @else
                            Not Available
                        @endif

                    </td>
                    @hasanyrole('company||cracker')
                    @if($shipment->assigned_to == Auth()->id())
                    <td>
                        @if(auth()->user()->hasRole('customer') || auth()->user()->hasRole('brocker_driver') || auth()->user()->hasRole('company_driver') )
                            <i class="fa fa-user" aria-hidden="true" onclick="showDriverList({{$shipment->id}})"></i>
                        @else
                            <i class="fa fa-user" aria-hidden="true" onclick="showDriverList({{$shipment->id}})"></i>
                        @endif
{{--                            <i class="fa fa-user" aria-hidden="true"></i>--}}
                       || <a href="#" class="text-warning" data-toggle="modal" data-target="#add_user"><i class="fas fa-plus"></i></a>

                    </td>
                    @endif
                    @endhasanyrole

                </tr>


            @empty
                <tr>
                    <td colspan="7" class="text-center p-1">No shippment found</td>
                </tr>
            @endforelse

            </tbody>
        </table>
        <div class="float-right mr-2">
            {{$shipments->links()}}
        </div>
    </div>
 </div>
        <div class="modal fade" id="show_packages" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Package(s)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table" id="package_table">
                            <thead>
                            <t>
                                <th scope="col">Package Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Dimensions</th>
                            </t>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

                        <!--        assign shipment to driver model-->

        <div class="modal fade" id="showDriverList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Drivers List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table" id="show_DriverList">
                            <thead>
                            <t>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Driver Contact</th>
                                <th scope="col">vehicle Name</th>
                                <th scope="col">vehicle Type</th>
                                <th scope="col">vehicle Number</th>
                                <th scope="col">Action</th>
                            </t>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

                        <!--        assign shipment to driver model-->


    {{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">--}}
    {{--     modalOpen--}}
    {{--    </button>--}}

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Bids</h4>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card-body  p-0">
                        <!--begin::Invoice-->
                        <div class="col-md-10 offset-1 ">
                            <table class="table" id="jqueryTable">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Applied at</th>
                                    <th>Budget</th>
                                    <th>Bid Amount</th>
                                    <th>Route</th>
                                    <th>Last updated</th>
                                    <th style="min-width: 170px">Action</th>
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
                            <form method="post" action="{{route('createDriver')}}">
                            @csrf
                            <!--begin::Invoice-->
                                <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                       <span class="kt-portlet__head-icon">
                                           <i class="flaticon2-user"></i>
                                       </span>
                                            <h3 class="kt-portlet__head-title">
                                                Add Driver
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
                                                    Driver Personal Details
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-lg-5">
                                                <label>Name <span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                <input type="text" class="form-control name" value="{{old('full_name')}}" name="full_name" required placeholder="Full name">
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label>Email <span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                <input class="form-control mobile" name="email"  value="{{old('email')}}"  type="email" required placeholder="Email">
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label>Mobile <span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                <input type="number" class="form-control mobile" value="{{old('phone')}}"  name="phone"  required placeholder="Number">
                                            </div>
                                            <div class="form-group col-lg-5">
                                                <label>Password <span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                <input type="password" class="form-control" value="{{old('password')}}"  name="password" required placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="kt-portlet__head border bg-warning mb-3">
                                            <div class="kt-portlet__head-label">
                                           <span class="kt-portlet__head-icon">
                                               <i class="flaticon2-user"></i>
                                           </span>
                                                <h3 class="kt-portlet__head-title ">
                                                    Driver vehicle Details
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="form-group">
                                                <label class="">Vehicle Number</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control" type="text" name="vehicle_number" placeholder="Vehicle Number" required="" value="{{old('vehicle_number')}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Vehicle Category</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="dropdown bootstrap-select">
                                                        <select id="veh_cat" required="" name="veh_cat" onchange="getVehicles(this.value,'veehicl')" class="" tabindex="-98">
                                                            <option value="" selected="" disabled="">Nothing selected</option>
                                                            @foreach($vehicles_cat as $cat)
                                                                <option value="{{$cat->id}}"  {{($cat->id==old('veh_cat'))?'selected':''}}>{{$cat->name}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Vehicle</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="dropdown bootstrap-select">
                                                        <select id="veehicl" required="" name="vehicle" class="" tabindex="-98">
                                                            <option value="" selected="" disabled="">Nothing selected</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
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



        {{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
    <link rel= "stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <script>
        function show_packages(content){
            // $("#package_table tbody tr").remove();
            $('#show_packages').modal('show');
            console.log(content)

            console.log(Object.keys(content).length)
            if(Object.keys(content).length == 0){
                $('#package_table').append('Not Available')
            }
            $('#package_table tr').empty();
            for(var i = 0; i < Object.keys(content).length; i++ ){
                $('#package_table').append(`
                   <tr><td>`+ content[i].category.name +`</td><td>`+content[i].description+`</td><td>`+content[i].weight+`</td><td>`+content[i].quantity+`</td><td>`+content[i].length+`x`+content[i].width+`x`+content[i].height+`</td></tr>
                `);
            }
        }

        @if ($errors->has('full_name')||$errors->has('email')||$errors->has('phone')||$errors->has('password'))
        $('#add_user').modal('show')
        toastr.error('Validation error occured');
        @endif
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
    <script>

        @if (\Session::has('success'))
           toastr.success('{{\Session::get('success')}}');
        @endif
        $(function() {
            $(".progress").each(function() {

                var value = $(this).attr('data-value');
                var left = $(this).find('.progress-left .progress-bar');
                var right = $(this).find('.progress-right .progress-bar');

                if (value > 0) {
                    if (value <= 50) {
                        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                    } else {
                        right.css('transform', 'rotate(180deg)')
                        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                    }
                }

            })

            function percentageToDegrees(percentage) {
                return percentage / 100 * 360
            }

        });
        function showBids(data){
            data=JSON.parse(data);
            $('#jqueryTable tbody').html('');
            var html='';
            $.each(data, function (index, value) {
                let status='';
                let status_text='';
                let txt='';

                if(value.approved_status==0) {
                    status = 1;
                    status_text= "<span class='fa fa-pause-circle text-danger'>&nbsp</span>Accept bid";
                    txt= "  ";
                }
                if(value.approved_status==1){
                    status = 2;
                    status_text= "<span class='fa fa-check-circle text-success'> &nbsp</span>Bid Accepted";
                    txt= " ";
                }
                if(value.approved_status==2){
                    txt= "<span class='fa fa-times-circle text-warning'> &nbsp</span>cancelled ";
                }
                html += "<tr><td>" + value.user.name + "<td>" + value.created_at + "</td><td >" + ((value.revise_amount_shipper !=null) ? value.revise_amount_shipper : '') + "</td><td >" + value.bid_amount + "</td><td >" + ((value.route!=null) ? value.route : '') +  "</td><td >" + value.last_updated + "</td></td>" +
                    "<td >" + status_text +""+txt+"</td><tr>";
            });
            $('#jqueryTable').append(html);
            // console.log(data[0]);
        }


        function setStatus(id, shipment_id, approved_status) {
            $.ajax({
                url: "{{route('update.bid.status')}}",
                type: "get",
                data: {'id': id,'shipment_id': shipment_id,'approved_status':approved_status},
                success: function (result) {
                    toastr.success( 'Status updated successfully');
                    setTimeout(function(){ location.reload() },1000);
                },
                error: function (request, status, error) {
                    // alert(request.responseText);
                    // $('#showBidModal').modal('hide')
                }
            })
        }


        function openReviseModal(id,amount,revised_amount,revise_status,revise_comment){
            if(revise_status==2 || revise_status==1 || revise_status==3){
                // alert('sdf');
                // alert();
                $('.beds').removeClass('d-none');
                $('#prev').val(amount);
                $('#amt').val(revised_amount);
                $('.sbmet').addClass('d-none');
            } else{
                $('.sbmet').removeClass('d-none');
                $('.beds').addClass('d-none');
                $('#prev').val(amount);
                $('#amt').val('');
            }
            // alert( revise_comment)
            if( revise_status==1){
                $('#cmt').val(((revise_comment==null) ?'':revise_comment));
                $('.comnt').removeClass('d-none');
            }else{
                $('#cmt').val('');
                $('.comnt').addClass('d-none');
            }

            $('#bedid').val(id);
            $('#showreviseModal').modal('show')

        }


        function sav() {
            if($('#amt').val()=='' || $('#amt').val()<1){
                $('#amt').addClass('border-danger');
                return ;
            }
            $('#amt').removeClass('border-danger');
            $.ajax({
                url: "{{route('sendBidReviserequest')}}",
                type: "get",
                data: {'id': $('#bedid').val() , 'amt': $('#amt').val()},
                success: function (result){
                    toastr.success( 'Revise request send successfully');
                    $('#showreviseModal').modal('hide')
                    setTimeout(function(){ location.reload() },1000);

                },
                error: function (request, status, error) {
                    // swal.fire(
                    //     'Already bidds',
                    //     'Please waits for approval.',
                    //     'warning');
                    //
                    // $('#showModal').modal('hide')
                }
            })
        }



        function showDriverList(id){
            // $("#package_table tbody tr").remove();
            var data = {id:id};
            $('#showDriverList').modal('show');
            $.get( '{{route("shipment.assign")}}',data, function( response ) {
               console.log(response);
                if(Object.keys(response).length == 0){
                    $('#show_DriverList').append('Not Available')
                }
                $('#show_DriverList tbody').empty();
                let shipment_id;
                let driver_id;
                let html;
                for(var i = 0; i < Object.keys(response).length; i++ ){
                    shipment_id = id;
                    driver_id = response[i].user_id;
                    html += `<tr>
                        <td>`+ response[i].name +`</td>
                        <td>`+ response[i].email +`</td>
                        <td>`+ response[i].phone +`</td>
                        <td>`+ response[i].vehicle.name +`</td>
                        <td>`+ response[i].vehicle_category.name +`</td>
                        <td>`+ response[i].vehicle_number +`</td>
                        <td> <a class="btn btn-sm btn-outline-danger" onclick="assignShipnemt(${shipment_id}, ${driver_id})">Assign</a> </td>
                    `;
                }
                $('#show_DriverList tbody').html(html);

            });

        }


        function assignShipnemt(shipment_id,driver_id){

            console.log(shipment_id,driver_id)
            let data={'shipment_id':shipment_id,'driver_id':driver_id}
            console.log(data);
            $.get( '{{route("assign.driver")}}',data, function( response ) {
                toastr.success( 'shipment assigned successfully ');
                setTimeout(function(){ location.reload() },1000);
            })

        }


    </script>


@endsection
