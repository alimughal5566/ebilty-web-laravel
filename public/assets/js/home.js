var wmOffices = jQuery('.world-map-offices'),
    			wmTrig = jQuery('.world-map-triggers'),
    			wmOffice = wmOffices.children('.world-office'),
    			wmTriga = wmTrig.find('.office-name'),
    			clicked;

    		wmOffice.each(function(index, el) {
    			var $el = jQuery(el);
    			$el.css({
    				top: parseInt($el.attr('data-fromtop')),
    				left: parseInt($el.attr('data-fromleft'))
    			})
    			.on('mouseover', function() {
    				wmTrig.find("[data-office='" + $el.attr('data-office') + "']").addClass('selected');
    			})
    			.on('mouseout', function() {
    				wmTriga.removeClass('selected');
    			});;
    		});

    		wmTriga.on('mouseover', function() {
    			wmOffices.find("[data-office='" + jQuery(this).attr('data-office') + "']").addClass('selected');
    		})
    		.on('mouseout', function() {
    			wmOffice.removeClass('selected');
    		});

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
                "dateformat": "mm/dd/yyyy",
                "daterangeformat": "MM/DD/Y"
            };

            const elemName = document.querySelector('#userName');
		const elemEmail = document.querySelector('#userEmail');
		const elemMessage = document.querySelector('#userMessage');
		const formContact = document.querySelector('#signup');

		const checkUsername = () => {

			let valid = false;

			const min = 3, max = 25;

			const username = elemName.value.trim();

			if (!isRequired(username)) {
				showError(elemName, 'Username cannot be blank.');
			} else if (!isBetween(username.length, min, max)) {
				showError(elemName, `Username must be between ${min} and ${max} characters.`)
			} else {
				showSuccess(elemName);
				valid = true;
			}
			return valid;
		};

		const checkEmail = () => {
			let valid = false;
			const email = elemEmail.value.trim();
			if (!isRequired(email)) {
				showError(elemEmail, 'Email cannot be blank.');
			} else if (!isEmailValid(email)) {
				showError(elemEmail, 'Email is not valid.')
			} else {
				showSuccess(elemEmail);
				valid = true;
			}
			return valid;
		};

		const isEmailValid = (email) => {
			const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		};

		const checkMessage = () => {

			let valid = false;

			const min = 3, max = 1500;

			const message = elemMessage.value.trim();

			if (!isRequired(message)) {
				showError(elemMessage, 'Message cannot be blank.');
			} else if (!isBetween(message.length, min, max)) {
				showError(elemMessage, `Message must be between ${min} and ${max} characters.`)
			} else {
				showSuccess(elemMessage);
				valid = true;
			}
			return valid;
		};

		const isRequired = value => value !== '';
		const isBetween = (length, min, max) => !(length < min || length > max);

		const showError = (input, message) => {
			// get the form-field element
			const formField = input.parentElement;
			// add the error class
			formField.classList.remove('success');
			formField.classList.add('error');

			// show the error message
			const error = formField.querySelector('small');
			error.textContent = message;
		};

		const showSuccess = (input) => {
			// get the form-field element
			const formField = input.parentElement;

			// remove the error class
			formField.classList.remove('error');
			formField.classList.add('success');

			// hide the error message
			const error = formField.querySelector('small');
			error.textContent = '';
		}


		formContact.addEventListener('submit', function (e) {
			// prevent the form from submitting
			e.preventDefault();

			// validate fields
			let isUsernameValid = checkUsername(),
					isEmailValid = checkEmail(),
					isMessage= checkMessage();

			let isFormValid = isUsernameValid && isEmailValid && isMessage;

			// submit to the server if the form is valid
			if (isFormValid) {

			}
		});


		const debounce = (fn, delay = 500) => {
			let timeoutId;
			return (...args) => {
				// cancel the previous timer
				if (timeoutId) {
					clearTimeout(timeoutId);
				}
				// setup a new timer
				timeoutId = setTimeout(() => {
					fn.apply(null, args)
				}, delay);
			};
		};

		formContact.addEventListener('input', debounce(function (e) {
			switch (e.target.id) {
				case 'username':
					checkUsername();
					break;
				case 'email':
					checkEmail();
					break;
				case 'message':
					checkMessage();
					break;
			}
		}));

        jQuery(document).ready(function() {
            $('body').on('click', '.locale', function(e){
                e.preventDefault();
                var selected = $(this).attr('rel');
                if(selected != ''){
                    $.request('onSwitchLocale', {
                        data: {locale: selected}
                    });
                }
            });


            // Form Validation & Send Mail code
                if(typeof($('#register_panel form')) != 'undefined') {
                    $.each($('#register_panel form'), function(index, el) {
                        var cform = $(el),
                            cResponse = $('<div class="cf_response"></div>');
                        cform.prepend(cResponse);
                        cform.h5Validate();

                        cform.submit(function(e) {
                            e.preventDefault();
                            if(cform.h5Validate('allValid')) {

                                $.request('onRegister', {
                                                                                    data: {name: $('#registerName').val(), email: $('#registerEmail').val(), username: $('#registerUsername').val(), password: $('#registerPassword').val(), password_confirmation: $('#rpassword').val()},
                                                                                error: function(e,response) {
                                        cform.find('.cf_response').addClass('alert alert-danger error');
                                        cform.find('.cf_response').html(e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                                        cResponse.show();
                                    },
                                    success: function(response, status, xhr, $form) {
                                        cform.find('.cf_response').addClass('alert alert-success');
                                                                                            cform.find('.cf_response').html('Successfully registered, you are being redirect.');
                                            cResponse.show();
                                            window.location.href = "../";
                                                                                    }
                                });
                            }
                            return false;
                        });
                    });
                }
                if(typeof($('.contactForm form, .contactForm.pop-up-form form')) != 'undefined') {
                    $.each($('.contactForm form, .contactForm.pop-up-form form'), function(index, el) {
                        var cform = $(el),
                            cResponse = $('<div class="cf_response"></div>');
                        if(cform.find('.cf_response').length > 0){
                            cform.find('.cf_response').remove();
                        }
                        cform.prepend(cResponse);
                        cform.h5Validate();

                        cform.on('click', 'button', function(e) {
                            e.preventDefault();
                            if(cform.h5Validate('allValid')) {
                                cResponse.hide();
                                cform.submit();
                            }
                            return false;
                        });
                    });
                }
            // END Form Validation
            $('body').on('click','#agree', function(e){
                $( "#agreement" ).prop( "checked", true );
            });
        });
