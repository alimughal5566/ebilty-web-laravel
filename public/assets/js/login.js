$(document).ready(function() {
    $('select').selectpicker({
       size: 4
    });
 });

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