<html>
    <head>
        <title>Login || Signup</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/css/ajax-bootstrap-select.min.css'>
      

         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

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
     <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin" id="kt_login">
         <div class="kt-login__header mx-auto text-center d-block w-100">
             <a class="kt-login__logo d-inline-block py-4" href="#">
                 <img style="max-height:90px;max-width:80%;" class="h-auto w-auto" alt="" src="http://127.0.0.1:8000/storage/app/uploads/public/605/adf/deb/605adfdeb172d020773592.png">
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
                             <form class="kt-form mb-3" action="">

                                                                     <div class="kt-alert kt-alert--outline alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                        <span>You have been successfully logged out!</span>
                                    </div>
                                                                  <div class="form-group">
                                     <label for="userSigninLogin" class="sr-only"></label>
                                     <input class="form-control" type="text" placeholder="Username" name="login" id="userSigninLogin" autocomplete="off" required="">
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
                  					<a href="javascript:void(0);" id="kt_login_signup" class="kt-login__account-link btn-gradient btn-gradient-orange btn-block w-100">Sign Up!</a>
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
                            <form class="kt-form" action="" enctype="multipart/form-data">
        						<div class="input-group">
                                    <label for="registerName" class="sr-only"></label>
        							<input class="form-control" type="text" id="registerName" placeholder="Full Name" name="name" required="">
                                    <i class="fa fa-user field-icon"></i>
        						</div>
        						<div class="input-group">
                                    <label for="registerEmail" class="sr-only"></label>
        							<input class="form-control" type="text" placeholder="Email" id="registerEmail" name="email" autocomplete="off" required="">
                                    <i class="fa fa-envelope field-icon"></i>
        						</div>
                                <div class="input-group">
                                    <label for="postal_code" class="sr-only"></label>
                                    <input class="form-control" type="text" placeholder="Postal Address" name="postal_code" id="postal_code" autocomplete="off" required="">
                                    <i class="fa fa-home field-icon"></i>
                                </div>
                                <div class="input-group">
                                    <label for="mobile" class="sr-only"></label>
                                    <input class="form-control" type="text" placeholder="Mobile Number" name="mobile" id="mobile" autocomplete="off" required="">
                                    <i class="fa fa-mobile-alt field-icon"></i>
                                </div>
                                <div class="input-group upload-btn-wrapper">
                                    <label for="cnic" class="sr-only"></label>
                                    <span class="upload-wrap px-3 w-100 d-flex align-items-center justify-content-between">
                                        <span class="upload-txt ont-weight-bold">CNIC</span>
                                        <a class="btn">Upload Image</a>
                                    </span>
                                    <input class="" type="file" placeholder="CNIC" name="cnic" autocomplete="off" id="cnic" required="" accept="image/*">
                                    <input type="hidden" name="cnic_image" id="cnic_image">
                                </div>
                                <div class="input-group">
                                    <label for="bussiness_type" class="sr-only"></label>
                                    <input class="form-control" type="text" placeholder="Bussiness Type" name="bussiness_type" id="bussiness_type" autocomplete="off" required="">
                                    <i class="fa fa-user-cog field-icon"></i>
                                </div>
                                <div class="input-group">
                                    <label for="user_role_id" class="sr-only"></label>
                                    <div class="dropdown bootstrap-select form-control"><select name="user_role_id" class="form-control " data-dropup-auto="false" id="user_role_id" autocomplete="off" required="" tabindex="-98">
                                        <option value="" selected="" disabled="">Register As</option>
                                        <option value="5" class="individual">Vendor</option>
                                        <option value="12" class="company">Service Provider</option>
                                    </select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="user_role_id" title="Register As"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Register As</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>

                                <div class="input-group vehicle_category" style="display:none">
                                    <label for="vehicle_category" class="sr-only"></label>
                                    <div class="dropdown bootstrap-select form-control"><select name="vehicle_category[]" class="form-control " data-dropup-auto="false" id="vehicle_category" autocomplete="off" tabindex="-98">
                                                                                <option value="1">category 1</option>
                                                                                <option value="2">category 2</option>
                                                                                <option value="3">category 3</option>
                                                                                <option value="4">category 4</option>
                                                                                <option value="5">category 1</option>
                                                                                <option value="6">category 5</option>
                                                                                <option value="7">category 6</option>
                                                                                <option value="8">category 7</option>
                                                                                <option value="" selected="" disabled="">Vehicle category</option>
                                    </select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" data-id="vehicle_category" title="Vehicle category"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Vehicle category</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>

                                    <div class="option_min_add sec_min">
                                        <span class="fa fa-plus-circle plos text-dark " id="first" data-placement="top" data-toggle="kt-tooltip" data-skin="dark" data-original-title="Add More Vehincle"></span>
                                    </div>
                                </div>
                                <div class="input-group vehicle_type veh" style="display:none">
                                    <label for="vehicle_category" class="sr-only"></label>
                                    <select name="truck_used[]" class="form-control" data-dropup-auto="false" id="truck_used" autocomplete="off">
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
                                    <button id="kt_login_signup_submit" type="submit" class="btn btn-gradient btn-gradient-blue kt-login__btn-primary mx-0">Sign Up!</button>
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
 <div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLongTitle">terms and conditions</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 </button>
             </div>
             <div class="modal-body">
                 <div class="kt-scroll ps" data-scroll="true" data-height="200" style="height: 200px; overflow: hidden;">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Don't Agree</button>
                 <button type="button" class="btn btn-primary" id="agree" data-dismiss="modal">Agree</button>
             </div>
         </div>
     </div>
 </div>
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
                }
            };
        </script>
        <!-- end::Global Config -->

   <!--begin::Global Theme Bundle(used by all pages) -->
   <!-- <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
   <script src="assets/js/classie.js" type="text/javascript"></script>
   <script src="assets/js/notificationFx.js" type="text/javascript"></script>
   <script src="assets/js/vendors.bundle.js" type="text/javascript"></script> -->
   <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
   <!--end::Global Theme Bundle -->
   <!--begin::Page Scripts(used by this page) -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/js/ajax-bootstrap-select.min.js"></script>
   <!-- <script src="assets/js/framework.js"></script>
   <script src="assets/js/framework.extras.js"></script> -->

   <script>
       $(document).ready(function() {
         $('select').selectpicker({
            size: 4
         });
      });
   </script>

        <script type="text/javascript">
     "use strict";

    // Class Definition
    var KTLoginGeneral = function() {

        var login = $('#kt_login');

        var showErrorMsg = function(form, type, msg) {
            var alert = $('<div class="kt-alert kt-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
    			<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
    			<span></span>\
    		</div>');

            form.find('.alert').remove();
            alert.prependTo(form);
            //alert.animateClass('fadeIn animated');
            KTUtil.animateClass(alert[0], 'fadeIn animated');
            alert.find('span').html(msg);
        }

        // Private Functions
        var displaySignUpForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signin');

            login.addClass('kt-login--signup');
            KTUtil.animateClass(login.find('.kt-login__signup')[0], 'flipInX animated');
        }

        var displaySignInForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--signin');
            KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');
            //login.find('.kt-login__signin').animateClass('flipInX animated');
        }

        var displayForgotForm = function() {
            login.removeClass('kt-login--signin');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--forgot');
            //login.find('.kt-login--forgot').animateClass('flipInX animated');
            KTUtil.animateClass(login.find('.kt-login__forgot')[0], 'flipInX animated');

        }

        var handleFormSwitch = function() {
            $('#kt_login_forgot').click(function(e) {
                e.preventDefault();
                displayForgotForm();
            });

            $('#kt_login_forgot_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });

            $('#kt_login_signup').click(function(e) {
                e.preventDefault();
                displaySignUpForm();
            });

            $('#kt_login_signup_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });
        }

        $(document).on('change', '#user_role_id', function(){
            var text=$("#user_role_id option:selected").text();
            if(text=="Service Provider"){
                $('.vehicle_category').show('2000');
            }else{
                $('.vehicle_category').hide('2000');
                $('.vehicle_type').hide('2000');
            }
        });
        $(document).on('change', '#vehicle_category', function(){
                $('.veh').show('2000');
        });
        var counter=0;
        $(document).on('click', '.plos', function(){
               var txt=`<div class="input-group div_${counter}" >
                                    <label for="vehicle_category_${counter}" class="sr-only"></label>
                                    <select name="vehicle_category[]" required class="form-control sbt" data-dropup-auto="false" id="vehicle_category_${counter}" data-id="${counter}" autocomplete="off">
                                                                                <option value="1">category 1</option>
                                                                                <option value="2">category 2</option>
                                                                                <option value="3">category 3</option>
                                                                                <option value="4">category 4</option>
                                                                                <option value="5">category 1</option>
                                                                                <option value="6">category 5</option>
                                                                                <option value="7">category 6</option>
                                                                                <option value="8">category 7</option>
                                                                                <option value="" selected disabled>Vehicle category</option>
                                    </select>
                                    <div class="option_min_add">
                                        <span class="fa fa-minus-circle minus text-dark " data-id="${counter}"  ></span>&nbsp
                                       
                                    </div>
                                </div>
                                <div class="input-group vehicle_type" style="display: none"  id="type_${counter}">
                                    <label for="vehicle_category" class="sr-only"></label>
                                    <select  name="truck_used[]" class="form-control" data-dropup-auto="false" id="truck_used_${counter}" autocomplete="off" required >
                                    </select>
                                </div>
                                </div>`;
                             counter++;
            $('.divs').append(txt);
            // $('#first').hide('3000');
            // if ($('.divs').counter === 0) {
                // console.log('popo');
                // code to run if it isn't there
            // }
        });

        $(document).on('click', '.minus', function(){
            var id=$(this).attr('data-id');
               $('.div_'+id).hide('3000')
               $('#type_'+id).hide('3000')

        });


        $(document).on('change', '#vehicle_category', function(){
            $.request('onChangefees1', {
                method:'post',
                data: {id:$('#vehicle_category option:selected' ).val()},
                success: function(response, status, xhr, $form) {
                    var html='';
                    $.each(response,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                        console.log(value);
                    });
                    html += "<option value='' selected disabled>Choose type</option>";
                    $('#truck_used').empty().append(html);
                }
            });
        });

        $(document).on('change', '.sbt', function(){
            var id=$(this).attr('data-id');
            console.log(this)
           var val1= $('#vehicle_category_'+id+' option:selected').val();
            // alert(id);
            // return;
            $.request('onChangefees1', {
                method:'post',
                data: {id:val1},
                success: function(response, status, xhr, $form) {
                    var html='';
                    $.each(response,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                        // $("#truck_used").append('<option value=1>My option</option>');
                        console.log(value);
                    });
                    html += "<option value='' selected disabled>Choose type</option>";
                    $('#truck_used_'+id).empty().append(html);
                    $('#type_'+id).show('3000');
                }
            });
        });

        var handleSignInFormSubmit = function() {
            $('#kt_login_signin_submit').click(function(e) {
                e.preventDefault();
                var btn = $(this);
                var form = $(this).closest('form');

                form.validate({
                    rules: {
                        login: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        "login": {
                            required: 'This field is required!',
                        },
                        "password": {
                            required: 'This field is required!',
                        },
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                $.request('onSignin', {
                    data: {login: $('#userSigninLogin').val(), password: $('#userSigninPassword').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        console.log(e);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                    },
                    success: function(response, status, xhr, $form) {
                    	// similate 2s delay
                    	setTimeout(function() {
    	                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                           showErrorMsg(form, 'success', 'Correct, you are being redirect.');
                           location.href = "http://127.0.0.1:8000/dashboard";
                        }, 2000);
                    }
                });
            });
        }

        var handleSignUpFormSubmit = function() {
            $('#kt_login_signup_submit').click(function(e) {

                e.preventDefault();

                var btn = $(this);
                var form = $(this).closest('form');

                form.validate({
                    rules: {
                        fullname: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true
                        },
                        rpassword: {
                            required: true
                        },
                        agree: {
                            required: true
                        }
                    }
                });
                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
                var arr=[];
                if(counter>0) {
                    for (var i = 0; i < counter; i++) {
                        var val = $("#vehicle_category_" + i + " option:selected").val();
                        var typ = $("#type_" + i + " option:selected").val();
                        if (val != '' && typ!='') {
                            var ar = {cat: val, type: typ};
                            arr.push(ar);
                        }
                    }
                }
                    var ar = {cat: $('#vehicle_category option:selected' ).val(), type: $('#truck_used option:selected').val()};
                    arr.push(ar);


// console.log(arr);
//  return ;

                $.request('onRegister', {
                    
                        data: {
                        name: $('#registerName').val(),
                                email: $('#registerEmail').val(),
                                username: $('#registerUsername').val(),
                                password: $('#registerPassword').val(),
                                password_confirmation: $('#rpassword').val(),
                                phone: $('#mobile').val(),
                                postal_code: $('#postal_code').val(),
                                cnic: $('#cnic_image').val(),
                                bussiness_type: $('#bussiness_type').val(),
                                user_role_id:$('#user_role_id').val(),
                                vehicle_category:$('#vehicle_category option:selected' ).val(),
                                truck_used:$('#truck_used option:selected').val()
                                ,vehicles:arr
                        },

                    
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                        //showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, $form) {
                    	// similate 2s delay
                    	setTimeout(function() {
    	                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                                                           showErrorMsg(form, 'success', 'Correct, you are being redirect.');
                               location.href = "http://127.0.0.1:8000/dashboard";
                                                   }, 2000);
                    }
                });
            });
        }

        var handleForgotFormSubmit = function() {
            $('#kt_login_forgot_submit').click(function(e) {
                e.preventDefault();

                var btn = $(this);
                var form = $(this).closest('form');

                form.validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                $.request('onRestorePassword', {
                    data: {email: $('#userRestoreEmail').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        alert(e.responseText);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                        //showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, $form) {
                    	// similate 2s delay
                    	setTimeout(function() {
	                           btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                               showErrorMsg(form, 'success', 'Cool! Password recovery instruction has been sent to your email.');
                        }, 2000);
                    }
                });
            });
        }

        // Public Functions
        return {
            // public functions
            init: function() {
                handleFormSwitch();
                handleSignInFormSubmit();
                handleSignUpFormSubmit();
                handleForgotFormSubmit();
            }
        };
    }();

     // Class Initialization
     KTUtil.ready(function () {
         KTLoginGeneral.init();

         $('body').on('click','#agree', function(e){
             $( "#agreement" ).prop( "checked", true );
         });

              });



     // // Select the image
     // $("#cnic").change(function() {
     // const fileInput = document.querySelector("#cnic");
     // fileInput.addEventListener("change", (e) => {
     //     // get a reference to the file
     //     const file = e.target.files[0];
     //     const reader = new FileReader();
     //     reader.onloadend = () => {
     //         $('#cnic_image').val(reader.result);
     //         console.log(reader.result);
     //     };
     //     reader.readAsDataURL(file);
     //     // console.log(reader.readAsDataURL(file));
     // });
     // });

     // Select the image
     $("#cnic").change(function() {
         const file = document.querySelector('input[type=file]').files[0];
         const reader = new FileReader();
         reader.addEventListener("load", function () {
             // convert image file to base64 string
             $('#cnic_image').val(reader.result);
         }, false);
         if (file) {
             reader.readAsDataURL(file);
         }
     });





 </script>
        <script type="text/javascript">
            KTUtil.ready(function () {
                $('body').on('click', '.locale', function(e){
                    e.preventDefault();
                    var selected = $(this).attr('rel');
                    if(selected != ''){
                        $.request('onSwitchLocale', {
                            data: {locale: selected}
                        });
                    }
                });
            });
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
    
    <!-- end::Body -->
<div class="stripe-loading-indicator loaded"><div class="stripe"></div><div class="stripe-loaded"></div></div></body>
</html>