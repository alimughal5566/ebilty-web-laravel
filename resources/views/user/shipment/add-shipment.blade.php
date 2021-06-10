@extends('admin.layout.app')


@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
          integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

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
        <form method="POST" action="{{route('create.shipment')}}"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="kt-portlet__head panel-title" data-toggle="collapse" data-target="#collapseOne">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Shipment information
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="kt-portlet__body">
                                        <div class="form-group form-group-last kt-hide">
                                            <div class="alert alert-danger kt_form_msg" role="alert">
                                                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                <div class="alert-text">
                                                    Oh snap! Change a few things up and try submitting again.
                                                </div>
                                                <div class="alert-close">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="la la-close"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="kt-section">
                                            <h3 class="kt-section__title kt-margin-b-20">
                                                Book As&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span>
                                            </h3>
                                            <div class="kt-section__content">
                                                <div class="form-group form-group-last">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label class="kt-option">
                                          <span class="kt-option__control">
                                          <span class="kt-radio kt-radio--state-brand">
                                          <input type="radio" name="type" class="type" value="1" checked="" >
                                          <span></span>
                                          </span>
                                          </span>
                                                                <span class="kt-option__label">
                                          <span class="kt-option__head">
                                          <span class="kt-option__title">
                                            Sender
                                          </span>
                                          <span class="kt-option__focus"></span>
                                          </span>
                                          <span class="kt-option__body">
                                            For sending a parcel
                                          </span>
                                          </span>
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label class="kt-option">
                                          <span class="kt-option__control">
                                          <span class="kt-radio kt-radio--state-brand">
                                          <input type="radio" name="type" class="type" value="2" >
                                          <span></span>
                                          </span>
                                          </span>
                                                                <span class="kt-option__label">
                                          <span class="kt-option__head">
                                          <span class="kt-option__title">
                                          Receiver
                                          </span>
                                          <span class="kt-option__focus"></span>
                                          </span>
                                          <span class="kt-option__body">
                                          For receiving shipment
                                          </span>
                                          </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-text text-muted">
                                                        <!--must use this helper element to display error message for the options-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit kt-margin-t-0"></div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>Shipping Date&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                <div class="input-group date">
                                                    <input type="text" class="form-control date" readonly=""  name="ship_date" value="{{old('ship_date')}}" >
                                                    <div class="input-group-append">
                                       <span class="input-group-text">
                                       <i class="la la-calendar"></i>
                                       </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Shipping Time&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                <div class="input-group ">
                                                    <input type="time" class="form-control ship_time" name="ship_time" value="{{old('ship_time')}}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h3 class="kt-section__title kt-margin-b-5 pt-1">
                                                            Delivery Type&nbsp;<span class="kt-badge  "></span>
                                                        </h3>
                                                        <label class="kt-option">
                                       <span class="kt-option__control">
                                       <span class="kt-radio kt-radio--state-brand">
                                       <input type="radio" name="dilivery_typ" class="dilivery_typ" value="2"  checked="">
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
                                       <input type="radio" name="dilivery_typ" class="dilivery_typ" value="1" >
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
                                                            Wants to avail Insurance?&nbsp;<span class="kt-badge  "></span>
                                                        </h3>
                                                        <label class="kt-option">
                                       <span class="kt-option__control">
                                       <span class="kt-radio kt-radio--state-brand">
                                       <input type="radio" name="is_insured" class="is_insured" value="1" >
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
                                       <input type="radio" name="is_insured" class="is_insured" value="0"  checked="">
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
                                <div class="kt-portlet__head panel-title" data-toggle="collapse" data-target="#collapseTwo">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Sender information
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="kt-portlet__body">
                                    <div class="form-group form-group-last kt-hide">
                                        <div class="alert alert-danger kt_form_msg" role="alert">
                                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                            <div class="alert-text">
                                                Oh snap! Change a few things up and try submitting again.
                                            </div>
                                            <div class="alert-close">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="base_sender ">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Sender<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                    <div class="dropdown bootstrap-select form-control sender_address_id">
                                                        <select class="form-control"  onchange="showsenderform1(this.value)" name="sender"  id="sendr" data-live-search="true" title="Choose User"  tabindex="-98">
{{--                                                            <option class="bs-title-option" value=""></option>--}}
                                                            @foreach($senders as $sender)
                                                                <option value="{{$sender->user_id}}"  {{(old('sender')==$sender->user_id)?'selected':''}}>{{$sender->user->name}}</option>
                                                            @endforeach

                                                            <option value="new" data-icon="flaticon2-add">Add New</option>
                                                        </select>
                                                        {{--                                       <div class="dropdown-menu ">--}}
                                                        {{--                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-2" aria-autocomplete="list"></div>--}}
                                                        {{--                                          <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">--}}
                                                        {{--                                             <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                                        {{--                                          </div>--}}
                                                        {{--                                       </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Sender Address/Client Address<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                    <div class="dropdown bootstrap-select form-control sender_address_id">
                                                        <select class="form-control sender_address_id"    onchange="showsenderform(this.value)" name="sender_address_id" id="sender_address_id" data-live-search="true" title="Sender address"  tabindex="-98">
{{--                                                            <option class="bs-title-option" value=""></option>--}}


                                                            <option value="new" data-icon="flaticon2-add">Add New</option>
                                                        </select>
                                                        {{--                                       <div class="dropdown-menu ">--}}
                                                        {{--                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-2" aria-autocomplete="list"></div>--}}
                                                        {{--                                          <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">--}}
                                                        {{--                                             <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
                                                        {{--                                          </div>--}}
                                                        {{--                                       </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 offset-1 p-1 d-none" id="addnewsenderaddress">
                                                <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                                    <div class="kt-portlet__head">
                                                        <div class="kt-portlet__head-label">
                                                            <span class="kt-portlet__head-icon">
                                                                <i class="flaticon2-user"></i>
                                                            </span>
                                                            <h3 class="kt-portlet__head-title">
                                                                Add a new client address <small>Fill data and save it before you continue</small>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="kt-portlet__body">
                                                        <div class="location-senderaddress">
                                                            <div class="row">
                                                                <div class="form-group col-lg-5">
                                                                    <label>Address&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                    <input type="text" id="adres" placeholder="Address" class="form-control address street_addr" name="senderaddress[street_address]"  rel="senderaddress" />
                                                                    <input type="hidden" class="form-control lat" data-senderaddress="lat" name="senderaddress[lat]" />
                                                                    <input type="hidden" class="form-control lng" data-senderaddress="lng" name="senderaddress[lng]" />
                                                                    <input type="hidden" class="form-control url" data-senderaddress="url" name="senderaddress[url]" />
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label>Country<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                    <select class="form-control country_id" id="contry" data-senderaddress="country" data-live-search="true" name="senderaddress[country]" >
                                                                        <option data-hidden="true"></option>
                                                                        <!--                                                {% for country in countries %}-->
                                                                        <option value="3" >c1</option>
                                                                        <!--                                                {% endfor %}-->
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-3">
                                                                    <label>Zip Code</label>
                                                                    <input class="form-control " type="text" id="zep" name="senderaddress[postal_code]" >
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-lg-4">
                                                                    <label>State / Region&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                    <select class="form-control state_id" id="stat" data-senderaddress="administrative_area_level_1" title="Please select country first'" name="senderaddress[state]" data-live-search="true" >
                                                                        <option data-hidden="true"></option>
                                                                        <!--                                                {% for state in states %}-->
                                                                        <option value="2">st1</option>
                                                                        <!--                                                {% endfor %}-->
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label>City&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                    <select class="form-control city_id"  id="cite" data-senderaddress="locality" name="senderaddress[city]" title="Please select state first" data-live-search="true" >
{{--                                                                        <option data-hidden="true"></option>--}}
                                                                        <!--                                                {% for city in cities %}-->
                                                                        <option value="22">city</option>
                                                                        <!--                                                {% endfor %}-->
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label>Area</label>
                                                                    <select class="form-control area_id"  id="areea" data-senderaddress="sublocality" name="senderaddress[county]" title="Please select city first" data-live-search="true" >
                                                                        <option data-hidden="true"></option>
                                                                        <!--                                                {% for county in areas %}-->
                                                                        <option value="1">a1</option>
                                                                        <!--                                                {% endfor %}-->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-lg-12">
                                                                    <label>Google Map</label>
                                                                    <div class="col-sm-12 map_canvas map_senderaddress"></div>
                                                                    <span class="form-text text-muted">Change the pin to select the right location</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-portlet__foot">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-12">
                                                                <button type="button" onclick="saveaddress()" class="btn btn-success saved">Save <i class=" loadr bbx bx-loader-circle bx-spin bx-rotate-90 d-none" style="color:#ffffff ; padding: 0; vertical-align: auto;font-size: 24px;"></i></button>
                                                                <button type="button" class="btn btn-secondary cancel">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-10 offset-1 d-none p-1" id="addnewsender">
                                                <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                                    <div class="kt-portlet__head">
                                                        <div class="kt-portlet__head-label">
                                                   <span class="kt-portlet__head-icon">
                                                       <i class="flaticon2-user"></i>
                                                   </span>
                                                            <h3 class="kt-portlet__head-title">
                                                                Add new user <small>Fill data and save it before you can continue</small>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="kt-portlet__body">
                                                        <div class="row">
                                                            <div class="form-group col-lg-5">
                                                                <label>Name<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="text" class="form-control name" name="receiver_name" id="s_nam" placeholder="Full name" >
                                                            </div>
                                                            <div class="form-group col-lg-5">
                                                                <label>Email<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input class="form-control mobile" name="receiver[email]" id="s_email" type="email" placeholder="Email" >
                                                            </div>
                                                            <div class="form-group col-lg-5">
                                                                <label>Mobile<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="number" class="form-control mobile" name="receiver[mobile]"  id="s_phone" placeholder="Number" >
                                                            </div>
                                                            <div class="form-group col-lg-5">
                                                                <label>Password<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="password" class="form-control " name="receiver[pwd]" id="s_pass"  placeholder="Password">
                                                            </div>

                                                        </div>
                                                        <div class="location-receiver">
                                                            <div class="row">

                                                                <div class="form-group col-md-4">
                                                                    <div class="form-group kt-form__group--inline">
{{--                                                                        <div class="kt-form__label">--}}
{{--                                                                            <label class="col-form-label">Address:<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
{{--                                                                        </div>--}}
                                                                        <div class="kt-form__control">
                                                                            <label>Address<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                            <input type="text" class="form-control email" name="receiver[address]" id="s_add" >
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="form-group col-lg-6">
                                                                    <label>Country<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                    <div class="dropdown bootstrap-select form-control ">
                                                                        <select class="form-control country_id" onchange="getStates(this.value,'statees')" id="s_country"  title="Please write address first" name="receiver[country]"  >
                                                                            <option data-hidden="true"></option>
                                                                            @foreach($countries as $country)
                                                                                <option  value="{{$country->id}}">{{$country->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <div class="dropdown-menu ">
                                                                            <div class="inner show" role="listbox" id="bs-select-25" tabindex="-1">
                                                                                <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-lg-4">
                                                                    <label>State<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                    <div class="dropdown bootstrap-select form-control ">
                                                                        <select name="vehicle_category" class="form-control" id="statees"  onchange="getCities(this.value,'cityy')"   title="Please select country first" >
{{--                                                                            <option value="" selected="" disabled="">Vehicle category</option>--}}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label>City<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                    <div class="dropdown bootstrap-select form-control ">
                                                                        <select class="form-control cities" id="cityy" name="receiver[city]" onchange="getArea(this.value,'areaa')"  title="Please select state first" data-live-search="true"  tabindex="-98">
                                                                            <option data-hidden="true"></option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-lg-4">
                                                                    <label>Area<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                    <div class="dropdown bootstrap-select form-control area_id">
                                                                        <select class="form-control areas" data-receiver="sublocality" id="areaa" name="receiver[area]" title="Please select city first" data-live-search="true" tabindex="-98">
{{--                                                                            <option class="bs-title-option" value=""></option>--}}
                                                                            <option data-hidden="true"></option>
                                                                        </select>
                                                                        <div class="dropdown-menu ">
                                                                            <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-17" aria-autocomplete="list"></div>
                                                                            <div class="inner show" role="listbox" id="bs-select-17" tabindex="-1">
                                                                                <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-6">
                                                                    <label>Postal Code</label>
                                                                    <input class="form-control postal_code" type="text" id="postal" name="receiver[postal_code]" placeholder="Area Zip code">
                                                                </div>
                                                            </div>
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
                                                                <button type="button" class="btn btn-success savee" onclick="sender_save()" >Save <i class='bx bx-loader-circle bx-spin bx-rotate-90 d-none' style='color:#ffffff ; padding: 0; vertical-align: auto;font-size: 24px;' ></i></button>
                                                                <button type="button" class="btn btn-secondary cancel">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Payment Type&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="dropdown bootstrap-select form-control">
                                                <select class="form-control" name="payment_type" id="payment_type"  tabindex="-98">
                                                    <option data-hidden="true"></option>
                                                    <option value="1" selected="">Postpaid </option>
                                                    <option value="2">Prepaid </option>
                                                </select>
                                                <div class="dropdown-menu ">
                                                    <div class="inner show" role="listbox" id="bs-select-11" tabindex="-1">
                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row type_1">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Record receiver information ?&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio">
                                                    <input type="radio" name="show_receiver_info" class="show_receiver_info" value="1" checked="" > Yes
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="show_receiver_info" class="show_receiver_info" value="2" > No
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="type_2 receiver_information">
                            <div class="kt-portlet kt-portlet--mobile">
                                <div class="panel panel-heading">
                                    <div class="kt-portlet__head panel-title" data-toggle="collapse" data-target="#collapseThree">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Receiver information
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="kt-portlet__body">
                                        <div class="row m-0">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Client<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                    <div class="dropdown bootstrap-select form-control ">
                                                        <select onchange="showreceiverform1(this.value)" class="form-control" name="receiver_name" id="receiver_name" data-live-search="true" title="Client"  tabindex="-98">
                                                            <option data-hidden="true"></option>
                                                            @foreach($receivers as $receiver)
                                                                <option value="{{$receiver->user_id}}">{{$receiver->user->name}}</option>
                                                            @endforeach

                                                            <option value="new" data-icon="flaticon2-add">Add New</option>
                                                        </select>

                                                    </div>
                                                    </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Receiver Address/Client Address<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                    <div class="dropdown bootstrap-select form-control ">
                                                        <select onchange="showreceiverform(this.value)" class="form-control receiver_address_id" id="receiver_address_id" name="receiver_address_id"  data-live-search="true" title="Address"  tabindex="-98">
                                                            <option data-hidden="true"></option>
{{--                                                            <option class="rem1" selected="" disabled="">Choose address</option>--}}
                                                            <option value="new" data-icon="flaticon2-add">Add New</option>
                                                        </select>
                                                        <div class="dropdown-menu ">
                                                            <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-13" aria-autocomplete="list"></div>
                                                            <div class="inner show" role="listbox" id="bs-select-13" tabindex="-1">
                                                                <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>









                                        <div class="col-md-10 offset-1 d-none p-1" id="addnewreceivr">
                                            <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                            <span class="kt-portlet__head-icon">
                                                                <i class="flaticon2-user"></i>
                                                            </span>
                                                        <h3 class="kt-portlet__head-title">
                                                            Add receiver details <small>Fill data and save it before you continue</small>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <div class="location-senderaddress">
                                                        <div class="row">
                                                            <div class="form-group col-lg-5">
                                                                <label>Addres<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <input type="text" placeholder="Address" class="form-control address street_addr" name="receiverdetails[street_address]"  rel="receiverdetails" />
                                                                <input type="hidden" class="form-control lat" data-senderaddress="lat" name="receiverdetails[lat]" />
                                                                <input type="hidden" class="form-control lng" data-senderaddress="lng" name="receiverdetails[lng]" />
                                                                <input type="hidden" class="form-control url" data-senderaddress="url" name="receiverdetails[url]" />
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>Country<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <select class="form-control country_id" data-senderaddress="country" data-live-search="true" name="receiverdetails[country]" >
                                                                    <option data-hidden="true"></option>
                                                                    <!--                                                {% for country in countries %}-->
                                                                    <option value="3" >c1</option>
                                                                    <!--                                                {% endfor %}-->
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-3">
                                                                <label>Zip Code</label>
                                                                <input class="form-control postal_code" type="text" data-sendsenderaddresser="postal_code" name="receiverdetails[postal_code]" >
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-lg-4">
                                                                <label>State / Region<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <select class="form-control state_id" data-senderaddress="administrative_area_level_1" title="Please select country first" name="receiverdetails[state]" data-live-search="true" >
                                                                    <option data-hidden="true"></option>
                                                                    <!--                                                {% for state in states %}-->
                                                                    <option value="2">st1</option>
                                                                    <!--                                                {% endfor %}-->
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>City<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <select class="form-control city_id" data-senderaddress="locality" name="receiverdetails[city]" title="Please select state first" data-live-search="true" >
                                                                    <option data-hidden="true"></option>
                                                                    <!--                                                {% for city in cities %}-->
                                                                    <option value="22">city</option>
                                                                    <!--                                                {% endfor %}-->
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>Area</label>
                                                                <select class="form-control area_id" data-senderaddress="sublocality" name="receiverdetails[county]" title="Please select city first" data-live-search="true" >
                                                                    <option data-hidden="true"></option>
                                                                    <!--                                                {% for county in areas %}-->
                                                                    <option value="1">a1</option>
                                                                    <!--                                                {% endfor %}-->
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-lg-12">
                                                                <label>Google Map</label>
                                                                <div class="col-sm-12 map_canvas map_receiverdetails"></div>
                                                                <span class="form-text text-muted">Change the pin to select the right location</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-12">
                                                            <button type="button" class="btn btn-success save">Save</button>
                                                            <button type="button" class="btn btn-secondary cancel">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-md-10 offset-1 d-none p-1" id="addnewreceiver">
                                            <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                   <span class="kt-portlet__head-icon">
                                                       <i class="flaticon2-user"></i>
                                                   </span>
                                                        <h3 class="kt-portlet__head-title">
                                                            Add new user <small>Fill data and save it before you can continue</small>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <div class="row">
                                                        <div class="form-group col-lg-5">
                                                            <label>Name<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                            <input type="text" class="form-control name" name="receiver[name]" id="r_nam" placeholder="Full name" >
                                                        </div>
                                                        <div class="form-group col-lg-5">
                                                            <label>Email<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                            <input class="form-control mobile" name="receiver[email]" id="r_email" type="email" placeholder="Email" >
                                                        </div>
                                                        <div class="form-group col-lg-5">
                                                            <label>Mobile<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                            <input type="number" class="form-control mobile" name="receiver[mobile]"  id="r_phone" placeholder="Number" >
                                                        </div>
                                                        <div class="form-group col-lg-5">
                                                            <label>Password<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                            <input type="password" class="form-control " name="receiver[pwd]" id="r_pass"  placeholder="Password">
                                                        </div>

                                                    </div>
                                                    <div class="location-receiver">
                                                        <div class="row">

                                                            <div class="form-group col-md-4">
                                                                <div class="form-group kt-form__group--inline">
                                                                    {{--                                                                        <div class="kt-form__label">--}}
                                                                    {{--                                                                            <label class="col-form-label">Address:<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}
                                                                    {{--                                                                        </div>--}}
                                                                    <div class="kt-form__control">
                                                                        <label>Address<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                        <input type="text" class="form-control email" name="receiver[address]" id="r_add" >
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group col-lg-6">
                                                                <label>Country<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <div class="dropdown bootstrap-select form-control ">
                                                                    <select class="form-control country_id" onchange="getStates(this.value,'r_statees')" id="r_country"  title="Please write address first" name="receiver[country]"  >
                                                                        <option data-hidden="true"></option>
                                                                        @foreach($countries as $country)
                                                                            <option  value="{{$country->id}}">{{$country->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="dropdown-menu ">
                                                                        <div class="inner show" role="listbox" id="bs-select-25" tabindex="-1">
                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-lg-4">
                                                                <label>State<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <div class="dropdown bootstrap-select form-control ">
                                                                    <select name="vehicle_category" class="form-control" id="r_statees"  onchange="getCities(this.value,'r_cityy')"   title="Please select country first" >
                                                                        {{--                                                                            <option value="" selected="" disabled="">Vehicle category</option>--}}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-4">
                                                                <label>City<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <div class="dropdown bootstrap-select form-control ">
                                                                    <select class="form-control cities" id="r_cityy" name="receiver[city]" onchange="getArea(this.value,'r_areaa')"  title="Please select state first" data-live-search="true"  tabindex="-98">
                                                                        <option data-hidden="true"></option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-lg-4">
                                                                <label>Area<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                                <div class="dropdown bootstrap-select form-control area_id">
                                                                    <select class="form-control areas" data-receiver="sublocality" id="r_areaa" name="receiver[area]" title="Please select city first" data-live-search="true" tabindex="-98">
                                                                        {{--                                                                            <option class="bs-title-option" value=""></option>--}}
                                                                        <option data-hidden="true"></option>
                                                                    </select>
                                                                    <div class="dropdown-menu ">
                                                                        <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-17" aria-autocomplete="list"></div>
                                                                        <div class="inner show" role="listbox" id="bs-select-17" tabindex="-1">
                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label>Postal Code</label>
                                                                <input class="form-control postal_code" type="text" id="r_postal" name="receiver[postal_code]" placeholder="Area Zip code">
                                                            </div>
                                                        </div>
{{--                                                     <input type="password" class="form-control r_password" name="receiver[password]" >--}}
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-12">
                                                            <button type="button" class="btn btn-success saveee" onclick="receiver_save()" >Save <i class='bx bxy bx-loader-circle bx-spin bx-rotate-90 d-none' style='color:#ffffff ; padding: 0; vertical-align: auto;font-size: 24px;' ></i></button>
                                                            <button type="button" class="btn btn-secondary cancel">Cancel</button>
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
                                            <label class="col-xl-3 col-lg-3 col-form-label">Package Cost&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span>
                                                <br><span class="text-muted">Amount that will be returned to the sender from the receiver</span>
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                       <span class="input-group-text">
                                       $
                                       </span>
                                                    </div>
                                                    <input type="text" class="form-control decimal" data-type="currency" name="package_fee" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row kt-hidden package_fee">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Return Shipment Cost&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                       <span class="input-group-text">
                                       $
                                       </span>
                                                    </div>
                                                    <input type="text" class="form-control decimal" data-type="currency" name="return_courier_fee" id="return_courier_fee" value="40.00" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row kt-hidden package_fee">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Return package fees responsiable&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-radio-inline">
                                                    <label class="kt-radio">
                                                        <input type="radio" name="return_package_fee" class="return_package_fee" value="1" checked="" > Receiver
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio">
                                                        <input type="radio" name="return_package_fee" class="return_package_fee" value="2" > Sender
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
                                <div class="kt-portlet__head panel-title" data-toggle="collapse" data-target="#collapseTFour">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Shipment Details
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTFour" class="panel-collapse collapse">
                                <div class="kt-portlet__body">
                                    <div class="form-group form-group-last kt-hide">
                                        <div class="alert alert-danger kt_form_msg" role="alert">
                                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                            <div class="alert-text">
                                                Oh snap! Change a few things up and try submitting again.
                                            </div>
                                            <div class="alert-close">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-section">
                                        <h3 class="kt-section__title kt-margin-b-20">
                                            Package Content&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span>
                                        </h3>
                                        <div class="kt-section__content">
                                            <div class="form-group form-group-last row" id="package_repeater">
                                                <div data-repeater-list="items" class="col-lg-12">
                                                </div>


                                                <div class="pakg">
                                                    <div class="form-group form-group-last row" id="package_repeater">
                                                        <div data-repeater-list="items" class="col-lg-12">
                                                            <div data-repeater-item class="align-items-center">
                                                                <div class="form-group row">
                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label>Package type:</label>
                                                                            </div>
                                                                            <div class="kt-form__control">

                                                                                <select class="form-control selectpicker" data-live-search="true" name="category_id" >
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
                                                                                <input type="text" class="form-control" name="description" value="" placeholder="package description">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="kt-form__group--inline">
                                                                            <div class="kt-form__label">
                                                                                <label class="kt-label m-label--single">Quantity:</label>
                                                                            </div>
                                                                            <div class="kt-form__control">
                                                                                <input type="text" class="form-control bootstrap-touchspin-vertical-btn" name="quantity"  placeholder="package quantity" value="">
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
                                                                                    <input type="text" class="form-control bootstrap-touchspin-vertical-btn sub_weight" name="weight" value="" >
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
                                                                        <input type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" name="length" style="max-width: 100px;" name="weight" value="">
                                                                    </span>
                                                                                    </div>
                                                                                    <div class="input-group-prepend"><span class="input-group-text">x</span></div>
                                                                                    <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <input type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" name="width" style="max-width: 100px;" name="weight" value="">
                                                                    </span>
                                                                                    </div>
                                                                                    <div class="input-group-prepend"><span class="input-group-text">x</span></div>
                                                                                    <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <input type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" name="height" style="max-width: 100px;" name="weight" value="">
                                                                    </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{--                                                              <div class="d-md-none kt-margin-b-10"></div>--}}
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--                                              <div class="form-group form-group-last row">--}}
                                                        {{--                                                  <label class="col-xl-12 col-form-label kt-align-right">--}}
                                                        {{--                                                      <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">--}}
                                                        {{--                                                          <i class="la la-plus"></i> Add Item--}}
                                                        {{--                                                      </a>--}}
                                                        {{--                                                  </label>--}}
                                                        {{--                                              </div>--}}
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>





                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                    <div class="kt-section">
                                        <div class="kt-section__content">
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
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label>Shipping Fee&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                          $
                                          </span>
                                                        </div>
                                                        <input type="text" class="form-control decimal" data-type="currency" name="courier_fee" id="delivery_cost" value="30.00" >
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Total Weight&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Kg</span></div>
                                                        <input readonly="" type="text" class="form-control  total_weight" name="total_weight" value="0">
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
            <div class="row">
                <div class="col-lg-12 sec5">
                    <div class="panel panel-default">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="panel panel-heading">
                                <div class="kt-portlet__head panel-title" data-toggle="collapse" data-target="#collapseTFive">
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
                                        <div class="form-group col-lg-6">
                                            <label>package Value&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">package price</span></div>
                                                <input type="number" class="form-control budget_client" name="budget_client" min="1" placeholder="package Value">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>invioce Upload&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Invoice Image</span></div>
                                                <input type="file" class="form-control budget_client" name="budget_client" min="1" placeholder="package Value">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-10 offset-2 mb-0" >
                                            <label for="vehicle_category">Choose vehicle category<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                        </div>
                                        <div class="form-group col-lg-8 offset-2">
                                            <div class="dropdown bootstrap-select form-control vehicle_category">
                                                <select class="form-control vehicle_category" onchange="getVehicles(this.value)" name="vehicle_category" id="vehicle_category" tabindex="-98">
                                                    <option data-hidden="true"></option>
                                                    @foreach($vehicle_types as $type )
                                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="dropdown-menu ">
                                                    <div class="inner show" role="listbox" id="bs-select-25" tabindex="-1">
                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-10 offset-2 mb-0">
                                            <label for="slectedTracks">Vehicles</label>
                                        </div>
                                        {{--                           <input type="hidden" id="slectedTracks" name="truck_used">--}--}}
                                        <div class="form-group col-lg-8 offset-2">
                                            <div class="dropdown bootstrap-select form-control vehicle_category">
                                                <select name="vehicle_category" class="form-control"  id="vehicle_category_list">
                                                    <option value="" selected="" disabled="">Vehicle category</option>
                                                </select>
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
                    <div class="kt-portlet">
                        <div class="kt-portlet__foot">
                            <div class="row">
                                <div class="col-lg-9 offset-3">
                                    <input type="submit" class="btn btn-warning save w-50 text-center" value="Save"/>
                                    {{--                        <span class="kt-margin-left-10">or <a href="#" class="kt-link">Cancel</a></span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
  <script>

@foreach ($errors->all() as $error)
        toastr.warning('{{$error}}');
@endforeach


      function getVehicles(id) {
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
                    $('#vehicle_category_list').empty().append(html);
                    $('#vehicle_category_list').selectpicker('refresh');
                }
            })
        }


        function showsenderform(val) {

            if(val=='new'){
                var sender_id=$('#sendr option:selected').val()
                if(sender_id=='' || sender_id=='new'){
                    toastr.warning("Please Choose user first");
                    return;
                }

                $('#addnewsender').addClass('d-none');
                $('#addnewsenderaddress').removeClass('d-none');
            }else{
                $('#addnewsenderaddress').addClass('d-none');
                $('#addnewsender').addClass('d-none');
            }
        }
        function showreceiverform(val) {
            if(val=='new'){
                $('#addnewreceivr').removeClass('d-none')
                $('#addnewreceiver').addClass('d-none');
            }else{
                $('#addnewreceivr').addClass('d-none');
                $('#addnewreceiver').addClass('d-none');
            }
        }

        function showreceiverform1(val) {
            if (val == 'new') {
                $('#addnewreceivr').addClass('d-none');
                $('#addnewreceiver').removeClass('d-none');
            } else
            {
                $.ajax({
                    type: 'GET',
                    url: "{{route('getUserAddress')}}",
                    data: {'id': val},
                    success: function (data) {
                        var html='';
                        html += "<option value='' selected disabled>Choose address</option>";
                        $.each(data.address,function (key,value) {
                            html += '<option value="'+value.id+'">'+value.address+'</option>';
                        });
                        $('#receiver_address_id').empty().append(html);
                        $('#receiver_address_id').selectpicker('refresh');
                    }
                })
                $('#addnewreceiver').addClass('d-none');
                $('#addnewreceivr').addClass('d-none');
            }
        }

        function showsenderform1(val) {
            if(val=='new'){
                $('#addnewsender').removeClass('d-none');
                $('#addnewsenderaddress').addClass('d-none');
            }else{
                $.ajax({
                    type: 'GET',
                    url: "{{route('getUserAddress')}}",
                    data: {'id': val},
                    success: function (data) {
                        var html='';
                        html += "<option value='' selected disabled>Choose address</option>";
                        $.each(data.address,function (key,value) {
                            html += '<option value="'+value.id+'">'+value.address+'</option>';
                        });
                        html += "<option value='new' data-icon='flaticon2-add'>Add New</option>";
                        $('#sender_address_id').empty().append(html);
                        $('#sender_address_id').selectpicker('refresh');
                    }
                })


                $('#addnewsender').addClass('d-none');
                $('#addnewsenderaddress').addClass('d-none');
            }
        }


        function getStates(id,clas) {
            $.ajax({
                type: 'GET',
                url: "{{route('getStates')}}",
                data: {'id': id},
                success: function (data) {
                    var html='';
                    html += "<option value='' selected disabled>Choose State</option>";
                    $.each(data.states,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#'+clas).empty().append(html);
                    $('#'+clas).selectpicker('refresh');
                }
            })

        };
        function getCities(id,clas) {
            $.ajax({
                type: 'GET',
                url: "{{route('getCities')}}",
                data: {'id': id},
                success: function (data) {
                    var html='';
                    html += "<option value='' selected disabled>Choose City</option>";
                    $.each(data.cities,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#'+clas).empty().append(html);
                    $('#'+clas).selectpicker('refresh');
                }
            })
        };
        function getArea(id,clas) {
            $.ajax({
                type: 'GET',
                url: "{{route('getArea')}}",
                data: {'id': id},
                success: function (data) {
                    var html='';
                    html += "<option value='' selected disabled>Choose Area</option>";
                    $.each(data.cities,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#'+clas).empty().append(html);
                    $('#'+clas).selectpicker('refresh');
                }
            })

        }

  function sender_save() {
      var s_nam = $('#s_nam').val();
      var s_email = $('#s_email').val();
      var s_pass = $('#s_pass').val();
      var s_country = $('#s_country option:selected').val();
      var s_phone = $('#s_phone').val();
      var statees = $('#statees option:selected').val();
      var cityy = $('#cityy option:selected').val();
      var s_add = $('#s_add').val();
      var areaa = $('#areaa').val();
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
      if (s_add == '' || s_add.length < 2) {
          // alert('ss')
          $('#s_add').css('border', '1px solid #e00258');
          return;
      } else {
          $('#s_add').css('border', '1px solid #e2e5ec');
      }
      if (s_country == '') {
          // alert(s_country);
          toastr.warning("Fill country");
          // $('#s_country').css('border', '1px solid #e00258');
          return;
      } else {
          $('#s_country').css('border', '1px solid #e2e5ec');
      }

      if (statees == '') {
          toastr.warning("Fill state");
          return;
      } else {
          $('#statees').css('border', '1px solid #e2e5ec');
      }
      if (cityy == '') {
          toastr.warning("Fill City");
          return;
      } else {
          $('#cityy').css('border', '1px solid #e2e5ec');
      }
      if (areaa == '') {
          toastr.warning("Fill area field");
          return;
      } else {
          $('#areaa').css('border', '1px solid #e2e5ec');
      }
      $('.savee').css('opacity','0.5');
      $('.bx-spin').removeClass('d-none');
      $.ajax({
          type: 'post',
          url: "{{route('createUser')}}",
          data: {
              'area': areaa,
              'address': s_add,
              'city': cityy,
              'state': statees,
              'phone': s_phone,
              'country': s_country,
              'password': s_pass,
              'email': s_email,
              'full_name': s_nam,
              'zip': s_zip,
              'form':'sender'
          },
          success: function (data) {
              $('.savee').css('opacity','1');
              $('.bx-spin').addClass('d-none');
              if(data.error) {
                  $.each(data.error, function (key, value) {
                      toastr.warning(value);
                  })
              }
              if(data.success){
                 var html='';
                  html += '<option value="'+data.address_id+'" selected>'+s_add+' </option>';
                  var html1='';
                  html1 += '<option value="'+data.user_id+'" selected>'+s_nam+' </option>';
                  $('#sender_address_id').prepend(html);
                  $('#sender_address_id').selectpicker('refresh');
                  $('#addnewsender').addClass('d-none');
                  $('#sendr').prepend(html1);
                  $('#sendr').selectpicker('refresh');

                  $('#sendr').val(data.user_id);
                  $('#sendr').change();
                  $('#sender_address_id').val(data.address_id);
                  $('#sender_address_id').change();
                  toastr.success(data.success);
              }
          }

      })
  }
  function receiver_save() {
      var s_nam = $('#r_nam').val();
      var s_email = $('#r_email').val();
      var s_pass = $('#r_pass').val();
      var s_country = $('#r_country option:selected').val();
      var s_phone = $('#r_phone').val();
      var statees = $('#r_statees option:selected').val();
      var cityy = $('#r_cityy option:selected').val();
      var s_add = $('#r_add').val();
      var areaa = $('#r_areaa').val();
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
      if (s_add == '' || s_add.length < 2) {
          // alert('ss')
          $('#r_add').css('border', '1px solid #e00258');
          return;
      } else {
          $('#r_add').css('border', '1px solid #e2e5ec');
      }
      if (s_country == '') {
          // alert(s_country);
          toastr.warning("Fill country");
          // $('#s_country').css('border', '1px solid #e00258');
          return;
      } else {
          $('#r_country').css('border', '1px solid #e2e5ec');
      }

      if (statees == '') {
          toastr.warning("Fill state");
          return;
      } else {
          $('#r_statees').css('border', '1px solid #e2e5ec');
      }
      if (cityy == '') {
          toastr.warning("Fill City");
          return;
      } else {
          $('#r_cityy').css('border', '1px solid #e2e5ec');
      }
      if (areaa == '') {
          toastr.warning("Fill area field");
          return;
      } else {
          $('#r_areaa').css('border', '1px solid #e2e5ec');
      }
      $('.saveee').css('opacity','0.5');
      $('.bxy').removeClass('d-none');
      $.ajax({
          type: 'post',
          url: "{{route('createUser')}}",
          data: {
              'area': areaa,
              'address': s_add,
              'city': cityy,
              'state': statees,
              'phone': s_phone,
              'country': s_country,
              'password': s_pass,
              'email': s_email,
              'full_name': s_nam,
              'zip': s_zip,
              'form':'receiver'
          },
          success: function (data) {
              $('.saveee').css('opacity','1');
              $('.bxy').addClass('d-none');
              if(data.error) {
                  $.each(data.error, function (key, value) {
                      toastr.warning(value);
                  })
              }
              if(data.success){
                 var html='';
                  html += '<option value="'+data.address_id+'" selected>'+s_add+' </option>';
                  var html1='';
                  html1 += '<option value="'+data.user_id+'" selected>'+s_nam+' </option>';
                  $('#receiver_address_id').prepend(html);
                  $('#receiver_address_id').selectpicker('refresh');
                  $('#addnewreceiver').addClass('d-none');
                  $('#receiver_name').prepend(html1);
                  $('#receiver_name').selectpicker('refresh');

                  $('#receiver_name').val(data.user_id);
                  $('#receiver_name').change();
                  $('#receiver_address_id').val(data.address_id);
                  $('#receiver_address_id').change();
                  toastr.success(data.success);
              }
          }

      })
  }
  function saveaddress() {
      var address = $('#adres').val();
      var country = $('#contry option:selected').val();
      var zip = $('#zep').val();
      var state = $('#stat option:selected').val();
      var city = $('#cite option:selected').val();
      var area = $('#areea').val();

      if (address == '') {
          toastr.warning("Fill address field");
          return;
      }
      if (area == '') {
          $('#areea').css('border', '1px solid #e00258');
          return;
      } else {
          $('#areea').css('border', '1px solid #e2e5ec');
      }
      if (city == '') {
          $( toastr.warning("Fill city field");
          return;
      } else {
          $('#cite').css('border', '1px solid #e2e5ec');
      }
      if (zip == '' ) {
          $('#zep').css('border', '1px solid #e00258');
          return;
      } else {
          $('#zep').css('border', '1px solid #e2e5ec');
      }
      if (state == '' ) {
         toastr.warning("Fill state field");
          return;
      }
      if (country == '' ) {
         toastr.warning("Fill country field");
          return;
      }




      $('.saved').css('opacity','0.5');
      $('.loadr').removeClass('d-none');
      $.ajax({
          type: 'post',
          url: "{{route('createUser')}}",
          data: {
              'area': areaa,
              'address': s_add,
              'city': cityy,
              'state': statees,
              'phone': s_phone,
              'country': s_country,
              'password': s_pass,
              'email': s_email,
              'full_name': s_nam,
              'zip': s_zip,
              'form':'receiver'
          },
          success: function (data) {
              $('.saved').css('opacity','1');
              $('.loadr').addClass('d-none');
              if(data.error) {
                  $.each(data.error, function (key, value) {
                      toastr.warning(value);
                  })
              }
              if(data.success){
                 var html='';
                  html += '<option value="'+data.address_id+'" selected>'+s_add+' </option>';
                  var html1='';
                  html1 += '<option value="'+data.user_id+'" selected>'+s_nam+' </option>';
                  $('#receiver_address_id').prepend(html);
                  $('#receiver_address_id').selectpicker('refresh');
                  $('#addnewreceiver').addClass('d-none');
                  $('#receiver_name').prepend(html1);
                  $('#receiver_name').selectpicker('refresh');

                  $('#receiver_name').val(data.user_id);
                  $('#receiver_name').change();
                  $('#receiver_address_id').val(data.address_id);
                  $('#receiver_address_id').change();
                  toastr.success(data.success);
              }
          }

      })
  }




    </script>


@stop
