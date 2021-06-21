@extends('admin.layout.app')
@section('content')
    {{--    <link rel="stylesheet" href="http://127.0.0.1:8002/themes/spotlayer/assets/admin/css/demo1/style.bundle.css">--}}
    <style>
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
                            <div class="text-center img-container">
                                <img alt="Logo" src="{{url('/images/logo.png')}}" style="max-height:40px">
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
{{--                                            <a href="http://ebilty.com/en/dashboard/account" class="btn btn-brand btn-sm btn-upper">Edit</a>--}}
                                        </div>
                                    </div>

                                    <div class="kt-widget__subhead">
                                        <a href="javascript:void(0);"><i class="flaticon-alarm-1"></i>+96171456227</a>
                                        <a href="javascript:void(0);"><i class="flaticon2-calendar-3"></i> </a>
                                    </div>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__desc">
                                            amman_street1,  12345
                                            <br> lawrance road, Malaysia
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-4">
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
                                <div class="col-4">
                                    <div class="dashboardcontainainer b">
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


                                <div class="col-12">
                                    <div class="dashboardcontainainer ">
                                        <div class="container-info">
                                            <div class="main_img_banner_DB">
                                                <!-- <i class="flaticon-map-location"></i>  -->
                                                <img class="" src="https://blog.ipleaders.in/wp-content/uploads/2020/04/advertising-agency-e1586694068452.jpg" alt=""  style="width: 100%">
                                            </div>

                                        </div>

                                    </div>
                                </div>
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
                <th scope="col">Shipment Time</th>
                <th scope="col">Status</th>
                @can ('admin' || 'customer')
                <th scope="col"></th>
                @endcan
            </tr>
            </thead>
            <tbody>
            @forelse($shipments as $shipment)
                <tr>
                    <th scope="row"><a href="{{route('shipmentDetail',[$shipment->id])}}">{{$shipment->id}}</a></th>
                    <td>{{$shipment->sender->address}}<small> ({{$shipment->sender->user->name}})</small></td>
                    <td>{{$shipment->receiver->address}}<small> ({{$shipment->receiver->user->name}})</small></td>
                    <td>{{$shipment->ship_date}}<br>{{$shipment->ship_time}}</td>
                    <td>{{$shipment->status->name}}</td>
                    <td>
                        @php $percentage=0;
                        if($shipment->status_id==1){
                        $percentage=30;
                        }
                        if($shipment->status_id==6){
                        $percentage=20;
                        }
                        if($shipment->status_id==4){
                        $percentage=40;
                        }
                        if($shipment->status_id==6){
                        $percentage=35;
                        }
                        if($shipment->status_id==8){
                        $percentage=100;
                        }
                        if($shipment->status_id==7){
                        $percentage=90;
                        }
                        if($shipment->status_id==3){
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
                    @can ('admin' || 'customer')
                    <td>
                        @if(count($shipment->bids)>0)
                            <span class="example-tools justify-content-center">
                            <a class=" btn btn-sm btn-default btn-text-primary btn-hover-danger btn-icon" onclick="showBids('{{$shipment->bids}}')" data-toggle="modal" data-target="#myModal"   style="position: relative; cursor: pointer" aria-describedby="tooltip797420">
                                 <span class=" text-success" style=" position: absolute;top: -6px; right: -2px;">●</span>
                           <i class="la la-car"></i></a>
                       </span>
                        @else
                            <span class="example-tools justify-content-center">
                            <a class=" btn btn-sm btn-default btn-text-primary btn-hover-danger btn-icon"   data-target="#myModal" title=" 0 Bids"  style="position: relative; cursor: default" aria-describedby="tooltip797420">
                                 <span class=" text-danger" style=" position: absolute;top: -6px; right: -2px;">●</span>
                           <i class="la la-car"></i></a>
                       </span>
                        @endif

                    </td>
                    @endcan

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









    {{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

    <script>
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
                    status_text= "<span class='fa fa-check-circle text-success'> &nbsp</span>Reject bid";
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


    </script>
@endsection
