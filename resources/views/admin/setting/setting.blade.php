@extends('admin.layout.app')


@section('content')

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   <div class="kt-container  kt-container--fluid  ">
      <div class="kt-subheader__main">
         <h3 class="kt-subheader__title"><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle" style="display: block;"><span></span></button>Settings</h3>
         <span class="kt-subheader__desc">System Configuration</span>
         <span class="kt-subheader__separator kt-subheader__separator--v"></span>
         <div class="kt-subheader__breadcrumbs">
            <a href="#" class="kt-subheader__breadcrumbs-home">
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
         <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
               <h3 class="kt-portlet__head-title">
                  Settings
               </h3>
            </div>
         </div>
         <div class="kt-portlet__body kt-portlet__body--fit-x">
            <div class="col-lg-12">
               <form method="POST" action="" accept-charset="UTF-8" data-request="onSave" id="kt_form" class="kt-form" data-request-files="1" enctype="multipart/form-data" novalidate="novalidate">
                  <input name="_session_key" type="hidden" value="5EcZJsJaG0JK2CFdAlJMko9dIrbgWP304LzSkVHr"><input name="_token" type="hidden" value="pb4F6B3T1y1x2Qp7aPTx7d1hbjQfCuV0UmZDB8Lg">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="form-group kt-hidden" id="kt-form_msg">
                           <div class="alert alert-danger" role="alert">
                              Oh snap! Change a few things up and try submitting again.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xl-2"></div>
                     <div class="col-xl-8">
                        <div class="kt-section kt-section--first">
                           <h3 class="kt-section__title kt-section__title-lg">General:</h3>
                           <div class="kt-section__body">
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">Default Language</label>
                                 <div class="col-lg-9 col-xl-6">
                                    <div class="dropdown bootstrap-select form-control dropup ">

                                       <select class="form-control" name="language" required="" tabindex="-98">
                                          <option data-hidden="true"></option>
                                          <option value="en" {{ $data->language == 'en' ? 'selected' : ''}} data-live-search="true">English</option>
                                          <option value="ar" {{ $data->language == 'ar' ? 'selected' : ''}} data-live-search="true">Arabic</option>
                                       </select>

                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">TimeZone</label>
                                 <div class="col-lg-9 col-xl-6">
                                    <div class="dropdown bootstrap-select form-control">
                                       <select class="form-control" name="timezone_offset" data-live-search="true" required="" tabindex="-98">
                                           <option value="">Nothing Selected</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
{{--                              <div class="form-group row">--}}
{{--                                 <label class="col-xl-3 col-lg-3 col-form-label">Date Format</label>--}}
{{--                                 <div class="col-lg-9 col-xl-6">--}}
{{--                                    <div class="dropdown bootstrap-select form-control">--}}
{{--                                       <select class="form-control" name="dateformat" required="" tabindex="-98">--}}
{{--                                          <option data-hidden="true"></option>--}}
{{--                                          <option value="d/m/Y" {{ $data->date_format == 'd/m/Y' ? 'selected' : '' }}>01/06/2021</option>--}}
{{--                                          <option value="m/d/Y" {{ $data->date_format == 'm/d/Y' ? 'selected' : '' }}>06/01/2021</option>--}}
{{--                                          <option value="d M, Y" {{ $data->date_format == 'd M, Y' ? 'selected' : '' }}>01 Jun, 2021</option>--}}
{{--                                          <option value="M d, Y" {{ $data->date_format == 'M d, Y' ? 'selected' : '' }}>Jun 01, 2021</option>--}}
{{--                                       </select>--}}
{{--                                       <div class="dropdown-menu ">--}}
{{--                                          <div class="inner show" role="listbox" id="bs-select-3" tabindex="-1">--}}
{{--                                             <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
{{--                                          </div>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                              </div>--}}
{{--                              <div class="form-group row">--}}
{{--                                 <label class="col-xl-3 col-lg-3 col-form-label">Currency</label>--}}
{{--                                 <div class="col-lg-9 col-xl-6">--}}
{{--                                    <div class="dropdown bootstrap-select form-control">--}}
{{--                                       <select class="form-control" id="currency" name="currency" data-live-search="true" required="" tabindex="-98">--}}
{{--                                          <option data-hidden="true"></option>--}}
{{--                                          <option value="8">USD</option>--}}
{{--                                          <option value="19">Egyptian Pound</option>--}}
{{--                                          <option value="20" selected="">U.S. Dollar</option>--}}
{{--                                          <option value="21">Euro</option>--}}
{{--                                          <option value="22">Pound Sterling</option>--}}
{{--                                          <option value="23">Australian Dollar</option>--}}
{{--                                       </select>--}}
{{--                                       <div class="dropdown-menu ">--}}
{{--                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-4" aria-autocomplete="list"></div>--}}
{{--                                          <div class="inner show" role="listbox" id="bs-select-4" tabindex="-1">--}}
{{--                                             <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
{{--                                          </div>--}}
{{--                                       </div>--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
{{--                              </div>--}}
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                 <div class="col-lg-9 col-xl-6">
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="checkbox" id="place_symbol_before" name="place_symbol_before" checked=""> Place symbol before number
                                       <span></span>
                                       </label>
                                    </div>
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="checkbox" id="with_space" name="with_space"> Place symbol with space
                                       <span></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">Decimal Point</label>
                                 <div class="col-lg-9 col-xl-6">
                                    <input class="form-control" type="text" id="decimal_point" name="decimal_point" value="." required="">
                                    <span class="form-text text-muted">Character to use as decimal point.</span>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">Thousand Separator</label>
                                 <div class="col-lg-9 col-xl-6">
                                    <input class="form-control" type="text" id="thousand_separator" name="thousand_separator" value="," required="">
                                    <span class="form-text text-muted">Character to separate thousands.</span>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">Number of fraction digits</label>
                                 <div class="col-lg-9 col-xl-6">
                                    <input class="form-control" type="text" id="initbiz_money_fraction_digits" name="initbiz_money_fraction_digits" value="2" required="">
                                 </div>
                              </div>
                              <!-- add shipment form -->
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">Add Shipment Form</label>
                                 <div class="col-lg-9 col-xl-6">
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="radio" id="add_form_simple" value="add_form_simple" name="add_form"> Simple
                                       <span></span>
                                       </label>
                                    </div>
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="radio" id="add_form_advance" value="add_form_advance" name="add_form" checked=""> Advance
                                       <span></span>
                                       </label>
                                    </div>
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="radio" id="add_form_normal" value="add_form_normal" name="add_form"> Normal
                                       <span></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <!-- create user with shipment  -->
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">Save Sender Details</label>
                                 <div class="col-lg-9 col-xl-6">
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="radio" id="exist_user" value="1" name="add_user"> Yes
                                       <span></span>
                                       </label>
                                    </div>
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="radio" id="no_user" value="2" name="add_user" checked=""> No
                                       <span></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <!-- update shipment form -->
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">Update Shipment Form</label>
                                 <div class="col-lg-9 col-xl-6">
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="radio" id="update_form_simple" value="update_form_simple" name="update_form" checked=""> Simple
                                       <span></span>
                                       </label>
                                    </div>
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="radio" id="update_form_advance" value="update_form_advance" name="update_form"> Advance
                                       <span></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <!-- shipment print template -->
                              <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">Shipment Print Template</label>
                                 <div class="col-lg-9 col-xl-6">
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="radio" id="print_template_simple" value="print_template_simple" name="print_template" checked=""> Simple
                                       <span></span>
                                       </label>
                                    </div>
                                    <div class="kt-checkbox-single">
                                       <label class="kt-checkbox">
                                       <input type="radio" id="print_template_advance" value="print_template_advance" name="print_template"> Advance
                                       <span></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-2"></div>
                  </div>
                  <div class="row">
                     <div class="col-xl-4"></div>
                     <div class="col-xl-8">
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end:: Content -->



@stop
