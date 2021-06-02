@extends('layout.app')


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
        <div class="kt-grid__item kt-app__toggle kt-app__aside kt-padding-r-20" id="kt_user_profile_aside">
        <!--begin:: Widgets/Applications/User/Profile1-->
        <div class="kt-portlet kt-portlet--height-fluid-">
            <div class="kt-inbox__nav">
                <ul class="kt-nav kt-nav--active-bg" id="kt_nav" role="tablist">
                    <li class="kt-nav__item kt-nav__item--active">
                    <a href="#" class="kt-nav__link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">System Configuration</span>
                    </a>
                    </li>
                    <li class="kt-nav__item ">
                    <a href="#" class="kt-nav__link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M7.70696074,11.6465196 L4.15660341,9.75299572 C3.96167938,9.64903623 3.88793804,9.40674327 3.99189753,9.21181925 C4.08361072,9.03985702 4.28590727,8.95902234 4.47087102,9.0204286 L9.57205231,10.7139738 L7.70696074,11.6465196 Z M12.7322989,14.3267 L16.3686753,12.9703901 L18.6316817,13.7216874 L18.6299527,13.7225513 C20.0084876,14.1925077 21,15.4985341 21,17.0361406 C21,18.9691372 19.4329966,20.5361406 17.5,20.5361406 C15.5670034,20.5361406 14,18.9691372 14,17.0361406 C14,16.3880326 14.176158,15.7810686 14.4832056,15.2605169 L12.7322989,14.3267 Z M17.5,15.5361406 C16.6715729,15.5361406 16,16.2077134 16,17.0361406 C16,17.8645677 16.6715729,18.5361406 17.5,18.5361406 C18.3284271,18.5361406 19,17.8645677 19,17.0361406 C19,16.2077134 18.3284271,15.5361406 17.5,15.5361406 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path d="M17.5,9 C18.3284271,9 19,8.32842712 19,7.5 C19,6.67157288 18.3284271,6 17.5,6 C16.6715729,6 16,6.67157288 16,7.5 C16,8.32842712 16.6715729,9 17.5,9 Z M14.4832056,9.27562366 C14.176158,8.75507197 14,8.14810794 14,7.5 C14,5.56700338 15.5670034,4 17.5,4 C19.4329966,4 21,5.56700338 21,7.5 C21,9.03760648 20.0084876,10.3436328 18.6299527,10.8135893 L18.6316817,10.8144531 L4.47087102,15.515712 C4.28590727,15.5771182 4.08361072,15.4962835 3.99189753,15.3243213 C3.88793804,15.1293973 3.96167938,14.8871043 4.15660341,14.7831448 L14.4832056,9.27562366 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Setup Company</span>
                    </a>
                    </li>
                    <li class="kt-nav__item ">
                    <a href="#" class="kt-nav__link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="Bound" opacity="0.200000003" x="0" y="0" width="24" height="24"></rect>
                                <path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                <path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Setup Website</span>
                    </a>
                    </li>
                    <li class="kt-nav__item ">
                    <a href="#" class="kt-nav__link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <rect id="Rectangle" fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"></rect>
                                <rect id="Rectangle-Copy-3" fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"></rect>
                                <path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Taxes and fees</span>
                    </a>
                    </li>
                    <li class="kt-nav__item ">
                    <a href="#" class="kt-nav__link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M13,5 L15,5 L15,20 L13,20 L13,5 Z M5,5 L5,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,6 C2,5.44771525 2.44771525,5 3,5 L5,5 Z M16,5 L18,5 L18,20 L16,20 L16,5 Z M20,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,19 C22,19.5522847 21.5522847,20 21,20 L20,20 L20,5 Z" id="Combined-Shape" fill="#000000"></path>
                                <polygon id="Path" fill="#000000" opacity="0.3" points="9 5 9 20 7 20 7 5"></polygon>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Tracking and Invoice</span>
                    </a>
                    </li>
                    <li class="kt-nav__item ">
                    <a class="kt-nav__link collapsed" role="tab" id="kt_nav_link_1" data-toggle="collapse" href="#kt_nav_sub_1" aria-expanded=" true">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="#000000"></path>
                                <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Definitions</span>
                        <span class="kt-nav__link-arrow"></span>
                    </a>
                    <ul class="kt-nav__sub collapse " id="kt_nav_sub_1" role="tabpanel" aria-labelledby="m_nav_link_1" data-parent="#kt_nav">
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Branches</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Treasury</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Delivery Times</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Courier Company</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Shipping Mode</span>
                            </a>
                        </li>
                        <!--<li class="kt-nav__item " aria-haspopup="true" >
                            <a  href="http://127.0.0.1:8000/dashboard/settings/payments" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Payment Methods</span>
                            </a>
                            </li>-->
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Packaging Type</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Statuses</span>
                            </a>
                        </li>
                        <!-- 	<li class="kt-nav__item " aria-haspopup="true" >
                            <a  href="http://127.0.0.1:8000/dashboard/settings/Stockstatuses" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">InStock Statuses</span>
                            </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true" >
                            <a  href="http://127.0.0.1:8000/dashboard/settings/Customstatuses" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">InCustom Statuses</span>
                            </a>
                            </li> -->
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Item Categories</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Cars</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">vehicle</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <li class="kt-nav__item ">
                    <a class="kt-nav__link collapsed" role="tab" id="kt_nav_link_6" data-toggle="collapse" href="#kt_nav_sub_6" aria-expanded=" true">
                    <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                    <span class="kt-nav__link-text">Container</span>
                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-nav__sub collapse " id="kt_nav_sub_6" role="tabpane6" aria-labelledby="m_nav_link_6" data-parent="#kt_nav">
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Location Type</span>
                                </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">status</span>
                                </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Reason of Arrival</span>
                                </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Size</span>
                                </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Labels</span>
                                </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Ground Handler</span>
                                </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Breakdown</span>
                                </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Destination</span>
                                </a>
                            </li>
                            <!-- <li class="kt-nav__item " aria-haspopup="true" >
                                <a  href="http://127.0.0.1:8000/dashboard/settings/lines" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Lines</span>
                                </a>
                                </li>
                                <li class="kt-nav__item " aria-haspopup="true" >
                                <a  href="http://127.0.0.1:8000/dashboard/settings/incoterms" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Incoterms</span>
                                </a>
                                </li> -->
                        </ul>
                    </div>
                    </li>
                    <li class="kt-nav__item ">
                    <a class="kt-nav__link collapsed" role="tab" id="kt_nav_link_7" data-toggle="collapse" href="#kt_nav_sub_7" aria-expanded=" true">
                    <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                    <span class="kt-nav__link-text">Shipments</span>
                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-nav__sub collapse " id="kt_nav_sub_7" role="tabpane7" aria-labelledby="m_nav_link_7" data-parent="#kt_nav">
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Shipments Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-nav__sub collapse " id="kt_nav_sub_7" role="tabpane7" aria-labelledby="m_nav_link_7" data-parent="#kt_nav">
                            <li class="kt-nav__item " aria-haspopup="true">
                                <a href="#" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Customers Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="kt-nav__item ">
                    <a class="kt-nav__link collapsed" role="tab" id="kt_nav_link_2" data-toggle="collapse" href="#kt_nav_sub_2" aria-expanded=" true">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <circle id="Oval" fill="#000000" opacity="0.3" cx="12" cy="12" r="9"></circle>
                                <path d="M11.7357634,20.9961946 C6.88740052,20.8563914 3,16.8821712 3,12 C3,11.9168367 3.00112797,11.8339369 3.00336944,11.751315 C3.66233009,11.8143341 4.85636818,11.9573854 4.91262842,12.4204038 C4.9904938,13.0609191 4.91262842,13.8615942 5.45804656,14.101772 C6.00346469,14.3419498 6.15931561,13.1409372 6.6267482,13.4612567 C7.09418079,13.7815761 8.34086797,14.0899175 8.34086797,14.6562185 C8.34086797,15.222396 8.10715168,16.1034596 8.34086797,16.2636193 C8.57458427,16.423779 9.5089688,17.54465 9.50920913,17.7048097 C9.50956962,17.8649694 9.83857487,18.6793513 9.74040201,18.9906563 C9.65905192,19.2487394 9.24857641,20.0501554 8.85059781,20.4145589 C9.75315358,20.7620621 10.7235846,20.9657742 11.7357634,20.9960544 L11.7357634,20.9961946 Z M8.28272988,3.80112099 C9.4158415,3.28656421 10.6744554,3 12,3 C15.5114513,3 18.5532143,5.01097452 20.0364482,7.94408274 C20.069657,8.72412177 20.0638332,9.39135321 20.2361262,9.6327358 C21.1131932,10.8600506 18.0995147,11.7043158 18.5573343,13.5605384 C18.7589671,14.3794892 16.5527814,14.1196773 16.0139722,14.886394 C15.4748026,15.6527403 14.1574598,15.137809 13.8520064,14.9904917 C13.546553,14.8431744 12.3766497,15.3341497 12.4789081,14.4995164 C12.5805657,13.664636 13.2922889,13.6156126 14.0555619,13.2719546 C14.8184743,12.928667 15.9189236,11.7871741 15.3781918,11.6380045 C12.8323064,10.9362407 11.963771,8.47852395 11.963771,8.47852395 C11.8110443,8.44901109 11.8493762,6.74109366 11.1883616,6.69207022 C10.5267462,6.64279981 10.170464,6.88841096 9.20435656,6.69207022 C8.23764828,6.49572949 8.44144409,5.85743687 8.2887174,4.48255778 C8.25453994,4.17415686 8.25619136,3.95717082 8.28272988,3.80112099 Z M20.9991771,11.8770357 C20.9997251,11.9179585 21,11.9589471 21,12 C21,16.9406923 17.0188468,20.9515364 12.0895088,20.9995641 C16.970233,20.9503326 20.9337111,16.888438 20.9991771,11.8770357 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Places</span>
                        <span class="kt-nav__link-arrow"></span>
                    </a>
                    <ul class="kt-nav__sub collapse " id="kt_nav_sub_2" role="tabpanel" aria-labelledby="m_nav_link_2" data-parent="#kt_nav">
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Countries</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">States</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Cities</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Areas</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <li class="kt-nav__item ">
                    <a class="kt-nav__link collapsed" role="tab" id="kt_nav_link_3" data-toggle="collapse" href="#kt_nav_sub_3" aria-expanded=" true">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#000000"></path>
                                <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"></rect>
                                <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Components</span>
                        <span class="kt-nav__link-arrow"></span>
                    </a>
                    <ul class="kt-nav__sub collapse " id="kt_nav_sub_3" role="tabpanel" aria-labelledby="m_nav_link_3" data-parent="#kt_nav">
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">SMS Setup</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Mail Configuration</span>
                            </a>
                        </li>
                        <!--<li class="kt-nav__item " aria-haspopup="true" >
                            <a  href="http://127.0.0.1:8000/dashboard/settings/call" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Call Verify</span>
                            </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true" >
                            <a  href="http://127.0.0.1:8000/dashboard/settings/chat" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Live Chat</span>
                            </a>
                            </li>-->
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Notifications</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Google APIs</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Payment Gateways</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <!--<li class="kt-nav__item  kt-nav__item--submenu " aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="javascript:;" class="kt-nav__link kt-menu__toggle">
                        <i class="kt-nav__link-bullet kt-nav__link-bullet--dot"><span></span></i>
                        <span class="kt-nav__link-text">Templates</span>
                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-nav__item " aria-haspopup="true" >
                                <a  href="http://127.0.0.1:8000/dashboard/settings/email-templates" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Email Templates</span>
                                </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true" >
                                <a  href="http://127.0.0.1:8000/dashboard/settings/sms-templates" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">SMS Templates</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="kt-nav__item  kt-nav__item--submenu " aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
                    <a  href="javascript:;" class="kt-nav__link kt-menu__toggle">
                        <i class="kt-nav__link-bullet kt-nav__link-bullet--dot"><span></span></i>
                        <span class="kt-nav__link-text">Website Management</span>
                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-nav__item " aria-haspopup="true" >
                                <a  href="http://127.0.0.1:8000/dashboard/settings/website-plugins" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Website Plugins</span>
                                </a>
                            </li>
                            <li class="kt-nav__item " aria-haspopup="true" >
                                <a  href="http://127.0.0.1:8000/dashboard/settings/website-builder" class="kt-nav__link ">
                                <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                <span class="kt-nav__link-text">Website Builder</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    </li>-->
                    <li class="kt-nav__item ">
                    <a class="kt-nav__link collapsed" role="tab" id="kt_nav_link_4" data-toggle="collapse" href="#kt_nav_sub_4" aria-expanded=" true">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Employees</span>
                        <span class="kt-nav__link-arrow"></span>
                    </a>
                    <ul class="kt-nav__sub collapse " id="kt_nav_sub_4" role="tabpanel" aria-labelledby="m_nav_link_4" data-parent="#kt_nav">
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Employees</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Departments</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <li class="kt-nav__item ">
                    <a class="kt-nav__link collapsed" role="tab" id="kt_nav_link_5" data-toggle="collapse" href="#kt_nav_sub_5" aria-expanded=" true">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
                                <circle id="Oval" fill="#000000" opacity="0.3" cx="12" cy="10" r="6"></circle>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Localizations</span>
                        <span class="kt-nav__link-arrow"></span>
                    </a>
                    <ul class="kt-nav__sub collapse " id="kt_nav_sub_5" role="tabpanel" aria-labelledby="m_nav_link_5" data-parent="#kt_nav">
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Languages</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Translate</span>
                            </a>
                        </li>
                        <li class="kt-nav__item " aria-haspopup="true">
                            <a href="#" class="kt-nav__link ">
                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                            <span class="kt-nav__link-text">Currencies</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <li class="kt-nav__item ">
                    <a href="#" class="kt-nav__link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
                                <rect id="Rectangle-16" fill="#000000" opacity="0.3" x="12" y="4" width="3" height="5" rx="0.5"></rect>
                            </g>
                        </svg>
                        <span class="kt-nav__link-text">Data Backup</span>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <!-- end:: Aside -->
        <!--End::Aside-->
        <!--Begin:: Inbox List-->
        <div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown" id="kt_inbox_list">
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
                                            <option value="en" selected="" data-live-search="true">English</option>
                                            <option value="ar" data-live-search="true">Arabic</option>
                                        </select>
                                        <div class="dropdown-menu " x-placement="top-start" style="max-height: 241.75px; overflow: hidden; min-height: 0px; position: absolute; transform: translate3d(0px, -120px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <div class="inner " role="listbox" id="bs-select-1" tabindex="-1" aria-activedescendant="bs-select-1-0" style="max-height: 211.75px; overflow-y: auto; min-height: 0px;">
                                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                                                <li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-1-0" tabindex="0" aria-setsize="2" aria-posinset="1" aria-selected="true"><span class="text">English</span></a></li>
                                                <li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"><span class="text">Arabic</span></a></li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">TimeZone</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="dropdown bootstrap-select form-control">
                                        <select class="form-control" name="timezone_offset" data-live-search="true" required="" tabindex="-98">
                                            <option data-hidden="true"></option>
                                            <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                                            <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                                            <option value="-10:00">(GMT -10:00) Hawaii</option>
                                            <option value="-09:50">(GMT -9:30) Taiohae</option>
                                            <option value="-09:00">(GMT -9:00) Alaska</option>
                                            <option value="-08:00" selected="">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                            <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                            <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                            <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                            <option value="-04:50">(GMT -4:30) Caracas</option>
                                            <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                            <option value="-03:50">(GMT -3:30) Newfoundland</option>
                                            <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                            <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                                            <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                                            <option value="+00:00">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                            <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                            <option value="+02:00">(GMT +2:00) Cairo, Kaliningrad, South Africa</option>
                                            <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                            <option value="+03:50">(GMT +3:30) Tehran</option>
                                            <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                            <option value="+04:50">(GMT +4:30) Kabul</option>
                                            <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                            <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                            <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                                            <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                            <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                                            <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                            <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                            <option value="+08:75">(GMT +8:45) Eucla</option>
                                            <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                            <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                                            <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                            <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                                            <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                            <option value="+11:50">(GMT +11:30) Norfolk Island</option>
                                            <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                            <option value="+12:75">(GMT +12:45) Chatham Islands</option>
                                            <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                                            <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
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
                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Date Format</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="dropdown bootstrap-select form-control">
                                        <select class="form-control" name="dateformat" required="" tabindex="-98">
                                            <option data-hidden="true"></option>
                                            <option value="d/m/Y">01/06/2021</option>
                                            <option value="m/d/Y" selected="">06/01/2021</option>
                                            <option value="d M, Y">01 Jun, 2021</option>
                                            <option value="M d, Y">Jun 01, 2021</option>
                                        </select>
                                        <div class="dropdown-menu ">
                                            <div class="inner show" role="listbox" id="bs-select-3" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Currency</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="dropdown bootstrap-select form-control">
                                        <select class="form-control" id="currency" name="currency" data-live-search="true" required="" tabindex="-98">
                                            <option data-hidden="true"></option>
                                            <option value="8">USD</option>
                                            <option value="19">Egyptian Pound</option>
                                            <option value="20" selected="">U.S. Dollar</option>
                                            <option value="21">Euro</option>
                                            <option value="22">Pound Sterling</option>
                                            <option value="23">Australian Dollar</option>
                                        </select>
                                        <div class="dropdown-menu ">
                                            <div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-4" aria-autocomplete="list"></div>
                                            <div class="inner show" role="listbox" id="bs-select-4" tabindex="-1">
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