<!DOCTYPE html>
<html lang="en">
@include('layout/head')
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
          @include('layout/sidebar')
          @include('layout/header')
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
    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
       var KTAppOptions = {
           "colors":{
               "state":{
                   "brand":"#5d78ff",
                   "light":"#ffffff",
                   "dark":"#282a3c",
                   "primary":"#5867dd",
                   "success":"#34bfa3",
                   "info":"#36a3f7",
                   "warning":"#ffb822",
                   "danger":"#fd3995"
               },
               "base":{
                   "label":[
                       "#c5cbe3",
                       "#a1a8c3",
                       "#3d4465",
                       "#3e4466"
                   ],
                   "shape":[
                       "#f0f3ff",
                       "#d9dffa",
                       "#afb4d4",
                       "#646c9a"
                   ]
               }
           },
           "text":{
               'loading' : 'Loading ...'
           },
           "timezone_offset": "-480",
           "timezone_offset_hours": "-8",
           "dateformat": "mm/dd/yyyy",
           "daterangeformat": "MM/DD/Y"
       };
    </script>
    <!-- end::Global Config -->
    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/js/classie.js" type="text/javascript"></script>
    <script src="assets/js/notificationFx.js" type="text/javascript"></script>
    <script src="assets/js/vendors.bundle.js" type="text/javascript"></script>
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->
    <!--begin::Page Scripts(used by this page) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/js/ajax-bootstrap-select.min.js"></script>
    <script src="assets/js/framework.js"></script>
    <script src="assets/js/framework.extras.js"></script>
    <link rel="stylesheet" property="stylesheet" href="#">

    <script>
      $(document).ready(function() {
         $('select').selectpicker({
            size: 4
         });
      });
   </script>

    <script>
       "use strict";
       
       // Class definition
       var KTDashboard = function() {
       
          // Daterangepicker Init
          var daterangepickerInit = function() {
              if ($('#kt_dashboard_daterangepicker').length == 0) {
                  return;
              }
       
              moment.locale('en');
              moment.updateLocale('en', {
                  months : [
                      "January", "February", "March", "April", "May", "June", "July",
                      "August", "September", "October", "November", "December"
                  ]
              });
              var picker = $('#kt_dashboard_daterangepicker');
              var start = moment().utcOffset(KTAppOptions.timezone_offset).startOf('month');
              var end = moment().utcOffset(KTAppOptions.timezone_offset).endOf('month');
       
              function cb(start, end, label) {
                  var title = '';
                  var range = '';
       
                  if ((end - start) < 100 || label == 'Today') {
                      title = 'Today:';
                      range = start.format(KTAppOptions.daterangeformat);
                  } else if (label == 'Yesterday') {
                      title = 'Yesterday:';
                      range = start.format(KTAppOptions.daterangeformat);
                  } else {
                      range = start.format(KTAppOptions.daterangeformat) + ' - ' + end.format(KTAppOptions.daterangeformat);
                  }
       
                  $('#kt_dashboard_daterangepicker_date').html(range);
                  $('#kt_dashboard_daterangepicker_title').html(title);
       
                  //List All Widgets in dashboard
                  KTApp.block('#summary_container', {});
                  KTApp.block('#charts', {});
                  KTApp.block('#listing_container', {});
                  $.request('onRefreshTime', {
                      data: {start: start.format(KTAppOptions.daterangeformat), end: end.format(KTAppOptions.daterangeformat)},
                      update: { summarywidget: '#summary',chartswidget: '#charts', listingwidget: '#listing' },
                      complete: function(e) {
                          Chart.helpers.each(Chart.instances, function (instance) {
                               instance.destroy();
                          });
       
                                                  quickStats();
                                              listing();
                          KTApp.unblock('#summary_container');
                          KTApp.unblock('#listing_container');
                      }
                  });
              }
       
              picker.daterangepicker({
                  direction: KTUtil.isRTL(),
                  locale: {
                      "format": KTAppOptions.daterangeformat,
                      "separator": " - ",
                      "applyLabel": "Apply",
                      "cancelLabel": "Cancel",
                      "fromLabel": "From",
                      "toLabel": "to",
                      "customRangeLabel": "Custom",
                      "daysOfWeek": [
                          "Su",
                          "Mo",
                          "Tu",
                          "We",
                          "Th",
                          "Fr",
                          "Sa"
                      ],
                      "monthNames": [
                          "January",
                          "February",
                          "March",
                          "April",
                          "May",
                          "June",
                          "July",
                          "August",
                          "September",
                          "October",
                          "November",
                          "December"
                      ],
                      "monthsShort": [
                          "January",
                          "February",
                          "March",
                          "April",
                          "May",
                          "June",
                          "July",
                          "August",
                          "September",
                          "October",
                          "November",
                          "December"
                      ],
                      "firstDay": 1
                  },
                  startDate: start,
                  endDate: end,
                  opens: 'left',
                  ranges: {
                      'Today': [moment().utcOffset(KTAppOptions.timezone_offset), moment().utcOffset(KTAppOptions.timezone_offset)],
                      'Yesterday': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days')],
                      'Last 7 Days': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(6, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                      'Last 30 Days': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(29, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                      'This Month': [moment().utcOffset(KTAppOptions.timezone_offset).startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).endOf('month')],
                      'Last Month': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').endOf('month')]
                  }
              }, cb);
       
              cb(start, end, '');
          }
       
          return {
              // Init demos
              init: function() {
                  daterangepickerInit();
                  var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': KTAppOptions.text.loading});
                  loading.show();
       
                  setTimeout(function() {
                      loading.hide();
                  }, 3000);
              }
          };
       }();
       
       function _initSparklineChart(src, data, color, border) {
          if (src.length == 0) {
              return;
          }
       
          var config = {
              type: 'line',
              data: {
                  labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                  datasets: [{
                      label: "",
                      borderColor: color,
                      borderWidth: border,
       
                      pointHoverRadius: 4,
                      pointHoverBorderWidth: 12,
                      pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                      pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                      pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                      pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                      fill: false,
                      data: data,
                  }]
              },
              options: {
                  title: {
                      display: false,
                  },
                  tooltips: {
                      enabled: false,
                      intersect: false,
                      mode: 'nearest',
                      xPadding: 10,
                      yPadding: 10,
                      caretPadding: 10
                  },
                  legend: {
                      display: false,
                      labels: {
                          usePointStyle: false
                      }
                  },
                  responsive: true,
                  maintainAspectRatio: true,
                  hover: {
                      mode: 'index'
                  },
                  scales: {
                      xAxes: [{
                          display: false,
                          gridLines: false,
                          scaleLabel: {
                              display: true,
                              labelString: 'Month'
                          }
                      }],
                      yAxes: [{
                          display: false,
                          gridLines: false,
                          scaleLabel: {
                              display: true,
                              labelString: 'Value'
                          },
                          ticks: {
                              beginAtZero: true
                          }
                      }]
                  },
       
                  elements: {
                      point: {
                          radius: 4,
                          borderWidth: 12
                      },
                  },
       
                  layout: {
                      padding: {
                          left: 0,
                          right: 10,
                          top: 5,
                          bottom: 0
                      }
                  }
              }
          };
       
          new Chart(src, config);
       }
       // Class initialization on page load
       jQuery(document).ready(function() {
          KTDashboard.init();
       });
    </script>            <script type="text/javascript">
       function initAjaxSelectPicker(url,item,dependency = null){
           var options = {
               ajax: {
                   url: url,
                   type: "GET",
                   dataType: "json",
                   data : function() {
                       return {
                           dependency_id: $(dependency+" option:selected").val()
                       };
                   },
               },
               cache: false,
               extendData:
               [
                   {
                       key: "dependency_id",
                       func: function() {
                           return $(dependency+' option:first').val();
                       }
                   }
               ]
           };
           $(item).selectpicker().filter(".with-ajax").ajaxSelectPicker(options);
           $(item).trigger("change");
           $('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
               $(item).selectpicker('refresh');
           });
       
       }
       function flashRequest(type,message){
       
           swal.fire({
               buttonsStyling: false,
               title: message,
               type: type,
               showConfirmButton: false,
               timer: 3000
           });
       }
       KTUtil.ready(function () {
       
           $.validator.addMethod("customDateValidator", function(value, element) {
                   // parseDate throws exception if the value is invalid
                   try{$.datepicker.parseDate( KTAppOptions.dateformat, value);return true;}
                   catch(e){return false;}
               },
               "Please enter a valid date"
           );
       
           if('dd/mm/yyyy' == KTAppOptions.dateformat){
               console.log(KTAppOptions.dateformat);
               $.validator.methods.date = function (value, element) {
                   value = dateValue(value);
                   return this.optional(element) || !/Invalid|NaN/.test(new Date(value).toString());;
               }
       
               function dateValue(value) {
                   var date = value.split("/");
                   return date[2] + "/" + date[1] + "/" + date[0]
               }
           }
       
           $('body').on('click', '.locale', function(e){
               e.preventDefault();
               var selected = $(this).attr('rel');
               if(selected != ''){
                   $.request('onSwitchLocale', {
                       data: {locale: selected}
                   });
               }
           });
           $('select').selectpicker({
               noneSelectedText: 'Nothing selected',
           });
           $('body').on('changed.bs.select','.with-ajax', function(e, clickedIndex, newValue, oldValue) {
               $('.with-ajax').selectpicker('refresh');
           });
       
           if (KTUtil.get('kt_quick_search_dropdown')) {
               KTQuickSearch().init(KTUtil.get('kt_quick_search_dropdown'));
           }
       
           if (KTUtil.get('kt_quick_search_inline')) {
               KTQuickSearchInline().init(KTUtil.get('kt_quick_search_inline'));
           }
       
           if (KTUtil.get('kt_quick_search_offcanvas')) {
               KTQuickSearchOffcanvas().init(KTUtil.get('kt_quick_search_offcanvas'));
           }
       
           $('input.decimal').blur(function(){
               var num = parseFloat($(this).val());
               var cleanNum = num.toFixed(2);
               $(this).val(cleanNum);
           });
       
           var arrows;
           if (KTUtil.isRTL()) {
               arrows = {
                   leftArrow: '<i class="la la-angle-right"></i>',
                   rightArrow: '<i class="la la-angle-left"></i>'
               }
           } else {
               arrows = {
                   leftArrow: '<i class="la la-angle-left"></i>',
                   rightArrow: '<i class="la la-angle-right"></i>'
               }
           }
       
           $.fn.datepicker.dates['en'] = {
               days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
               daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
               daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
               months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
               monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
               today: "Today",
               clear: "Clear",
               format: KTAppOptions.dateformat,
               titleFormat: KTAppOptions.dateformat, /* Leverages same syntax as 'format' */
               weekStart: 0
           };
           $('.date').datepicker({
               rtl: KTUtil.isRTL(),
               language: 'en',
               format: KTAppOptions.dateformat,
               todayHighlight: true,
               orientation: "bottom left",
               templates: arrows
           });
       
               var momentNow = moment();
       
           console.log(-480);
           console.log(-8);
           console.log(momentNow.utcOffset(4));
           console.log(momentNow.utcOffset(-8));
           var interval = setInterval(function() {
               if('ar' == 'en'){
                   moment.locale('ar-sa');
               }
               var momentNow = moment();
               $('#date-part').html(momentNow.utcOffset(-8).format(KTAppOptions.daterangeformat) + ' ');
               $('#time-part').html(momentNow.utcOffset(-8).format('hh:mm:ss A'));
           }, 100);
       
       });
       
       "use strict";
       
       var KTQuickSearch = function() {
           var target;
           var form;
           var input;
           var closeIcon;
           var resultWrapper;
           var resultDropdown;
           var resultDropdownToggle;
           var inputGroup;
           var query = '';
       
           var hasResult = false;
           var timeout = false;
           var isProcessing = false;
           var requestTimeout = 200; // ajax request fire timeout in milliseconds
           var spinnerClass = 'kt-spinner kt-spinner--input kt-spinner--sm kt-spinner--brand kt-spinner--right';
           var resultClass = 'kt-quick-search--has-result';
           var minLength = 2;
       
           var showProgress = function() {
               isProcessing = true;
               KTUtil.addClass(inputGroup, spinnerClass);
       
               if (closeIcon) {
                   KTUtil.hide(closeIcon);
               }
           }
       
           var hideProgress = function() {
               isProcessing = false;
               KTUtil.removeClass(inputGroup, spinnerClass);
       
               if (closeIcon) {
                   if (input.value.length < minLength) {
                       KTUtil.hide(closeIcon);
                   } else {
                       KTUtil.show(closeIcon, 'flex');
                   }
               }
           }
       
           var showDropdown = function() {
               if (resultDropdownToggle && !KTUtil.hasClass(resultDropdown, 'show')) {
                   $(resultDropdownToggle).dropdown('toggle');
                   $(resultDropdownToggle).dropdown('update');
               }
           }
       
           var hideDropdown = function() {
               if (resultDropdownToggle && KTUtil.hasClass(resultDropdown, 'show')) {
                   $(resultDropdownToggle).dropdown('toggle');
               }
           }
       
           var processSearch = function() {
               if (hasResult && query === input.value) {
                   hideProgress();
                   KTUtil.addClass(target, resultClass);
                   showDropdown();
                   KTUtil.scrollUpdate(resultWrapper);
       
                   return;
               }
       
               query = input.value;
       
               KTUtil.removeClass(target, resultClass);
               showProgress();
               hideDropdown();
       
               $.request('onQuicksearch', {
                   data: {query: query},
                   success: function(res) {
                       hasResult = true;
                       hideProgress();
                       KTUtil.addClass(target, resultClass);
                       KTUtil.setHTML(resultWrapper, res.result);
                       showDropdown();
                       KTUtil.scrollUpdate(resultWrapper);
                   },
                   error: function(res) {
                       hasResult = false;
                       hideProgress();
                       KTUtil.addClass(target, resultClass);
                       KTUtil.setHTML(resultWrapper, '<span class="kt-quick-search__message kt-font-danger">Connection error. Pleae try again later.</div>');
                       showDropdown();
                       KTUtil.scrollUpdate(resultWrapper);
                   }
               });
           }
       
           var handleCancel = function(e) {
               input.value = '';
               query = '';
               hasResult = false;
               KTUtil.hide(closeIcon);
               KTUtil.removeClass(target, resultClass);
               hideDropdown();
           }
       
           var handleSearch = function() {
               if (input.value.length < minLength) {
                   hideProgress();
                   hideDropdown();
       
                   return;
               }
       
               if (isProcessing == true) {
                   return;
               }
       
               if (timeout) {
                   clearTimeout(timeout);
               }
       
               timeout = setTimeout(function() {
                   processSearch();
               }, requestTimeout);
           }
       
           return {
               init: function(element) {
                   // Init
                   target = element;
                   form = KTUtil.find(target, '.kt-quick-search__form');
                   input = KTUtil.find(target, '.kt-quick-search__input');
                   closeIcon = KTUtil.find(target, '.kt-quick-search__close');
                   resultWrapper = KTUtil.find(target, '.kt-quick-search__wrapper');
                   resultDropdown = KTUtil.find(target, '.dropdown-menu');
                   resultDropdownToggle = KTUtil.find(target, '[data-toggle="dropdown"]');
                   inputGroup = KTUtil.find(target, '.input-group');
       
                   // Attach input keyup handler
                   KTUtil.addEvent(input, 'keyup', handleSearch);
                   KTUtil.addEvent(input, 'focus', handleSearch);
       
                   // Prevent enter click
                   form.onkeypress = function(e) {
                       var key = e.charCode || e.keyCode || 0;
                       if (key == 13) {
                           e.preventDefault();
                       }
                   }
       
                   KTUtil.addEvent(closeIcon, 'click', handleCancel);
               }
           };
       };
       
       var KTQuickSearchInline = KTQuickSearch;
       var KTQuickSearchOffcanvas = KTQuickSearch;
                   
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
       $('#vehicleTypeCarousel').slick({
           centerMode: true,
           arrows: true,
           centerPadding: '60px',
           prevArrow: "<button type='button' class='slick-prev'><i class='fa fa-chevron-left fa-2x' aria-hidden='true'></i></button>",
           nextArrow: "<button type='button' class='slick-next'><i class='fa fa-chevron-right fa-2x' aria-hidden='true'></i></button>",
           slidesToShow: 3,
           slidesToScroll: 1,
           autoplay: false,
           infinite: true,
           autoplaySpeed: 2000,
           responsive: [
               {
                   breakpoint: 768,
                   settings: {
                       arrows: true,
                       centerMode: true,
                       centerPadding: '40px',
                       slidesToShow: 3,
                       slidesToScroll: 1,
                   }
               },
               {
                   breakpoint: 480,
                   settings: {
                       arrows: true,
                       centerMode: true,
                       centerPadding: '30px',
                       slidesToShow: 1
                   }
               }
           ]
       });
       
    </script>
    <!--end::Page Scripts -->
    </div>
 </body>
 </html>