<!-- begin:: Header -->


<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

   <!-- begin:: Header Menu -->
   <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

   <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1;">
      <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
         <ul class="kt-menu__nav ">
            <li class="kt-menu__item">
               <a href="javascript:void(0);" class="kt-menu__link kt-menu__time">
                  <!--                                            <i class="kt-menu__link-icon flaticon-clock-1"></i>-->
                  <span class="kt-menu__link-text">
                     <div class="time-frame">
                        <div id="date-part-icon" class="d-inline-block mr-1">
                           <i class="far fa-calendar-day"></i>
                        </div>
                        <div id="date-part" class="d-inline-block">{{Carbon\Carbon::now()->format('d M Y h:i:s a')}} </div>
                        <div id="time-part-icon" class="d-inline-block ml-3 mr-1">
                           <i class="far fa-clock"></i>
                        </div>
{{--                        <div id="time-part" class="d-inline-block">03:46:24 AM</div>--}}

                     </div>
                  </span>
               </a>
            </li>
         </ul>
      </div>
   </div>
   <!-- end:: Header Menu -->
   <!-- begin:: Header Topbar -->
   <div class="kt-header__topbar">
      <!--begin: Search -->
      <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
         <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
            <span class="kt-header__topbar-icon">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                     <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                     <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero"></path>
                  </g>
               </svg>
            </span>
         </div>
         <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(44px, 64px, 0px);">
            <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
               <form method="GET" action="" class="kt-quick-search__form">
                  <input name="_token" type="hidden" value="9wC8d5AX9Ub17XYPTJeY4LM2mU2eBj0Ja0EG3R3t">
                  <input name="_session_key" type="hidden" value="8fubrlIh3j3FPSPDaocPKIYFYDlH305rp1Kg7cXd">
                  <div class="input-group">
                     <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                     <input type="text" class="form-control kt-quick-search__input" placeholder="quick search..." name="quicksearch">
                     <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                  </div>
               </form>
               <div class="kt-quick-search__wrapper kt-scroll ps" data-scroll="true" data-height="325" data-mobile-height="200" style="direction: ltr; height: 325px; overflow: hidden;">
                  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                     <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                  </div>
                  <div class="ps__rail-y" style="top: 0px; right: 0px;">
                     <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--end: Search -->
      <!--begin: Notifications -->
      <div id="notificationsmenu" class="kt-header__topbar-item dropdown">
         <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="false">
            <span class="kt-header__topbar-icon kt-pulse kt-pulse--brand">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                     <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                     <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000"></path>
                  </g>
               </svg>
               <span class="kt-pulse__ring"></span>
            </span>
            <span class=" kt-badge kt-badge--danger">20</span>
         </div>
         <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(62px, 64px, 0px);">
            <!--begin: Head -->
            <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
               <h3 class="kt-head__title kt-padding-b-30">
                  Notifications
                  &nbsp;
                  <a href="#" class="btn btn-label-danger btn-sm btn-bold btn-font-md">20 new</a>
               </h3>
            </div>
            <!--end: Head -->
            <div id="topbar_notifications_notifications">
               <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll ps" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           The shipment has been assigned, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/20/2021 08:49:14
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/20/2021 08:23:39
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 04:39:25
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 01:02:23
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 01:01:26
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 01:01:10
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 12:30:55
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           The shipment has been assigned, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 08:23:34
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           The shipment has been assigned, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 08:23:23
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           The shipment has been assigned, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 08:23:01
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           The shipment has been assigned, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 08:22:33
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           The shipment has been assigned, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 06:32:25
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           The shipment has been assigned, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 06:31:58
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           The shipment has been assigned, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/12/2021 06:31:35
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/11/2021 05:01:09
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/07/2021 07:09:00
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/07/2021 07:06:09
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/07/2021 07:02:21
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/07/2021 06:57:20
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item">
                     <div class="kt-notification__item-icon">
                        <i class="flaticon-gift kt-font-success"></i>
                     </div>
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           There is a new shipment, please check it
                        </div>
                        <div class="kt-notification__item-time kt-font-sm">
                           05/07/2021 06:49:14
                        </div>
                     </div>
                  </a>
                  <a href="#" class="kt-notification__item kt-align-center">
                     <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                           <strong>View all notifications</strong>
                        </div>
                     </div>
                  </a>
                  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                     <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                  </div>
                  <div class="ps__rail-y" style="top: 0px; right: 0px;">
                     <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                  </div>
               </div>
            </div>
         </div>
         <script>
            function notificationPanel(){
               var notificationPanel = KTUtil.get('topbar_notifications_notifications');
               var panel = KTUtil.get('kt_quick_panel');
               KTUtil.scrollInit(notificationPanel, {
                   mobileNativeScroll: true,
                   resetHeightOnDestroy: true,
                   handleWindowResize: true,
                   height: function() {
                       return '300';
                   }
               });
            }
         </script>
      </div>
      <!--end: Notifications -->
      <!--begin: Language bar -->
      <div class="kt-header__topbar-item kt-header__topbar-item--langs">
         <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
            <span class="kt-header__topbar-icon kt-header__topbar-icon--info">
            <img class="" src="assets/img/en.svg" alt="">
            </span>
         </div>
         <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(1067px, 64px, 0px);">
            <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
               <li class="kt-nav__item kt-nav__item--active locale" rel="en">
                  <a href="#" class="kt-nav__link">
                  <span class="kt-nav__link-icon"><img src="assets/img/en.svg" alt=""></span>
                  <span class="kt-nav__link-text">English</span>
                  </a>
               </li>
               <li class="kt-nav__item  locale" rel="ar">
                  <a href="#" class="kt-nav__link">
                  <span class="kt-nav__link-icon"><img src="assets/img/ar.svg" alt=""></span>
                  <span class="kt-nav__link-text">Arabic</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
      <!--end: Language bar -->
      <!--begin: User bar -->
      <div class="kt-header__topbar-item kt-header__topbar-item--user">
         <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
            <div class="kt-header__topbar-user">
               <span class="kt-header__topbar-welcome">Hi,</span>
               <span class="kt-header__topbar-username">{{auth()->user()->name}}</span>
               <span class="kt-badge kt-badge--username kt-badge--unified-brand kt-badge--lg kt-badge--rounded kt-font-light kt-badge--bold">SY</span>
            </div>
         </div>
         <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(1303px, 64px, 0px);">
            <!--begin: Head -->
            <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
               <div class="kt-user-card__avatar">
                  <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">S</span>
               </div>
               <div class="kt-user-card__name">
                   {{ucfirst(auth()->user()->name)}}
               </div>
               <!--<div class="kt-user-card__badge kt-hidden">
                  <span class="btn btn-success btn-sm btn-bold btn-font-md">0 messages</span>
                  </div>-->
            </div>
            <!--end: Head -->
            <!--begin: Navigation -->
            <div class="kt-notification">
               <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                     <i class="flaticon2-calendar-3 kt-font-success"></i>
                  </div>
                  <div class="kt-notification__item-details">
                     <div class="kt-notification__item-title kt-font-bold" onclick="window.location.href='{{route('show.profile',auth()->user()->id)}}'">
                        My Profile
                     </div>
                     <div class="kt-notification__item-time">
                        Account settings and more
                     </div>
                  </div>
               </a>
               <!--
                  <a href="http://localhost/ebilty-web/en/dashboard/inbox" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                  <i class="flaticon2-mail kt-font-warning"></i>
                  </div>
                  <div class="kt-notification__item-details">
                  <div class="kt-notification__item-title kt-font-bold">
                  messages
                  </div>
                  <div class="kt-notification__item-time">
                  Customers messages from website                                                        </div>
                  </div>
                  </a>
                  -->
               <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                     <i class="flaticon2-rocket-1 kt-font-danger"></i>
                  </div>
                  <div class="kt-notification__item-details">
                     <div class="kt-notification__item-title kt-font-bold">
                        My Notifications
                     </div>
                     <div class="kt-notification__item-time">
                        all pervious notifications
                     </div>
                  </div>
               </a>
               <a href="#" class="kt-notification__item kt-hidden">
                  <div class="kt-notification__item-icon">
                     <i class="flaticon2-hourglass kt-font-brand"></i>
                  </div>
                  <div class="kt-notification__item-details">
                     <div class="kt-notification__item-title kt-font-bold">
                        My Tasks
                     </div>
                     <div class="kt-notification__item-time">
                        latest tasks and requests
                     </div>
                  </div>
               </a>
               <a href="#" class="kt-hidden kt-notification__item">
                  <div class="kt-notification__item-icon">
                     <i class="flaticon2-cardiogram kt-font-warning"></i>
                  </div>
                  <div class="kt-notification__item-details">
                     <div class="kt-notification__item-title kt-font-bold">
                        Billing
                     </div>
                     <div class="kt-notification__item-time">
                        billing &amp; statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                     </div>
                  </div>
               </a>
               <div class="kt-notification__custom kt-space-between">
                   <a href="{{route('logout')}}" class="btn btn-danger btn-block btn-bold kt-font-light"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                   <form id="logout-form"  class=""  action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>
{{--                  <a href="#" target="_blank" class="btn btn-clean btn-sm btn-bold kt-hidden">Upgrade Plan</a>--}}
               </div>
            </div>
            <!--end: Navigation -->
         </div>
      </div>
      <!--end: User bar -->
   </div>

    <!-- end:: Header Topbar -->

</div>
<!-- end:: Header -->
