<html>
    <head>
        <title>Login || Signup</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}
{{--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
{{--        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>--}}
{{--        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">--}}
{{--        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/css/ajax-bootstrap-select.min.css'>--}}


{{--         <!-- Latest compiled and minified CSS -->--}}
{{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">--}}

{{--        <!-- Latest compiled and minified JavaScript -->--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>--}}

{{--        <!-- (Optional) Latest compiled and minified JavaScript translation files -->--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>--}}
        <script src="{{asset('js')}}/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
        <script src="{{asset('js')}}/jquery.min.js"></script>
        <script src="{{asset('js')}}/popper.min.js"></script>
        <script src="{{asset('js')}}/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('css')}}/all.css"/>
        <link rel="stylesheet" href="{{asset('css')}}/line-awesome.min.css">
        <link rel="icon" href="{{url('/uploads/logos/favicon.png')}}">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{asset('css')}}/bootstrap-select.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="{{asset('js')}}/bootstrap-select.min.js"></script>
        <script src="{{asset('js')}}/boxicons.js"></script>
        <link href='{{asset('css')}}/boxicons.min.css' rel='stylesheet'>

        <link rel="stylesheet" href="{{asset('assets/css/custom_style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/light.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendors.bundle.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/ns-default.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/ns-style-other.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.bundle.css')}}">
        <link rel="stylesheet" href="assets/css/vendors.bundle.css">
        <link rel="stylesheet" href="assets/css/style.bundle.css">
        <link rel="stylesheet" href="assets/css/login.css">

        <link rel="stylesheet" href="assets/css/custom_style.css">
        <link rel="stylesheet" href="assets/css/light.css">

        <link rel="stylesheet" href="assets/css/ns-default.css">
        <link rel="stylesheet" href="assets/css/ns-style-other.css">

      </head>
      <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" data-new-gr-c-s-check-loaded="14.1012.0" data-gr-ext-installed="">

        <style>
            body{
                background-image: linear-gradient(to right, #EE8335, #FDC90E);
            }
            .divs , .vehicle_category {
                position: relative;
            }
            .option_min_add {
                position: absolute;
                right: -27px;
                top: 18px;
            }
            .option_min_add.sec_min {
                right: -22px;
            }
            .option_min_add .fa {
                cursor: pointer;
            }
        </style>
        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root kt-page custom-grid">
{{--            @dd(@$form)--}}
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 {{($errors->has('form'))?'kt-login--signup ':'kt-login--signin'}}" id="kt_login">
            <div class="kt-login__header mx-auto text-center d-block w-100">
                <a class="kt-login__logo d-inline-block py-4" href="#">
                    <!-- <img style="max-height:90px;max-width:80%;" class="h-auto w-auto" alt="" src="http://127.0.0.1:8000/storage/app/uploads/public/605/adf/deb/605adfdeb172d020773592.png"> -->
                </a>
            </div>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
                <div class="kt-login__right">
                    <div class="kt-login__wrapper">
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <div class="kt-login__title mb-4">
                                <h3 class="kt-margin-t-30"><span class="color-secondary">Sign</span> <span class="text-white">In</span></h3>
                            </div>
                            <div class="kt-login__subtitle text-white font-weight-bold">Enter your credentials to log in </div>
                        </div>
                        <div class="kt-login__form mt-3">
                            <form class="kt-form mb-3" method="POST" action="{{route('login')}}">
                                @csrf
                                @if(count($errors) > 0  && !$errors->has('form'))
                                    <div class="alert alert-warning alert-dismissible fade show">
                                        @foreach($errors->all() as $error)
                                                <ul class="text-white pl-1">{{$error}}</ul>
                                        @endforeach
                                    </div>
                                @endif
                                @if (\Session::has('success'))
                                    <div class="kt-alert kt-alert--outline alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                        <span>You have been successfully logged out!</span>
                                    </div>
                                @endif
                                <div class="form-group">
                                <label for="userSigninLogin" class="sr-only"></label>
                                <input class="form-control" value="{{old('email')}}" type="text" placeholder="Username" name="email" id="userSigninLogin" autocomplete="off" required="">
                                <i class="fa fa-user field-icon"></i>
                                </div>
                                <div class="form-group">
                                <label for="userSigninPassword" class="sr-only"></label>
                                <input class="form-control form-control-last" type="Password" placeholder="Password" id="userSigninPassword" name="password" required="">
                                <i class="fa fa-user field-icon"></i>
                                </div>
                                <div class="row kt-login__extra">
                                <div class="col kt-align-right ">
                                    <button class="btn btn-gradient btn-gradient-blue btn-block w-100">Sign In</button>
                                    <!--  <a href="javascript:;" id="kt_login_forgot" class="kt-link kt-hidden">Forget Password ?</a> -->
                                </div>
                                </div>
                                <a href="javascript:void(0);" id="kt_login_forgot" class="kt-link mt-3 ml-auto text-right d-block color-secondary font-weight-bold">Forget Password ?</a>
                                <div class="kt-login__actions kt-margin-t-10 flex-column">
                                <span class="kt-login__account-msg d-block w-100 text-white font-weight-bold">
                                Don't have an account yet? No need to worry
                                </span>
                                &nbsp;&nbsp;
                                <button type="submit"  id="kt_login_signup" class="kt-login__account-link btn-gradient btn-gradient-orange btn-block w-100">Sign Up!</button>
                                </div>
                                <div class="kt-login__actions my-4">
                                <span class="kt-login__account-msg text-white font-weight-bold">
                                You have tracking number ?
                                </span>
                                &nbsp;&nbsp;
                                <a href="#" class="kt-login__account-link color-secondary font-weight-bold">Track shipment</a>
                                </div>
                            </form>
                        </div>
                        <div class="kt-login__actionsCustom">
                            <div class="section_separator">
                                <span class="text-white font-weight-bold">OR</span>
                            </div>
                            <div>
                                <div class="text-center mx-auto d-block my-4">
                                <span class="text-center text-white font-weight-bold">Login As</span>
                                </div>
                                <div class="login-item-type d-flex flex-wrap justify-content-between">
                                <a href="#" class="btn btn-gradient flex-column half">
                                <i class="fa fa-industry fa-2x"></i>
                                <span>VENDOR</span>
                                </a>
                                <a href="#" class="btn btn-gradient flex-column half">
                                <i class="fa fa-truck-loading fa-2x"></i>
                                <span>SERVICE PROVIDER</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-login__signup">
                        <div class="kt-login__head mb-5">
                            <div class="kt-login__title">
                                <h3 class="kt-margin-t-30"><span class="color-secondary">Sign</span> <span class="text-white">Up !</span></h3>
                            </div>
                            <div class="kt-login__subtitle text-white font-weight-bold">Enter your details to create your account</div>
                        </div>
                        <form class="kt-form" action="{{route('register_user')}}" method="POST" enctype="multipart/form-data">
                            @if($errors->has('form'))
                                @if(count($errors) > 0  )
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        @foreach($errors->all() as $error)
                                            @if($error!='signup')
                                             <ul class="text-white pl-1">{{$error}}</ul>
                                        @endif
                                      @endforeach
                                    </div>
                                @endif
                            @endif
                            @csrf
                            <div class="input-group">
                                <label for="registerName" class="sr-only"></label>
                                <input class="form-control" value="{{old('name')}}" type="text" id="registerName" placeholder="Full Name" name="name" required="">
                                <i class="fa fa-user field-icon"></i>
                            </div>
                            <div class="input-group">
                                <label for="registerEmail" class="sr-only"></label>
                                <input class="form-control" value="{{old('email')}}" type="email" placeholder="Email" id="registerEmail" name="email" autocomplete="off" required="">
                                <i class="fa fa-envelope field-icon"></i>
                            </div>
                            <div class="input-group">
                                <label for="postal_code" class="sr-only"></label>
                                <input class="form-control" type="text" value="{{old('postal_code')}}" placeholder="Postal Address" name="postal_code" id="postal_code" autocomplete="off" required="">
                                <i class="fa fa-home field-icon"></i>
                            </div>
                            <div class="input-group">
                                <label for="mobile" class="sr-only"></label>
                                <input class="form-control" type="text" value="{{old('phone')}}" placeholder="Mobile Number"  min="5" name="phone" id="mobile" autocomplete="off" required="">
                                <i class="fa fa-mobile-alt field-icon"></i>
                            </div>
                             <a href="#" class="verify" style="text-decoration: underline;display: none" onclick="verify()">Send verification code</a>
                             <a  class="text-danger mobile-error" style="display: none" ></a>
                             <a  class="text-success mobile-success" style="display: none" ></a>
                            <div class="input-group upload-btn-wrapper">
                                <label for="cnic" class="sr-only"></label>
                                <span class="upload-wrap px-3 w-100 d-flex align-items-center justify-content-between">
                                <span class="upload-txt ont-weight-bold">CNIC</span>
                                <a class="btn">Upload Image</a>
                                </span>
                                <input class="" type="file" placeholder="CNIC" name="cnic" autocomplete="off" id="cnic" {{(old('cnic_image'))?'':'required'}} accept="image/*">
                                <input type="hidden" name="cnic_image" id="cnic_image" value="{{old('cnic_image')}}">
                            </div>
                            <div class="input-group">
                                <label for="bussiness_type" class="sr-only"></label>
                                <input class="form-control" type="text" value="{{old('bussiness_type')}}" placeholder="Bussiness Type" name="bussiness_type" id="bussiness_type" autocomplete="off" required="">
                                <i class="fa fa-user-cog field-icon"></i>
                            </div>
                            <div class="input-group">
                                <label for="user_role_id" class="sr-only"></label>
                                <div class="dropdown bootstrap-select form-control">
                                <select name="user_role_id" class="form-control " data-dropup-auto="false" id="user_role_id" autocomplete="off" required="" tabindex="-98">
                                    <option value="" selected="" disabled="">Register As</option>
                                    <option value="1" {{old('user_role_id')==1?'selected':''}} class="individual">Customer</option>
                                    <option value="2" {{old('user_role_id')==2?'selected':''}} class="company">Driver</option>
                                    <option value="3" {{old('user_role_id')==3?'selected':''}} class="company">Company</option>
                                </select>
                                <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="user_role_id" title="Register As">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Register As</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu ">
                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="input-group vehicle_category2" style="display: none">
                                <label for="vehicle_category" class="sr-only"></label>
{{--                                <div class="dropdown bootstrap-select form-control">--}}
                                    <select name="vehicle_category[]" class="form-control"   id="vehicle_category_list0">
                                        <option value="" selected="" disabled="">Vehicle category</option>
                                    </select>
{{--                                    <button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" data-id="vehicle_category" title="Vehicle category">--}}
{{--                                        <div class="filter-option">--}}
{{--                                            <div class="filter-option-inner">--}}
{{--                                                <div class="filter-option-inner-inner">Vehicle category</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu ">--}}
{{--                                        <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">--}}
{{--                                            <ul class="dropdown-menu inner show" role="presentation"></ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="option_min_add sec_min">--}}
{{--                                    <span class="fa fa-plus-circle plos text-dark " id="first" data-placement="top" data-toggle="kt-tooltip" data-skin="dark" data-original-title="Add More Vehincle"></span>--}}
{{--                                </div>--}}
                            </div>
                            <div class="input-group vehicle_type veh" style="display:none">
                                <label for="vehicle_category" class="sr-only"></label>
                                <select name="truck_used[]" class="form-control" data-dropup-auto="false" id="truck_used0" autocomplete="off">
                                </select>
                            </div>
                            <div class="divs">
                            </div>
                            <div class="input-group">
                                <label for="registerPassword" class="sr-only"></label>
                                <input class="form-control" type="password" placeholder="Password" id="registerPassword" name="password" required="">
                                <i class="fa fa-lock field-icon"></i>
                            </div>
                            <div class="kt-login__actions d-flex align-items-center justify-content-between text-justify">
                                <button id="kt_login_signup_cancel" class="btn btn-gradient btn-gradient-default kt-login__btn-secondary mx-0">Cancel</button>
                                <button id="sbet" type="submit" class="btn btn-gradient btn-gradient-blue mx-0">Sign Up!</button>
                            </div>
                            <div class="kt-login__actions kt-margin-t-10 flex-column">
                                <span class="kt-login__account-msg d-block w-100 text-white font-weight-bold">Already have an account? <a href="javascript:void(0);" id="kt_login_signin" class="kt-login__account-link ">Login</a> to your account</span>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__forgot">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Forgotten Password ?</h3>
                            <div class="kt-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <div class="kt-login__form">
                            <form class="kt-form" data-request="::onRestorePassword" data-request-update="'::reset': '#partialUserResetForm'">
                                <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email" name="email" id="userRestoreEmail" autocomplete="off">
                                </div>
                                <div class="kt-login__actions">
                                <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>
                                <button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade show" id="vrificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Phone number Verification </h5>
                    </div>
                    <div class="modal-body">
                        <div class="card-body  p-0">
                            <!--begin::Invoice-->
                            <div class="col-md-10 offset-1 text-center text-success">
                                <p>Verification code has been sent to your number</p>
                            </div>
                            <div class="col-md-10 offset-1 ">
                                <lable for="bid_price">Verification code
                                    <input type="number" minlength="1" name="code" class="form-control" id="cod"  placeholder="Verification code" required>
                                </lable>
                                <span class="text-danger errer"></span>
                            </div>
                            <div class="col-md-1 offset-5 ">
                                <a href="#" onclick="verifies()" class=" btn-info btn mt-2">verify</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
        <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
        <script src="assets/js/login.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/js/ajax-bootstrap-select.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

        <script>
    $("#mobile").on("keyup", function(e) {
        var number=$("#mobile").val();
            if(number.length<9){
            $('.mobile-error').css('display','block');
            $('.mobile-error').text('Minimum 10characters required')
            $('.verify').css('display','none');
            $('#mobile').addClass('mb-0');
            $('#sbet').attr('disabled','true');
            return;
        }
        if(telephoneCheck(number)){
            $('#sbet').removeAttr('disabled');
            $('.verify').css('display','block');
            $('#mobile').addClass('mb-0');
            $('.mobile-error').css('display','none');

        } else{
            $('.mobile-error').css('display','block');
            $('.mobile-error').text('Phone number is invalid')
            $('.verify').css('display','none');
            $('#mobile').addClass('mb-0');
            $('#sbet').attr('disabled','true');
            return;
        }
    })
    function verify(){
        var number=$("#mobile").val();
        $.ajax({
            url: "{{route('sendMessage')}}",
            type: "post",
            data: {'number':number},
            success: function(result){
                if(result.success=='true'){
                    toastr.success('Verification code sends successfully to your number');
                    $('#vrificationModal').modal('show')
                }else{
                    // alert(result.data);
                    toastr.error('Phone number is incorrect');
                }
            }
        })
    }

    function verifies(){
        var number=$("#mobile").val();
        var code=$("#cod").val();

        if(code.length<4){
            $('.errer').text('Minimum 4 characters required');
            return;
        }
        $.ajax({
            url: "{{route('otpVerifcationCheck')}}",
            type: "get",
            data: {'number':number,'code':code},
            success: function(result){
                if(result.success=='true') {
                    toastr.success(result.message);
                    $('#vrificationModal').modal('hide');
                    $('.mobile-success').css('display','block');
                    $('.mobile-success').text('Number verified successfully');
                    $('.verify').css('display','none');
                }
                else if(result.success=='false'){
                  $('.errer').text(result.message);
                    toastr.warning(result.message);
                }
            }
        })
    }

    function telephoneCheck(str) {
        var isphone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im.test(str);
        return isphone;
    }
    telephoneCheck("1 555 555 5555");

</script>

 </body>
</html>
