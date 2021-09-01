
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shipment Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<style>
    table {
        margin: 0 !important;
        padding: 0 !important;
    }
</style>

<div  >
        <div class="row">
            <div class="col-12">
                         <div class="">
                              <img  class="float-right img-fluid" src="{{public_path('uploads/logos/company-logo.png')}}" style="width: 140px ; height: 70px ;">
                        </div>
                        <div style="font-size:0;position:relative;width:144px;height:30px;">
                            @if(file_exists(public_path('images/qrcodes/'.$shipment->id.'.svg')))
                                {!! file_get_contents(public_path('images/qrcodes/'.$shipment->id.'.svg')) !!}
                            @endif

                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:0px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:4px;height:30px;position:absolute;left:4px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:12px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:18px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:22px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:26px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:30px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:4px;height:30px;position:absolute;left:36px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:42px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:46px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:50px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:4px;height:30px;position:absolute;left:56px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:62px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:66px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:70px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:4px;height:30px;position:absolute;left:76px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:4px;height:30px;position:absolute;left:82px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:88px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:92px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:98px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:102px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:108px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:4px;height:30px;position:absolute;left:112px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:118px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:122px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:4px;height:30px;position:absolute;left:126px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:134px;top:0px;">&nbsp;</div>
                            <div style="background-color:black;width:2px;height:30px;position:absolute;left:140px;top:0px;">&nbsp;</div>
                        </div>
        </div>
    </div>




    <div class="row  pt-1">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0 pb-0 border-0 border-bottom-0">Shipment Details</p>
                    <table class="table table-fluid border-0">
                        <thead>
                        <tr class="border-0">
                            <td>Created by: {{ucfirst($shipment->user->name)}}</td><td></td><td></td><td></td><td></td><td></td>
                            <td><b></b></td><td>{{$shipment->created_at->format('d/M/Y')}}</td>
                        </tr>
{{--                        <tr class="border-0">--}}
{{--                            <td></td><td></td><td></td><td></td><td></td><td></td>--}}
{{--                            <td><b></b></td><td>{{$shipment->ship_date}} {{$shipment->ship_time}}</td>--}}
{{--                        </tr>--}}
                        </thead>


                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row  ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0 pb-0">Sender Details</p>
                    <table class="table table-fluid table-bordered">
                        <thead>
                        <tr>
                            <td><b>Name</b></td>
                            <td><b>Phone</b></td>
                            <td><b>Email</b></td>
                            <td><b>Address</b></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$shipment->sender->user->name}}</td>
                            <td>{{$shipment->sender->user->phone}}</td>
                            <td>{{$shipment->sender->user->email}}</td>
                            <td>{{$shipment->sender->address}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


{{--    <div class="row  pt-1">--}}
{{--        <div class="col-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <p class="mb-0 pb-0">Sender Details</p>--}}
{{--                    <table class="table table-fluid table-bordered">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <td><b>Name</b></td>--}}
{{--                            <td><b>Phone</b></td>--}}
{{--                            <td><b>Email</b></td>--}}
{{--                            <td><b>Address</b></td>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td>{{$shipment->sender->user->name}}</td>--}}
{{--                            <td>{{$shipment->sender->user->phone}}</td>--}}
{{--                            <td>{{$shipment->sender->user->email}}</td>--}}
{{--                            <td>{{$shipment->sender->address}}</td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <div class="row pt-1" >
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0 pb-0">Receiver details</p>
                    <table class="table table-fluid table-bordered">
                        <thead>
                        <tr>
                            <td><b>Name</b></td>
                            <td><b>Phone</b></td>
                            <td><b>Email</b></td>
                            <td><b>Address</b></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$shipment->receiver->user->name}}</td>
                            <td>{{$shipment->receiver->user->phone}}</td>
                            <td>{{$shipment->receiver->user->email}}</td>
                            <td>{{$shipment->receiver->address}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>


<hr>




</body>
</html>
