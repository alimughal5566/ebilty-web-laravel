@extends('admin.layout.app')
@section('title', 'All Shipments')
@section('content')
    {{--    <link rel="stylesheet" href="http://127.0.0.1:8002/themes/spotlayer/assets/admin/css/demo1/style.bundle.css">--}}
    <style>
        .progress {
            width: 100px;
            height: 100px;
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
        @media (min-width: 576px) {
            #showDriverList .modal-dialog {
                max-width: 1000px !important;
                margin: 1.75rem auto;
            }
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
                        All Our Shipments</a>
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
        <table class="table table-fluid " style="font-size: initial" >
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Shipment Time</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($shipments as $shipment)
                <tr>
                    <td scope="row"><a href="{{route('shipmentDetail',[$shipment->id])}}">{{$shipment->id}}</a></td>
                    <td>{{$shipment->sender->address}}<small> ({{$shipment->sender->user->name}})</small></td>
                    <td>{{$shipment->receiver->address}}<small> ({{$shipment->receiver->user->name}})</small></td>
                    <td>{{$shipment->ship_date}}<br>{{$shipment->ship_time}}</td>

                    <td>{{(isset($shipment->myBid) && $shipment->myBid->bid_amount && $shipment->myBid->revise_status!=1)?$shipment->myBid->bid_amount:(isset($shipment->myBid->revise_amount_shipper)?$shipment->myBid->revise_amount_shipper:'')}}</td>
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

                    <td>
                        <i class="fa fa-user" aria-hidden="true" onclick="showDriver({{$shipment->assigned_to}})"></i>
                    </td>
                    <td>
                        @if($shipment->assigned_to==auth()->user()->id)
                            <div class="form-group col-lg-12 car_container">
                                <select class="form-control" id="car_id_" name="car_id" data-live-search="true" onchange="setStatus('{{$shipment->id}}',this.value)">
                                    @foreach($statuses as $status)
                                        <option value="{{$status->id}}" {{($status->id==$shipment->status_id)?"selected":""}} {{($shipment->status_id>=$status->id)?"disabled":""}}>
                                            {{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center p-1">No shipment found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <div class="float-right mr-2">
            {{$shipments->links()}}

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
                                    <th>Action</th>
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
    <div class="modal fade" id="showBidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Place a bid</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--                <p>bid your truct</p>-->
                    <div class="row col-md-12">
                        <lable for="truck_type">Vehicle Category</lable>
                        <input type="text" id="category" name="category" class="form-control" readonly>
                    </div>
                    <div class="row col-md-12">
                        <lable for="ve_name">Vehicle Name</lable>
                        <input type="text" id="ve_name" name="ve_name" class="form-control" readonly>
                    </div>
                    <div>
                        <lable for="route">Address
                            <textarea id="route" name="route" class="form-control" readonly ></textarea>
                        </lable>
                    </div>
                    <div>
                        <div >
                            <table class=" col-md-10  offset-1 table-fluid mb-5  mt-4 table-bordered px-3 text-center" id="jqueryTable2">
                                <thead>
                                <th class="p-3">Description</th>
                                <th  class="p-3">Weight</th>
                                <th  class="p-3">Qty</th>
                                </thead>
                                <tbody></tbody>
                            </table>

                        </div>
                    </div>
                    <input type="hidden" id="order_id_placed" >
                    {{--                <input type="hidden" id="truck_type" name="truck_type" >--}}
                    {{--                <input type="hidden" id="save_bid_user_id" >--}}
                    <div>
                        <lable for="bid_price">What Is Your Total Amount You'd Like To Bid For This Job?
                            <input type="number" id="bid_price" name="bid_price" class="form-control" min="1" placeholder="Your desired amount" required>
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


    <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Revision request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="d-none beds">
                        <lable for="bid_price">My Bidded Amount
                            <input type="number" id="prev" name="prev" class="form-control" min="1" placeholder="My Entered Amount" readonly >
                        </lable>
                    </div>
                    <div>
                        <lable for="bid_price">Amount to be revised
                            <input type="number" id="amt" name="bid_amt" class="form-control" min="1" placeholder="Revision amount" readonly>
                            <input type="hidden" id="bedid" name="bedid" >
                        </lable>
                    </div>

                    <div>
                        <lable for="bid_price">Comment
                            <textarea name="cmt" id="cmt" cols="10" rows="5" class="form-control" required></textarea>
                        </lable>
                    </div>

                    <h4 class="pt-2 mb-0">Revision</h4>
                    <div class="d-flex ">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <lable for="111">Accept
                            <input type="radio" name="stat" id="111" class="form-control btn-sm state" value="1" style="font-size: 0.1rem" >
                        </lable> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <lable for="11">Reject
                            <input type="radio" checked name="stat" id="11" class="form-control btn-sm state" value="2" style="font-size: 0.1rem">
                        </lable>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">back</button>
                    <button type="button" class="btn btn-primary sbmet" onclick="sav()">Submit request</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="showDriverList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Drivers List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table" id="show_DriverList">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Driver Contact</th>
                            <th scope="col">vehicle Name</th>
                            <th scope="col">vehicle Type</th>
                            <th scope="col">vehicle Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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
        function showBids(data) {
            data=JSON.parse(data);
            $('#jqueryTable tbody').html('');
            var html='';
            $.each(data, function (index, value) {
                html += "<tr><td>" + value.user.name + "<td>" + value.created_at + "</td><td >" + value.customer_budget + "</td><td >" + value.bid_amount + "</td><td >" + value.route + "</td><td >" + value.last_updated + "</td><tr>";
            });
            $('#jqueryTable').append(html);
            // console.log(data[0]);
        }

        function openBid(bid,packages,vehicle,category,address,shipment_id) {
            packages=JSON.parse(packages);
            if(bid){
                bid=JSON.parse(bid);
                $('.bidsave').addClass('d-none');
                $('#bid_price').val(bid.bid_amount);
                $('#bid_price').attr('readonly','true');
            }else{
                $('.bidsave').removeClass('d-none');
                $('#bid_price').removeAttr('readonly');
                $('#bid_price').val('');

            }
            $('#jqueryTable2 tbody').html('');
            var html='';
            $.each(packages, function (index, value) {
                $('#jqueryTable2 tbody').append(`<tr><td>${value.description}</td><td>${value.quantity}</td><td>${value.weight}</td></tr>`)
            });
            if(packages.length==0){
                $('#jqueryTable2 tbody').append(`<tr><td colspan="3">No Package found</td></tr>`)
            }
            $('#jqueryTable2').append(html);
            $('#ve_name').empty().val(vehicle);
            $('#category').empty().val(category);
            $('#route').empty().val(address);
            $('#id').empty().val(address);
            $('#showBidModal').modal('show')
            $('#order_id_placed').val(shipment_id)
        }
        // Bid Save
        $('body').on('click','.bidsave' , function (){
            if($('#bid_price').val()==''){
                $('#bid_price').addClass('border-danger');
                return ;
            }
            $('#bid_price').removeClass('border-danger');
            $.ajax({
                url: "{{route('create.bid')}}",
                type: "GET",
                data: { 'order_id': $('#order_id_placed').val(),
                    'bid_price' : $('#bid_price').val()
                },
                success: function (result){
                    $('#bid_price').attr('readonly','true');
                    $('.bidsave').addClass('d-none');
                    toastr.success( 'Bid Created successfully');
                    $('#showBidModal').modal('hide')


                },
                error: function (request, status, error) {
                    $('#showBidModal').modal('hide')
                }
            })
        })


        function setStatus2(id,amount,revised_amount,revise_status,revise_comment){
            // alert(revise_comment);
            if(revised_amount!=''){
                $('.beds').removeClass('d-none');
                $('#prev').val(amount);
                $('#amt').val(revised_amount);

            }else {
                $('.sbmet').removeClass('d-none');
                $('.beds').addClass('d-none');
                $('#prev').val(amount);
                $('#amt').val('');
            }
            $('#bedid').val(id);
            if(revise_status=='1' || revise_status=='3'){
                if(revise_status==1){
                    $("#111").prop("checked","true")
                    $("#11").removeAttr("checked")
                }else if(revise_status==3){
                    $("#111").prop("checked","true")
                    $("#11").prop("checked","false")
                }
                if(revise_comment!=''){
                    $('#cmt').val(revise_comment)
                }

                $('.sbmet').addClass('d-none');
            }else{
                $('.sbmet').removeClass('d-none');
            }
            $('#showModal').modal('show')
        }

        function sav() {
            if($('#cmt').val()==''){
                $('#cmt').addClass('border-danger');
                return ;
            }
            var status = $('.state:checked').val();
            var cmt = $('#cmt').val();

            $('#cmt').removeClass('border-danger');
            $.ajax({
                url: "{{route('updateBidReviserequest')}}",
                type: "get",
                data: {'id': $('#bedid').val() , 'status': status, 'comment': cmt},
                success: function (result){
                    toastr.success( 'Action successfull');
                    $('#showModal').modal('hide')
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


        function setStatus(id,status) {
            $.ajax({
                url: "{{route('updateshipmentStatus')}}",
                type: "get",
                data: {'id': id,'status': status},
                success: function (result) {
                    toastr.success( 'Action successfull');
                    setTimeout(function(){ location.reload() },1000);
                },
                error: function (request, status, error) {
                    alert(request.responseText);
                    // $('#showBidModal').modal('hide')
                }
            })
        }


       function showDriver(id)
       {
               // $("#package_table tbody tr").remove();
               var data = {id:id};
               $('#showDriverList').modal('show');

               $.get( '{{route("shipment.driver")}}',data, function( response ) {
                   console.log(response);
                   $('#show_DriverList tbody').empty();
                       $('#show_DriverList').append(
                           `<tr>
                            <td>`+ response.name +`</td>
                            <td>`+response.email+`</td>
                            <td>`+response.phone+`</td>
                            <td>`+response.vehicle.name+`</td>
                            <td>`+response.vehicle_category.name+`</td>
                            <td>`+response.vehicle_number+`</td>
                            </tr>`);

               });

           }



    </script>
@endsection
