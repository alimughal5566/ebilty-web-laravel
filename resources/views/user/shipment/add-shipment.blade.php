@extends('admin.layout.app')


@section('content')
    <style>
        html,
        body,
        main {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #carousel {
            position: relative;
            height: 300px;
            top: 50%;
            transform: translateY(-50%);
            overflow: hidden;
        }

        #carousel div {
            position: absolute;
            transition: transform 1s, left 1s, opacity 1s, z-index 0s;
            opacity: 1;
        }

        #carousel div img {
            width: 400px;
            transition: width 1s;
        }

        #carousel div.hideLeft {
            left: 0%;
            opacity: 0;
            transform: translateY(50%) translateX(-50%);
        }

        #carousel div.hideLeft img {
            width: 200px;
        }

        #carousel div.hideRight {
            left: 100%;
            opacity: 0;
            transform: translateY(50%) translateX(-50%);
        }

        #carousel div.hideRight img {
            width: 200px;
        }

        #carousel div.prev {
            z-index: 5;
            left: 24%;
            transform: translateY(50px) translateX(-50%);
        }

        #carousel div.prev img {
            width: 300px;
        }

        #carousel div.prevLeftSecond {
            z-index: 4;
            left: 7%;
            transform: translateY(50%) translateX(-50%);
            opacity: 0.7;
        }

        #carousel div.prevLeftSecond img {
            width: 200px;
        }

        #carousel div.selected {
            z-index: 10;
            left: 49%;
            transform: translateY(0px) translateX(-50%);
            border: 1px solid black;
            border-radius: 8px;
            padding: 20px;
        }

        #carousel div.next {
            z-index: 5;
            left: 74%;
            transform: translateY(50px) translateX(-50%);
        }

        #carousel div.next img {
            width: 300px;
        }

        #carousel div.nextRightSecond {
            z-index: 4;
            left: 91%;
            transform: translateY(50%) translateX(-50%);
            opacity: 0.7;
        }

        #carousel div.nextRightSecond img {
            width: 200px;
        }

        .buttons {
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
          integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

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
                    <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Create New Shipment</span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                </div>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <form method="POST" action="{{route('create.shipment')}}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="kt-portlet__head panel-title" data-toggle="collapse"
                                     data-target="#collapseOne">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Shipment information
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="kt-portlet__body">
                                        <div class="form-group form-group-last kt-hide">
                                            <div class="alert alert-danger kt_form_msg" role="alert">
                                                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                <div class="alert-text">
                                                    Oh snap! Change a few things up and try submitting again.
                                                </div>
                                                <div class="alert-close">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true"><i class="la la-close"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        {{--                                        <div class="kt-section">--}}
                                        {{--                                            <h3 class="kt-section__title kt-margin-b-20">--}}
                                        {{--                                                Book As <span class="kt-badge kt-badge--danger kt-badge--dot"></span>--}}
                                        {{--                                            </h3>--}}
                                        {{--                                            <div class="kt-section__content">--}}
                                        {{--                                                <div class="form-group form-group-last">--}}
                                        {{--                                                    <div class="row">--}}
                                        {{--                                                        <div class="col-lg-6">--}}
                                        {{--                                            <label class="kt-option">--}}
                                        {{--                                          <span class="kt-option__control">--}}
                                        {{--                                          <span class="kt-radio kt-radio--state-brand">--}}
                                        {{--                                          <input type="radio" name="book_as" class="type" value="1" checked="" {{(old('book_as')==1)?'checked':''}}>--}}
                                        {{--                                          <span></span>--}}
                                        {{--                                          </span>--}}
                                        {{--                                          </span>--}}
                                        {{--                                              <span class="kt-option__label">--}}
                                        {{--                                          <span class="kt-option__head">--}}
                                        {{--                                          <span class="kt-option__title">--}}
                                        {{--                                            Sender--}}
                                        {{--                                          </span>--}}
                                        {{--                                          <span class="kt-option__focus"></span>--}}
                                        {{--                                          </span>--}}
                                        {{--                                          <span class="kt-option__body">--}}
                                        {{--                                            For sending a parcel--}}
                                        {{--                                          </span>--}}
                                        {{--                                          </span>--}}
                                        {{--                                                            </label>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="col-lg-6">--}}
                                        {{--                                                            <label class="kt-option">--}}
                                        {{--                                          <span class="kt-option__control">--}}
                                        {{--                                          <span class="kt-radio kt-radio--state-brand">--}}
                                        {{--                                          <input type="radio" name="book_as" class="type" value="2"  {{(old('book_as')==2)?'checked':''}}>--}}
                                        {{--                                          <span></span>--}}
                                        {{--                                          </span>--}}
                                        {{--                                          </span>--}}
                                        {{--                                                                <span class="kt-option__label">--}}
                                        {{--                                          <span class="kt-option__head">--}}
                                        {{--                                          <span class="kt-option__title">--}}
                                        {{--                                          Receiver--}}
                                        {{--                                          </span>--}}
                                        {{--                                          <span class="kt-option__focus"></span>--}}
                                        {{--                                          </span>--}}
                                        {{--                                          <span class="kt-option__body">--}}
                                        {{--                                          For receiving shipment--}}
                                        {{--                                          </span>--}}
                                        {{--                                          </span>--}}
                                        {{--                                                            </label>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <div class="form-text text-muted">--}}
                                        {{--                                                        <!--must use this helper element to display error message for the options-->--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit kt-margin-t-0"></div>--}}
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>Shipping Date<span
                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                <div class="input-group date">
                                                    <input type="date" class="form-control date" name="ship_date"
                                                           value="{{old('ship_date')}}" required>
                                                    <div class="input-group-append">
                                                        {{--                                      <span class="input-group-text">--}}
                                                        {{--                                       <i class="la la-calendar"></i>--}}
                                                        {{--                                       </span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Shipping Time <span
                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                <div class="input-group ">
                                                    <input type="time" class="form-control ship_time" name="ship_time"
                                                           value="{{old('ship_time')}}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h3 class="kt-section__title kt-margin-b-5 pt-1">
                                                            Delivery Type <span class="kt-badge  "></span>
                                                        </h3>
                                                        <label class="kt-option">
                                       <span class="kt-option__control">
                                       <span class="kt-radio kt-radio--state-brand">
                                       <input type="radio" name="dilivery_type" class="dilivery_typ" value="1"
                                              checked="" {{(old('dilivery_type')==1)?'checked':''}}  >
                                       <span></span>
                                       </span>
                                       </span>
                                                            <span class="kt-option__label">
                                       <span class="kt-option__head">
                                       <span class="kt-option__title">
                                       Vehicle
                                       </span>
                                       <span class="kt-option__focus"></span>
                                       </span>
                                       <span class="kt-option__body">
                                       </span>
                                       </span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3 class="kt-section__title kt-margin-b-5 pt-1">
                                                            &nbsp;<span class=""></span>
                                                        </h3>
                                                        <label class="kt-option">
                                       <span class="kt-option__control">
                                       <span class="kt-radio kt-radio--state-brand">
                                       <input type="radio" name="dilivery_type" class="dilivery_typ" value="2" {{(old('dilivery_type')==2)?'checked':''}} >
                                       <span></span>
                                       </span>
                                       </span>
                                                            <span class="kt-option__label">
                                       <span class="kt-option__head">
                                       <span class="kt-option__title">
                                       Package
                                       </span>
                                       <span class="kt-option__focus"></span>
                                       </span>
                                       <span class="kt-option__body">
                                       </span>
                                       </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h3 class="kt-section__title kt-margin-b-5 pt-1 ">
                                                            Wants to avail Insurance? <span class="kt-badge  "></span>
                                                        </h3>
                                                        <label class="kt-option">
                                       <span class="kt-option__control">
                                       <span class="kt-radio kt-radio--state-brand">
                                       <input type="radio" name="is_insured" class="is_insured" value="1" {{(old('is_insured')==1)?'checked':''}}>
                                       <span></span>
                                       </span>
                                       </span>
                                                            <span class="kt-option__label">
                                       <span class="kt-option__head">
                                       <span class="kt-option__title">
                                       Yes
                                       </span>
                                       <span class="kt-option__focus"></span>
                                       </span>
                                       <span class="kt-option__body">
                                       </span>
                                       </span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3 class="kt-section__title kt-margin-b-5 pt-1">
                                                            &nbsp;<span class=""></span>
                                                        </h3>
                                                        <label class="kt-option">
                                       <span class="kt-option__control">
                                       <span class="kt-radio kt-radio--state-brand">
                                       <input type="radio" name="is_insured" class="is_insured" value="0" checked="" {{(old('is_insured')==0)?'checked':''}}>
                                       <span></span>
                                       </span>
                                       </span>
                                                            <span class="kt-option__label">
                                       <span class="kt-option__head">
                                       <span class="kt-option__title">
                                       No
                                       </span>
                                       <span class="kt-option__focus"></span>
                                       </span>
                                       <span class="kt-option__body">
                                       </span>
                                       </span>
                                                        </label>
                                                    </div>

                                                    <div class="col-lg-12 packege-cost" style="display: none">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text">package price</span></div>
                                                            <input type="number" class="form-control budget_client"
                                                                   value="{{old('package_cost')}}" name="package_cost"
                                                                   min="1" placeholder="Price">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h3 class="kt-section__title kt-margin-b-5 pt-1">
                                                            Includes <span class="kt-badge  "></span>
                                                        </h3>
                                                        <label class="kt-option">
                                       <span class="kt-option__control">
                                       <span class="kt-radio kt-radio--state-brand">
                                       <input type="checkbox" name="loading" class="loading" value="1"
                                              checked="" {{(old('loading')=='1')?'checked':''}}  >
                                       <span></span>
                                       </span>
                                       </span>
                                                            <span class="kt-option__label">
                                       <span class="kt-option__head">
                                       <span class="kt-option__title">
                                       Loading
                                       </span>
                                       <span class="kt-option__focus"></span>
                                       </span>
                                       <span class="kt-option__body">
                                       </span>
                                       </span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h3 class="kt-section__title kt-margin-b-5 pt-1">
                                                            &nbsp;<span class=""></span>
                                                        </h3>
                                                        <label class="kt-option">
                                       <span class="kt-option__control">
                                       <span class="kt-radio kt-radio--state-brand">
                                       <input type="checkbox" name="unloading" class="unloading" value="1" {{(old('unloading')=='yes')?'checked':''}} >
                                       <span></span>
                                       </span>
                                       </span>
                                                            <span class="kt-option__label">
                                       <span class="kt-option__head">
                                       <span class="kt-option__title">
                                       Unloading
                                       </span>
                                       <span class="kt-option__focus"></span>
                                       </span>
                                       <span class="kt-option__body">
                                       </span>
                                       </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="panel-heading">
                                <div class="kt-portlet__head panel-title" data-toggle="collapse"
                                     data-target="#collapseTwo">
                                    <div class="kt-portlet__head-label">
                                        <span class="kt-portlet__head-icon">
                                            <i class="flaticon2-user"></i>
                                        </span>
                                        <h3 class="kt-portlet__head-title" id="pickupAddress">
                                            Add a new pickup address <small>Fill data and save it before you
                                                continue</small>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="kt-portlet__body">
                                    {{--                                    <div class="form-group form-group-last kt-hide">--}}
                                    {{--                                        <div class="alert alert-danger kt_form_msg" role="alert">--}}
                                    {{--                                            <div class="alert-icon"><i class="flaticon-warning"></i></div>--}}
                                    {{--                                            <div class="alert-text">--}}
                                    {{--                                                Oh snap! Change a few things up and try submitting again.--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <div class="alert-close">--}}
                                    {{--                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                                    {{--                                                    <span aria-hidden="true"><i class="la la-close"></i></span>--}}
                                    {{--                                                </button>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="base_sender ">
                                        <div class="row">
                                            {{--                                            <div class="col-md-6">--}}
                                            {{--                                                <div class="form-group">--}}
                                            {{--                                                    <label>Sender<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                            {{--                                                    <div class="dropdown bootstrap-select form-control sender_address_id">--}}
                                            {{--                                                        <select class="form-control" onchange="showsenderform1(this.value)" name="sender_name" id="sendr" data-live-search="true" title="Choose User" tabindex="-98">--}}
                                            {{--                                                            @foreach($users as $sender)--}}
                                            {{--                                                                <option value="{{$sender->id}}" {{(old('sender_name')==$sender->id)?'selected':''}} {{(auth()->user()->id==$sender->id)?"selected":''}} >{{$sender->name}} ({{$sender->email}})</option>--}}
                                            {{--                                                            @endforeach--}}
                                            {{--                                                            <option value="new" data-icon="flaticon2-add">Add New</option>--}}
                                            {{--                                                        </select>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="col-md-6">--}}
                                            {{--                                                <div class="form-group">--}}
                                            {{--                                                    <label>Sender Address/Client Address<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                            {{--                                                    <div class="dropdown bootstrap-select form-control ">--}}
                                            {{--                                                        <select class="form-control sender_address" placeholder=" Address" onchange="showsenderform(this.value)" name="sender_address" id="sender_address_id" data-live-search="true" title="Sender address"  tabindex="-98">--}}
                                            {{--                                                            @foreach($addresses as $address)--}}
                                            {{--                                                                <option value="{{$address->id}}" {{(old('sender_address')==$address->id)?'selected':''}} {{($address->is_default==1)?'selected':''}} >{{$address->address}} </option>--}}
                                            {{--                                                            @endforeach--}}
                                            {{--                                                            <option value="new" data-icon="flaticon2-add">Add New</option>--}}
                                            {{--                                                        </select>--}}
                                            {{--                                                        <input type="hidden" id="addris_id">--}}

                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="col-md-12" id="showpickupaddress"></div>
                                            <div class="col-md-12" id="addnewsenderaddress">
                                                <div class="kt-portlet__body">
                                                    <div class="location-senderaddress">
                                                        <div class="row">
                                                            <div class="form-group col-lg-4">
                                                                <label>Name<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="text" class="form-control" name="user_name"
                                                                       id="user_name" required>
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>Pickup address</label>
                                                                <input type="text" id="address-input"
                                                                       class="form-control map-input" autocomplete="off"
                                                                       placeholder="Enter Location">
                                                                <input type="hidden" name="lat" id="address-latitude"
                                                                       value="0"/>
                                                                <input type="hidden" name="lng" id="address-longitude"
                                                                       value="0"/>
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>Country<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <select class="form-control country_id" id="contry"
                                                                        onchange="getStates(this.value,'stat')"
                                                                        data-senderaddress="country"
                                                                        title="Please choose country"
                                                                        data-live-search="true"
                                                                        name="senderaddress[country]">
                                                                    @foreach($countries as $country)
                                                                        <option
                                                                            value="{{$country->id}}">{{$country->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                        </div>

                                                        <input id="pickupaddress_id" name="pickupaddress_id"
                                                               type="hidden">
                                                        <div class="row">
                                                            <div class="form-group col-lg-4">
                                                                <label>State / Region&nbsp;<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <select class="form-control state_id" id="stat"
                                                                        onchange="getCities(this.value,'cite')"
                                                                        data-senderaddress="administrative_area_level_1"
                                                                        title="Please select country first"
                                                                        name="senderaddress[state]"
                                                                        data-live-search="true">
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>City&nbsp;<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <select class="form-control city_id" id="cite"
                                                                        onchange="getArea(this.value,'areea')"
                                                                        data-senderaddress="locality"
                                                                        name="senderaddress[city]"
                                                                        title="Please select state first"
                                                                        data-live-search="true">
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>Floor<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="text" class="form-control" name="floor"
                                                                       id="floor" required>
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>Building<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="text" class="form-control" name="building"
                                                                       id="building" required>
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>Street<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="text" class="form-control" name="street"
                                                                       id="street" required>
                                                            </div>
                                                            <div class="form-group col-lg-12">
                                                                <label>Google Map</label>
                                                                <div id="address-map-container"
                                                                     style="width:100%;height:400px; ">
                                                                    <div style="width: 100%; height: 100%"
                                                                         id="address-map"></div>
                                                                </div>
                                                                <span class="form-text text-muted">Drag the pin to select the right location</span>
                                                            </div>
                                                            <input type="hidden" name="address_id_value"
                                                                   id="address_id_value">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-12">
                                                            <button type="button" onclick="saveaddress()"
                                                                    class="btn btn-success saved" id="pick_save_btn">
                                                                Save <i
                                                                    class=" loadr bx bx-loader-circle bx-spin bx-rotate-90 d-none"
                                                                    style="color:#ffffff ; padding: 0; vertical-align: auto;font-size: 24px;"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-secondary cancel">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-10 offset-1 d-none p-1" id="addnewsender">
                                                <div
                                                    class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                                    <div class="kt-portlet__head">
                                                        <div class="kt-portlet__head-label">
                                                   <span class="kt-portlet__head-icon">
                                                       <i class="flaticon2-user"></i>
                                                   </span>
                                                            <h3 class="kt-portlet__head-title">
                                                                Add new user <small>Fill data and save it before you can
                                                                    continue</small>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="kt-portlet__body">
                                                        <div class="row">
                                                            <div class="form-group col-lg-5">
                                                                <label>Name<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="text" class="form-control name"
                                                                       name="receiver_name" id="s_nam"
                                                                       placeholder="Full name">
                                                            </div>
                                                            <div class="form-group col-lg-5">
                                                                <label>Email<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input class="form-control mobile"
                                                                       name="receiver[email]" id="s_email" type="email"
                                                                       placeholder="Email">
                                                            </div>
                                                            <div class="form-group col-lg-5">
                                                                <label>Mobile<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="number" class="form-control mobile"
                                                                       name="receiver[mobile]" id="s_phone"
                                                                       placeholder="Number">
                                                            </div>
                                                            <div class="form-group col-lg-5">
                                                                <label>Password<span
                                                                        class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="password" class="form-control "
                                                                       name="receiver[pwd]" id="s_pass"
                                                                       placeholder="Password">
                                                            </div>

                                                        </div>
                                                        <div class="location-receiver">
                                                            {{--                                                            <div class="row">--}}
                                                            {{--                                                                <div class="form-group col-md-4">--}}
                                                            {{--                                                                    <div class="form-group kt-form__group--inline">--}}
                                                            {{--                                                                        <div class="kt-form__control">--}}
                                                            {{--                                                                            <label>Address<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                            {{--                                                                            <input type="text" placeholder="Address" class="form-control email" name="receiver[address]" id="s_add" >--}}
                                                            {{--                                                                        </div>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                </div>--}}

                                                            {{--                                                                <div class="form-group col-lg-6">--}}
                                                            {{--                                                                    <label>Country<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                            {{--                                                                    <div class="dropdown bootstrap-select form-control ">--}}
                                                            {{--                                                                        <select class="form-control country_id" onchange="getStates(this.value,'statees')" id="s_country"  title="Please write address first" name="receiver[country]"  >--}}
                                                            {{--                                                                            <option data-hidden="true"></option>--}}
                                                            {{--                                                                            @foreach($countries as $country)--}}
                                                            {{--                                                                                <option  value="{{$country->id}}">{{$country->name}}</option>--}}
                                                            {{--                                                                            @endforeach--}}
                                                            {{--                                                                        </select>--}}
                                                            {{--                                                                        <div class="dropdown-menu ">--}}
                                                            {{--                                                                            <div class="inner show" role="listbox" id="bs-select-25" tabindex="-1">--}}
                                                            {{--                                                                                <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                                            {{--                                                                            </div>--}}
                                                            {{--                                                                        </div>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                </div>--}}

                                                            {{--                                                                <div class="form-group col-lg-4">--}}
                                                            {{--                                                                    <label>State<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                            {{--                                                                    <div class="dropdown bootstrap-select form-control ">--}}
                                                            {{--                                                                        <select name="statee" class="form-control" id="statees"  onchange="getCities(this.value,'cityy')"   title="Please select country first" >--}}
                                                            {{--                                                                            --}}{{--                                                                            <option value="" selected="" disabled="">Vehicle category</option>--}}
                                                            {{--                                                                        </select>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                                <div class="form-group col-lg-4">--}}
                                                            {{--                                                                    <label>City<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                            {{--                                                                    <div class="dropdown bootstrap-select form-control ">--}}
                                                            {{--                                                                        <select class="form-control cities" id="cityy" name="receiver[city]" onchange="getArea(this.value,'areaa')"  title="Please select state first" data-live-search="true"  tabindex="-98">--}}
                                                            {{--                                                                            <option data-hidden="true"></option>--}}
                                                            {{--                                                                        </select>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                </div>--}}

                                                            {{--                                                                <div class="form-group col-lg-4">--}}
                                                            {{--                                                                    <label>Area<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                            {{--                                                                    <div class="dropdown bootstrap-select form-control area_id">--}}
                                                            {{--                                                                        <select class="form-control areas" data-receiver="sublocality" id="areaa" name="receiver[area]" title="Please select city first" data-live-search="true" tabindex="-98">--}}
                                                            {{--                                                                            --}}{{--                                                                            <option class="bs-title-option" value=""></option>--}}
                                                            {{--                                                                            <option data-hidden="true"></option>--}}
                                                            {{--                                                                        </select>--}}
                                                            {{--                                                                        <div class="dropdown-menu ">--}}
                                                            {{--                                                                            <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-17" aria-autocomplete="list"></div>--}}
                                                            {{--                                                                            <div class="inner show" role="listbox" id="bs-select-17" tabindex="-1">--}}
                                                            {{--                                                                                <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                                            {{--                                                                            </div>--}}
                                                            {{--                                                                        </div>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                                <div class="form-group col-lg-6">--}}
                                                            {{--                                                                    <label>Postal Code</label>--}}
                                                            {{--                                                                    <input class="form-control postal_code" type="text" id="postal" name="receiver[postal_code]" placeholder="Area Zip code">--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                            </div>--}}
                                                            {{--                                                            <div class="form-group row">--}}
                                                            {{--                                                                <label class="col-xl-3 col-lg-3 col-form-label"></label>--}}
                                                            {{--                                                                <div class="col-lg-9 col-xl-6">--}}
                                                            {{--                                                                    <div class="kt-checkbox-single">--}}
                                                            {{--                                                                        <label class="kt-checkbox">--}}
                                                            {{--                                                                            <input type="checkbox" name="connect" class="connect" value="receiver">Connect client: create an account for the client--}}
                                                            {{--                                                                            <span></span>--}}
                                                            {{--                                                                        </label>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                            </div>--}}
                                                            {{--                                                            <div class="row align-items-center kt-hidden" id="connect_receiver">--}}
                                                            {{--                                                                <div class="col-md-4">--}}
                                                            {{--                                                                    <div class="form-group kt-form__group--inline">--}}
                                                            {{--                                                                        <div class="kt-form__label">--}}
                                                            {{--                                                                            <label class="col-form-label">Email:&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                            {{--                                                                        </div>--}}
                                                            {{--                                                                        <div class="kt-form__control">--}}
                                                            {{--                                                                            <input type="text" class="form-control email" name="receiver[email]" >--}}
                                                            {{--                                                                        </div>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                    <div class="d-md-none kt-margin-b-10"></div>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                                <div class="col-md-4">--}}
                                                            {{--                                                                    <div class="form-group kt-form__group--inline">--}}
                                                            {{--                                                                        <div class="kt-form__label">--}}
                                                            {{--                                                                            <label class="col-form-label">Username:&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                            {{--                                                                        </div>--}}
                                                            {{--                                                                        <div class="kt-form__control">--}}
                                                            {{--                                                                            <input type="text" class="form-control username" name="receiver[username]" >--}}
                                                            {{--                                                                        </div>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                    <div class="d-md-none kt-margin-b-10"></div>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                                <div class="col-md-4">--}}
                                                            {{--                                                                    <div class="form-group kt-form__group--inline">--}}
                                                            {{--                                                                        <div class="kt-form__label">--}}
                                                            {{--                                                                            <label class="col-form-label">Password:&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                            {{--                                                                        </div>--}}
                                                            {{--                                                                        <div class="kt-form__control">--}}
                                                            {{--                                                                            <input type="password" class="form-control password" name="receiver[password]" >--}}
                                                            {{--                                                                        </div>--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                    <div class="d-md-none kt-margin-b-10"></div>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                            </div>--}}
                                                        </div>
                                                    </div>
                                                    <div class="kt-portlet__foot">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-12">
                                                                <button type="button" class="btn btn-success savee"
                                                                        onclick="sender_save()">Save <i
                                                                        class='bx bx-loader-circle bx-spin bx-rotate-90 d-none'
                                                                        style='color:#ffffff ; padding: 0; vertical-align: auto;font-size: 24px;'></i>
                                                                </button>
                                                                <button type="button" class="btn btn-secondary cancel">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    {{--                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>--}}
                                    {{--                                    --}}
                                    {{--                                    <div class="form-group row type_1">--}}
                                    {{--                                        <label class="col-xl-3 col-lg-3 col-form-label">Record receiver information ?&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                    {{--                                        <div class="col-lg-9 col-xl-6">--}}
                                    {{--                                            <div class="kt-radio-inline">--}}
                                    {{--                                                <label class="kt-radio">--}}
                                    {{--                                                    <input type="radio"  {{(old('show_receiver_info')==1)?'checked':''}} name="show_receiver_info" class="show_receiver_info" value="1" checked="" > Yes--}}
                                    {{--                                                    <span></span>--}}
                                    {{--                                                </label>--}}
                                    {{--                                                <label class="kt-radio">--}}
                                    {{--                                                    <input type="radio" {{(old('show_receiver_info')==2)?'checked':''}} name="show_receiver_info" class="show_receiver_info" value="2" > No--}}
                                    {{--                                                    <span></span>--}}
                                    {{--                                                </label>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="type_2 receiver_information">
                            <div class="kt-portlet kt-portlet--mobile">
                                <div class="panel panel-heading">
                                    <div class="kt-portlet__head panel-title" data-toggle="collapse"
                                         data-target="#collapseThree">
                                        <div class="kt-portlet__head-label">
                                                        <span class="kt-portlet__head-icon">
                                                            <i class="flaticon2-user"></i>
                                                        </span>
                                            <h3 class="kt-portlet__head-title" id="dropoffAddress">
                                                Add a new Drop Off address <small>Fill data and save it before you
                                                    continue</small>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="kt-portlet__body">
                                        {{--                                        <div class="row m-0">--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group">--}}
                                        {{--                                                    <label>Client<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                        {{--                                                    <div class="dropdown bootstrap-select form-control ">--}}
                                        {{--                                                        <select onchange="showreceiverform1(this.value)" class="form-control" name="receiver_name" id="receiver_name" data-live-search="true" title="Client"  tabindex="-98">--}}
                                        {{--                                                            <option data-hidden="true"></option>--}}
                                        {{--                                                            @foreach($users as $receiver)--}}
                                        {{--                                                                <option value="{{$receiver->id}}" {{(old('receiver_name')==$receiver->id)?'selected':''}}>{{$receiver->name}} ({{$receiver->email}})</option>--}}
                                        {{--                                                            @endforeach--}}
                                        {{--                                                            <option value="new" data-icon="flaticon2-add">Add New</option>--}}
                                        {{--                                                        </select>--}}

                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}

                                        {{--                                            </div>--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group ">--}}
                                        {{--                                                    <label>Receiver Address<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                        {{--                                                    <div class="dropdown bootstrap-select form-control ">--}}
                                        {{--                                                        <select onchange="showreceiverform(this.value)" class="form-control receiver_address_id" id="receiver_address_id" name="receiver_address"  data-live-search="true" title="Address"  tabindex="-98">--}}
                                        {{--                                                            @foreach($addresses as $address)--}}
                                        {{--                                                                <option value="{{$address->id}}" {{(old('receiver_address')==$address->id)?'selected':''}}>{{$address->address}} </option>--}}
                                        {{--                                                            @endforeach--}}
                                        {{--                                                            <option value="new" data-icon="flaticon2-add">Add New</option>--}}
                                        {{--                                                        </select>--}}
                                        {{--                                                        <div class="dropdown-menu ">--}}
                                        {{--                                                            <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-13" aria-autocomplete="list"></div>--}}
                                        {{--                                                            <div class="inner show" role="listbox" id="bs-select-13" tabindex="-1">--}}
                                        {{--                                                                <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}


                                        <div class="col-md-12 d-none" id="showDropOff"></div>
                                        <div class="col-md-12" id="addnewreceivr">
                                            <div class="location-senderaddress">
                                                <div class="row">
                                                    <div class="form-group col-lg-4">
                                                        <label>Name<span
                                                                class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                        <input type="text" class="form-control" name="user_name1"
                                                               id="user_name1" required>
                                                    </div>
                                                    <div class="form-group col-lg-4">

                                                        <label>Location</label>
                                                        <input type="text" id="address_input" autocomplete="off"
                                                               class="form-control imap-input"
                                                               placeholder="Enter address">
                                                        <input type="hidden" name="address_latitude"
                                                               id="address-latitude1" value="0"/>
                                                        <input type="hidden" name="address_longitude"
                                                               id="address-longitude1" value="0"/>
                                                        <input type="hidden" id="dropoff_address_id">

                                                        {{--                                                                <input type="text" id="r_adres" placeholder="Address" class="form-control address street_addr" name="senderaddress[street_address]"  rel="senderaddress" />--}}
                                                        {{--                                                                <input type="hidden" class="form-control lat" data-senderaddress="lat" name="senderaddress[lat]" />--}}
                                                        {{--                                                                <input type="hidden" class="form-control lng" data-senderaddress="lng" name="senderaddress[lng]" />--}}
                                                        {{--                                                                <input type="hidden" class="form-control url" data-senderaddress="url" name="senderaddress[url]" />--}}
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Country<span
                                                                class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                        <select class="form-control country_id" id="r_contry"
                                                                onchange="getStates(this.value,'r_stat')"
                                                                data-senderaddress="country"
                                                                title="Please choose country" data-live-search="true"
                                                                name="senderaddress[country]">
                                                            @foreach($countries as $country)
                                                                <option
                                                                    value="{{$country->id}}">{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="form-group col-lg-4">
                                                        <label>State / Region&nbsp;<span
                                                                class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                        <select class="form-control state_id" id="r_stat"
                                                                onchange="getCities(this.value,'r_cite')"
                                                                data-senderaddress="administrative_area_level_1"
                                                                title="Please select country first"
                                                                name="senderaddress[state]" data-live-search="true">
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>City&nbsp;<span
                                                                class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                        <select class="form-control city_id" id="r_cite"
                                                                onchange="getArea(this.value,'r_areea')"
                                                                data-senderaddress="locality" name="senderaddress[city]"
                                                                title="Please select state first"
                                                                data-live-search="true">
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Floor<span
                                                                class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                        <input type="text" class="form-control" name="floor1"
                                                               id="floor1" required>
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Building<span
                                                                class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                        <input type="text" class="form-control" name="building1"
                                                               id="building1" required>
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Street<span
                                                                class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                        <input type="text" class="form-control" name="street1"
                                                               id="street1" required>
                                                    </div>
                                                </div>

                                                <input id="dropofupaddress_id" name="dropofupaddress_id" type="hidden">
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label>Google Map</label>
                                                        <div style="width:100%;height:400px; ">
                                                            <div style="width: 100%; height: 100%"
                                                                 id="address-mapp"></div>
                                                        </div>

                                                        <span class="form-text text-muted">Drag the pin to select the right location</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__foot">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-12">
                                                        <button type="button" onclick="saveaddresss()"
                                                                id="drop_save_btn" class="btn btn-success saveed">Save
                                                            <i class=" loadir bx bx-loader-circle bx-spin bx-rotate-90 d-none"
                                                               style="color:#ffffff ; padding: 0; vertical-align: auto;font-size: 24px;"></i>
                                                        </button>
                                                        {{--                                                            <button type="button" class="btn btn-secondary cancel" onclick="document.getElementById('addnewreceivr').style.display='none'">Cancel</button>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-10 offset-1 d-none p-1" id="addnewreceiver">
                                            <div
                                                class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                   <span class="kt-portlet__head-icon">
                                                       <i class="flaticon2-user"></i>
                                                   </span>
                                                        <h3 class="kt-portlet__head-title">
                                                            Add new user <small>Fill data and save it before you can
                                                                continue</small>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <div class="row">
                                                        <div class="form-group col-lg-5">
                                                            <label>Name<span
                                                                    class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                            <input type="text" class="form-control name"
                                                                   name="receiver[name]" id="r_nam"
                                                                   placeholder="Full name">
                                                        </div>
                                                        <div class="form-group col-lg-5">
                                                            <label>Email<span
                                                                    class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                            <input class="form-control mobile" name="receiver[email]"
                                                                   id="r_email" type="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-lg-5">
                                                            <label>Mobile<span
                                                                    class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                            <input type="number" class="form-control mobile"
                                                                   name="receiver[mobile]" id="r_phone"
                                                                   placeholder="Number">
                                                        </div>
                                                        <div class="form-group col-lg-5">
                                                            <label>Password<span
                                                                    class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                            <input type="password" class="form-control "
                                                                   name="receiver[pwd]" id="r_pass"
                                                                   placeholder="Password">
                                                        </div>

                                                    </div>
                                                    <div class="location-receiver"></div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-12">
                                                            <button type="button" class="btn btn-success saveee"
                                                                    onclick="receiver_save()">Save <i
                                                                    class='bx bxy bx-loader-circle bx-spin bx-rotate-90 d-none'
                                                                    style='color:#ffffff ; padding: 0; vertical-align: auto;font-size: 24px;'></i>
                                                            </button>
                                                            <button type="button" class="btn btn-secondary cancel">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        <div class="row kt-hidden" id="addnewreceiveraddress">--}}
                                        {{--                                            <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">--}}
                                        {{--                                                <div class="kt-portlet__head">--}}
                                        {{--                                                    <div class="kt-portlet__head-label">--}}
                                        {{--                                       <span class="kt-portlet__head-icon">--}}
                                        {{--                                       <i class="flaticon2-user"></i>--}}
                                        {{--                                       </span>--}}
                                        {{--                                                        <h3 class="kt-portlet__head-title">--}}
                                        {{--                                                            Add a new client address <small>Fill data and save it brefore you can continue</small>--}}
                                        {{--                                                        </h3>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <div class="kt-portlet__body">--}}
                                        {{--                                                    <div class="location-receiveraddress">--}}
                                        {{--                                                        <div class="row">--}}
                                        {{--                                                            <div class="form-group col-lg-5">--}}
                                        {{--                                                                <label>Address&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                        {{--                                                                <input type="text" class="form-control address street_addr pac-target-input" name="receiveraddress[street_address]" rel="receiveraddress"  placeholder="Enter a location" autocomplete="off">--}}
                                        {{--                                                                <input type="hidden" class="form-control lat" data-receiveraddress="lat" name="receiveraddress[lat]">--}}
                                        {{--                                                                <input type="hidden" class="form-control lng" data-receiveraddress="lng" name="receiveraddress[lng]">--}}
                                        {{--                                                                <input type="hidden" class="form-control url" data-receiveraddress="url" name="receiveraddress[url]">--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                            <div class="form-group col-lg-4">--}}
                                        {{--                                                                <label>Country&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                        {{--                                                                <div class="dropdown bootstrap-select form-control country_id">--}}
                                        {{--                                                                    <select class="form-control country_id" data-receiveraddress="country" data-live-search="true" name="receiveraddress[country]"  tabindex="-98">--}}
                                        {{--                                                                        <option data-hidden="true"></option>--}}
                                        {{--                                                                        <option value="1">Afghanistan</option>--}}
                                        {{--                                                                        <option value="2">Albania</option>--}}
                                        {{--                                                                        <option value="3">Algeria</option>--}}
                                        {{--                                                                        <option value="4">American Samoa</option>--}}

                                        {{--                                                                    </select>--}}
                                        {{--                                                                    <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-18" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected">--}}
                                        {{--                                                                        <div class="filter-option">--}}
                                        {{--                                                                            <div class="filter-option-inner">--}}
                                        {{--                                                                                <div class="filter-option-inner-inner">Nothing selected</div>--}}
                                        {{--                                                                            </div>--}}
                                        {{--                                                                        </div>--}}
                                        {{--                                                                    </button>--}}
                                        {{--                                                                    <div class="dropdown-menu ">--}}
                                        {{--                                                                        <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-18" aria-autocomplete="list"></div>--}}
                                        {{--                                                                        <div class="inner show" role="listbox" id="bs-select-18" tabindex="-1">--}}
                                        {{--                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                        {{--                                                                        </div>--}}
                                        {{--                                                                    </div>--}}
                                        {{--                                                                </div>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                            <div class="form-group col-lg-3">--}}
                                        {{--                                                                <label>Postal Code</label>--}}
                                        {{--                                                                <input class="form-control postal_code" type="text" data-sendreceiveraddresser="postal_code" name="receiveraddress[postal_code]">--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="row">--}}
                                        {{--                                                            <div class="form-group col-lg-4">--}}
                                        {{--                                                                <label>State / Region&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                        {{--                                                                <div class="dropdown bootstrap-select form-control state_id">--}}
                                        {{--                                                                    <select class="form-control state_id" data-receiveraddress="administrative_area_level_1" title="Please select country first" name="receiveraddress[state]" data-live-search="true"  tabindex="-98">--}}
                                        {{--                                                                        <option class="bs-title-option" value=""></option>--}}
                                        {{--                                                                        <option data-hidden="true"></option>--}}
                                        {{--                                                                    </select>--}}
                                        {{--                                                                    <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-19" aria-haspopup="listbox" aria-expanded="false" title="Please select country first">--}}
                                        {{--                                                                        <div class="filter-option">--}}
                                        {{--                                                                            <div class="filter-option-inner">--}}
                                        {{--                                                                                <div class="filter-option-inner-inner">Please select country first</div>--}}
                                        {{--                                                                            </div>--}}
                                        {{--                                                                        </div>--}}
                                        {{--                                                                    </button>--}}
                                        {{--                                                                    <div class="dropdown-menu ">--}}
                                        {{--                                                                        <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-19" aria-autocomplete="list"></div>--}}
                                        {{--                                                                        <div class="inner show" role="listbox" id="bs-select-19" tabindex="-1">--}}
                                        {{--                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                        {{--                                                                        </div>--}}
                                        {{--                                                                    </div>--}}
                                        {{--                                                                </div>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                            <div class="form-group col-lg-4">--}}
                                        {{--                                                                <label>City&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                        {{--                                                                <div class="dropdown bootstrap-select form-control city_id">--}}
                                        {{--                                                                    <select class="form-control city_id" data-receiveraddress="locality" name="receiveraddress[city]" title="Please select state first" data-live-search="true"  tabindex="-98">--}}
                                        {{--                                                                        <option class="bs-title-option" value=""></option>--}}
                                        {{--                                                                        <option data-hidden="true"></option>--}}
                                        {{--                                                                    </select>--}}
                                        {{--                                                                    <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-20" aria-haspopup="listbox" aria-expanded="false" title="Please select state first">--}}
                                        {{--                                                                        <div class="filter-option">--}}
                                        {{--                                                                            <div class="filter-option-inner">--}}
                                        {{--                                                                                <div class="filter-option-inner-inner">Please select state first</div>--}}
                                        {{--                                                                            </div>--}}
                                        {{--                                                                        </div>--}}
                                        {{--                                                                    </button>--}}
                                        {{--                                                                    <div class="dropdown-menu ">--}}
                                        {{--                                                                        <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-20" aria-autocomplete="list"></div>--}}
                                        {{--                                                                        <div class="inner show" role="listbox" id="bs-select-20" tabindex="-1">--}}
                                        {{--                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                        {{--                                                                        </div>--}}
                                        {{--                                                                    </div>--}}
                                        {{--                                                                </div>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                            <div class="form-group col-lg-4">--}}
                                        {{--                                                                <label>Area</label>--}}
                                        {{--                                                                <div class="dropdown bootstrap-select form-control area_id">--}}
                                        {{--                                                                    <select class="form-control area_id" data-receiveraddress="sublocality" name="receiveraddress[county]" title="Please select city first" data-live-search="true" tabindex="-98">--}}
                                        {{--                                                                        <option class="bs-title-option" value=""></option>--}}
                                        {{--                                                                        <option data-hidden="true"></option>--}}
                                        {{--                                                                    </select>--}}
                                        {{--                                                                    <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-21" aria-haspopup="listbox" aria-expanded="false" title="Please select city first">--}}
                                        {{--                                                                        <div class="filter-option">--}}
                                        {{--                                                                            <div class="filter-option-inner">--}}
                                        {{--                                                                                <div class="filter-option-inner-inner">Please select city first</div>--}}
                                        {{--                                                                            </div>--}}
                                        {{--                                                                        </div>--}}
                                        {{--                                                                    </button>--}}
                                        {{--                                                                    <div class="dropdown-menu ">--}}
                                        {{--                                                                        <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-21" aria-autocomplete="list"></div>--}}
                                        {{--                                                                        <div class="inner show" role="listbox" id="bs-select-21" tabindex="-1">--}}
                                        {{--                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                        {{--                                                                        </div>--}}
                                        {{--                                                                    </div>--}}
                                        {{--                                                                </div>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="row">--}}
                                        {{--                                                            <div class="form-group col-lg-12">--}}
                                        {{--                                                                <label>Google Map</label>--}}
                                        {{--                                                                <div class="col-sm-12 map_canvas map_receiveraddress" style="position: relative; overflow: hidden;">--}}
                                        {{--                                                                    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">--}}
                                        {{--                                                                        <div style="overflow: hidden;"></div>--}}
                                        {{--                                                                        <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">--}}
                                        {{--                                                                            <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">--}}
                                        {{--                                                                                <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%;">--}}
                                        {{--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">--}}
                                        {{--                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>--}}
                                        {{--                                                                                    </div>--}}
                                        {{--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>--}}
                                        {{--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>--}}
                                        {{--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">--}}
                                        {{--                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;"></div>--}}
                                        {{--                                                                                    </div>--}}
                                        {{--                                                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>--}}
                                        {{--                                                                                </div>--}}
                                        {{--                                                                                <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">--}}
                                        {{--                                                                                    <p class="gm-style-pbt"></p>--}}
                                        {{--                                                                                </div>--}}
                                        {{--                                                                                <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">--}}
                                        {{--                                                                                    <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%;">--}}
                                        {{--                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>--}}
                                        {{--                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>--}}
                                        {{--                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>--}}
                                        {{--                                                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>--}}
                                        {{--                                                                                    </div>--}}
                                        {{--                                                                                </div>--}}
                                        {{--                                                                            </div>--}}
                                        {{--                                                                            <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>--}}
                                        {{--                                                                            <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>--}}
                                        {{--                                                                        </div>--}}
                                        {{--                                                                    </div>--}}
                                        {{--                                                                </div>--}}
                                        {{--                                                                <span class="form-text text-muted">Change the pin to select the right location</span>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <div class="kt-portlet__foot">--}}
                                        {{--                                                    <div class="row align-items-center">--}}
                                        {{--                                                        <div class="col-lg-12">--}}
                                        {{--                                                            <button type="button" class="btn btn-success save">Save</button>--}}
                                        {{--                                                            <button type="button" class="btn btn-secondary cancel">Cancel</button>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        <div class="form-group row kt-hidden package_fee">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Package Cost&nbsp;<span
                                                    class="kt-badge kt-badge--danger kt-badge--dot"></span>
                                                <br><span class="text-muted">Amount that will be returned to the sender from the receiver</span>
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                       <span class="input-group-text">
                                       $
                                       </span>
                                                    </div>
                                                    <input type="text" class="form-control decimal" data-type="currency"
                                                           name="package_fee">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row kt-hidden package_fee">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Return Shipment
                                                Cost&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                       <span class="input-group-text">
                                       $
                                       </span>
                                                    </div>
                                                    <input type="text" class="form-control decimal" data-type="currency"
                                                           name="return_courier_fee" id="return_courier_fee"
                                                           value="40.00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row kt-hidden package_fee">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Return package fees
                                                responsiable&nbsp;<span
                                                    class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-radio-inline">
                                                    <label class="kt-radio">
                                                        <input type="radio" name="return_package_fee"
                                                               class="return_package_fee" value="1" checked=""> Receiver
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio">
                                                        <input type="radio" name="return_package_fee"
                                                               class="return_package_fee" value="2"> Sender
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="kt-portlet">
                            <div class="panel panel-heading">
                                <div class="kt-portlet__head panel-title" data-toggle="collapse"
                                     data-target="#collapseTFour">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Shipment Details
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTFour" class="panel-collapse collapse">
                                <div class="kt-portlet__body pt-1">
                                    <div class="kt-section mb-0">
                                        <h3 class=" mb-1 mt-1">
                                            Package Content
                                        </h3>

                                        <div class="kt-section__content m-1">
                                            <div class="form-group form-group-last row">
                                                <div class="pakg  pb-0 m-3">
                                                    <div class="form-group form-group-last row">
                                                        <div data-repeater-list="items" class="col-lg-12">
                                                            <div data-repeater-item class="align-items-center">
                                                                <div class="form-group row">
                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label>Name:</label>
                                                                            </div>
                                                                            <div class="kt-form__control">
                                                                                <input class="form-control"
                                                                                       name="package_name" type="text"
                                                                                       placeholder="Enter name">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label>Package type:</label>
                                                                            </div>
                                                                            <div class="kt-form__control">

                                                                                <select
                                                                                    class="form-control selectpicker"
                                                                                    data-live-search="true"
                                                                                    name="category_id">
                                                                                    <option data-hidden="true">Choose
                                                                                        package type
                                                                                    </option>
                                                                                    @foreach($shipment_packages as $package)
                                                                                        <option
                                                                                            value="{{$package->id}}">{{$package->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label class="kt-label m-label--single">Description:</label>
                                                                            </div>
                                                                            <div class="kt-form__control">
                                                                                <input type="text" class="form-control"
                                                                                       name="description"
                                                                                       placeholder="package description">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label class="kt-label m-label--single">Quantity:</label>
                                                                            </div>
                                                                            <div class="kt-form__control">
                                                                                <input type="text"
                                                                                       class="form-control bootstrap-touchspin-vertical-btn"
                                                                                       name="quantity"
                                                                                       placeholder="package quantity">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label class="kt-label m-label--single">Weight:</label>
                                                                            </div>
                                                                            <div class="kt-form__control">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">Tons</span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                           class="form-control bootstrap-touchspin-vertical-btn sub_weight"
                                                                                           name="weight"
                                                                                           placeholder="Weight">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label>Package type:</label>
                                                                            </div>
                                                                            <div class="kt-form__control">

                                                                                <select
                                                                                    class="form-control selectpicker"
                                                                                    data-live-search="true"
                                                                                    name="payment_type">
                                                                                    <option data-hidden="true">Choose
                                                                                        payment type
                                                                                    </option>
                                                                                    <option value="1"
                                                                                            {{(old('payment_type')==1)?'selected':''}} selected>
                                                                                        Cash on Delivery
                                                                                    </option>
                                                                                    <option
                                                                                        value="2" {{(old('payment_type')==2)?'selected':''}} >
                                                                                        Online Payment
                                                                                    </option>
                                                                                </select>
                                                                                <div class="dropdown-menu ">
                                                                                    <div class="inner show"
                                                                                         role="listbox"
                                                                                         id="bs-select-11"
                                                                                         tabindex="-1">
                                                                                        <ul class="dropdown-menu inner show"
                                                                                            role="presentation"></ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label class="kt-label m-label--single">Dimensions&nbsp;<i
                                                                                        class="flaticon2-delivery-package"></i>&nbsp;[Length&nbsp;x&nbsp;Width&nbsp;x&nbsp;Height]
                                                                                    (cm):</label>
                                                                            </div>
                                                                            <div class="kt-form__control">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <input type="text"
                                                                                           class="form-control form-control-sm bootstrap-touchspin-vertical-btn"
                                                                                           name="length"
                                                                                           style="max-width: 100px;">
                                                                                </span>
                                                                                    </div>
                                                                                    <div class="input-group-prepend">
                                                                                        <span
                                                                                            class="input-group-text">x</span>
                                                                                    </div>
                                                                                    <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <input type="text"
                                                                                               class="form-control form-control-sm bootstrap-touchspin-vertical-btn"
                                                                                               name="width"
                                                                                               style="max-width: 100px;">
                                                                                    </span>
                                                                                    </div>
                                                                                    <div class="input-group-prepend">
                                                                                        <span
                                                                                            class="input-group-text">x</span>
                                                                                    </div>
                                                                                    <div class="input-group-append">
                                                                                    <span class="input-group-text">
                                                                                        <input type="text"
                                                                                               class="form-control form-control-sm bootstrap-touchspin-vertical-btn"
                                                                                               name="height"
                                                                                               style="max-width: 100px;">
                                                                                    </span>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{--                                                                    <div class="form-group col-lg-6">--}}
                                                                    {{--                                                                        <label>Shipping Fee <span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                                    {{--                                                                        <div class="input-group">--}}
                                                                    {{--                                                                            <div class="input-group-prepend">--}}
                                                                    {{--                                                                              <span class="input-group-text">--}}
                                                                    {{--                                                                              $--}}
                                                                    {{--                                                                              </span>--}}
                                                                    {{--                                                                            </div>--}}
                                                                    {{--                                                                            <input type="text" class="form-control decimal" data-type="currency" name="shipping_fee" id="delivery_cost" value="{{old('courier_fee',30)}}" >--}}
                                                                    {{--                                                                        </div>--}}
                                                                    {{--                                                                    </div>--}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="packagerepeatorText"></div>
                                        {{--                                        <span class="fa fa-plus text-warning pl-2" style="cursor: pointer" onclick="packagerepeator()"> Add more</span>--}}
                                    </div>
                                    {{--                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>--}}
                                    {{--                                    <div class="kt-section">--}}
                                    {{--                                        <div class="kt-section__content">--}}
                                    {{--                              <div class="row">--}}
                                    {{--                                 <div class="form-group col-lg-6">--}}
                                    {{--                                    <label>Insurance</label>--}}
                                    {{--                                    <div class="input-group bootstrap-touchspin">--}}
                                    {{--                                       <div class="input-group-prepend"><span class="input-group-text">%</span><button class="btn btn-secondary bootstrap-touchspin-down bootstrap-touchspin-injected" type="button">-</button></div>--}}
                                    {{--                                       <input type="text" class="form-control bootstrap-touchspin-vertical-btn" name="insurance" value="0"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"><button class="btn btn-secondary bootstrap-touchspin-up" type="button">+</button></span>--}}
                                    {{--                                    </div>--}}
                                    {{--                                 </div>--}}
                                    {{--                              </div>--}}
                                    {{--                              <div class="row">--}}
                                    {{--                                 <div class="form-group col-lg-4">--}}
                                    {{--                                    <label>Shipping Mode</label>--}}
                                    {{--                                    <div class="dropdown bootstrap-select form-control">--}}
                                    {{--                                       <select class="form-control" data-live-search="true" name="mode_id" tabindex="-98">--}}
                                    {{--                                          <option data-hidden="true"></option>--}}
                                    {{--                                          <option value="1">Air</option>--}}
                                    {{--                                          <option value="2">Water</option>--}}
                                    {{--                                          <option value="3" selected="">Land</option>--}}
                                    {{--                                       </select>--}}
                                    {{--                                       <div class="dropdown-menu ">--}}
                                    {{--                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-22" aria-autocomplete="list"></div>--}}
                                    {{--                                          <div class="inner show" role="listbox" id="bs-select-22" tabindex="-1">--}}
                                    {{--                                             <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                    {{--                                          </div>--}}
                                    {{--                                       </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                 </div>--}}
                                    {{--                                 <div class="form-group col-lg-4">--}}
                                    {{--                                    <label>Customs Value</label>--}}
                                    {{--                                    <input type="text" class="form-control" name="customs_value" value="" aria-describedby="basic-addon1">--}}
                                    {{--                                 </div>--}}
                                    {{--                              </div>--}}
                                    {{--                              <div class="row">--}}
                                    {{--                                 <div class="form-group col-lg-6">--}}
                                    {{--                                    <label>Delivery Time&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                    {{--                                    <div class="dropdown bootstrap-select form-control">--}}
                                    {{--                                       <select class="form-control" data-live-search="true" name="delivery_time_id"  tabindex="-98">--}}
                                    {{--                                          <option data-hidden="true"></option>--}}
                                    {{--                                          <option value="1" selected="">Morning</option>--}}
                                    {{--                                       </select>--}}
                                    {{--                                       <div class="dropdown-menu ">--}}
                                    {{--                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-23" aria-autocomplete="list"></div>--}}
                                    {{--                                          <div class="inner show" role="listbox" id="bs-select-23" tabindex="-1">--}}
                                    {{--                                             <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                    {{--                                          </div>--}}
                                    {{--                                       </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                 </div>--}}
                                    {{--                                 <div class="form-group col-lg-6">--}}
                                    {{--                                    <label>Delivery Status&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                    {{--                                    <div class="dropdown bootstrap-select form-control">--}}
                                    {{--                                       <select class="form-control" data-live-search="true" name="status_id"  tabindex="-98">--}}
                                    {{--                                          <option data-hidden="true"></option>--}}
                                    {{--                                          <option value="1_0">Schedule Time and date</option>--}}
                                    {{--                                          <option value="3_4">Truck Arrived</option>--}}
                                    {{--                                          <option value="4_7">Loading Complete</option>--}}
                                    {{--                                          <option value="5_5">Departure for Ebility</option>--}}
                                    {{--                                          <option value="6_5">Departure for Ebility</option>--}}
                                    {{--                                          <option value="7_6">Arrival of Ebility</option>--}}
                                    {{--                                          <option value="8_10">Offloaded Ebility</option>--}}
                                    {{--                                       </select>--}}
                                    {{--                                       <div class="dropdown-menu ">--}}
                                    {{--                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-24" aria-autocomplete="list"></div>--}}
                                    {{--                                          <div class="inner show" role="listbox" id="bs-select-24" tabindex="-1">--}}
                                    {{--                                             <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                    {{--                                          </div>--}}
                                    {{--                                       </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                 </div>--}}
                                    {{--                              </div>--}}
                                    {{--                                            <div class="row">--}}
                                    {{--                                                <div class="form-group col-lg-6">--}}
                                    {{--                                                    <label>Total Weight&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                    {{--                                                    <div class="input-group">--}}
                                    {{--                                                        <div class="input-group-prepend"><span class="input-group-text">Kg</span></div>--}}
                                    {{--                                                        <input  type="text" class="form-control total_weight" name="total_weight" value="{{old('total_weight')}}" placeholder="Packages total weight">--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    {{--                            </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 sec5">
                            <div class="panel panel-default">
                                <div class="kt-portlet kt-portlet--mobile">
                                    <div class="panel panel-heading">
                                        <div class="kt-portlet__head panel-title" data-toggle="collapse"
                                             data-target="#collapseTFive">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Vehicle Details
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTFive" class="panel-collapse collapse">
                                        <div class="kt-portlet__body">
                                            <div class="row">
                                                {{--                                        <div class="form-group col-lg-6">--}}
                                                {{--                                            <label>package Cost <span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                {{--                                            <div class="input-group">--}}
                                                {{--                                                <div class="input-group-prepend"><span class="input-group-text">package price</span></div>--}}
                                                {{--                                                <input type="number" class="form-control budget_client"  value="{{old('package_cost')}}" name="package_cost" min="1" placeholder="Price">--}}
                                                {{--                                            </div>--}}
                                                {{--                                        </div>--}}

                                                {{--                                        <div class="form-group col-lg-8 offset-2">--}}
                                                {{--                                            <label>Upload invoice <span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                {{--                                            <div class="input-group">--}}
                                                {{--                                                <div class="input-group-prepend"><span class="input-group-text">Invoice Image</span></div>--}}
                                                {{--                                                <input type="file" class="form-control budget_client" accept="image/png, image/gif, image/jpeg"  name="invoice_image" min="1" placeholder="package Value">--}}
                                                {{--                                            </div>--}}
                                                {{--                                        </div>--}}
                                                {{--                                        <div class="form-group col-lg-8 offset-2">--}}
                                                {{--                                            <div class="dropdown bootstrap-select form-control">--}}
                                                {{--                                                <select class="form-control" onchange="getVehicles(this.value)" name="vehicle_type" id="vehicle_category" tabindex="-98">--}}
                                                {{--                                                    <option data-hidden="true"></option>--}}
                                                {{--                                                    @foreach($vehicle_types as $type )--}}
                                                {{--                                                        <option value="{{$type->id}}" {{(old('vehicle_type')==$type->id)?'selected':''}}>{{$type->name}}</option>--}}
                                                {{--                                                    @endforeach--}}
                                                {{--                                                </select>--}}
                                                {{--                                                <div class="dropdown-menu ">--}}
                                                {{--                                                    <div class="inner show" role="listbox" id="bs-select-25" tabindex="-1">--}}
                                                {{--                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </div>--}}
                                                {{--                                        </div>--}}
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <main>
                                                        <div id="carousel">
                                                            @isset($vehicles)
                                                                @foreach($vehicles as $key => $vehicle)
                                                                    @if($key == 0)
                                                                        <div class="selected"
                                                                             onclick="selectVehicle({{$vehicle->id}})">
                                                                            <img
                                                                                src="{{asset('images/vehicles/web').'/'.$vehicle->web_image}}">
                                                                        </div>
                                                                    @elseif($key == 1)
                                                                        <div class="next"
                                                                             onclick="selectVehicle({{$vehicle->id}})">
                                                                            <img
                                                                                src="{{asset('images/vehicles/web').'/'.$vehicle->web_image}}">
                                                                        </div>
                                                                    @elseif($key == 2)
                                                                        <div class="nextRightSecond"
                                                                             onclick="selectVehicle({{$vehicle->id}})">
                                                                            <img
                                                                                src="{{asset('images/vehicles/web').'/'.$vehicle->web_image}}">
                                                                        </div>
                                                                    @elseif($key > 3)
                                                                        <div class="hideRight"
                                                                             onclick="selectVehicle({{$vehicle->id}})">
                                                                            <img
                                                                                src="{{asset('images/vehicles/web').'/'.$vehicle->web_image}}">
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            @endisset
                                                            {{--                                                    <div class="hideLeft">--}}
                                                            {{--                                                        <img src="https://i1.sndcdn.com/artworks-000165384395-rhrjdn-t500x500.jpg">--}}
                                                            {{--                                                    </div>--}}
                                                            {{--                                                    <div class="prevLeftSecond">--}}
                                                            {{--                                                        <img src="https://i1.sndcdn.com/artworks-000185743981-tuesoj-t500x500.jpg">--}}
                                                            {{--                                                    </div>--}}
                                                            {{--                                                    <div class="prev">--}}
                                                            {{--                                                        <img src="https://i1.sndcdn.com/artworks-000158708482-k160g1-t500x500.jpg">--}}
                                                            {{--                                                    </div>--}}
                                                            {{--                                                    <div class="selected">--}}
                                                            {{--                                                        <img src="https://i1.sndcdn.com/artworks-000062423439-lf7ll2-t500x500.jpg">--}}
                                                            {{--                                                    </div>--}}
                                                            {{--                                                    <div class="next">--}}
                                                            {{--                                                        <img src="https://i1.sndcdn.com/artworks-000028787381-1vad7y-t500x500.jpg">--}}
                                                            {{--                                                    </div>--}}
                                                            {{--                                                    <div class="nextRightSecond">--}}
                                                            {{--                                                        <img src="https://i1.sndcdn.com/artworks-000108468163-dp0b6y-t500x500.jpg">--}}
                                                            {{--                                                    </div>--}}
                                                            {{--                                                    <div class="hideRight">--}}
                                                            {{--                                                        <img src="https://i1.sndcdn.com/artworks-000064920701-xrez5z-t500x500.jpg">--}}
                                                            {{--                                                    </div>--}}
                                                        </div>
                                                        {{--                                                <div class="buttons">--}}
                                                        {{--                                                    <button id="prev">Prev</button>--}}
                                                        {{--                                                    <button id="next">Next</button>--}}
                                                        {{--                                                </div>--}}
                                                        <br>
                                                        <div class="col-md-12">
                                                            <div class="col-md-4">
                                                                <label>Add Note</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <textarea class="form-control"
                                                                          name="extra_info"></textarea>
                                                            </div>
                                                        </div>
                                                    </main>

                                                </div>
                                            </div>
                                            {{--                                    <div class="row">--}}
                                            {{--                                        <div class="form-group col-lg-10 offset-2 mb-0">--}}
                                            {{--                                            <label for="slectedTracks">Available Vehicles</label>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="form-group col-lg-8 offset-2">--}}
                                            {{--                                            <div class="dropdown bootstrap-select form-control ">--}}
                                            {{--                                                <select name="vehicle" class="form-control" id="vehicle_category_list">--}}
                                            {{--                                                    <option value="" selected="" disabled="">Choose Vehicle</option>--}}
                                            {{--                                                </select>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}

                                            {{--                                    </div>--}}
                                            <input name="vehicle" type="hidden" id="vehicle_value"
                                                   value="{{$vehicles[0]['id']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="kt-portlet">
                                <div class="kt-portlet__foot">
                                    <div class="row">
                                        <div class="col-lg-9 offset-3">
                                            <input type="submit" class="btn btn-warning save w-50 text-center"
                                                   value="Save"/>
                                            {{--                        <span class="kt-margin-left-10">or <a href="#" class="kt-link">Cancel</a></span>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous"></script>
    {{--    <script src="https://maps.googleapis.com/maps/api/js?key={{env('G_MAP_KEY')}}&libraries=places&callback=initialize&libraries=places" async></script>--}}
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoM2N8BXBveNHlX96-EjCkpaQDd7mVrLI&libraries=places&callback=initialize&libraries=places"
        async></script>
    {{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSYDmPzWTHVUje5j-ICLoQhR9seXJqbis&libraries=places&callback=initialize1&libraries=places" async></script>--}}

    <script>
        function selectVehicle(id) {
            $('#vehicle_value').val(id)
        }

        function moveToSelected(element) {

            if (element == "next") {
                var selected = $(".selected").next();
            } else if (element == "prev") {
                var selected = $(".selected").prev();
            } else {
                var selected = element;
            }

            var next = $(selected).next();
            var prev = $(selected).prev();
            var prevSecond = $(prev).prev();
            var nextSecond = $(next).next();

            $(selected).removeClass().addClass("selected");

            $(prev).removeClass().addClass("prev");
            $(next).removeClass().addClass("next");

            $(nextSecond).removeClass().addClass("nextRightSecond");
            $(prevSecond).removeClass().addClass("prevLeftSecond");

            $(nextSecond).nextAll().removeClass().addClass('hideRight');
            $(prevSecond).prevAll().removeClass().addClass('hideLeft');

        }

        // Eventos teclado
        $(document).keydown(function (e) {
            switch (e.which) {
                case 37: // left
                    moveToSelected('prev');
                    break;

                case 39: // right
                    moveToSelected('next');
                    break;

                default:
                    return;
            }
            e.preventDefault();
        });

        $('#carousel div').click(function () {
            moveToSelected($(this));
        });

        $('#prev').click(function () {
            moveToSelected('prev');
        });

        $('#next').click(function () {
            moveToSelected('next');
        });
    </script>
    <script>

        @if (\Session::has('success'))
        toastr.success('{!! \Session::get('success') !!}', 'Created successfully');
        @endif

        @foreach ($errors->all() as $error)
        toastr.warning('{{$error}}');
        @endforeach

        function getVehicles(id) {
            $.ajax({
                type: 'GET',
                url: "{{route('getVehicles')}}",
                data: {'id': id},
                success: function (data) {
                    var html = '';
                    html += "<option value='' selected disabled>Choose Vehicle</option>";
                    $.each(data.data, function (key, value) {
                        html += '<option value="' + value.id + '">' + value.name + '</option>';
                    });
                    $('#vehicle_category_list').empty().append(html);
                    $('#vehicle_category_list').selectpicker('refresh');
                }
            })
        }


        function showsenderform(val) {
            if (val == 'new') {
                var sender_id = $('#sendr option:selected').val()
                if (sender_id == '' || sender_id == 'new') {
                    toastr.warning("Please Choose user first");
                    return;
                }

                $('#addnewsender').addClass('d-none');
                $('#addnewsenderaddress').removeClass('d-none');
            } else {
                $('#addnewsenderaddress').addClass('d-none');
                $('#addnewsender').addClass('d-none');
            }
        }

        function showreceiverform(val) {
            if (val == 'new') {

                var receiver_name = $('#receiver_name option:selected').val()
                if (receiver_name == '' || receiver_name == 'new') {
                    toastr.warning("Please Choose receiver first");
                    return;
                }

                $('#addnewreceivr').removeClass('d-none')
                $('#addnewreceiver').addClass('d-none');
            } else {
                $('#addnewreceivr').addClass('d-none');
                $('#addnewreceiver').addClass('d-none');
            }
        }

        function showreceiverform1(val) {
            if (val == 'new') {
                $('#addnewreceivr').addClass('d-none');
                $('#addnewreceiver').removeClass('d-none');
            } else {
                $.ajax({
                    type: 'GET',
                    url: "{{route('getUserAddress')}}",
                    data: {'id': val},
                    success: function (data) {
                        var html = '';
                        html += "<option value='' selected disabled>Choose address</option>";
                        $.each(data.address, function (key, value) {
                            html += '<option value="' + value.id + '">' + value.address + '</option>';
                        });
                        html += "<option value='new' ><span class='fa fa-plus-circle'></span> Add New</option>";
                        $('#receiver_address_id').empty().append(html);
                        $('#receiver_address_id').selectpicker('refresh');
                    }
                })
                $('#addnewreceiver').addClass('d-none');
                $('#addnewreceivr').addClass('d-none');
            }
        }

        function showsenderform1(val) {
            if (val == 'new') {
                $('#addnewsender').removeClass('d-none');
                $('#addnewsenderaddress').addClass('d-none');
            } else {
                $.ajax({
                    type: 'GET',
                    url: "{{route('getUserAddress')}}",
                    data: {'id': val},
                    success: function (data) {
                        var html = '';
                        html += "<option value='' selected disabled>Choose address</option>";
                        $.each(data.address, function (key, value) {
                            html += '<option value="' + value.id + '">' + value.address + '</option>';
                        });
                        html += "<option value='new'> <span class='fa fa-plus-circle'></span> Add New</option>";
                        $('#sender_address_id').empty().append(html);
                        $('#sender_address_id').selectpicker('refresh');
                    }
                })
                $('#addnewsender').addClass('d-none');
                $('#addnewsenderaddress').addClass('d-none');
            }
        }


        function getStates(id, clas) {
            $.ajax({
                type: 'GET',
                url: "{{route('getStates')}}",
                data: {'id': id},
                success: function (data) {
                    var html = '';
                    html += "<option value='' selected disabled>Choose State</option>";
                    $.each(data.states, function (key, value) {
                        html += '<option value="' + value.id + '">' + value.name + '</option>';
                    });
                    $('#' + clas).empty().append(html);
                    $('#' + clas).selectpicker('refresh');
                }
            })

        };

        function getCities(id, clas) {
            $.ajax({
                type: 'GET',
                url: "{{route('getCities')}}",
                data: {'id': id},
                success: function (data) {
                    var html = '';
                    html += "<option value='' selected disabled>Choose City</option>";
                    $.each(data.cities, function (key, value) {
                        html += '<option value="' + value.id + '">' + value.name + '</option>';
                    });
                    $('#' + clas).empty().append(html);
                    $('#' + clas).selectpicker('refresh');
                }
            })
        };

        function getArea(id, clas) {
            $.ajax({
                type: 'GET',
                url: "{{route('getArea')}}",
                data: {'id': id},
                success: function (data) {
                    var html = '';
                    html += "<option value='' selected disabled>Choose Area</option>";
                    $.each(data.cities, function (key, value) {
                        html += '<option value="' + value.id + '">' + value.name + '</option>';
                    });
                    $('#' + clas).empty().append(html);
                    $('#' + clas).selectpicker('refresh');
                }
            })
        }

        function sender_save() {
            var s_nam = $('#s_nam').val();
            var s_email = $('#s_email').val();
            var s_pass = $('#s_pass').val();
            // var s_country = $('#s_country option:selected').val();
            var s_phone = $('#s_phone').val();
            // var statees = $('#statees option:selected').val();
            // var cityy = $('#cityy option:selected').val();
            // var s_add = $('#s_add').val();
            // var areaa = $('#areaa').val();
            var s_zip = $('#postal').val();

            if (s_nam == '') {
                $('#s_nam').css('border', '1px solid #e00258');
                return;
            } else {
                $('#s_nam').css('border', '1px solid #e2e5ec');
            }
            if (s_email == '') {
                $('#s_email').css('border', '1px solid #e00258');
                return;
            } else {
                $('#s_email').css('border', '1px solid #e2e5ec');
            }
            if (s_phone == '' || s_phone.length < 4) {
                $('#s_phone').css('border', '1px solid #e00258');
                return;
            } else {
                $('#s_phone').css('border', '1px solid #e2e5ec');
            }
            if (s_pass == '' || s_pass.length < 4) {
                $('#s_pass').css('border', '1px solid #e00258');
                return;
            } else {
                $('#s_pass').css('border', '1px solid #e2e5ec');
            }
            // alert(s_add.length);
            // if (s_add == '' || s_add.length < 2) {
            //     // alert('ss')
            //     $('#s_add').css('border', '1px solid #e00258');
            //     return;
            // } else {
            //     $('#s_add').css('border', '1px solid #e2e5ec');
            // }
            // if (s_country == '') {
            //     // alert(s_country);
            //     toastr.warning("Fill country");
            //     // $('#s_country').css('border', '1px solid #e00258');
            //     return;
            // } else {
            //     $('#s_country').css('border', '1px solid #e2e5ec');
            // }

            // if (statees == '') {
            //     toastr.warning("Fill state");
            //     return;
            // } else {
            //     $('#statees').css('border', '1px solid #e2e5ec');
            // }
            // if (cityy == '') {
            //     toastr.warning("Fill City");
            //     return;
            // } else {
            //     $('#cityy').css('border', '1px solid #e2e5ec');
            // }
            // if (areaa == '') {
            //     toastr.warning("Fill area field");
            //     return;
            // } else {
            //     $('#areaa').css('border', '1px solid #e2e5ec');
            // }
            $('.savee').css('opacity', '0.5');
            $('.bx-spin').removeClass('d-none');
            $.ajax({
                type: 'post',
                url: "{{route('createUser')}}",
                data: {
                    'phone': s_phone,
                    'password': s_pass,
                    'email': s_email,
                    'full_name': s_nam,
                    'zip': s_zip,
                    'form': 'sender'
                },
                success: function (data) {
                    $('.savee').css('opacity', '1');
                    $('.bx-spin').addClass('d-none');
                    if (data.error) {
                        $.each(data.error, function (key, value) {
                            toastr.warning(value);
                        })
                    }
                    if (data.success) {
                        var html = '';
                        // html += '<option value="'+data.address_id+'" selected>'+s_add+' </option>';
                        var html1 = '';
                        html1 += '<option value="' + data.user_id + '" selected>' + s_nam + ' </option>';
                        // $('#sender_address_id').prepend(html);
                        // $('#sender_address_id').selectpicker('refresh');
                        $('#addnewsender').addClass('d-none');
                        $('#sendr').prepend(html1);
                        $('#sendr').selectpicker('refresh');

                        $('#sendr').val(data.user_id);
                        $('#sendr').change();
                        // $('#sender_address_id').val(data.address_id);
                        // $('#sender_address_id').change();
                        toastr.success(data.success);
                    }
                }

            })
        }

        function receiver_save() {
            var s_nam = $('#r_nam').val();
            var s_email = $('#r_email').val();
            var s_pass = $('#r_pass').val();
            // var s_country = $('#r_country option:selected').val();
            var s_phone = $('#r_phone').val();
            // var statees = $('#r_statees option:selected').val();
            // var cityy = $('#r_cityy option:selected').val();
            // var s_add = $('#r_add').val();
            // var areaa = $('#r_areaa').val();
            var s_zip = $('#r_postal').val();

            if (s_nam == '') {
                $('#r_nam').css('border', '1px solid #e00258');
                return;
            } else {
                $('#r_nam').css('border', '1px solid #e2e5ec');
            }
            if (s_email == '') {
                $('#r_email').css('border', '1px solid #e00258');
                return;
            } else {
                $('#r_email').css('border', '1px solid #e2e5ec');
            }
            if (s_phone == '' || s_phone.length < 4) {
                $('#r_phone').css('border', '1px solid #e00258');
                return;
            } else {
                $('#r_phone').css('border', '1px solid #e2e5ec');
            }
            if (s_pass == '' || s_pass.length < 4) {
                $('#r_pass').css('border', '1px solid #e00258');
                return;
            } else {
                $('#r_pass').css('border', '1px solid #e2e5ec');
            }
            // alert(s_add.length);
            // if (s_add == '' || s_add.length < 2) {
            //     // alert('ss')
            //     $('#r_add').css('border', '1px solid #e00258');
            //     return;
            // } else {
            //     $('#r_add').css('border', '1px solid #e2e5ec');
            // }
            // if (s_country == '') {
            //     // alert(s_country);
            //     toastr.warning("Fill country");
            //     // $('#s_country').css('border', '1px solid #e00258');
            //     return;
            // } else {
            //     $('#r_country').css('border', '1px solid #e2e5ec');
            // }
            //
            // if (statees == '') {
            //     toastr.warning("Fill state");
            //     return;
            // } else {
            //     $('#r_statees').css('border', '1px solid #e2e5ec');
            // }
            // if (cityy == '') {
            //     toastr.warning("Fill City");
            //     return;
            // } else {
            //     $('#r_cityy').css('border', '1px solid #e2e5ec');
            // }
            // if (areaa == '') {
            //     toastr.warning("Fill area field");
            //     return;
            // } else {
            //     $('#r_areaa').css('border', '1px solid #e2e5ec');
            // }
            $('.saveee').css('opacity', '0.5');
            $('.bxy').removeClass('d-none');
            $.ajax({
                type: 'post',
                url: "{{route('createUser')}}",
                data: {
                    'phone': s_phone,
                    'password': s_pass,
                    'email': s_email,
                    'full_name': s_nam,
                    'zip': s_zip,
                    'form': 'receiver'
                },
                success: function (data) {
                    $('.saveee').css('opacity', '1');
                    $('.bxy').addClass('d-none');
                    if (data.error) {
                        $.each(data.error, function (key, value) {
                            toastr.warning(value);
                        })
                    }
                    if (data.success) {
                        var html = '';
                        // html += '<option value="'+data.address_id+'" selected>'+s_add+' </option>';
                        var html1 = '';
                        html1 += '<option value="' + data.user_id + '" selected>' + s_nam + ' </option>';
                        // $('#receiver_address_id').prepend(html);
                        // $('#receiver_address_id').selectpicker('refresh');
                        $('#addnewreceiver').addClass('d-none');
                        $('#receiver_name').prepend(html1);
                        $('#receiver_name').selectpicker('refresh');

                        $('#receiver_name').val(data.user_id);
                        $('#receiver_name').change();
                        // $('#receiver_address_id').val(data.address_id);
                        // $('#receiver_address_id').change();
                        toastr.success(data.success);
                    }
                }
            })
        }

        // function editAddress(id, address,user_name,country_id,state_id,city_id,floor,building,street){
        function editAddress(id) {
            $.ajax({
                type: 'get',
                url: "{{route('getAddress')}}",
                data: {
                    'id': id,
                },
                success: function (data) {
                    $('#pickupAddress').text('Update Pickup address');
                    $('#address-input').val(data.address)
                    $('#user_name').val(data.user_name);
                    $('#address-longitude').val(data.lng);
                    $('#address-latitude').val(data.lat);
                    $('#contry').val(data.country_id);
                    $('#stat').val(data.state_id);
                    $('#cite').val(data.city_id);
                    $('#floor').val(data.floor);
                    $('#building').val(data.building);
                    $('#street').val(data.street);
                    $('#address_id_value').val(id);
                    $('#pick_save_btn').text('Update');
                    $('#pick_save_btn').attr("onclick", "updatePickupAddress()");
                    $('#addnewsenderaddress').removeClass('d-none');
                    $('#showpickupaddress').addClass('d-none');
                }
            });
        }

        function updatePickupAddress() {
            var id = $('#address_id_value').val();
            var name = $('#user_name').val();
            var address = $('#address-input').val();
            var lng = $('#address-longitude').val();
            var lat = $('#address-latitude').val();
            var country = $('#contry option:selected').val();
            var state = $('#stat option:selected').val();
            var city = $('#cite option:selected').val();
            var floor = $('#floor').val();
            var building = $('#building').val();
            var street = $('#street').val();
            var user_id = $('#sendr option:selected').val();

            $.ajax({
                type: 'post',
                url: "{{route('updateSenderAddress')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id,
                    'name': name,
                    'address': address,
                    'city': city,
                    'state': state,
                    'country': country,
                    'user_id': user_id,
                    'lat': lat,
                    'lng': lng,
                    'street': street,
                    'building': building,
                    'floor': floor,
                },
                success: function (data) {
                    $('.saved').css('opacity', '1');
                    $('.loadr').addClass('d-none');
                    console.log(data);
                    if (data.error) {
                        $.each(data.error, function (key, value) {
                            toastr.warning(value);
                        })
                    }
                    if (data.success) {
                        var html = '';
                        html = `
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Name</th>
                                  <th scope="col">Pickup Address</th>
                                  <th scope="col">Country</th>
                                  <th scope="col">State</th>
                                  <th scope="col">City</th>
                                  <th scope="col">Floor</th>
                                  <th scope="col">Building</th>
                                  <th scope="col">Street</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>` + data.address.user_name + `</th>
                                  <th>` + data.address.address + `</th>
                                  <th>` + data.address.country.name + `</th>
                                  <th>` + data.address.state.name + `</th>
                                  <th>` + data.address.city.name + `</th>
                                  <th>` + data.address.floor + `</th>
                                  <th>` + data.address.building + `</th>
                                  <th>` + data.address.street + `</th>
                                  <th><a class="alert-primary" onclick="editAddress(` + data.address.id + `)"> <i class="fas fa-edit"></i> </a><a  class="alert-danger" onclick="deleteAddress(` + data.address.id + `)"> <i class="far fa-trash-alt"></i> </a></th>


                                </tr>
                              </tbody>
                            </table>
                        `;
                        $('#pickupaddress_id').val(data.address.id);
                        $('#showpickupaddress').removeClass('d-none');
                        $('#addnewsenderaddress').addClass('d-none');
                        $('#showpickupaddress').html(html);

                        // html += '<option value="'+data.address_id+'" selected>'+address+' </option>';
                        // $('#sender_address_id').prepend(html);
                        // $('#sender_address_id').selectpicker('refresh');
                        // $('#addnewsenderaddress').addClass('d-none');
                        // $('#sender_address_id').val(data.address_id);
                        // $('#sender_address_id').change();
                        toastr.success(data.success);
                    }
                }
            })
        }

        function deleteAddress(id) {
            $.ajax({
                type: 'get',
                url: "{{route('deleteAddress')}}",
                data: {
                    'id': id,
                },
                success: function (data) {
                    $('#showpickupaddress').addClass('d-none');
                    $('#addnewsenderaddress').removeClass('d-none');
                    $(':input', '#addnewsenderaddress')
                        .not(':button, :submit, :reset, :hidden')
                        .val('')
                        .prop('checked', false)
                        .prop('selected', false);
                    toastr.success(data);
                }
            })
        }

        function deleteAddress1(id) {
            $.ajax({
                type: 'get',
                url: "{{route('deleteAddress')}}",
                data: {
                    'id': id,
                },
                success: function (data) {
                    $('#showDropOff').addClass('d-none');
                    $('#addnewreceivr').removeClass('d-none');
                    $(':input', '#addnewreceivr')
                        .not(':button, :submit, :reset, :hidden')
                        .val('')
                        .prop('checked', false)
                        .prop('selected', false);
                    // $('#dropOffForm').find("input[type=text], textarea").val('').prop('checked', false).prop('selected', false);;
                    toastr.success(data);
                }
            })
        }

        function saveaddress() {
            var name = $('#user_name').val();
            var address = $('#address-input').val();
            var lng = $('#address-longitude').val();
            var lat = $('#address-latitude').val();
            var country = $('#contry option:selected').val();
            var state = $('#stat option:selected').val();
            var city = $('#cite option:selected').val();
            var floor = $('#floor').val();
            var building = $('#building').val();
            var street = $('#street').val();
            var user_id = $('#sendr option:selected').val();

            if (address == '') {
                toastr.warning("Fill address field");
                return;
            }
            if (country == '') {
                toastr.warning("Fill country field");
                return;
            }
            if (state == '') {
                toastr.warning("Fill state field");
                return;
            }

            if (city == '') {
                toastr.warning("Fill city field");
                return;
            }


            $('.saved').css('opacity', '0.5');
            $('.loadr').removeClass('d-none');
            $.ajax({
                type: 'post',
                url: "{{route('createSenderAddress')}}",
                data: {
                    'name': name,
                    'address': address,
                    'city': city,
                    'state': state,
                    'country': country,
                    'user_id': user_id,
                    'lat': lat,
                    'lng': lng,
                    'street': street,
                    'building': building,
                    'floor': floor,
                    'form': 'sender',
                },
                success: function (data) {
                    $('.saved').css('opacity', '1');
                    $('.loadr').addClass('d-none');
                    if (data.error) {
                        $.each(data.error, function (key, value) {
                            toastr.warning(value);
                        })
                    }
                    if (data.success) {
                        var html = '';
                        html = `
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Name</th>
                                  <th scope="col">Pickup Address</th>
                                  <th scope="col">Country</th>
                                  <th scope="col">State</th>
                                  <th scope="col">City</th>
                                  <th scope="col">Floor</th>
                                  <th scope="col">Building</th>
                                  <th scope="col">Street</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>` + data.address.user_name + `</th>
                                  <th>` + data.address.address + `</th>
                                  <th>` + data.address.country.name + `</th>
                                  <th>` + data.address.state.name + `</th>
                                  <th>` + data.address.city.name + `</th>
                                  <th>` + data.address.floor + `</th>
                                  <th>` + data.address.building + `</th>
                                  <th>` + data.address.street + `</th>
                                  <th><a class="alert-primary" onclick="editAddress(` + data.address.id + `)"> <i class="fas fa-edit"></i> </a><a  class="alert-danger" onclick="deleteAddress(` + data.address.id + `)"> <i class="far fa-trash-alt"></i> </a></th>


                                </tr>
                              </tbody>
                            </table>
                        `;
                        $('#pickupaddress_id').val(data.address.id);
                        $('#addnewsenderaddress').addClass('d-none');
                        $('#showpickupaddress').html(html);

                        // html += '<option value="'+data.address_id+'" selected>'+address+' </option>';
                        // $('#sender_address_id').prepend(html);
                        // $('#sender_address_id').selectpicker('refresh');
                        // $('#addnewsenderaddress').addClass('d-none');
                        // $('#sender_address_id').val(data.address_id);
                        // $('#sender_address_id').change();
                        toastr.success(data.success);
                    }
                }
            })
        }

        function editAddress1(id) {
            $.ajax({
                type: 'get',
                url: "{{route('getAddress')}}",
                data: {
                    'id': id,
                },
                success: function (data) {
                    $('#dropoffAddress').text('Update Drop Off address');
                    $('#address_input').val(data.address)
                    $('#user_name1').val(data.user_name);
                    $('#address-longitude1').val(data.lng);
                    $('#address-latitude1').val(data.lat);
                    $('#r_contry').val(data.country_id);
                    $('#r_stat').val(data.state_id);
                    $('#r_cite').val(data.city_id);
                    $('#floor1').val(data.floor);
                    $('#building1').val(data.building);
                    $('#street1').val(data.street);
                    $('#dropoff_address_id').val(id);
                    $('#drop_save_btn').text('Update');
                    $('#drop_save_btn').attr("onclick", "updateDropOffAddress()");
                    $('#addnewreceivr').removeClass('d-none');
                    $('#showDropOff').addClass('d-none');
                }
            });
        }

        function updateDropOffAddress() {
            var id = $('#dropoff_address_id').val();
            var name = $('#user_name1').val();
            var address = $('#address_input').val();
            var country = $('#r_contry option:selected').val();
            var state = $('#r_stat option:selected').val();
            var city = $('#r_cite option:selected').val();
            var lat = $('#address-latitude1').val();
            var lng = $('#address-longitude1').val();
            var floor = $('#floor1').val();
            var building = $('#building1').val();
            var street = $('#street1').val();

            if (address == '') {
                toastr.warning("Fill address field");
                return;
            }
            if (country == '') {
                toastr.warning("Fill country field");
                return;
            }
            if (state == '') {
                toastr.warning("Fill state field");
                return;
            }

            if (city == '') {
                toastr.warning("Fill city field");
                return;
            }


            $('.saveed').css('opacity', '0.5');
            $('.loadir').removeClass('d-none');
            $.ajax({
                type: 'post',
                url: "{{route('updateSenderAddress')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id,
                    'name': name,
                    'address': address,
                    'city': city,
                    'state': state,
                    'country': country,
                    'lat': lat,
                    'lng': lng,
                    'street': street,
                    'building': building,
                    'floor': floor,
                    'form': 'receiver',
                },
                success: function (data) {
                    $('.saveed').css('opacity', '1');
                    $('.loadir').addClass('d-none');
                    if (data.error) {
                        $.each(data.error, function (key, value) {
                            toastr.warning(value);
                        })
                    }
                    if (data.success) {
                        var html = '';
                        var html = '';
                        html = `
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Name</th>
                                  <th scope="col">Pickup Address</th>
                                  <th scope="col">Country</th>
                                  <th scope="col">State</th>
                                  <th scope="col">City</th>
                                  <th scope="col">Floor</th>
                                  <th scope="col">Building</th>
                                  <th scope="col">Street</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>` + data.address.user_name + `</th>
                                  <th>` + data.address.address + `</th>
                                  <th>` + data.address.country.name + `</th>
                                  <th>` + data.address.state.name + `</th>
                                  <th>` + data.address.city.name + `</th>
                                  <th>` + data.address.floor + `</th>
                                  <th>` + data.address.building + `</th>
                                  <th>` + data.address.street + `</th>
                                  <th><a class="alert-primary" onclick="editAddress1(` + data.address.id + `)"> <i class="fas fa-edit"></i> </a><a  class="alert-danger" onclick="deleteAddress1(` + data.address.id + `)"> <i class="far fa-trash-alt"></i> </a></th>


                                </tr>
                              </tbody>
                            </table>
                        `;
                        $('#dropofupaddress_id').val(data.address.id);
                        $('#showDropOff').removeClass('d-none');
                        $('#addnewreceivr').addClass('d-none');
                        $('#showDropOff').html(html);
                        // html += '<option value="'+data.address_id+'" selected>'+address+' </option>';
                        // $('#receiver_address_id').prepend(html);
                        // $('#receiver_address_id').selectpicker('refresh');
                        // $('#addnewreceivr').addClass('d-none');
                        $('#receiver_address_id').val(data.address_id);
                        // $('#receiver_address_id').change();
                        toastr.success(data.success);
                    }
                }

            })
        }

        function saveaddresss() {
            var name = $('#user_name1').val();
            var address = $('#address_input').val();
            var country = $('#r_contry option:selected').val();
            var state = $('#r_stat option:selected').val();
            var city = $('#r_cite option:selected').val();
            var lat = $('#address-latitude1').val();
            var lng = $('#address-longitude1').val();
            var floor = $('#floor1').val();
            var building = $('#building1').val();
            var street = $('#street1').val();

            if (address == '') {
                toastr.warning("Fill address field");
                return;
            }
            if (country == '') {
                toastr.warning("Fill country field");
                return;
            }
            if (state == '') {
                toastr.warning("Fill state field");
                return;
            }

            if (city == '') {
                toastr.warning("Fill city field");
                return;
            }


            $('.saveed').css('opacity', '0.5');
            $('.loadir').removeClass('d-none');
            $.ajax({
                type: 'post',
                url: "{{route('createSenderAddress')}}",
                data: {
                    'name': name,
                    'address': address,
                    'city': city,
                    'state': state,
                    'country': country,
                    'lat': lat,
                    'lng': lng,
                    'street': street,
                    'building': building,
                    'floor': floor,
                    'form': 'receiver',
                },
                success: function (data) {
                    $('.saveed').css('opacity', '1');
                    $('.loadir').addClass('d-none');
                    if (data.error) {
                        $.each(data.error, function (key, value) {
                            toastr.warning(value);
                        })
                    }
                    if (data.success) {
                        var html = '';
                        var html = '';
                        html = `
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Name</th>
                                  <th scope="col">Pickup Address</th>
                                  <th scope="col">Country</th>
                                  <th scope="col">State</th>
                                  <th scope="col">City</th>
                                  <th scope="col">Floor</th>
                                  <th scope="col">Building</th>
                                  <th scope="col">Street</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>` + data.address.user_name + `</th>
                                  <th>` + data.address.address + `</th>
                                  <th>` + data.address.country.name + `</th>
                                  <th>` + data.address.state.name + `</th>
                                  <th>` + data.address.city.name + `</th>
                                  <th>` + data.address.floor + `</th>
                                  <th>` + data.address.building + `</th>
                                  <th>` + data.address.street + `</th>
                                  <th><a class="alert-primary" onclick="editAddress1(` + data.address.id + `)"> <i class="fas fa-edit"></i> </a><a  class="alert-danger" onclick="deleteAddress1(` + data.address.id + `)"> <i class="far fa-trash-alt"></i> </a></th>


                                </tr>
                              </tbody>
                            </table>
                        `;
                        $('#dropofupaddress_id').val(data.address.id);
                        $('#showDropOff').removeClass('d-none');
                        $('#addnewreceivr').addClass('d-none');
                        $('#showDropOff').html(html);
                        // html += '<option value="'+data.address_id+'" selected>'+address+' </option>';
                        // $('#receiver_address_id').prepend(html);
                        // $('#receiver_address_id').selectpicker('refresh');
                        // $('#addnewreceivr').addClass('d-none');
                        $('#receiver_address_id').val(data.address_id);
                        // $('#receiver_address_id').change();
                        toastr.success(data.success);
                    }
                }

            })
        }


        function initialize() {
            $('#address_input').on('keyup', function (e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }

                const locationInputs = document.getElementsByClassName("imap-input");
                const autocompletes = [];
                const geocoder = new google.maps.Geocoder;
                for (let i = 0; i < locationInputs.length; i++) {
                    const input = locationInputs[i];
                    const fieldKey = input.id.replace("_input", "");
                    // alert(fieldKey);
                    const isEdit = document.getElementById(fieldKey + "-latitude1").value != '' && document.getElementById(fieldKey + "-longitude1").value != '';
                    const latitude = parseFloat(document.getElementById(fieldKey + "-latitude1").value) || -33.8688;
                    const longitude = parseFloat(document.getElementById(fieldKey + "-longitude1").value) || 151.2195;

                    const map = new google.maps.Map(document.getElementById(fieldKey + '-mapp'), {
                        center: {lat: latitude, lng: longitude},
                        zoom: 18
                    });

                    const marker = new google.maps.Marker({
                        map: map,
                        position: {lat: latitude, lng: longitude},
                        title: "Click to zoom",
                        draggable: true
                    });
                    marker.setVisible(isEdit);
                    const autocomplete = new google.maps.places.Autocomplete(input);
                    autocomplete.key = fieldKey;
                    autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
                }
                for (let i = 0; i < autocompletes.length; i++) {
                    const input = autocompletes[i].input;
                    const autocomplete = autocompletes[i].autocomplete;
                    const map = autocompletes[i].map;
                    const marker = autocompletes[i].marker;

                    google.maps.event.addListener(autocomplete, 'place_changed', function () {
                        marker.setVisible(false);
                        const place = autocomplete.getPlace();
                        geocoder.geocode({'placeId': place.place_id}, function (results, status) {
                            if (status === google.maps.GeocoderStatus.OK) {
                                const lat = results[0].geometry.location.lat();
                                const lng = results[0].geometry.location.lng();
                                $('#address-latitude1').val(lat);
                                $('#address-longitude1').val(lng);
                                setLocationCoordinates(autocomplete.key, lat, lng);
                            }
                        });

                        if (!place.geometry) {
                            window.alert("No details available for input: '" + place.name + "'");
                            input.value = "";
                            return;
                        }

                        if (place.geometry.viewport) {
                            map.fitBounds(place.geometry.viewport);
                        } else {
                            map.setCenter(place.geometry.location);
                            map.setZoom(17);
                        }
                        marker.setPosition(place.geometry.location);
                        marker.setVisible(true);

                    });

                    google.maps.event.addListener(marker, 'dragend', function () {
                        geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                            if (status === google.maps.GeocoderStatus.OK) {
                                if (results[0]) {
                                    $('#address_input').val(results[0].formatted_address);
                                    $('#address-latitude1').val(marker.getPosition().lat());
                                    $('#address-longitude1').val(marker.getPosition().lng());
                                    console.log(marker.getPosition().lng());
                                    console.log(marker.getPosition().lat());
                                }
                            }
                        });
                    });
                }
                return;
            });


            $('#address-input').on('keyup', function (e) {
                // alert('dasda');
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });
            const locationInputs = document.getElementsByClassName("map-input");
            const autocompletes = [];
            const geocoder = new google.maps.Geocoder;
            for (let i = 0; i < locationInputs.length; i++) {
                const input = locationInputs[i];
                const fieldKey = input.id.replace("-input", "");
                const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';
                const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -33.8688;
                const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 151.2195;

                const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
                    center: {lat: latitude, lng: longitude},
                    zoom: 18
                });

                const marker = new google.maps.Marker({
                    map: map,
                    position: {lat: latitude, lng: longitude},
                    title: "Click to zoom",
                    draggable: true
                });
                marker.setVisible(isEdit);
                const autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.key = fieldKey;
                autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
            }
            for (let i = 0; i < autocompletes.length; i++) {
                const input = autocompletes[i].input;
                const autocomplete = autocompletes[i].autocomplete;
                const map = autocompletes[i].map;
                const marker = autocompletes[i].marker;

                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                    marker.setVisible(true);
                    const place = autocomplete.getPlace();
                    geocoder.geocode({'placeId': place.place_id}, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            const lat = results[0].geometry.location.lat();
                            const lng = results[0].geometry.location.lng();
                            setLocationCoordinates(autocomplete.key, lat, lng);
                        }
                    });

                    if (!place.geometry) {
                        window.alert("No details available for input: '" + place.name + "'");
                        input.value = "";
                        return;
                    }

                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);
                    }
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                });

                google.maps.event.addListener(marker, 'dragend', function () {
                    geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                $('#address-input').val(results[0].formatted_address);
                                $('#address-latitude').val(marker.getPosition().lat());
                                $('#address-longitude').val(marker.getPosition().lng());

                                console.log(marker.getPosition().lng());
                                console.log(marker.getPosition().lat());
                            }
                        }
                    });
                });

            }

        }

        function setLocationCoordinates(key, lat, lng) {
            const latitudeField = document.getElementById(key + "-" + "latitude");
            const longitudeField = document.getElementById(key + "-" + "longitude");
            latitudeField.value = lat;
            longitudeField.value = lng;
        }

        $('.is_insured').on('click', function (e) {

            if ($('.is_insured:checked').val() == 1) {
                $('.packege-cost').css('display', 'block')
            } else {
                $('.packege-cost').css('display', 'none')
            }
        });
        $('.type').on('click', function (e) {
            var val = $('#addris_id').val();
            if (val == '') {
                $('#addris_id').val($('#sender_address_id option:selected').val());
                val = $('#sender_address_id option:selected').val();
            }
            if ($('.type:checked').val() == 1) {
                $('#sendr').val({{auth()->user()->id}});
                $('#sendr').selectpicker('refresh');

                $('#sender_address_id').val(val);
                $('#sender_address_id').selectpicker('refresh');

                $('#receiver_name').val('');
                $('#receiver_name').selectpicker('refresh');

                $('#receiver_address_id').val('');
                $('#receiver_address_id').selectpicker('refresh');
            } else {
                $('#sendr').val('');
                $('#sendr').selectpicker('refresh');

                $('#receiver_name').val({{auth()->user()->id}});
                $('#receiver_name').selectpicker('refresh');

                $('#sender_address_id').val('');
                $('#sender_address_id').selectpicker('refresh');

                $('#receiver_address_id').val(val);
                $('#receiver_address_id').selectpicker('refresh');
            }
        });

        var i = 0;

        function packagerepeator() {
            var text = `
                 <div class="kt-section__content m-1 div_${i}">
                                            <div class="form-group form-group-last row" >
                                                <div class="pakg  pb-0 m-3">
                                                    <div class="form-group form-group-last row" >
                                                        <div data-repeater-list="items" class="col-lg-12">
                                                            <div data-repeater-item class="align-items-center">
                                                                <div class="form-group row">
                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label>Package type:</label>
                                                                            </div>
                                                                            <div class="kt-form__control">
                                                                                <select class="form-control"  name="category_id[]" >
                                                                                    <option data-hidden="true">Choose package type</option>
                                                                                    @foreach($shipment_packages as $package)
            <option value="{{$package->id}}">{{$package->name}}</option>
                                                                                    @endforeach
            </select>
        </div>
    </div>
    </div>

    <div class="col-md-6">
    <div class="kt-form__group--inline">
        <div class="kt-form__label">
            <label class="kt-label m-label--single">Description:</label>
        </div>
        <div class="kt-form__control">
            <input type="text" class="form-control" name="description[]"  placeholder="Package description">
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="kt-form__group--inline">
        <div class="kt-form__label">
            <label class="kt-label m-label--single">Quantity:</label>
        </div>
        <div class="kt-form__control">
            <input type="text" class="form-control bootstrap-touchspin-vertical-btn" name="quantity[]"  placeholder="package quantity" >
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="kt-form__group--inline">
        <div class="kt-form__label">
            <label class="kt-label m-label--single">Weight:</label>
        </div>
        <div class="kt-form__control">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text">Kg</span></div>
                <input type="text" class="form-control bootstrap-touchspin-vertical-btn sub_weight" name="weight[]"  placeholder="Weight" >
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="kt-form__group--inline">
        <div class="kt-form__label">
            <label class="kt-label m-label--single">Dimensions&nbsp;<i class="flaticon2-delivery-package"></i>&nbsp;[Length&nbsp;x&nbsp;Width&nbsp;x&nbsp;Height] (cm):</label>
        </div>
        <div class="kt-form__control">
            <div class="input-group">
                <div class="input-group-prepend">
            <span class="input-group-text">
                <input type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" name="length[]" style="max-width: 100px;" >
            </span>
                </div>
                <div class="input-group-prepend"><span class="input-group-text">x</span></div>
                <div class="input-group-prepend">
                <span class="input-group-text">
                    <input type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" name="width[]" style="max-width: 100px;" >
                </span>
                </div>
                <div class="input-group-prepend"><span class="input-group-text">x</span></div>
                <div class="input-group-append">
                <span class="input-group-text">
                    <input type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" name="height[]" style="max-width: 100px;" >
                </span>
                </div>


               <span  style="cursor:pointer" onclick=minus('${i}') class='fa fa-times-circle pt-4 ml-3 text-danger'></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                         </div>

    </div>
</div>
</div>
</div>
</div>
</div>
</div>
`
            i++;
            $('.packagerepeatorText').append(text);

        }

        function minus(i) {
            $('.div_' + i).hide();
        }


    </script>

@stop
