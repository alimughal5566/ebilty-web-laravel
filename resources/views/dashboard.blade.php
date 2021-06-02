@extends('layout.app')


@section('content')


                <!-- begin:: Content Head -->
                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                   <div class="kt-container  kt-container--fluid  ">
                      <div class="kt-subheader__main">
                         <h3 class="kt-subheader__title"><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>Dashboard</h3>
                         <span class="kt-subheader__desc">Overview on your system</span>
                         <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                      </div>
                      <div class="kt-subheader__toolbar">
                         <div class="kt-subheader__wrapper">
                            <div class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Select dashboard daterange">
                               <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today:</span>&nbsp;
                               <span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">05/29/2021</span>
                               <i class="flaticon2-calendar-1"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end:: Content Head -->
                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                   <!--Begin::Section-->
                   <div class="row">
                      <div class="col-12">
                         <!--begin:: Widgets/Applications/User/Profile3-->
                         <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-portlet__body">
                               <div class="row">
                                  <div class="col-12 col-md-4">
                                     <div class="dashboard-top-container ">
                                        <div class="text-center img-container">
                                           <img alt="Logo" src="./admin/media/images/logo.png" style="max-height:40px">
                                           <h5>Summary</h5>
                                        </div>
                                        <div class="top-dashbord-left-container d-flex flex-column align-items-stretch h-100 ">
                                           <div class="container-info">
                                              <div>
                                                 <!-- <i class="flaticon-map-location"></i>  -->
                                                 <i class="fas fa-clipboard-list"></i>
                                                 No of transactions
                                              </div>
                                              <div>
                                                 <h2>1500</h2>
                                              </div>
                                           </div>
                                           <div class="container-info">
                                              <div>
                                                 <i class="fas fa-chart-line"></i>
                                                 Ranking
                                              </div>
                                              <div>
                                                 <h2>25</h2>
                                              </div>
                                           </div>
                                           <div class="container-info">
                                              <div>
                                                 <i class="fas fa-money-bill"></i>
                                                 Payments
                                              </div>
                                              <div>
                                                 <h2>3222</h2>
                                              </div>
                                           </div>
                                           <div class="container-info">
                                              <div>
                                                 <i class="fas fa-chart-bar"></i>
                                                 Revenue
                                              </div>
                                              <div>
                                                 <h2>1212</h2>
                                              </div>
                                           </div>
                                           <div class="container-info">
                                              <div>
                                                 <i class="far fa-window-close"></i>
                                                 Cancelled Rides
                                              </div>
                                              <div>
                                                 <h2>10</h2>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-12 col-md-8">
                                     <div class="kt-widget kt-widget--user-profile-3 custom-widget">
                                        <div class="kt-widget__top">
                                           <div class="kt-widget__pic kt-widget__pic--brand kt-font-boldest kt-font-light boxnameShow">
                                              SY
                                           </div>
                                           <div class="kt-widget__content">
                                              <div class="kt-widget__head">
                                                 <a href="javascript:void(0);" class="kt-widget__username">
                                                 System administration
                                                 </a>
                                                 <div class="kt-widget__action">
                                                    <a href="#" class="btn btn-brand btn-sm btn-upper">Edit</a>
                                                 </div>
                                              </div>
                                              <div class="kt-widget__subhead">
                                                 <a href="javascript:void(0);"><i class="flaticon-alarm-1"></i>+96171456227</a>
                                                 <a href="javascript:void(0);"><i class="flaticon2-calendar-3"></i> </a>
                                              </div>
                                              <div class="kt-widget__info">
                                                 <div class="kt-widget__desc">
                                                    amman_street1,  12345
                                                    <br> Badakhshan, Afghanistan
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-4">
                                              <div class="dashboardcontainainer a">
                                                 <div class="headers">
                                                    <h4>United Kingdom</h4>
                                                    <div><img src="https://www.countryflags.io/gb/flat/64.png" alt=""></div>
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
                                           <div class="col-4">
                                              <div class="dashboardcontainainer b">
                                                 <div class="headers">
                                                    <h4>Canada</h4>
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
                                           <div class="col-4">
                                              <div class="dashboardcontainainer c">
                                                 <div class="headers">
                                                    <h4>Malaysia</h4>
                                                    <div><img src="https://www.countryflags.io/my/flat/64.png" alt=""></div>
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
                                        </div>
                                        <!--                    <div class="kt-widget__bottom">-->
                                        <!--                        <a href="http://localhost/ebilty-web/dashboard/shipments/approved" class="kt-widget__item">-->
                                        <!--                            <div class="kt-widget__icon">-->
                                        <!--                                <i class="flaticon-map-location"></i>-->
                                        <!--                            </div>-->
                                        <!--                            <div class="kt-widget__details">-->
                                        <!--                                <span class="kt-widget__title">7 shipment</span>-->
                                        <!--                                <span class="kt-widget__value">Approved List</span>-->
                                        <!--                            </div>-->
                                        <!--                        </a>-->
                                        <!--                        <a href="http://localhost/ebilty-web/dashboard/shipments/stock" class="kt-widget__item">-->
                                        <!--                            <div class="kt-widget__icon">-->
                                        <!--                                <i class="flaticon-truck"></i>-->
                                        <!--                            </div>-->
                                        <!--                            <div class="kt-widget__details">-->
                                        <!--                                <span class="kt-widget__title">2 shipment</span>-->
                                        <!--                                <span class="kt-widget__value">In Stock List</span>-->
                                        <!--                            </div>-->
                                        <!--                        </a>-->
                                        <!--                        <a href="http://localhost/ebilty-web/dashboard/shipments/delivered" class="kt-widget__item">-->
                                        <!--                            <div class="kt-widget__icon">-->
                                        <!--                                <i class="flaticon-bag"></i>-->
                                        <!--                            </div>-->
                                        <!--                            <div class="kt-widget__details">-->
                                        <!--                                <span class="kt-widget__title">11 shipment</span>-->
                                        <!--                                <span class="kt-widget__value">Delivered List</span>-->
                                        <!--                            </div>-->
                                        <!--                        </a>-->
                                        <!--                        <div class="kt-widget__item">-->
                                        <!--                            <div class="kt-widget__icon">-->
                                        <!--                                <i class="flaticon-file-2"></i>-->
                                        <!--                            </div>-->
                                        <!--                            <div class="kt-widget__details">-->
                                        <!--                                -->
                                        <!--                                    <span class="kt-widget__title">7 New Shipment Request</span>-->
                                        <!--                                    <a href="http://localhost/ebilty-web/dashboard/shipments/requests" class="kt-widget__value kt-font-brand">View</a>-->
                                        <!--                                -->
                                        <!--                            </div>-->
                                        <!--                        </div>-->
                                        <!--                    </div>-->
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--end:: Widgets/Applications/User/Profile3-->
                      </div>
                   </div>
                   <!--End::Section-->
                   <div class="row">
                      <div class="col-lg-4">
                         <!--begin:: Widgets/Latest Updates-->
                         <div class="kt-portlet kt-portlet--height-fluid " id="summary_container" style="">
                            <div class="kt-portlet__head">
                               <div class="kt-portlet__head-label">
                                  <h3 class="kt-portlet__head-title">
                                     Summary <small>Statistical summary</small>
                                  </h3>
                               </div>
                               <!--
                                  <div class="kt-portlet__head-toolbar">
                                      <a href="javascript:void(0);" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                                          <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                                          <ul class="kt-nav">
                                              <li class="kt-nav__item">
                                                  <a href="javascript:void(0);" class="kt-nav__link">
                                                      <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                      <span class="kt-nav__link-text">Last Month Summary</span>
                                                  </a>
                                              </li>
                                              <li class="kt-nav__item">
                                                  <a href="javascript:void(0);" class="kt-nav__link">
                                                      <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                      <span class="kt-nav__link-text">Consolidated List</span>
                                                  </a>
                                              </li>
                                              <li class="kt-nav__item">
                                                  <a href="javascript:void(0);" class="kt-nav__link">
                                                      <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                      <span class="kt-nav__link-text">Delivered List</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  -->
                            </div>
                            <!--full height portlet body-->
                            <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                               <div class="kt-widget4 kt-widget4--sticky">
                                  <div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15" id="summary">
                                     <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                 <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                 <path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                                 <polygon id="Combined-Shape-Copy" fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912"></polygon>
                                              </g>
                                           </svg>
                                        </span>
                                        <a href="javascript:;" class="kt-widget4__title">
                                        All Shipments
                                        </a>
                                        <span class="kt-widget4__number kt-font-dark">0</span>
                                     </div>
                                     <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                 <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                 <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                                 <path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" id="Combined-Shape" fill="#000000"></path>
                                                 <path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" id="Combined-Shape" fill="#000000"></path>
                                                 <path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" id="Path-107" fill="#000000"></path>
                                              </g>
                                           </svg>
                                        </span>
                                        <a href="javascript:;" class="kt-widget4__title kt-font-danger">
                                        Delayed Shipments
                                        </a>
                                        <span class="kt-widget4__number kt-font-danger">0</span>
                                     </div>
                                     <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                 <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                 <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" id="Path-76" fill="#000000"></path>
                                                 <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" id="Combined-Shape" fill="#fd27eb" fill-rule="nonzero" opacity="0.3"></path>
                                              </g>
                                           </svg>
                                        </span>
                                        <a href="javascript:;" class="kt-widget4__title kt-font-warning">
                                        Pre Alert to Approve
                                        </a>
                                        <span class="kt-widget4__number kt-font-warning">0</span>
                                     </div>
                                     <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                 <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                 <rect id="Rectangle-7" fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1"></rect>
                                                 <path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" id="Combined-Shape" fill="#000000"></path>
                                              </g>
                                           </svg>
                                        </span>
                                        <a href="javascript:;" class="kt-widget4__title">
                                        Pickup List
                                        </a>
                                        <span class="kt-widget4__number kt-font-dark">0</span>
                                     </div>
                                     <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                 <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                 <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" id="Path-42" fill="#000000"></path>
                                                 <rect id="Rectangle-153" fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1"></rect>
                                              </g>
                                           </svg>
                                        </span>
                                        <a href="javascript:;" class="kt-widget4__title kt-font-success">
                                        Delivered shipments
                                        </a>
                                        <span class="kt-widget4__number kt-font-success">0</span>
                                     </div>
                                     <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                 <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                 <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" id="Path-42" fill="#000000"></path>
                                                 <rect id="Rectangle-153" fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1"></rect>
                                              </g>
                                           </svg>
                                        </span>
                                        <a href="javascript:;" class="kt-widget4__title kt-font-success">
                                        Delivered Paid
                                        </a>
                                        <span class="kt-widget4__number kt-font-success">0</span>
                                     </div>
                                     <div class="kt-widget4__item">
                                        <span class="kt-widget4__icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                 <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                 <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" id="Path-42" fill="#000000"></path>
                                                 <rect id="Rectangle-153" fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1"></rect>
                                              </g>
                                           </svg>
                                        </span>
                                        <a href="javascript:;" class="kt-widget4__title kt-font-success">
                                        Delivered Unpaid
                                        </a>
                                        <span class="kt-widget4__number kt-font-success">0</span>
                                     </div>
                                     <div class="kt-widget4__item kt-margin-b-20">
                                        <span class="kt-widget4__icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                 <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                 <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                 <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
                                              </g>
                                           </svg>
                                        </span>
                                        <a href="javascript:;" class="kt-widget4__title">
                                        New Customers
                                        </a>
                                        <span class="kt-widget4__number kt-font-dark">0</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--end:: Widgets/Latest Updates-->
                      </div>
                      <div class="col-lg-8">
                         <!--begin:: Widgets/Quick Stats-->
                         <div class="row row-full-height" id="charts" style="position: relative; zoom: 1;">
                            <div class="col-12">
                               <div class="kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-warning">
                                  <div class="kt-portlet__body kt-portlet__body--fluid">
                                     <div class="kt-widget26">
                                        <div class="kt-widget26__content flex-md-row">
                                           <span class="kt-widget26__desc">Pending Payments</span>
                                           <span class="kt-widget26__number ml-md-4 color-danger"><span class="kt-currency_before"></span>$0.00<span class="kt-currency_after"></span></span>
                                        </div>
                                        <div class="kt-widget26__chart" style="height:200px; width: 100%;">
                                           <div class="chartjs-size-monitor">
                                              <div class="chartjs-size-monitor-expand">
                                                 <div class=""></div>
                                              </div>
                                              <div class="chartjs-size-monitor-shrink">
                                                 <div class=""></div>
                                              </div>
                                           </div>
                                           <canvas id="kt_chart_quick_stats_1" width="789" height="394" style="display: block; width: 789px; height: 394px;" class="chartjs-render-monitor"></canvas>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-12">
                               <div class="kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-success">
                                  <div class="kt-portlet__body kt-portlet__body--fluid">
                                     <div class="kt-widget26">
                                        <div class="kt-widget26__content flex-md-row">
                                           <span class="kt-widget26__desc">Current Month Sales</span>
                                           <span class="kt-widget26__number ml-md-4 color-success"><span class="kt-currency_before"></span>$0.00<span class="kt-currency_after"></span></span>
                                        </div>
                                        <div class="kt-widget26__chart" style="height:200px; width: 100%;">
                                           <div class="chartjs-size-monitor">
                                              <div class="chartjs-size-monitor-expand">
                                                 <div class=""></div>
                                              </div>
                                              <div class="chartjs-size-monitor-shrink">
                                                 <div class=""></div>
                                              </div>
                                           </div>
                                           <canvas id="kt_chart_quick_stats_2" width="789" height="394" style="display: block; width: 789px; height: 394px;" class="chartjs-render-monitor"></canvas>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-12">
                               <div class="kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-dark">
                                  <div class="kt-portlet__body kt-portlet__body--fluid">
                                     <div class="kt-widget26">
                                        <div class="kt-widget26__content flex-md-row">
                                           <span class="kt-widget26__desc">Delayed Shipping Percentage</span>
                                           <span class="kt-widget26__number ml-md-4 kt-font-danger">0% </span>
                                        </div>
                                        <div class="kt-widget26__chart" style="height:200px; width: 100%;">
                                           <div class="chartjs-size-monitor">
                                              <div class="chartjs-size-monitor-expand">
                                                 <div class=""></div>
                                              </div>
                                              <div class="chartjs-size-monitor-shrink">
                                                 <div class=""></div>
                                              </div>
                                           </div>
                                           <canvas id="kt_chart_quick_stats_3" width="789" height="394" style="display: block; width: 789px; height: 394px;" class="chartjs-render-monitor"></canvas>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <script>
                               function quickStats(){
                                  _initSparklineChart($('#kt_chart_quick_stats_1'), [0,], KTApp.getStateColor('warning'), 3);
                                  _initSparklineChart($('#kt_chart_quick_stats_2'), [0,], KTApp.getStateColor('success'), 3);
                                  _initSparklineChart($('#kt_chart_quick_stats_3'), [0,], KTApp.getStateColor('danger'), 3);
                               }
                            </script>
                         </div>
                         <!--end:: Widgets/Quick Stats-->
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-lg-12">
                         <div class="kt-portlet kt-portlet--height-fluid" id="listing_container" style="">
                            <div class="kt-portlet__head">
                               <div class="kt-portlet__head-label">
                                  <h3 class="kt-portlet__head-title">
                                     Latest shipments
                                  </h3>
                               </div>
                            </div>
                            <div class="kt-portlet__body">
                               <div class="kt-widget11">
                                  <div class="table-responsive" id="listing">
                                     <div id="shipmenttableStatus" class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded kt-datatable--scroll kt-datatable--error" style="position: static; zoom: 1;">
                                        <table class="kt-datatable__table" style="display: block;">
                                           <thead class="kt-datatable__head">
                                              <tr class="kt-datatable__row" style="left: 0px;">
                                                 <th data-field="number" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Tracking</span></th>
                                                 <th data-field="details" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Shipment Details</span></th>
                                                 <th data-field="status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">status</span></th>
                                                 <th data-field="Actions" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Actions</span></th>
                                              </tr>
                                           </thead>
                                           <tbody class="kt-datatable__body" style=""><span class="kt-datatable--error">No records found</span></tbody>
                                        </table>
                                        <div class="kt-datatable__pager kt-datatable--paging-loaded">
                                           <ul class="kt-datatable__pager-nav" style="display: none;">
                                              <li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                                              <li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                                              <li style=""></li>
                                              <li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
                                              <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
                                              <li style=""></li>
                                              <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-next"></i></a></li>
                                              <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-next"></i></a></li>
                                           </ul>
                                           <div class="kt-datatable__pager-info">
                                              <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
                                                 <select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-selected="50" tabindex="-98">
                                                    <option class="bs-title-option" value=""></option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                 </select>
                                                 <button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
                                                    <div class="filter-option">
                                                       <div class="filter-option-inner">
                                                          <div class="filter-option-inner-inner">50</div>
                                                       </div>
                                                    </div>
                                                 </button>
                                                 <div class="dropdown-menu ">
                                                    <div class="inner show" role="listbox" id="bs-select-4" tabindex="-1">
                                                       <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                 </div>
                                              </div>
                                              <span class="kt-datatable__pager-detail">Displaying 1 - 0 of  records</span>
                                           </div>
                                        </div>
                                     </div>
                                     <script>
                                        function listing(){
                                            $('.kt-datatable').KTDatatable({
                                                translate: {
                                                    records: {
                                                        processing: 'Please wait...',
                                                        noRecords: 'No records found'
                                                    },
                                                    toolbar: {
                                                        pagination: {
                                                            items: {
                                                                default: {
                                                                    first: 'First',
                                                                    prev: 'Previous',
                                                                    next: 'Next',
                                                                    last: 'Last',
                                                                    more: 'More pages',
                                                                    input: 'Page number',
                                                                    select: 'Select page size'
                                                                },
                                        
                                                            }
                                                        }
                                                    }
                                                },
                                        
                                                // layout definition
                                                layout: {
                                                    scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                                                    footer: false, // display/hide footer
                                                },
                                        
                                                // column sorting
                                                sortable: true,
                                        
                                                pagination: true,
                                        
                                                search: {
                                                    input: $('#generalSearch'),
                                                    delay: 400,
                                                },
                                                data: {
                                                    type: 'remote',
                                                    source: {
                                                        read: {
                                                            url: 'http://localhost/ebilty-web/api/dashboardshipments',
                                                            params: {
                                                                start: '2021-05-29 00:00:00',
                                                                end: '2021-05-29 23:59:59'
                                                            }
                                                        },
                                                    },
                                                    pageSize: 10, // display 20 records per page
                                                    serverPaging: true,
                                                    serverFiltering: true,
                                                    serverSorting: true,
                                                },
                                                // columns definition
                                                columns: [
                                                    {
                                                        field: "number",
                                                        title: "Tracking",
                                                        sortable: true,
                                                        width: 140,
                                                        template: function(row) {
                                                            return '<a >AWB5'+row.shipping_number+'</a>';
                                                            // return '<a href="http://localhost/ebilty-web/dashboard/shipments/'+row.id+'/view">AWB5'+row.shipping_number+'</a>';
                                                        }
                                                    },
                                                    {
                                                        field: "details",
                                                        title: "Shipment Details",
                                                        sortable: false,
                                                        width: 'auto',
                                                        template: function(data, i) {
                                                            if(data.sender && data.sender.name){
                                                                var output  = '\
                                                                <div class="kt-user-card-v2 kt-user-card-v2--uncircle">\
                                                                    <div class="kt-user-card-v2__details">\
                                                                        <a href="'+data.sender.id+'/view" class="kt-user-card-v2__name"><b class="kt-font-boldest">Sender:</b> ' + data.sender.name + '</a>';
                                                                if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                                                                    output      += '\
                                                                        <span class="kt-user-card-v2__email"><b class="kt-font-boldest">From:</b> ' + data.shipping_from_area + '</span>';
                                                                }
                                                            }else{
                                                                var output  = '\
                                                                    <div class="kt-user-card-v2 kt-user-card-v2--uncircle">\
                                                                        <div class="kt-user-card-v2__details">\
                                                                            <a href="javascript:;" class="kt-user-card-v2__name"><b class="kt-font-boldest">Sender:</b> ' + data.sender_name + '</a>';
                                                                if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                                                                    output      += '\
                                                                              <span class="kt-user-card-v2__email"><b class="kt-font-boldest">From:</b> ' + data.shipping_from_area + '</span>';
                                                                }
                                                            }
                                                            if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                                                                output      += '\
                                                                        <a href="'+data.receiver.id+'/view" class="kt-margin-t-5 kt-user-card-v2__name"><b>Receiver:</b> ' + data.receiver.name + '</a>';
                                                                if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                                                    output      += '\
                                                                        <span class="kt-user-card-v2__email"><b class="kt-font-boldest">to:</b> ' + data.shipping_to_area + '</span>';
                                                                }
                                                            }else if(data.receiver_name && data.receiver_name != '-'){
                                                                output  += '\
                                                                    <div class="kt-user-card-v2 kt-user-card-v2--uncircle">\
                                                                        <div class="kt-user-card-v2__details">\
                                                                            <a href="javascript:;" class="kt-user-card-v2__name"><b class="kt-font-boldest">Receiver:</b> ' + data.receiver_name + '</a>';
                                                                if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                                                    output      += '\
                                                                                <span class="kt-user-card-v2__email"><b class="kt-font-boldest">From:</b> ' + data.shipping_to_area + '</span>';
                                                                }
                                                            }
                                                            output      += '\
                                                                    </div>\
                                                                </div>';
                                        
                                        
                                                            output  += '\
                                                                    <div class="kt-user-card-v2 kt-user-card-v2--uncircle">\
                                                                        <div class="kt-user-card-v2__details">\
                                                                            <a href="javascript:;" class="kt-user-card-v2__name"><b class="kt-font-boldest">branch:</b> ' + data.office + '</a>\
                                                                        </div>\
                                                                    </div>';
                                                            output  += '\
                                                                        <div class="kt-user-card-v2 kt-user-card-v2--uncircle">\
                                                                            <div class="kt-user-card-v2__details">\
                                                                                <a href="javascript:;" class="kt-user-card-v2__name"><b class="kt-font-boldest">date:</b> ' + data.created_at_date + '</a>\
                                                                            </div>\
                                                                        </div>';
                                                            return output;
                                                        }
                                                    },
                                                    {
                                                        field: "status",
                                                        title: "status",
                                                        sortable: false,
                                                        width: 'auto',
                                                        template: function(row) {
                                                            if(row.requested == 100){
                                                                var output = '<span class="btn btn-bold btn-sm btn-label-primary">Saved</span>';
                                                            }else{
                                                                if(row.status != null){
                                                                    var output = '<span class="btn btn-bold btn-sm btn-label-' + row.status.color + '">' + row.status.name + '</span>';
                                                                } else {
                                                                    var output = '<span class="btn btn-bold btn-sm btn-label">Not Found</span>';
                                                                }
                                                                if(row.delayed == 1){
                                                                    output  += '&nbsp;<span class="btn btn-bold btn-sm btn-label-danger">delayed</span>';
                                        
                                                                }
                                                                if(row.requested == 10 || row.requested == 11){
                                                                    output  += '&nbsp;<span class="btn btn-bold btn-sm btn-label-warning">Returning Discards</span>';
                                                                }
                                                                if(row.requested == 12 && row.status.equal != 12){
                                                                    output  += '&nbsp;<span class="btn btn-bold btn-sm btn-label-success">Supplied</span>';
                                                                }
                                                            }
                                        
                                                            return output;
                                                        }
                                                    },
                                                    {
                                                        field: "Actions",
                                                        width: 100,
                                                        title: "Actions",
                                                        sortable: false,
                                                        overflow: 'visible',
                                                        template: function (data) {
                                                                                    var output = '' +
                                                                '<div id="shipmentbtns" class="btn-group btn-group" role="group" aria-label="...">'+
                                                                '<a href="'+data.id+'/view" class="btn btn-brand btn-sm btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="View Shipment"><i class="la la-eye"></i></a>';
                                        
                                        
                                        
                                        
                                        
                                                                                    if(data.requested   ==  0 ){
                                                                output += '<a href="javascript:;" class="shipmentApproved btn btn-brand btn-sm btn-icon" data-skin="dark"  data-placement="top" title="Approve" id="'+data.id+'" ><i class="la la-check"></i></button>';
                                                            }
                                                                                                            if(data.requested   ==  0 || data.requested == 1 || data.requested == 9 || data.requested == 5){
                                                                output += '<a href="javascript:;" class="assign_employee btn btn-brand btn-sm btn-icon" data-skin="dark" data-toggle="modal" data-target="#assign_shipmentEmployee" data-placement="top" title="Assign Employee" id="'+data.id+'" ><i class="la la-user"></i></button>';
                                                            }
                                                                                                            if(data.requested   ==  1 ){
                                                                output += '<a href="javascript:;" class="shipmentReceived btn btn-brand btn-sm btn-icon" data-skin="dark"  data-placement="top" title="Received" id="'+data.id+'" ><i class="la la-arrow-down"></i></button>';
                                                            }
                                                                                                            if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 7){
                                                                output += '<a href="javascript:;" class="shipmentDeliveried btn btn-brand btn-sm btn-icon" data-skin="dark"  data-placement="top" title="set as Deliveried" id="'+data.id+'" ><i class="la la-thumbs-o-up"></i></button>';
                                                            }
                                                                                                            if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 4 || data.requested == 7){
                                                                output += '<a href="javascript:;" class="shipmentPaid btn btn-brand btn-sm btn-icon" data-skin="dark"  data-placement="top" title="paid" id="'+data.id+'" ><i class="la la-dollar"></i></button>';
                                                            }
                                                            
                                                                                    if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                                                output += '<a href="'+data.id+'/edit" class="btn btn-brand btn-sm btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Edit Shipment"><i class="la la-edit"></i></button>';
                                                            }
                                                                                                            if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                                                output += '<a href="'+data.id+'/print/shipment" target="_blank" class="btn btn-info btn-sm btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Print Shipment"><i class="la la-print"></i></button>';
                                                            }
                                                                                    if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                                                output += '<a href="'+data.id+'/print/label" class="btn btn-info btn-sm btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Print Label" target="_blank" ><i class="la la-qrcode"></i></button>';
                                                            }
                                                                                                            if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                                                output += '<a href="'+data.id+'/update" class="btn btn-info btn-sm btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Update Status"><i class="la la-street-view"></i></button>';
                                                            }
                                                                                    //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received
                                        
                                                                                    if((data.requested   ==  1 || data.requested   ==  3)){
                                                                output += '<a href="'+data.id+'/deliver" class="btn btn-success btn-sm btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Mark as delivered"><i class="la la-smile-o"></i></button>';
                                                            }
                                                                                                            if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                                                output += '<a href="javascript:void(0);" class="btn btn-danger btn-sm delete_record kt-font-light btn-icon" rel="'+data.id+'" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Delete Shipment"><i class="la la-remove"></i></a>';
                                                            }
                                                                                    
                                                                                    '</div>';
                                        
                                                            return output;
                                                        },
                                                    }
                                                ]
                                            });
                                        
                                        
                                        
                                            $('body').tooltip({selector: '[data-toggle="kt-tooltip"]'});
                                            // Bid Open
                                            $('body').on('click','.bid' , function (){
                                                let order_id_value = $(this).attr('data-id');
                                                let user_id = $(this).attr('data-user-id');
                                                // alert(user_id)
                                                $.ajax({
                                                    url: "/api/get/bid",
                                                    type: "POST",
                                                    data: {id: order_id_value},
                                                    success: function (result){
                                                        // console.log(result)
                                                        result = JSON.parse(result)
                                                        $('#category').val(result.title)
                                                        $('#ve_name').val(result.ve_name)
                                                        // $('#ve_model').val(result.ve_model)
                                                        $('#truck_type').val(result.truck_id)
                                                        $('#route').html(result.receiver_addr+'('+ result.street+')')
                                        
                                                        // $('#customer_budget').val(result.price_kg)
                                                        $('#order_id_placed').val(order_id_value)
                                                        $('#save_bid_user_id').val(user_id)
                                                        $('#customer_budget').val(result.budget_client)
                                                        $('#showBidModal').modal('show')
                                                    }
                                                })
                                            })
                                            // Bid Save
                                            $('body').on('click','.bidsave' , function (){
                                                if($('#bid_price').val()==''){
                                                    $('#bid_price').addClass('border-danger');
                                                    return ;
                                        
                                                }
                                                $('#bid_price').removeClass('border-danger');
                                                $.ajax({
                                                    url: "/api/save/bid",
                                                    type: "POST",
                                                    data: {'user_id': $('#save_bid_user_id').val() , 'order_id': $('#order_id_placed').val() ,'truck_id': $('#truck_id').val() , 'truck_type': $('#truck_type').val() , 'route': $('#route').val(),
                                                        'customer_budget': $('#customer_budget').val() , 'bid_price' : $('#bid_price').val()
                                                    },
                                                    success: function (result){
                                                        swal.fire(
                                                            'Action Successfull',
                                                            'You bids successfully.',
                                                            'success'
                                                        )
                                                        $('#showBidModal').modal('hide')
                                                    },
                                                    error: function (request, status, error) {
                                                        swal.fire(
                                                            'Already bidds',
                                                            'Please waits for approval.',
                                                            'warning');
                                        
                                                        $('#showBidModal').modal('hide')
                                                    }
                                                })
                                            })
                                            $('body').on('click','.delete_record',function(){
                                                var id      = $(this).attr('rel');
                                                var type    = $(this).attr('data-type');
                                                swal.fire({
                                                    buttonsStyling: false,
                                        
                                                    text: "Are you sure to delete this item ?",
                                                    type: "question",
                                        
                                                    confirmButtonText: "Yes, delete!",
                                                    confirmButtonClass: "btn btn-sm btn-bold btn-danger",
                                        
                                                    showCancelButton: true,
                                                    cancelButtonText: 'No, cancel',
                                                    cancelButtonClass: "btn btn-sm btn-bold btn-brand"
                                                }).then(function (result) {
                                                    if (result.value) {
                                                        $.request('onDelete', {
                                                            data: {id: id, type: type},
                                                            success: function(data) {
                                        
                                                                swal.fire({
                                                                    title: 'Deleted!',
                                                                    text: 'Your selected record has been deleted! :(',
                                                                    type: 'success',
                                                                    buttonsStyling: false,
                                                                    confirmButtonText: 'OK',
                                                                    confirmButtonClass: "btn btn-sm btn-bold btn-brand",
                                                                });
                                                                datatable.reload();
                                                            }
                                                        });
                                                        // result.dismiss can be 'cancel', 'overlay',
                                                        // 'close', and 'timer'
                                                    } else if (result.dismiss === 'cancel') {
                                                        swal.fire({
                                                            title: 'Cancelled',
                                                            text: 'You selected record has not been deleted! :)',
                                                            type: 'error',
                                                            buttonsStyling: false,
                                                            confirmButtonText: 'OK',
                                                            confirmButtonClass: "btn btn-sm btn-bold btn-brand",
                                                        });
                                                    }
                                                });
                                            });
                                        }
                                        function openBid(elem){
                                        
                                        }
                                     </script>
                                     <div class="modal fade" id="showBidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                           <div class="modal-content">
                                              <div class="modal-header">
                                                 <h5 class="modal-title" id="exampleModalLabel">Place a bid</h5>
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">×</span>
                                                 </button>
                                              </div>
                                              <div class="modal-body">
                                                 <!--                <p>bid your truct</p>-->
                                                 <div class="row col-md-12">
                                                    <lable for="truck_type">Vehicle Category</lable>
                                                    <input type="text" id="category" name="category" class="form-control" readonly="">
                                                 </div>
                                                 <div class="row col-md-12">
                                                    <lable for="ve_name">Vehicle Name</lable>
                                                    <input type="text" id="ve_name" name="ve_name" class="form-control" readonly="">
                                                 </div>
                                                 <!--                <div class="row col-md-12">-->
                                                 <!--                    <lable for="ve_model">Vehicle Model</lable>-->
                                                 <!--                    <input type="text" id="ve_model" name="ve_model" class="form-control" readonly>-->
                                                 <!--                </div>-->
                                                 <!--                <div class="row col-md-12">-->
                                                 <!--                    <lable for="truck_type">Truck Type</lable>-->
                                                 <!--                    <input type="text" id="truck_type" name="truck_type" class="form-control">-->
                                                 <!--                </div>-->
                                                 <div>
                                                    <lable for="route">Route
                                                       <textarea id="route" name="route" class="form-control" readonly=""></textarea>
                                                    </lable>
                                                 </div>
                                                 <div>
                                                    <lable for="customer_budget">Customer's Total Budget
                                                       <input type="text" id="customer_budget" name="customer_budget" class="form-control" readonly="true">
                                                    </lable>
                                                 </div>
                                                 <input type="hidden" id="order_id_placed">
                                                 <input type="hidden" id="truck_type" name="truck_type">
                                                 <input type="hidden" id="save_bid_user_id">
                                                 <div>
                                                    <lable for="bid_price">What Is Your Total Amount You'd Like To Bid For This Job?
                                                       <input type="number" id="bid_price" name="bid_price" class="form-control" min="1" placeholder="Bidding amount" required="">
                                                    </lable>
                                                 </div>
                                              </div>
                                              <div class="modal-footer">
                                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                 <button type="button" class="btn btn-primary bidsave">Place a Bid</button>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="kt-widget11__action kt-align-right">
                                     <a href="#" class="btn background-primary text-white btn-sm btn-bold">View All Shipments</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end:: Content -->
             

             @stop