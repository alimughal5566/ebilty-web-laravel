var counter = 0;
var counter_veh = 0;
$(document).ready(function() {
    $('select').selectpicker({
       size: 4
    });



    $( "#user_role_id" ).change(function() {
        var text=$("#user_role_id option:selected").text();
        var url = '/get_vehicle_cat'
        if(text=="Driver"){
            $.ajax({
                type: "get",
                url: url,
                success: function( response ) {
                    $('.vehicle_category2').show('2000');
                    console.log(response)
                    var html='';
                    html += "<option value='' selected disabled>Choose Vehicle Category</option>";
                    $.each(response.cats,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                        // $("#truck_used").append('<option value=1>My option</option>');
                        console.log(value);
                    });

                    $('#vehicle_category_list'+counter).empty().append(html);

                    $('#vehicle_category_list'+counter).selectpicker('refresh');

                }
            });
        }else{
            $('.vehicle_category').hide('2000');
            $('.vehicle_type').hide('2000');
        }
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
            $('#kt_login_signin').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });
        }

        $(document).on('change', '#vehicle_category', function(){
                $('.veh').show('2000');
        });
        $(document).on('click', '.plos', function(){

            if( !$('#vehicle_category_list'+counter).val() ) {
                alert('Please select an option first')
            }else {
                counter++;
                var veh_id = `vehicle_category_list${counter}`;
                var txt = `<div class="input-group div_${counter}" >
                <label for="vehicle_category_${counter}" class="sr-only"></label>
                <select required name="vehicle_category[]" required class="form-control sbt" data-dropup-auto="false" id="vehicle_category_list${counter}" data-id="${counter}" autocomplete="off">
                     `;
                txt += $('#vehicle_category_list0').html();

                txt += `</select>
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
                // console.log(txt)

                $('.divs').append(txt);
                $('#' + veh_id).selectpicker('refresh');
           }
        });

        $(document).on('click', '.minus', function(){
            var id=$(this).attr('data-id');
               $('.div_'+id).hide('3000')
               $('#type_'+id).hide('3000')
            counter--;

        });

        var current_vehicle_id = '#vehicle_category_list'+counter
        $(document).on('change', current_vehicle_id, function(){

            var id = $(current_vehicle_id+' option:selected' ).val();
            var url = '/get_vehicles';
            $.ajax({
                method:'get',
                data: {id:id},
                url: url,
                success: function(response, status, xhr, $form) {
                    console.log(response)
                    var html='';
                    html += "<option value='' selected disabled>Choose type</option>";
                    $.each(response,function (key,value) {
                        console.log(value)
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#truck_used'+counter_veh).empty().append(html);
                    $('.vehicle_type').show()
                    $('#truck_used'+counter_veh).selectpicker('refresh');
                    counter_veh++;
                }
            });
        });

        $(document).on('change', '.sbt', function(){
            var current_vehicle_id = '#vehicle_category_list'+counter
            var id = $(current_vehicle_id+' option:selected' ).val();
            var url = '/get_vehicles';
            // var val1= $('#vehicle_category_'+id+' option:selected').val();
            $.ajax({
                method:'get',
                data: {id:id},
                url: url,
                success: function(response, status, xhr, $form) {
                    var html='';
                    $.each(response,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                        // $("#truck_used").append('<option value=1>My option</option>');
                        console.log(value);
                    });
                    html += "<option value='' selected disabled>Choose type</option>";
                    $('#truck_used_'+counter_veh).empty().append(html);
                    $('#truck_used_'+counter_veh).selectpicker('refresh');
                    $('#type_'+id).show('3000');
                    counter_veh++;
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
