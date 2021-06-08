<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-header__topbar--mobile-on" data-new-gr-c-s-check-loaded="14.1012.0" data-gr-ext-installed="" style="">
    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
       <div class="kt-header-mobile__logo">
          <a href="#">
          <img alt="Logo" src="http://localhost/ebilty-web/storage/app/uploads/public/605/b24/19b/605b2419bf83e815997404.png" style="max-height:40px">
          </a>
       </div>
       <div class="kt-header-mobile__toolbar">
          <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
          <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
          <button class="kt-header-mobile__topbar-toggler kt-header-mobile__toolbar-topbar-toggler--active" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
       </div>
    </div>
    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
       <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
          @include('admin/layout/sidebar')
          @include('admin/layout/header')
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                @yield('content')
            </div>
       </div>
    </div>
    <!-- end:: Page -->
    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
       <i class="fa fa-arrow-up"></i>
    </div>
    <!-- end::Scrolltop -->
    <!-- end::Global Config -->
    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="{{asset('assets/js/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/classie.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/notificationFx.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->
    <!--begin::Page Scripts(used by this page) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/js/ajax-bootstrap-select.min.js"></script>
    <script src="{{asset('assets/js/framework.js')}}"></script>
    <script src="{{asset('assets/js/framework.extras.js')}}"></script>
    <link rel="stylesheet" property="stylesheet" href="#">

 </body>
 </html>
