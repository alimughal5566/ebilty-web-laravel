
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shipment Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="">
<div class="row">
<div class="col-12">
    <div class="">
          <img  class="float-right" src="{{public_path('uploads/logos/company-logo.png')}}">
    </div>
                        <div style="font-size:0;position:relative;width:144px;height:30px;">
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

    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td><b> Phone</b></td>
                <td><b>sender adddress</b></td>
                <td><b>Lead Actor</b></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$shipment->sender->user->phone}}</td>
                <td>
                    {{$shipment->sender->address}}

                </td>
                <td>
                    222
                </td>
            </tr>
            </tbody>
        </table>
    </div>



</div>







</body>
</html>
