@extends('admin.layout.app')
@section('title', 'Shipments')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
   integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
   integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   <div class="kt-container  kt-container--fluid  ">
      <div class="kt-subheader__main">
         <h3 class="kt-subheader__title"><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>Create New Shipment</h3>
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
   <form method="POST" action="" accept-charset="UTF-8" data-request="onSave" class="kt_form" data-request-success="created successfully!" data-request-flash="1" novalidate="novalidate">
      <input name="_session_key" type="hidden" value="h5dotw6pDDMINp5E6GvamcXt1wA9guaPxsUTKrlc"><input name="_token" type="hidden" value="AFbPzQUzku0H5bLkZ65qy0TojdCs5eY0YP9sAr5h">
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
                                          <input type="radio" name="type" class="type" value="1" checked="" required="">
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
                                          <input type="radio" name="type" class="type" value="2" required="">
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
                                    <input type="text" class="form-control date" readonly="" name="ship_date" value="06/02/2021" required="">
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
                                    <input type="time" class="form-control ship_time" name="ship_time" required="">
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
                                       <input type="radio" name="dilivery_typ" class="dilivery_typ" value="2" required="" checked="">
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
                                       <input type="radio" name="dilivery_typ" class="dilivery_typ" value="1" required="">
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
                                       <input type="radio" name="is_insured" class="is_insured" value="1" required="">
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
                                       <input type="radio" name="is_insured" class="is_insured" value="0" required="" checked="">
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
                              <div class="form-group  col-md-6 pl-0">
                                 <label>Sender/Client&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                 <span class="dev1 col-12 p-0">
                                 <input name="sender_id" id="sender_id" value="1" type="hidden">
                                 <input value="System Administration" type="text" class="form-control">
                                 </span>
                                 <div class="dev2 kt-hidden col-12">
                                    <div class="dropdown bootstrap-select form-control clients select2-hidden-accessible">
                                       <select class="form-control clients select2-hidden-accessible" name="sender_id" id="sender_id" required="" data-select2-id="sender_id" tabindex="-98" aria-hidden="true">
                                          <option data-hidden="true" data-select2-id="2"></option>
                                          <option value="new" data-icon="flaticon2-add" data-select2-id="3">Add New</option>
                                       </select>
                                       <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="sender_id" tabindex="-1" title="Nothing selected">
                                          <div class="filter-option">
                                             <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Nothing selected</div>
                                             </div>
                                          </div>
                                       </button>
                                       <div class="dropdown-menu ">
                                          <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                             <ul class="dropdown-menu inner show" role="presentation"></ul>
                                          </div>
                                       </div>
                                    </div>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-sender_id-container"><span class="select2-selection__rendered" id="select2-sender_id-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Search for client</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <span class="text-muted">Choose or add a new client that will send the package</span>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Sender Address/Client Address&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                    <div class="dropdown bootstrap-select form-control sender_address_id">
                                       <select class="form-control sender_address_id" name="sender_address_id" id="sender_address_id" data-live-search="true" title="Sender City" required="" tabindex="-98">
                                          <option class="bs-title-option" value=""></option>
                                          <option value="" class="rem" disabled="">Please Choose sender</option>
                                          <option value="new" data-icon="flaticon2-add">Add New</option>
                                       </select>
                                       <div class="dropdown-menu ">
                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-2" aria-autocomplete="list"></div>
                                          <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                             <ul class="dropdown-menu inner show" role="presentation"></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row kt-hidden" id="addnewsender">
                           <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                              <div class="kt-portlet__head">
                                 <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon">
                                    <i class="flaticon2-user"></i>
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                       Add a new client <small>Fill data and save it brefore you can continue</small>
                                    </h3>
                                 </div>
                              </div>
                              <div class="kt-portlet__body">
                                 <div class="row">
                                    <div class="form-group col-lg-5">
                                       <label>Client Name&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                       <input type="text" class="form-control name" name="sender[name]" required="">
                                    </div>
                                    <div class="form-group col-lg-4">
                                       <label>Mobile&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                       <input type="text" class="form-control mobile" name="sender[mobile]" required="">
                                    </div>
                                    <div class="form-group col-lg-3">
                                       <label>Gender</label>
                                       <div class="kt-radio-inline">
                                          <label class="kt-radio">
                                          <input type="radio" name="sender[gender]" class="gender" value="male" checked=""> Male
                                          <span></span>
                                          </label>
                                          <label class="kt-radio">
                                          <input type="radio" name="sender[gender]" class="gender" value="female"> Female
                                          <span></span>
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="location-sender">
                                    <div class="row">
                                       <div class="form-group col-lg-6">
                                          <label>Country&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                          <div class="dropdown bootstrap-select form-control country_id">
                                             <select class="form-control country_id" data-sender="country" data-live-search="true" name="sender[country]" required="" tabindex="-98">
                                                <option data-hidden="true"></option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua And Barbuda</option>
                                                <option value="10">Argentina</option>
                                                <option value="11">Armenia</option>
                                                <option value="12">Aruba</option>
                                                <option value="13">Australia</option>
                                                <option value="14">Austria</option>
                                                <option value="15">Azerbaijan</option>
                                                <option value="16">Bahamas The</option>
                                                <option value="17">Bahrain</option>
                                                <option value="18">Bangladesh</option>
                                                <option value="19">Barbados</option>
                                                <option value="20">Belarus</option>
                                                <option value="21">Belgium</option>
                                                <option value="22">Belize</option>
                                                <option value="23">Benin</option>
                                                <option value="24">Bermuda</option>
                                                <option value="25">Bhutan</option>
                                                <option value="26">Bolivia</option>
                                                <option value="27">Bosnia and Herzegovina</option>
                                                <option value="28">Botswana</option>
                                                <option value="29">Bouvet Island</option>
                                                <option value="30">Brazil</option>
                                                <option value="31">British Indian Ocean Territory</option>
                                                <option value="32">Brunei</option>
                                                <option value="33">Bulgaria</option>
                                                <option value="34">Burkina Faso</option>
                                                <option value="35">Burundi</option>
                                                <option value="36">Cambodia</option>
                                                <option value="37">Cameroon</option>
                                                <option value="38">Canada</option>
                                                <option value="39">Cape Verde</option>
                                                <option value="40">Cayman Islands</option>
                                                <option value="41">Central African Republic</option>
                                                <option value="42">Chad</option>
                                                <option value="43">Chile</option>
                                                <option value="44">China</option>
                                                <option value="45">Christmas Island</option>
                                                <option value="46">Cocos (Keeling) Islands</option>
                                                <option value="47">Colombia</option>
                                                <option value="48">Comoros</option>
                                                <option value="49">Republic Of The Congo</option>
                                                <option value="50">Democratic Republic Of The Congo</option>
                                                <option value="51">Cook Islands</option>
                                                <option value="52">Costa Rica</option>
                                                <option value="53">Cote D'Ivoire (Ivory Coast)</option>
                                                <option value="54">Croatia (Hrvatska)</option>
                                                <option value="55">Cuba</option>
                                                <option value="56">Cyprus</option>
                                                <option value="57">Czech Republic</option>
                                                <option value="58">Denmark</option>
                                                <option value="59">Djibouti</option>
                                                <option value="60">Dominica</option>
                                                <option value="61">Dominican Republic</option>
                                                <option value="62">East Timor</option>
                                                <option value="63">Ecuador</option>
                                                <option value="64">Egypt</option>
                                                <option value="65">El Salvador</option>
                                                <option value="66">Equatorial Guinea</option>
                                                <option value="67">Eritrea</option>
                                                <option value="68">Estonia</option>

                                                <option value="135">Malta</option>
                                                <option value="136">Man (Isle of)</option>
                                                <option value="137">Marshall Islands</option>
                                                <option value="138">Martinique</option>
                                                <option value="139">Mauritania</option>
                                                <option value="140">Mauritius</option>
                                                <option value="141">Mayotte</option>
                                                <option value="142">Mexico</option>
                                                <option value="143">Micronesia</option>
                                                <option value="144">Moldova</option>
                                                <option value="145">Monaco</option>
                                                <option value="146">Mongolia</option>
                                                <option value="147">Montserrat</option>
                                                <option value="148">Morocco</option>
                                                <option value="149">Mozambique</option>
                                                <option value="150">Myanmar</option>
                                                <option value="151">Namibia</option>
                                                <option value="152">Nauru</option>
                                                <option value="153">Nepal</option>
                                                <option value="154">Netherlands Antilles</option>
                                                <option value="155">Netherlands The</option>
                                                <option value="156">New Caledonia</option>
                                                <option value="157">New Zealand</option>
                                                <option value="158">Nicaragua</option>
                                                <option value="159">Niger</option>
                                                <option value="160">Nigeria</option>
                                                <option value="161">Niue</option>
                                                <option value="162">Norfolk Island</option>
                                                <option value="163">Northern Mariana Islands</option>
                                                <option value="164">Norway</option>
                                                <option value="165">Oman</option>
                                                <option value="166">Pakistan</option>
                                                <option value="167">Palau</option>
                                                <option value="168">Palestinian Territory Occupied</option>
                                                <option value="169">Panama</option>
                                                <option value="170">Papua new Guinea</option>
                                                <option value="171">Paraguay</option>
                                                <option value="172">Peru</option>
                                                <option value="173">Philippines</option>
                                                <option value="174">Pitcairn Island</option>
                                                <option value="175">Poland</option>
                                                <option value="176">Portugal</option>
                                                <option value="177">Puerto Rico</option>
                                                <option value="178">Qatar</option>
                                                <option value="179">Reunion</option>
                                                <option value="180">Romania</option>
                                                <option value="181">Russia</option>
                                                <option value="182">Rwanda</option>
                                                <option value="183">Saint Helena</option>
                                                <option value="184">Saint Kitts And Nevis</option>
                                                <option value="185">Saint Lucia</option>
                                                <option value="186">Saint Pierre and Miquelon</option>
                                                <option value="187">Saint Vincent And The Grenadines</option>
                                                <option value="188">Samoa</option>
                                                <option value="189">San Marino</option>
                                                <option value="190">Sao Tome and Principe</option>
                                                <option value="191">Saudi Arabia</option>
                                                <option value="192">Senegal</option>
                                                <option value="193">Serbia</option>
                                                <option value="194">Seychelles</option>
                                                <option value="195">Sierra Leone</option>
                                                <option value="196">Singapore</option>
                                                <option value="197">Slovakia</option>
                                                <option value="198">Slovenia</option>
                                                <option value="199">Smaller Territories of the UK</option>
                                                <option value="200">Solomon Islands</option>
                                                <option value="201">Somalia</option>
                                                <option value="202">South Africa</option>
                                                <option value="203">South Georgia</option>
                                                <option value="204">South Sudan</option>
                                                <option value="205">Spain</option>
                                                <option value="206">Sri Lanka</option>
                                                <option value="207">Sudan</option>
                                                <option value="208">Suriname</option>
                                                <option value="209">Svalbard And Jan Mayen Islands</option>
                                                <option value="210">Swaziland</option>
                                                <option value="211">Sweden</option>
                                                <option value="212">Switzerland</option>
                                                <option value="213">Syria</option>
                                                <option value="214">Taiwan</option>
                                                <option value="215">Tajikistan</option>
                                                <option value="216">Tanzania</option>
                                                <option value="217">Thailand</option>
                                                <option value="218">Togo</option>
                                                <option value="219">Tokelau</option>
                                                <option value="220">Tonga</option>
                                                <option value="221">Trinidad And Tobago</option>
                                                <option value="222">Tunisia</option>
                                                <option value="223">Turkey</option>
                                                <option value="224">Turkmenistan</option>
                                                <option value="225">Turks And Caicos Islands</option>
                                                <option value="226">Tuvalu</option>
                                                <option value="227">Uganda</option>
                                                <option value="228">Ukraine</option>
                                                <option value="229">United Arab Emirates</option>
                                                <option value="230">United Kingdom</option>
                                                <option value="231">United States</option>
                                                <option value="232">United States Minor Outlying Islands</option>
                                                <option value="233">Uruguay</option>
                                                <option value="234">Uzbekistan</option>
                                                <option value="235">Vanuatu</option>
                                                <option value="236">Vatican City State (Holy See)</option>
                                                <option value="237">Venezuela</option>
                                                <option value="238">Vietnam</option>
                                                <option value="239">Virgin Islands (British)</option>
                                                <option value="240">Virgin Islands (US)</option>
                                                <option value="241">Wallis And Futuna Islands</option>
                                                <option value="242">Western Sahara</option>
                                                <option value="243">Yemen</option>
                                                <option value="244">Yugoslavia</option>
                                                <option value="245">Zambia</option>
                                                <option value="246">Zimbabwe</option>
                                             </select>
                                             <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected">
                                                <div class="filter-option">
                                                   <div class="filter-option-inner">
                                                      <div class="filter-option-inner-inner">Nothing selected</div>
                                                   </div>
                                                </div>
                                             </button>
                                             <div class="dropdown-menu ">
                                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-3" aria-autocomplete="list"></div>
                                                <div class="inner show" role="listbox" id="bs-select-3" tabindex="-1">
                                                   <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group col-lg-6">
                                          <label>Postal Code</label>
                                          <input class="form-control postal_code" type="text" data-sender="postal_code" name="sender[postal_code]" value="123">
                                       </div>
                                       <div class="form-group col-lg-6">
                                          <label>State / Region&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                          <div class="dropdown bootstrap-select form-control state_id">
                                             <select class="form-control state_id" data-sender="administrative_area_level_1" title="Please select country first" name="sender[state]" data-live-search="true" required="" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option data-hidden="true"></option>
                                             </select>
                                             <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" title="Please select country first">
                                                <div class="filter-option">
                                                   <div class="filter-option-inner">
                                                      <div class="filter-option-inner-inner">Please select country first</div>
                                                   </div>
                                                </div>
                                             </button>
                                             <div class="dropdown-menu ">
                                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-4" aria-autocomplete="list"></div>
                                                <div class="inner show" role="listbox" id="bs-select-4" tabindex="-1">
                                                   <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group col-lg-6">
                                          <label>City&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                          <div class="dropdown bootstrap-select form-control city_id">
                                             <select class="form-control city_id" data-sender="locality" name="sender[city]" title="Please select state first" data-live-search="true" required="" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option data-hidden="true"></option>
                                             </select>
                                             <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Please select state first">
                                                <div class="filter-option">
                                                   <div class="filter-option-inner">
                                                      <div class="filter-option-inner-inner">Please select state first</div>
                                                   </div>
                                                </div>
                                             </button>
                                             <div class="dropdown-menu ">
                                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-5" aria-autocomplete="list"></div>
                                                <div class="inner show" role="listbox" id="bs-select-5" tabindex="-1">
                                                   <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group col-lg-6">
                                          <label>Area</label>
                                          <div class="dropdown bootstrap-select form-control area_id">
                                             <select class="form-control area_id" data-sender="sublocality" name="sender[county]" title="Please select city first" data-live-search="true" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option data-hidden="true"></option>
                                             </select>
                                             <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-6" aria-haspopup="listbox" aria-expanded="false" title="Please select city first">
                                                <div class="filter-option">
                                                   <div class="filter-option-inner">
                                                      <div class="filter-option-inner-inner">Please select city first</div>
                                                   </div>
                                                </div>
                                             </button>
                                             <div class="dropdown-menu ">
                                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-6" aria-autocomplete="list"></div>
                                                <div class="inner show" role="listbox" id="bs-select-6" tabindex="-1">
                                                   <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group col-lg-6">
                                          <label>Street Address</label>
                                          <input type="text" class="form-control street_addr" name="sender[street_address]" value="Damson Lane, Solihull, UK" required="">
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                       <div class="col-lg-9 col-xl-6">
                                          <div class="kt-checkbox-single">
                                             <label class="kt-checkbox">
                                             <input type="checkbox" name="connect" class="connect" value="sender"> Connect client: create an account for the client
                                             <span></span>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row align-items-center kt-hidden" id="connect_sender">
                                       <div class="col-md-4">
                                          <div class="form-group kt-form__group--inline">
                                             <div class="kt-form__label">
                                                <label class="col-form-label">Email:&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             </div>
                                             <div class="kt-form__control">
                                                <input type="text" class="form-control email" name="sender[email]" required="">
                                             </div>
                                          </div>
                                          <div class="d-md-none kt-margin-b-10"></div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group kt-form__group--inline">
                                             <div class="kt-form__label">
                                                <label class="col-form-label">Username:&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             </div>
                                             <div class="kt-form__control">
                                                <input type="text" class="form-control username" name="sender[username]" required="">
                                             </div>
                                          </div>
                                          <div class="d-md-none kt-margin-b-10"></div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group kt-form__group--inline">
                                             <div class="kt-form__label">
                                                <label class="col-form-label">Password:&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             </div>
                                             <div class="kt-form__control">
                                                <input type="password" class="form-control password" name="sender[password]" required="">
                                             </div>
                                          </div>
                                          <div class="d-md-none kt-margin-b-10"></div>
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
                        <div class="row kt-hidden" id="addnewsenderaddress">
                           <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                              <div class="kt-portlet__head">
                                 <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon">
                                    <i class="flaticon2-user"></i>
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                       Add a new client address <small>Fill data and save it brefore you can continue</small>
                                    </h3>
                                 </div>
                              </div>
                              <div class="kt-portlet__body">
                                 <div class="location-senderaddress">
                                    <div class="row">
                                       <div class="form-group col-lg-5">
                                          <label>Address&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                          <input type="text" class="form-control address street_addr pac-target-input" name="senderaddress[street_address]" rel="senderaddress" required="" placeholder="Enter a location" autocomplete="off">
                                          <input type="hidden" class="form-control lat" data-senderaddress="lat" name="senderaddress[lat]">
                                          <input type="hidden" class="form-control lng" data-senderaddress="lng" name="senderaddress[lng]">
                                          <input type="hidden" class="form-control url" data-senderaddress="url" name="senderaddress[url]">
                                       </div>
                                       <div class="form-group col-lg-4">
                                          <label>Country&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                          <div class="dropdown bootstrap-select form-control country_id">
                                             <select class="form-control country_id" data-senderaddress="country" data-live-search="true" name="senderaddress[country]" required="" tabindex="-98">
                                                <option data-hidden="true"></option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua And Barbuda</option>
                                                <option value="10">Argentina</option>
                                                <option value="11">Armenia</option>
                                                <option value="12">Aruba</option>
                                                <option value="13">Australia</option>
                                                <option value="14">Austria</option>
                                                <option value="15">Azerbaijan</option>
                                                <option value="16">Bahamas The</option>
                                                <option value="17">Bahrain</option>
                                                <option value="18">Bangladesh</option>
                                                <option value="19">Barbados</option>
                                                <option value="20">Belarus</option>
                                                <option value="21">Belgium</option>
                                                <option value="22">Belize</option>
                                                <option value="23">Benin</option>
                                                <option value="24">Bermuda</option>
                                                <option value="25">Bhutan</option>
                                                <option value="26">Bolivia</option>
                                                <option value="27">Bosnia and Herzegovina</option>
                                                <option value="28">Botswana</option>
                                                <option value="29">Bouvet Island</option>
                                                <option value="30">Brazil</option>
                                                <option value="31">British Indian Ocean Territory</option>
                                                <option value="32">Brunei</option>
                                                <option value="33">Bulgaria</option>
                                                <option value="34">Burkina Faso</option>
                                                <option value="35">Burundi</option>
                                                <option value="36">Cambodia</option>
                                                <option value="37">Cameroon</option>
                                                <option value="38">Canada</option>
                                                <option value="39">Cape Verde</option>
                                                <option value="40">Cayman Islands</option>
                                                <option value="41">Central African Republic</option>
                                                <option value="42">Chad</option>
                                                <option value="43">Chile</option>
                                                <option value="44">China</option>
                                                <option value="45">Christmas Island</option>
                                                <option value="46">Cocos (Keeling) Islands</option>
                                                <option value="47">Colombia</option>
                                                <option value="48">Comoros</option>
                                                <option value="49">Republic Of The Congo</option>
                                                <option value="50">Democratic Republic Of The Congo</option>
                                                <option value="51">Cook Islands</option>
                                                <option value="52">Costa Rica</option>
                                                <option value="53">Cote D'Ivoire (Ivory Coast)</option>
                                                <option value="54">Croatia (Hrvatska)</option>
                                                <option value="55">Cuba</option>
                                                <option value="56">Cyprus</option>
                                                <option value="57">Czech Republic</option>
                                                <option value="58">Denmark</option>
                                                <option value="59">Djibouti</option>
                                                <option value="60">Dominica</option>
                                                <option value="61">Dominican Republic</option>
                                                <option value="62">East Timor</option>
                                                <option value="63">Ecuador</option>
                                                <option value="64">Egypt</option>
                                                <option value="65">El Salvador</option>
                                                <option value="66">Equatorial Guinea</option>
                                                <option value="67">Eritrea</option>
                                                <option value="68">Estonia</option>
                                                <option value="69">Ethiopia</option>
                                                <option value="70">External Territories of Australia</option>
                                                <option value="71">Falkland Islands</option>
                                                <option value="72">Faroe Islands</option>
                                                <option value="73">Fiji Islands</option>
                                                <option value="74">Finland</option>
                                                <option value="75">France</option>
                                                <option value="76">French Guiana</option>
                                                <option value="77">French Polynesia</option>
                                                <option value="78">French Southern Territories</option>
                                                <option value="79">Gabon</option>
                                                <option value="80">Gambia The</option>
                                                <option value="81">Georgia</option>
                                                <option value="82">Germany</option>
                                                <option value="83">Ghana</option>
                                                <option value="84">Gibraltar</option>
                                                <option value="85">Greece</option>
                                                <option value="86">Greenland</option>
                                                <option value="87">Grenada</option>
                                                <option value="88">Guadeloupe</option>
                                                <option value="89">Guam</option>
                                                <option value="90">Guatemala</option>
                                                <option value="91">Guernsey and Alderney</option>
                                                <option value="92">Guinea</option>
                                                <option value="93">Guinea-Bissau</option>
                                                <option value="94">Guyana</option>
                                                <option value="95">Haiti</option>
                                                <option value="96">Heard and McDonald Islands</option>
                                                <option value="97">Honduras</option>
                                                <option value="98">Hong Kong S.A.R.</option>
                                                <option value="99">Hungary</option>
                                                <option value="100">Iceland</option>
                                                <option value="101">India</option>
                                                <option value="102">Indonesia</option>
                                                <option value="103">Iran</option>
                                                <option value="104">Iraq</option>
                                                <option value="105">Ireland</option>
                                                <option value="106">Israel</option>
                                                <option value="107">Italy</option>
                                                <option value="108">Jamaica</option>
                                                <option value="109">Japan</option>
                                                <option value="110">Jersey</option>
                                                <option value="111">Jordan</option>
                                                <option value="112">Kazakhstan</option>
                                                <option value="113">Kenya</option>
                                                <option value="114">Kiribati</option>
                                                <option value="115">Korea North</option>
                                                <option value="116">Korea South</option>
                                                <option value="117">Kuwait</option>
                                                <option value="118">Kyrgyzstan</option>
                                                <option value="119">Laos</option>
                                                <option value="120">Latvia</option>
                                                <option value="121">Lebanon</option>
                                                <option value="122">Lesotho</option>
                                                <option value="123">Liberia</option>
                                                <option value="124">Libya</option>
                                                <option value="125">Liechtenstein</option>
                                                <option value="126">Lithuania</option>
                                                <option value="127">Luxembourg</option>
                                                <option value="128">Macau S.A.R.</option>
                                                <option value="129">Macedonia</option>
                                                <option value="130">Madagascar</option>
                                                <option value="131">Malawi</option>
                                                <option value="132">Malaysia</option>
                                                <option value="133">Maldives</option>
                                                <option value="134">Mali</option>
                                                <option value="135">Malta</option>
                                                <option value="136">Man (Isle of)</option>
                                                <option value="137">Marshall Islands</option>
                                                <option value="138">Martinique</option>
                                                <option value="139">Mauritania</option>
                                                <option value="140">Mauritius</option>
                                                <option value="141">Mayotte</option>
                                                <option value="142">Mexico</option>
                                                <option value="143">Micronesia</option>
                                                <option value="144">Moldova</option>
                                                <option value="145">Monaco</option>
                                                <option value="146">Mongolia</option>
                                                <option value="147">Montserrat</option>
                                                <option value="148">Morocco</option>
                                                <option value="149">Mozambique</option>
                                                <option value="150">Myanmar</option>
                                                <option value="151">Namibia</option>
                                                <option value="152">Nauru</option>
                                                <option value="153">Nepal</option>
                                                <option value="154">Netherlands Antilles</option>
                                                <option value="155">Netherlands The</option>
                                                <option value="156">New Caledonia</option>
                                                <option value="157">New Zealand</option>
                                                <option value="158">Nicaragua</option>
                                                <option value="159">Niger</option>
                                                <option value="160">Nigeria</option>
                                                <option value="161">Niue</option>
                                                <option value="162">Norfolk Island</option>
                                                <option value="163">Northern Mariana Islands</option>
                                                <option value="164">Norway</option>
                                                <option value="165">Oman</option>
                                                <option value="166">Pakistan</option>
                                                <option value="167">Palau</option>
                                                <option value="168">Palestinian Territory Occupied</option>
                                                <option value="169">Panama</option>
                                                <option value="170">Papua new Guinea</option>
                                                <option value="171">Paraguay</option>
                                                <option value="172">Peru</option>
                                                <option value="173">Philippines</option>
                                                <option value="174">Pitcairn Island</option>
                                                <option value="175">Poland</option>
                                                <option value="176">Portugal</option>
                                                <option value="177">Puerto Rico</option>
                                                <option value="178">Qatar</option>
                                                <option value="179">Reunion</option>
                                                <option value="180">Romania</option>
                                                <option value="181">Russia</option>
                                                <option value="182">Rwanda</option>
                                                <option value="183">Saint Helena</option>
                                                <option value="184">Saint Kitts And Nevis</option>
                                                <option value="185">Saint Lucia</option>
                                                <option value="186">Saint Pierre and Miquelon</option>
                                                <option value="187">Saint Vincent And The Grenadines</option>
                                                <option value="188">Samoa</option>
                                                <option value="189">San Marino</option>
                                                <option value="190">Sao Tome and Principe</option>
                                                <option value="191">Saudi Arabia</option>
                                                <option value="192">Senegal</option>
                                                <option value="193">Serbia</option>
                                                <option value="194">Seychelles</option>
                                                <option value="195">Sierra Leone</option>
                                                <option value="196">Singapore</option>
                                                <option value="197">Slovakia</option>
                                                <option value="198">Slovenia</option>
                                                <option value="199">Smaller Territories of the UK</option>
                                                <option value="200">Solomon Islands</option>
                                                <option value="201">Somalia</option>
                                                <option value="202">South Africa</option>
                                                <option value="203">South Georgia</option>
                                                <option value="204">South Sudan</option>
                                                <option value="205">Spain</option>
                                                <option value="206">Sri Lanka</option>
                                                <option value="207">Sudan</option>
                                                <option value="208">Suriname</option>
                                                <option value="209">Svalbard And Jan Mayen Islands</option>
                                                <option value="210">Swaziland</option>
                                                <option value="211">Sweden</option>
                                                <option value="212">Switzerland</option>
                                                <option value="213">Syria</option>
                                                <option value="214">Taiwan</option>
                                                <option value="215">Tajikistan</option>
                                                <option value="216">Tanzania</option>
                                                <option value="217">Thailand</option>
                                                <option value="218">Togo</option>
                                                <option value="219">Tokelau</option>
                                                <option value="220">Tonga</option>
                                                <option value="221">Trinidad And Tobago</option>
                                                <option value="222">Tunisia</option>
                                                <option value="223">Turkey</option>
                                                <option value="224">Turkmenistan</option>
                                                <option value="225">Turks And Caicos Islands</option>
                                                <option value="226">Tuvalu</option>
                                                <option value="227">Uganda</option>
                                                <option value="228">Ukraine</option>
                                                <option value="229">United Arab Emirates</option>
                                                <option value="230">United Kingdom</option>
                                                <option value="231">United States</option>
                                                <option value="232">United States Minor Outlying Islands</option>
                                                <option value="233">Uruguay</option>
                                                <option value="234">Uzbekistan</option>
                                                <option value="235">Vanuatu</option>
                                                <option value="236">Vatican City State (Holy See)</option>
                                                <option value="237">Venezuela</option>
                                                <option value="238">Vietnam</option>
                                                <option value="239">Virgin Islands (British)</option>
                                                <option value="240">Virgin Islands (US)</option>
                                                <option value="241">Wallis And Futuna Islands</option>
                                                <option value="242">Western Sahara</option>
                                                <option value="243">Yemen</option>
                                                <option value="244">Yugoslavia</option>
                                                <option value="245">Zambia</option>
                                                <option value="246">Zimbabwe</option>
                                             </select>
                                             <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-7" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected">
                                                <div class="filter-option">
                                                   <div class="filter-option-inner">
                                                      <div class="filter-option-inner-inner">Nothing selected</div>
                                                   </div>
                                                </div>
                                             </button>
                                             <div class="dropdown-menu ">
                                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-7" aria-autocomplete="list"></div>
                                                <div class="inner show" role="listbox" id="bs-select-7" tabindex="-1">
                                                   <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group col-lg-3">
                                          <label>Postal Code</label>
                                          <input class="form-control postal_code" type="text" data-sendsenderaddresser="postal_code" name="senderaddress[postal_code]">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-lg-4">
                                          <label>State / Region&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                          <div class="dropdown bootstrap-select form-control state_id">
                                             <select class="form-control state_id" data-senderaddress="administrative_area_level_1" title="Please select country first" name="senderaddress[state]" data-live-search="true" required="" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option data-hidden="true"></option>
                                             </select>
                                             <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-8" aria-haspopup="listbox" aria-expanded="false" title="Please select country first">
                                                <div class="filter-option">
                                                   <div class="filter-option-inner">
                                                      <div class="filter-option-inner-inner">Please select country first</div>
                                                   </div>
                                                </div>
                                             </button>
                                             <div class="dropdown-menu ">
                                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-8" aria-autocomplete="list"></div>
                                                <div class="inner show" role="listbox" id="bs-select-8" tabindex="-1">
                                                   <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group col-lg-4">
                                          <label>City&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                          <div class="dropdown bootstrap-select form-control city_id">
                                             <select class="form-control city_id" data-senderaddress="locality" name="senderaddress[city]" title="Please select state first" data-live-search="true" required="" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option data-hidden="true"></option>
                                             </select>
                                             <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-9" aria-haspopup="listbox" aria-expanded="false" title="Please select state first">
                                                <div class="filter-option">
                                                   <div class="filter-option-inner">
                                                      <div class="filter-option-inner-inner">Please select state first</div>
                                                   </div>
                                                </div>
                                             </button>
                                             <div class="dropdown-menu ">
                                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-9" aria-autocomplete="list"></div>
                                                <div class="inner show" role="listbox" id="bs-select-9" tabindex="-1">
                                                   <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group col-lg-4">
                                          <label>Area</label>
                                          <div class="dropdown bootstrap-select form-control area_id">
                                             <select class="form-control area_id" data-senderaddress="sublocality" name="senderaddress[county]" title="Please select city first" data-live-search="true" tabindex="-98">
                                                <option class="bs-title-option" value=""></option>
                                                <option data-hidden="true"></option>
                                             </select>
                                             <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-10" aria-haspopup="listbox" aria-expanded="false" title="Please select city first">
                                                <div class="filter-option">
                                                   <div class="filter-option-inner">
                                                      <div class="filter-option-inner-inner">Please select city first</div>
                                                   </div>
                                                </div>
                                             </button>
                                             <div class="dropdown-menu ">
                                                <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-10" aria-autocomplete="list"></div>
                                                <div class="inner show" role="listbox" id="bs-select-10" tabindex="-1">
                                                   <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-lg-12">
                                          <label>Google Map</label>
                                          <div class="col-sm-12 map_canvas map_senderaddress" style="position: relative; overflow: hidden;">
                                             <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                <div style="overflow: hidden;"></div>
                                                <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                   <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                                      <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%;">
                                                         <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
                                                         </div>
                                                         <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                         <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                         <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: -1;"></div>
                                                         </div>
                                                         <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
                                                      </div>
                                                      <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                         <p class="gm-style-pbt"></p>
                                                      </div>
                                                      <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                         <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                                   <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                                </div>
                                             </div>
                                          </div>
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
                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                        <div class="form-group row">
                           <label class="col-xl-3 col-lg-3 col-form-label">Payment Type&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                           <div class="col-lg-9 col-xl-6">
                              <div class="dropdown bootstrap-select form-control">
                                 <select class="form-control" name="payment_type" id="payment_type" required="" tabindex="-98">
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
                                 <input type="radio" name="show_receiver_info" class="show_receiver_info" value="1" checked="" required=""> Yes
                                 <span></span>
                                 </label>
                                 <label class="kt-radio">
                                 <input type="radio" name="show_receiver_info" class="show_receiver_info" value="2" required=""> No
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
                                    <label>Receiver/Client&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                    <span class="dev21 col-12 kt-hidden ">
                                    <input name="receiver_id" id="receiver_id" value="1" type="hidden">
                                    <input value="System Administration" type="text" class="form-control">
                                    </span>
                                    <div class="dev31 col-12 p-0">
                                       <div class="dropdown bootstrap-select form-control clients select2-hidden-accessible">
                                          <select class="form-control clients select2-hidden-accessible" name="receiver_id" id="receiver_id" required="" data-select2-id="receiver_id" tabindex="-98" aria-hidden="true">
                                             <option data-hidden="true" data-select2-id="5"></option>
                                             <option value="new" data-icon="flaticon2-add" data-select2-id="6">Add New</option>
                                          </select>
                                          <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-12" aria-haspopup="listbox" aria-expanded="false" data-id="receiver_id" tabindex="-1" title="Nothing selected">
                                             <div class="filter-option">
                                                <div class="filter-option-inner">
                                                   <div class="filter-option-inner-inner">Nothing selected</div>
                                                </div>
                                             </div>
                                          </button>
                                          <div class="dropdown-menu ">
                                             <div class="inner show" role="listbox" id="bs-select-12" tabindex="-1">
                                                <ul class="dropdown-menu inner show" role="presentation"></ul>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="4" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-receiver_id-container"><span class="select2-selection__rendered" id="select2-receiver_id-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Search for client</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                       <span class="text-muted">Choose or add a new client that will receive the package</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group ">
                                    <label>Receiver Address/Client Address&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                    <div class="dropdown bootstrap-select form-control receiver_address_id">
                                       <select class="form-control receiver_address_id" name="receiver_address_id" id="receiver_address_id" data-live-search="true" title="Address" required="" tabindex="-98">
                                          <option class="bs-title-option" value=""></option>
                                          <option data-hidden="true"></option>
                                          <option value="new" data-icon="flaticon2-add">Add New</option>
                                          <option class="rem1" selected="" disabled="">Choose address</option>
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
                           <div class="row kt-hidden" id="addnewreceiver">
                              <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                 <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                       <span class="kt-portlet__head-icon">
                                       <i class="flaticon2-user"></i>
                                       </span>
                                       <h3 class="kt-portlet__head-title">
                                          Add a new client <small>Fill data and save it brefore you can continue</small>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="kt-portlet__body">
                                    <div class="row">
                                       <div class="form-group col-lg-5">
                                          <label>Client Name&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                          <input type="text" class="form-control name" name="receiver[name]" required="">
                                       </div>
                                       <div class="form-group col-lg-4">
                                          <label>Mobile&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                          <input type="text" class="form-control mobile" name="receiver[mobile]" required="">
                                       </div>
                                       <div class="form-group col-lg-3">
                                          <label>Gender</label>
                                          <div class="kt-radio-inline">
                                             <label class="kt-radio">
                                             <input type="radio" name="receiver[gender]" class="gender" value="male" checked=""> Male
                                             <span></span>
                                             </label>
                                             <label class="kt-radio">
                                             <input type="radio" name="receiver[gender]" class="gender" value="female"> Female
                                             <span></span>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="location-receiver">
                                       <div class="row">
                                          <div class="form-group col-lg-6">
                                             <label>Country&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             <div class="dropdown bootstrap-select form-control country_id">
                                                <select class="form-control country_id" data-receiver="country" data-live-search="true" name="receiver[country]" required="" tabindex="-98">
                                                   <option data-hidden="true"></option>
                                                   <option value="1">Afghanistan</option>
                                                   <option value="2">Albania</option>
                                                   <option value="3">Algeria</option>
                                                   <option value="4">American Samoa</option>
                                                   <option value="5">Andorra</option>
                                                   <option value="6">Angola</option>
                                                   <option value="7">Anguilla</option>
                                                   <option value="8">Antarctica</option>
                                                   <option value="9">Antigua And Barbuda</option>
                                                   <option value="10">Argentina</option>
                                                   <option value="11">Armenia</option>
                                                   <option value="12">Aruba</option>
                                                   <option value="13">Australia</option>
                                                   <option value="14">Austria</option>
                                                   <option value="15">Azerbaijan</option>
                                                   <option value="16">Bahamas The</option>
                                                   <option value="17">Bahrain</option>
                                                   <option value="18">Bangladesh</option>
                                                   <option value="19">Barbados</option>
                                                   <option value="20">Belarus</option>
                                                   <option value="21">Belgium</option>
                                                   <option value="22">Belize</option>
                                                   <option value="23">Benin</option>
                                                   <option value="24">Bermuda</option>
                                                   <option value="25">Bhutan</option>
                                                   <option value="26">Bolivia</option>
                                                   <option value="27">Bosnia and Herzegovina</option>
                                                   <option value="28">Botswana</option>
                                                   <option value="29">Bouvet Island</option>
                                                   <option value="30">Brazil</option>
                                                   <option value="31">British Indian Ocean Territory</option>
                                                   <option value="32">Brunei</option>
                                                   <option value="33">Bulgaria</option>
                                                   <option value="34">Burkina Faso</option>
                                                   <option value="35">Burundi</option>
                                                   <option value="36">Cambodia</option>
                                                   <option value="37">Cameroon</option>
                                                   <option value="38">Canada</option>
                                                   <option value="39">Cape Verde</option>
                                                   <option value="40">Cayman Islands</option>
                                                   <option value="41">Central African Republic</option>
                                                   <option value="42">Chad</option>
                                                   <option value="43">Chile</option>
                                                   <option value="44">China</option>
                                                   <option value="45">Christmas Island</option>
                                                   <option value="46">Cocos (Keeling) Islands</option>
                                                   <option value="47">Colombia</option>
                                                   <option value="48">Comoros</option>
                                                   <option value="49">Republic Of The Congo</option>
                                                   <option value="50">Democratic Republic Of The Congo</option>
                                                   <option value="51">Cook Islands</option>
                                                   <option value="52">Costa Rica</option>
                                                   <option value="53">Cote D'Ivoire (Ivory Coast)</option>
                                                   <option value="54">Croatia (Hrvatska)</option>
                                                   <option value="55">Cuba</option>
                                                   <option value="56">Cyprus</option>
                                                   <option value="57">Czech Republic</option>
                                                   <option value="58">Denmark</option>
                                                   <option value="59">Djibouti</option>
                                                   <option value="60">Dominica</option>
                                                   <option value="61">Dominican Republic</option>
                                                   <option value="62">East Timor</option>
                                                   <option value="63">Ecuador</option>
                                                   <option value="64">Egypt</option>
                                                   <option value="65">El Salvador</option>
                                                   <option value="66">Equatorial Guinea</option>
                                                   <option value="67">Eritrea</option>
                                                   <option value="68">Estonia</option>
                                                   <option value="69">Ethiopia</option>
                                                   <option value="70">External Territories of Australia</option>
                                                   <option value="71">Falkland Islands</option>
                                                   <option value="72">Faroe Islands</option>
                                                   <option value="73">Fiji Islands</option>
                                                   <option value="74">Finland</option>
                                                   <option value="75">France</option>
                                                   <option value="76">French Guiana</option>
                                                   <option value="77">French Polynesia</option>
                                                   <option value="78">French Southern Territories</option>
                                                   <option value="79">Gabon</option>
                                                   <option value="80">Gambia The</option>
                                                   <option value="81">Georgia</option>
                                                   <option value="82">Germany</option>
                                                   <option value="83">Ghana</option>
                                                   <option value="84">Gibraltar</option>
                                                   <option value="85">Greece</option>
                                                   <option value="86">Greenland</option>
                                                   <option value="87">Grenada</option>
                                                   <option value="88">Guadeloupe</option>
                                                   <option value="89">Guam</option>
                                                   <option value="90">Guatemala</option>
                                                   <option value="91">Guernsey and Alderney</option>
                                                   <option value="92">Guinea</option>
                                                   <option value="93">Guinea-Bissau</option>
                                                   <option value="94">Guyana</option>
                                                   <option value="95">Haiti</option>
                                                   <option value="96">Heard and McDonald Islands</option>
                                                   <option value="97">Honduras</option>
                                                   <option value="98">Hong Kong S.A.R.</option>
                                                   <option value="99">Hungary</option>
                                                   <option value="100">Iceland</option>
                                                   <option value="101">India</option>
                                                   <option value="102">Indonesia</option>
                                                   <option value="103">Iran</option>
                                                   <option value="104">Iraq</option>
                                                   <option value="105">Ireland</option>
                                                   <option value="106">Israel</option>
                                                   <option value="107">Italy</option>
                                                   <option value="108">Jamaica</option>
                                                   <option value="109">Japan</option>
                                                   <option value="110">Jersey</option>
                                                   <option value="111">Jordan</option>
                                                   <option value="112">Kazakhstan</option>
                                                   <option value="113">Kenya</option>
                                                   <option value="114">Kiribati</option>
                                                   <option value="115">Korea North</option>
                                                   <option value="116">Korea South</option>
                                                   <option value="117">Kuwait</option>
                                                   <option value="118">Kyrgyzstan</option>
                                                   <option value="119">Laos</option>
                                                   <option value="120">Latvia</option>
                                                   <option value="121">Lebanon</option>
                                                   <option value="122">Lesotho</option>
                                                   <option value="123">Liberia</option>
                                                   <option value="124">Libya</option>
                                                   <option value="125">Liechtenstein</option>
                                                   <option value="126">Lithuania</option>
                                                   <option value="127">Luxembourg</option>
                                                   <option value="128">Macau S.A.R.</option>
                                                   <option value="129">Macedonia</option>
                                                   <option value="130">Madagascar</option>
                                                   <option value="131">Malawi</option>
                                                   <option value="132">Malaysia</option>
                                                   <option value="133">Maldives</option>
                                                   <option value="134">Mali</option>
                                                   <option value="135">Malta</option>
                                                   <option value="136">Man (Isle of)</option>
                                                   <option value="137">Marshall Islands</option>
                                                   <option value="138">Martinique</option>
                                                   <option value="139">Mauritania</option>
                                                   <option value="140">Mauritius</option>
                                                   <option value="141">Mayotte</option>
                                                   <option value="142">Mexico</option>
                                                   <option value="143">Micronesia</option>
                                                   <option value="144">Moldova</option>
                                                   <option value="145">Monaco</option>
                                                   <option value="146">Mongolia</option>
                                                   <option value="147">Montserrat</option>
                                                   <option value="148">Morocco</option>
                                                   <option value="149">Mozambique</option>
                                                   <option value="150">Myanmar</option>
                                                   <option value="151">Namibia</option>
                                                   <option value="152">Nauru</option>
                                                   <option value="153">Nepal</option>
                                                   <option value="154">Netherlands Antilles</option>
                                                   <option value="155">Netherlands The</option>
                                                   <option value="156">New Caledonia</option>
                                                   <option value="157">New Zealand</option>
                                                   <option value="158">Nicaragua</option>
                                                   <option value="159">Niger</option>
                                                   <option value="160">Nigeria</option>
                                                   <option value="161">Niue</option>
                                                   <option value="162">Norfolk Island</option>
                                                   <option value="163">Northern Mariana Islands</option>
                                                   <option value="164">Norway</option>
                                                   <option value="165">Oman</option>
                                                   <option value="166">Pakistan</option>
                                                   <option value="167">Palau</option>
                                                   <option value="168">Palestinian Territory Occupied</option>
                                                   <option value="169">Panama</option>
                                                   <option value="170">Papua new Guinea</option>
                                                   <option value="171">Paraguay</option>
                                                   <option value="172">Peru</option>
                                                   <option value="173">Philippines</option>
                                                   <option value="174">Pitcairn Island</option>
                                                   <option value="175">Poland</option>
                                                   <option value="176">Portugal</option>
                                                   <option value="177">Puerto Rico</option>
                                                   <option value="178">Qatar</option>
                                                   <option value="179">Reunion</option>
                                                   <option value="180">Romania</option>
                                                   <option value="181">Russia</option>
                                                   <option value="182">Rwanda</option>
                                                   <option value="183">Saint Helena</option>
                                                   <option value="184">Saint Kitts And Nevis</option>
                                                   <option value="185">Saint Lucia</option>
                                                   <option value="186">Saint Pierre and Miquelon</option>
                                                   <option value="187">Saint Vincent And The Grenadines</option>
                                                   <option value="188">Samoa</option>
                                                   <option value="189">San Marino</option>
                                                   <option value="190">Sao Tome and Principe</option>
                                                   <option value="191">Saudi Arabia</option>
                                                   <option value="192">Senegal</option>
                                                   <option value="193">Serbia</option>
                                                   <option value="194">Seychelles</option>
                                                   <option value="195">Sierra Leone</option>
                                                   <option value="196">Singapore</option>
                                                   <option value="197">Slovakia</option>
                                                   <option value="198">Slovenia</option>
                                                   <option value="199">Smaller Territories of the UK</option>
                                                   <option value="200">Solomon Islands</option>
                                                   <option value="201">Somalia</option>
                                                   <option value="202">South Africa</option>
                                                   <option value="203">South Georgia</option>
                                                   <option value="204">South Sudan</option>
                                                   <option value="205">Spain</option>
                                                   <option value="206">Sri Lanka</option>
                                                   <option value="207">Sudan</option>
                                                   <option value="208">Suriname</option>
                                                   <option value="209">Svalbard And Jan Mayen Islands</option>
                                                   <option value="210">Swaziland</option>
                                                   <option value="211">Sweden</option>
                                                   <option value="212">Switzerland</option>
                                                   <option value="213">Syria</option>
                                                   <option value="214">Taiwan</option>
                                                   <option value="215">Tajikistan</option>
                                                   <option value="216">Tanzania</option>
                                                   <option value="217">Thailand</option>
                                                   <option value="218">Togo</option>
                                                   <option value="219">Tokelau</option>
                                                   <option value="220">Tonga</option>
                                                   <option value="221">Trinidad And Tobago</option>
                                                   <option value="222">Tunisia</option>
                                                   <option value="223">Turkey</option>
                                                   <option value="224">Turkmenistan</option>
                                                   <option value="225">Turks And Caicos Islands</option>
                                                   <option value="226">Tuvalu</option>
                                                   <option value="227">Uganda</option>
                                                   <option value="228">Ukraine</option>
                                                   <option value="229">United Arab Emirates</option>
                                                   <option value="230">United Kingdom</option>
                                                   <option value="231">United States</option>
                                                   <option value="232">United States Minor Outlying Islands</option>
                                                   <option value="233">Uruguay</option>
                                                   <option value="234">Uzbekistan</option>
                                                   <option value="235">Vanuatu</option>
                                                   <option value="236">Vatican City State (Holy See)</option>
                                                   <option value="237">Venezuela</option>
                                                   <option value="238">Vietnam</option>
                                                   <option value="239">Virgin Islands (British)</option>
                                                   <option value="240">Virgin Islands (US)</option>
                                                   <option value="241">Wallis And Futuna Islands</option>
                                                   <option value="242">Western Sahara</option>
                                                   <option value="243">Yemen</option>
                                                   <option value="244">Yugoslavia</option>
                                                   <option value="245">Zambia</option>
                                                   <option value="246">Zimbabwe</option>
                                                </select>
                                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-14" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected">
                                                   <div class="filter-option">
                                                      <div class="filter-option-inner">
                                                         <div class="filter-option-inner-inner">Nothing selected</div>
                                                      </div>
                                                   </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                   <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-14" aria-autocomplete="list"></div>
                                                   <div class="inner show" role="listbox" id="bs-select-14" tabindex="-1">
                                                      <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group col-lg-6">
                                             <label>Postal Code</label>
                                             <input class="form-control postal_code" type="text" data-receiver="postal_code" name="receiver[postal_code]" value="123">
                                          </div>
                                          <div class="form-group col-lg-4">
                                             <label>State / Region&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             <div class="dropdown bootstrap-select form-control state_id">
                                                <select class="form-control state_id" data-receiver="administrative_area_level_1" title="Please select country first" name="receiver[state]" data-live-search="true" required="" tabindex="-98">
                                                   <option class="bs-title-option" value=""></option>
                                                   <option data-hidden="true"></option>
                                                </select>
                                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-15" aria-haspopup="listbox" aria-expanded="false" title="Please select country first">
                                                   <div class="filter-option">
                                                      <div class="filter-option-inner">
                                                         <div class="filter-option-inner-inner">Please select country first</div>
                                                      </div>
                                                   </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                   <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-15" aria-autocomplete="list"></div>
                                                   <div class="inner show" role="listbox" id="bs-select-15" tabindex="-1">
                                                      <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group col-lg-4">
                                             <label>City&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             <div class="dropdown bootstrap-select form-control city_id">
                                                <select class="form-control city_id" data-receiver="locality" name="receiver[city]" title="Please select state first" data-live-search="true" required="" tabindex="-98">
                                                   <option class="bs-title-option" value=""></option>
                                                   <option data-hidden="true"></option>
                                                </select>
                                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-16" aria-haspopup="listbox" aria-expanded="false" title="Please select state first">
                                                   <div class="filter-option">
                                                      <div class="filter-option-inner">
                                                         <div class="filter-option-inner-inner">Please select state first</div>
                                                      </div>
                                                   </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                   <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-16" aria-autocomplete="list"></div>
                                                   <div class="inner show" role="listbox" id="bs-select-16" tabindex="-1">
                                                      <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group col-lg-4">
                                             <label>Area&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             <div class="dropdown bootstrap-select form-control area_id">
                                                <select class="form-control area_id" data-receiver="sublocality" name="receiver[county]" title="Please select city first" data-live-search="true" tabindex="-98">
                                                   <option class="bs-title-option" value=""></option>
                                                   <option data-hidden="true"></option>
                                                </select>
                                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-17" aria-haspopup="listbox" aria-expanded="false" title="Please select city first">
                                                   <div class="filter-option">
                                                      <div class="filter-option-inner">
                                                         <div class="filter-option-inner-inner">Please select city first</div>
                                                      </div>
                                                   </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                   <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-17" aria-autocomplete="list"></div>
                                                   <div class="inner show" role="listbox" id="bs-select-17" tabindex="-1">
                                                      <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                          <div class="col-lg-9 col-xl-6">
                                             <div class="kt-checkbox-single">
                                                <label class="kt-checkbox">
                                                <input type="checkbox" name="connect" class="connect" value="receiver"> Connect client: create an account for the client
                                                <span></span>
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row align-items-center kt-hidden" id="connect_receiver">
                                          <div class="col-md-4">
                                             <div class="form-group kt-form__group--inline">
                                                <div class="kt-form__label">
                                                   <label class="col-form-label">Email:&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                </div>
                                                <div class="kt-form__control">
                                                   <input type="text" class="form-control email" name="receiver[email]" required="">
                                                </div>
                                             </div>
                                             <div class="d-md-none kt-margin-b-10"></div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="form-group kt-form__group--inline">
                                                <div class="kt-form__label">
                                                   <label class="col-form-label">Username:&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                </div>
                                                <div class="kt-form__control">
                                                   <input type="text" class="form-control username" name="receiver[username]" required="">
                                                </div>
                                             </div>
                                             <div class="d-md-none kt-margin-b-10"></div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="form-group kt-form__group--inline">
                                                <div class="kt-form__label">
                                                   <label class="col-form-label">Password:&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                                </div>
                                                <div class="kt-form__control">
                                                   <input type="password" class="form-control password" name="receiver[password]" required="">
                                                </div>
                                             </div>
                                             <div class="d-md-none kt-margin-b-10"></div>
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
                           <div class="row kt-hidden" id="addnewreceiveraddress">
                              <div class="kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0">
                                 <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                       <span class="kt-portlet__head-icon">
                                       <i class="flaticon2-user"></i>
                                       </span>
                                       <h3 class="kt-portlet__head-title">
                                          Add a new client address <small>Fill data and save it brefore you can continue</small>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="kt-portlet__body">
                                    <div class="location-receiveraddress">
                                       <div class="row">
                                          <div class="form-group col-lg-5">
                                             <label>Address&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             <input type="text" class="form-control address street_addr pac-target-input" name="receiveraddress[street_address]" rel="receiveraddress" required="" placeholder="Enter a location" autocomplete="off">
                                             <input type="hidden" class="form-control lat" data-receiveraddress="lat" name="receiveraddress[lat]">
                                             <input type="hidden" class="form-control lng" data-receiveraddress="lng" name="receiveraddress[lng]">
                                             <input type="hidden" class="form-control url" data-receiveraddress="url" name="receiveraddress[url]">
                                          </div>
                                          <div class="form-group col-lg-4">
                                             <label>Country&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             <div class="dropdown bootstrap-select form-control country_id">
                                                <select class="form-control country_id" data-receiveraddress="country" data-live-search="true" name="receiveraddress[country]" required="" tabindex="-98">
                                                   <option data-hidden="true"></option>
                                                   <option value="1">Afghanistan</option>
                                                   <option value="2">Albania</option>
                                                   <option value="3">Algeria</option>
                                                   <option value="4">American Samoa</option>
                                                   <option value="5">Andorra</option>
                                                   <option value="6">Angola</option>
                                                   <option value="7">Anguilla</option>
                                                   <option value="8">Antarctica</option>
                                                   <option value="9">Antigua And Barbuda</option>
                                                   <option value="10">Argentina</option>
                                                   <option value="11">Armenia</option>
                                                   <option value="12">Aruba</option>
                                                   <option value="13">Australia</option>
                                                   <option value="14">Austria</option>
                                                   <option value="15">Azerbaijan</option>
                                                   <option value="16">Bahamas The</option>
                                                   <option value="17">Bahrain</option>
                                                   <option value="18">Bangladesh</option>
                                                   <option value="19">Barbados</option>
                                                   <option value="20">Belarus</option>
                                                   <option value="21">Belgium</option>
                                                   <option value="22">Belize</option>
                                                   <option value="23">Benin</option>
                                                   <option value="24">Bermuda</option>
                                                   <option value="25">Bhutan</option>
                                                   <option value="26">Bolivia</option>
                                                   <option value="27">Bosnia and Herzegovina</option>
                                                   <option value="28">Botswana</option>
                                                   <option value="29">Bouvet Island</option>
                                                   <option value="30">Brazil</option>
                                                   <option value="54">Croatia (Hrvatska)</option>
                                                   <option value="55">Cuba</option>
                                                   <option value="56">Cyprus</option>
                                                   <option value="57">Czech Republic</option>
                                                   <option value="58">Denmark</option>
                                                   <option value="59">Djibouti</option>
                                                   <option value="60">Dominica</option>
                                                   <option value="61">Dominican Republic</option>
                                                   <option value="62">East Timor</option>
                                                   <option value="63">Ecuador</option>
                                                   <option value="64">Egypt</option>
                                                   <option value="65">El Salvador</option>
                                                   <option value="66">Equatorial Guinea</option>
                                                   <option value="67">Eritrea</option>
                                                   <option value="68">Estonia</option>
                                                   <option value="69">Ethiopia</option>
                                                   <option value="70">External Territories of Australia</option>
                                                   <option value="71">Falkland Islands</option>
                                                   <option value="72">Faroe Islands</option>
                                                   <option value="73">Fiji Islands</option>
                                                   <option value="74">Finland</option>
                                                   <option value="75">France</option>
                                                   <option value="76">French Guiana</option>
                                                   <option value="77">French Polynesia</option>
                                                   <option value="78">French Southern Territories</option>
                                                   <option value="79">Gabon</option>
                                                   <option value="80">Gambia The</option>
                                                   <option value="81">Georgia</option>
                                                   <option value="82">Germany</option>
                                                   <option value="83">Ghana</option>
                                                   <option value="84">Gibraltar</option>
                                                   <option value="85">Greece</option>
                                                   <option value="86">Greenland</option>
                                                   <option value="87">Grenada</option>
                                                   <option value="88">Guadeloupe</option>
                                                   <option value="89">Guam</option>
                                                   <option value="90">Guatemala</option>
                                                   <option value="91">Guernsey and Alderney</option>
                                                   <option value="92">Guinea</option>
                                                   <option value="93">Guinea-Bissau</option>
                                                   <option value="94">Guyana</option>
                                                   <option value="95">Haiti</option>
                                                   <option value="96">Heard and McDonald Islands</option>
                                                   <option value="97">Honduras</option>
                                                   <option value="98">Hong Kong S.A.R.</option>
                                                   <option value="99">Hungary</option>
                                                   <option value="100">Iceland</option>
                                                   <option value="101">India</option>
                                                   <option value="102">Indonesia</option>
                                                   <option value="103">Iran</option>
                                                   <option value="104">Iraq</option>
                                                   <option value="105">Ireland</option>
                                                   <option value="106">Israel</option>
                                                   <option value="107">Italy</option>
                                                   <option value="108">Jamaica</option>
                                                   <option value="109">Japan</option>
                                                   <option value="110">Jersey</option>
                                                   <option value="111">Jordan</option>
                                                   <option value="112">Kazakhstan</option>
                                                   <option value="113">Kenya</option>
                                                   <option value="114">Kiribati</option>
                                                   <option value="115">Korea North</option>
                                                   <option value="116">Korea South</option>
                                                   <option value="117">Kuwait</option>
                                                   <option value="118">Kyrgyzstan</option>
                                                   <option value="119">Laos</option>
                                                   <option value="120">Latvia</option>
                                                   <option value="121">Lebanon</option>
                                                   <option value="122">Lesotho</option>
                                                   <option value="123">Liberia</option>
                                                   <option value="124">Libya</option>
                                                   <option value="125">Liechtenstein</option>
                                                   <option value="126">Lithuania</option>
                                                   <option value="127">Luxembourg</option>
                                                   <option value="128">Macau S.A.R.</option>
                                                   <option value="129">Macedonia</option>
                                                   <option value="130">Madagascar</option>
                                                   <option value="131">Malawi</option>
                                                   <option value="132">Malaysia</option>
                                                   <option value="133">Maldives</option>
                                                   <option value="134">Mali</option>
                                                   <option value="135">Malta</option>
                                                   <option value="136">Man (Isle of)</option>
                                                   <option value="137">Marshall Islands</option>
                                                   <option value="138">Martinique</option>
                                                   <option value="139">Mauritania</option>
                                                   <option value="140">Mauritius</option>
                                                   <option value="141">Mayotte</option>
                                                   <option value="142">Mexico</option>
                                                   <option value="143">Micronesia</option>
                                                   <option value="144">Moldova</option>
                                                   <option value="145">Monaco</option>
                                                   <option value="146">Mongolia</option>
                                                   <option value="147">Montserrat</option>
                                                   <option value="148">Morocco</option>
                                                   <option value="149">Mozambique</option>
                                                   <option value="150">Myanmar</option>
                                                   <option value="151">Namibia</option>
                                                   <option value="152">Nauru</option>
                                                   <option value="153">Nepal</option>
                                                   <option value="154">Netherlands Antilles</option>
                                                   <option value="155">Netherlands The</option>
                                                   <option value="156">New Caledonia</option>
                                                   <option value="157">New Zealand</option>
                                                   <option value="158">Nicaragua</option>
                                                   <option value="159">Niger</option>
                                                   <option value="160">Nigeria</option>
                                                   <option value="161">Niue</option>
                                                   <option value="162">Norfolk Island</option>
                                                   <option value="163">Northern Mariana Islands</option>
                                                   <option value="164">Norway</option>
                                                   <option value="165">Oman</option>
                                                   <option value="166">Pakistan</option>
                                                   <option value="167">Palau</option>
                                                   <option value="168">Palestinian Territory Occupied</option>
                                                   <option value="169">Panama</option>
                                                   <option value="170">Papua new Guinea</option>
                                                   <option value="171">Paraguay</option>
                                                   <option value="172">Peru</option>
                                                   <option value="173">Philippines</option>
                                                   <option value="174">Pitcairn Island</option>
                                                   <option value="175">Poland</option>
                                                   <option value="176">Portugal</option>
                                                   <option value="177">Puerto Rico</option>
                                                   <option value="178">Qatar</option>
                                                   <option value="179">Reunion</option>
                                                   <option value="180">Romania</option>
                                                   <option value="181">Russia</option>
                                                   <option value="182">Rwanda</option>
                                                   <option value="183">Saint Helena</option>
                                                   <option value="184">Saint Kitts And Nevis</option>
                                                   <option value="185">Saint Lucia</option>
                                                   <option value="186">Saint Pierre and Miquelon</option>
                                                   <option value="187">Saint Vincent And The Grenadines</option>
                                                   <option value="188">Samoa</option>
                                                   <option value="189">San Marino</option>
                                                   <option value="190">Sao Tome and Principe</option>
                                                   <option value="191">Saudi Arabia</option>
                                                   <option value="192">Senegal</option>
                                                   <option value="193">Serbia</option>
                                                   <option value="194">Seychelles</option>
                                                   <option value="195">Sierra Leone</option>
                                                   <option value="196">Singapore</option>
                                                   <option value="197">Slovakia</option>
                                                   <option value="198">Slovenia</option>
                                                   <option value="199">Smaller Territories of the UK</option>
                                                   <option value="200">Solomon Islands</option>
                                                   <option value="201">Somalia</option>
                                                   <option value="202">South Africa</option>
                                                   <option value="203">South Georgia</option>
                                                   <option value="204">South Sudan</option>
                                                   <option value="205">Spain</option>
                                                   <option value="206">Sri Lanka</option>
                                                   <option value="207">Sudan</option>
                                                   <option value="208">Suriname</option>
                                                   <option value="209">Svalbard And Jan Mayen Islands</option>
                                                   <option value="210">Swaziland</option>
                                                   <option value="211">Sweden</option>
                                                   <option value="212">Switzerland</option>
                                                   <option value="213">Syria</option>
                                                   <option value="214">Taiwan</option>
                                                   <option value="215">Tajikistan</option>
                                                   <option value="216">Tanzania</option>
                                                   <option value="217">Thailand</option>
                                                   <option value="218">Togo</option>
                                                   <option value="219">Tokelau</option>
                                                   <option value="220">Tonga</option>
                                                   <option value="221">Trinidad And Tobago</option>
                                                   <option value="222">Tunisia</option>
                                                   <option value="223">Turkey</option>
                                                   <option value="224">Turkmenistan</option>
                                                   <option value="225">Turks And Caicos Islands</option>
                                                   <option value="226">Tuvalu</option>
                                                   <option value="227">Uganda</option>
                                                   <option value="228">Ukraine</option>
                                                   <option value="229">United Arab Emirates</option>
                                                   <option value="230">United Kingdom</option>
                                                   <option value="231">United States</option>
                                                   <option value="232">United States Minor Outlying Islands</option>
                                                   <option value="233">Uruguay</option>
                                                   <option value="234">Uzbekistan</option>
                                                   <option value="235">Vanuatu</option>
                                                   <option value="236">Vatican City State (Holy See)</option>
                                                   <option value="237">Venezuela</option>
                                                   <option value="238">Vietnam</option>
                                                   <option value="239">Virgin Islands (British)</option>
                                                   <option value="240">Virgin Islands (US)</option>
                                                   <option value="241">Wallis And Futuna Islands</option>
                                                   <option value="242">Western Sahara</option>
                                                   <option value="243">Yemen</option>
                                                   <option value="244">Yugoslavia</option>
                                                   <option value="245">Zambia</option>
                                                   <option value="246">Zimbabwe</option>
                                                </select>
                                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-18" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected">
                                                   <div class="filter-option">
                                                      <div class="filter-option-inner">
                                                         <div class="filter-option-inner-inner">Nothing selected</div>
                                                      </div>
                                                   </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                   <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-18" aria-autocomplete="list"></div>
                                                   <div class="inner show" role="listbox" id="bs-select-18" tabindex="-1">
                                                      <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group col-lg-3">
                                             <label>Postal Code</label>
                                             <input class="form-control postal_code" type="text" data-sendreceiveraddresser="postal_code" name="receiveraddress[postal_code]">
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="form-group col-lg-4">
                                             <label>State / Region&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             <div class="dropdown bootstrap-select form-control state_id">
                                                <select class="form-control state_id" data-receiveraddress="administrative_area_level_1" title="Please select country first" name="receiveraddress[state]" data-live-search="true" required="" tabindex="-98">
                                                   <option class="bs-title-option" value=""></option>
                                                   <option data-hidden="true"></option>
                                                </select>
                                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-19" aria-haspopup="listbox" aria-expanded="false" title="Please select country first">
                                                   <div class="filter-option">
                                                      <div class="filter-option-inner">
                                                         <div class="filter-option-inner-inner">Please select country first</div>
                                                      </div>
                                                   </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                   <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-19" aria-autocomplete="list"></div>
                                                   <div class="inner show" role="listbox" id="bs-select-19" tabindex="-1">
                                                      <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group col-lg-4">
                                             <label>City&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                             <div class="dropdown bootstrap-select form-control city_id">
                                                <select class="form-control city_id" data-receiveraddress="locality" name="receiveraddress[city]" title="Please select state first" data-live-search="true" required="" tabindex="-98">
                                                   <option class="bs-title-option" value=""></option>
                                                   <option data-hidden="true"></option>
                                                </select>
                                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-20" aria-haspopup="listbox" aria-expanded="false" title="Please select state first">
                                                   <div class="filter-option">
                                                      <div class="filter-option-inner">
                                                         <div class="filter-option-inner-inner">Please select state first</div>
                                                      </div>
                                                   </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                   <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-20" aria-autocomplete="list"></div>
                                                   <div class="inner show" role="listbox" id="bs-select-20" tabindex="-1">
                                                      <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group col-lg-4">
                                             <label>Area</label>
                                             <div class="dropdown bootstrap-select form-control area_id">
                                                <select class="form-control area_id" data-receiveraddress="sublocality" name="receiveraddress[county]" title="Please select city first" data-live-search="true" tabindex="-98">
                                                   <option class="bs-title-option" value=""></option>
                                                   <option data-hidden="true"></option>
                                                </select>
                                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-21" aria-haspopup="listbox" aria-expanded="false" title="Please select city first">
                                                   <div class="filter-option">
                                                      <div class="filter-option-inner">
                                                         <div class="filter-option-inner-inner">Please select city first</div>
                                                      </div>
                                                   </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                   <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-21" aria-autocomplete="list"></div>
                                                   <div class="inner show" role="listbox" id="bs-select-21" tabindex="-1">
                                                      <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="form-group col-lg-12">
                                             <label>Google Map</label>
                                             <div class="col-sm-12 map_canvas map_receiveraddress" style="position: relative; overflow: hidden;">
                                                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                   <div style="overflow: hidden;"></div>
                                                   <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                      <div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                                         <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                               <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                               <div style="position: absolute; left: 0px; top: 0px; z-index: -1;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div>
                                                         </div>
                                                         <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                            <p class="gm-style-pbt"></p>
                                                         </div>
                                                         <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                            <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%;">
                                                               <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                               <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                               <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                               <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                                      <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                                   </div>
                                                </div>
                                             </div>
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
                                    <input type="text" class="form-control decimal" data-type="currency" name="package_fee" required="">
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
                                    <input type="text" class="form-control decimal" data-type="currency" name="return_courier_fee" id="return_courier_fee" value="40.00" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row kt-hidden package_fee">
                              <label class="col-xl-3 col-lg-3 col-form-label">Return package fees responsiable&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                              <div class="col-lg-9 col-xl-6">
                                 <div class="kt-radio-inline">
                                    <label class="kt-radio">
                                    <input type="radio" name="return_package_fee" class="return_package_fee" value="1" checked="" required=""> Receiver
                                    <span></span>
                                    </label>
                                    <label class="kt-radio">
                                    <input type="radio" name="return_package_fee" class="return_package_fee" value="2" required=""> Sender
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
                                 <div class="form-group form-group-last row">
                                    <label class="col-xl-12 col-form-label kt-align-right">
                                    <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                                    <i class="la la-plus"></i> Add Item
                                    </a>
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                        <div class="kt-section">
                           <div class="kt-section__content">
                              <div class="row">
                                 <div class="form-group col-lg-6">
                                    <label>Insurance</label>
                                    <div class="input-group bootstrap-touchspin">
                                       <div class="input-group-prepend"><span class="input-group-text">%</span><button class="btn btn-secondary bootstrap-touchspin-down bootstrap-touchspin-injected" type="button">-</button></div>
                                       <input type="text" class="form-control bootstrap-touchspin-vertical-btn" name="insurance" value="0"><span class="input-group-btn input-group-append bootstrap-touchspin-injected"><button class="btn btn-secondary bootstrap-touchspin-up" type="button">+</button></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="form-group col-lg-4">
                                    <label>Shipping Mode</label>
                                    <div class="dropdown bootstrap-select form-control">
                                       <select class="form-control" data-live-search="true" name="mode_id" tabindex="-98">
                                          <option data-hidden="true"></option>
                                          <option value="1">Air</option>
                                          <option value="2">Water</option>
                                          <option value="3" selected="">Land</option>
                                       </select>
                                       <div class="dropdown-menu ">
                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-22" aria-autocomplete="list"></div>
                                          <div class="inner show" role="listbox" id="bs-select-22" tabindex="-1">
                                             <ul class="dropdown-menu inner show" role="presentation"></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group col-lg-4">
                                    <label>Customs Value</label>
                                    <input type="text" class="form-control" name="customs_value" value="" aria-describedby="basic-addon1">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="form-group col-lg-6">
                                    <label>Delivery Time&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                    <div class="dropdown bootstrap-select form-control">
                                       <select class="form-control" data-live-search="true" name="delivery_time_id" required="" tabindex="-98">
                                          <option data-hidden="true"></option>
                                          <option value="1" selected="">Morning</option>
                                       </select>
                                       <div class="dropdown-menu ">
                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-23" aria-autocomplete="list"></div>
                                          <div class="inner show" role="listbox" id="bs-select-23" tabindex="-1">
                                             <ul class="dropdown-menu inner show" role="presentation"></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group col-lg-6">
                                    <label>Delivery Status&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                    <div class="dropdown bootstrap-select form-control">
                                       <select class="form-control" data-live-search="true" name="status_id" required="" tabindex="-98">
                                          <option data-hidden="true"></option>
                                          <option value="1_0">Schedule Time and date</option>
                                          <option value="3_4">Truck Arrived</option>
                                          <option value="4_7">Loading Complete</option>
                                          <option value="5_5">Departure for Ebility</option>
                                          <option value="6_5">Departure for Ebility</option>
                                          <option value="7_6">Arrival of Ebility</option>
                                          <option value="8_10">Offloaded Ebility</option>
                                       </select>
                                       <div class="dropdown-menu ">
                                          <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-24" aria-autocomplete="list"></div>
                                          <div class="inner show" role="listbox" id="bs-select-24" tabindex="-1">
                                             <ul class="dropdown-menu inner show" role="presentation"></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="form-group col-lg-6">
                                    <label>Shipping Fee&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text">
                                          $
                                          </span>
                                       </div>
                                       <input type="text" class="form-control decimal" data-type="currency" name="courier_fee" id="delivery_cost" value="30.00" required="">
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
                              Choose your truck
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
                                 <div class="input-group-prepend"><span class="input-group-text">package Value</span></div>
                                 <input type="number" class="form-control budget_client" name="budget_client" min="1" placeholder="package Value">
                              </div>
                           </div>
                           <div class="form-group col-lg-6">
                              <label>invioce Upload&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                              <div class="input-group">
                                 <div class="input-group-prepend"><span class="input-group-text">Invioce Image</span></div>
                                 <input type="file" class="form-control budget_client" name="budget_client" min="1" placeholder="package Value">
                              </div>
                           </div>
                           <div class="form-group col-lg-12">
                              <label for="vehicle_category">Choose your vehicle category&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                           </div>
                           <div class="form-group col-lg-8">
                              <div class="dropdown bootstrap-select form-control vehicle_category">
                                 <select class="form-control vehicle_category" onchange="getVehicles(this.value)" name="vehicle_category" id="vehicle_category" tabindex="-98">
                                    <option data-hidden="true"></option>
                                    <option value="1">category 1</option>
                                    <option value="2">category 2</option>
                                    <option value="3">category 3</option>
                                    <option value="4">category 4</option>
                                    <option value="5">category 1</option>
                                    <option value="6">category 5</option>
                                    <option value="7">category 6</option>
                                    <option value="8">category 7</option>
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
                           <div class="form-group col-lg-12">
                              <label for="slectedTracks">Choose your vehicle type&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                           </div>
                           <input type="hidden" id="slectedTracks" name="truck_used">
                           <div class="form-group col-lg-12" id="">
                              <div id="vehicleTypeCarousel" class="vehicleTypeCarousel slick-initialized slick-slider">
                                 <div class="slick-list draggable" style="padding: 0px 60px;">
                                    <div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(-60px, 0px, 0px);"></div>
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
            <div class="kt-portlet">
               <div class="kt-portlet__foot">
                  <div class="row">
                     <div class="col-lg-12">
                        <button type="submit" class="btn btn-success save">Send</button>
                        <span class="kt-margin-left-10">or <a href="#" class="kt-link">Cancel</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>



@stop
