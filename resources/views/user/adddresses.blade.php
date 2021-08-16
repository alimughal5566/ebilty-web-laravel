@extends('admin.layout.app')

@section('content')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #eea200;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #eea200;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>

    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid  ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title"><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle" style="display: block;"><span></span></button>Vehicles</h3>
{{--                <span class="kt-subheader__desc">System Configuration</span>--}}
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__breadcrumbs">

                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                </div>
            </div>
        </div>
    </div>
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
            <!--Begin:: App Aside Mobile Toggle-->
            <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                <i class="la la-close"></i>
            </button>
            <!--End:: App Aside Mobile Toggle-->
            <!-- begin:: Aside -->
{{--        @include('admin.setting.aside_setting')--}}
        <!-- end:: Aside -->
            <!--End::Aside-->
            <!--Begin:: Inbox List-->
            <div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown" id="kt_inbox_list" id="form_data">

                <div class="kt-portlet__body kt-portlet__body--fit-x">
                    <div class="col-lg-12">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Addresses
                                </h3>
                            </div>
                            <div class="kt-portlet__head-label" >
                                <h3 class="kt-portlet__head-title">
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#add_vehicle"><i class="fas fa-plus"></i></button>
                                </h3>
                            </div>
                        </div>
                        <div id="save_msg" style="margin-top: 5px !important; background-color: #c2ffcc !important; display: none; color: #08751a !important; border: 1px solid; border-radius: 8px !important; border-color: green !important; padding: 5px!important; text-align: center; font-size: 25px !important;"></div>
                        <div class="kt-portlet__body kt-portlet__body--fit-x">
                            <div class="col-lg-12">
                                <table class="table" id="vehicle_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">State</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Zip</th>
                                        <th scope="col">Default</th>
                                        <th scope="col">Make Default</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count = 1; @endphp
                                    @forelse($addresses as $address)
                                        <tr>
                                            <td class="count">{{ $count++ }}</td>
                                            <td class="name">{{ucfirst(@$address->address)}}</td>
                                            <td class="name">{{ucfirst(@$address->state->name)}}</td>
                                            <td class="name">{{ucfirst(@$address->city->name)}}</td>
                                            <td class="">{{@$address->zip}}</td>
                                            <td class="">{{(@$address->is_default==1)?"Yes":"No"}}</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" id="type_status{{$address->id}}" class="chk"
                                                           {{(@$address->is_default == 1)?'checked':''}} onchange="updatestatus({{@$address->id}})">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" style="text-align: center">No detail found</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Content -->
    <div class="modal fade show" id="add_vehicle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Add address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
{{--                    <form method="post"  action="{{route('addAddress')}}">--}}
{{--                        @csrf--}}
                        <div class="row">
                            <div class="col-xl-12">

                                        <div class="row">

                                            <div class="form-group col-lg-12">
{{--                                                <label>Address<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>--}}

{{--                                                    <textarea name="address" id="addresinput" class="form-control" required></textarea>--}}

                                                        <label for="address_address">Address</label>
                                                        <input type="text" id="address-input" name="address" class="form-control map-input">
                                                        <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                                        <input type="hidden" name="address_longitude" id="address-longitude" value="0" />



                                        <div class="form-group col-lg-12">
                                            <label>Country<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                            <select class="form-control country_id" id="contry" onchange="getStates(this.value,'stat')" data-senderaddress="country" required title="Please choose country" data-live-search="true" name="country" >
                                                @foreach($countries as $country)
                                                    <option  value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>State / Region&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                            <select class="form-control state_id" id="stat" onchange="getCities(this.value,'cite')"  title="Please select country first" name="state" data-live-search="true" required >
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>City&nbsp;<span class="kt-badge kt-badge--danger kt-badge--dot"></span></label>
                                            <select class="form-control city_id"  id="cite" onchange="getArea(this.value,'areea')" data-senderaddress="locality" name="city" title="Please select state first" data-live-search="true" required>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Area</label>
                                            <select class="form-control area_id"  id="areea" data-senderaddress="sublocality" name="area" title="Please select city first" data-live-search="true"  required >
                                                <option data-hidden="true"></option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Zip&nbsp;</label>
                                            <input class="form-control" name="zip" required placeholder="Area zip code" >
                                        </div>
                                                <div id="address-map-container" style="width:100%;height:400px; ">
                                                    <div style="width: 100%; height: 100%" id="address-map"></div>
                                                </div>


                                    </div>

                                </div>
                                </div>
                            </div>
                        <hr>

                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit"  class="btn btn-warning w-25 float-right">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>

                    </form>

        </div>
    </div>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
{{--    <script src="https://maps.googleapis.com/maps/api/js?key={{env('G_MAP_KEY')}}&libraries=places&callback=initialize&libraries=places" async></script>--}}
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('G_MAP_KEY')}}&libraries=places&callback=initialize&libraries=places" async></script>

    <script>

        function initialize() {
            $('#address-input').on('keyup', function() {

            alert('sdasdasa');
            const locationInputs = document.getElementsByClassName("map-input");

            const autocompletes = [];
            const geocoder = new google.maps.Geocoder;
            for (let i = 0; i < locationInputs.length; i++) {

                const input = locationInputs[i];
                const fieldKey = input.id.replace("-input", "");
                const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';
                const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -33.8688;
                const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 151.2195;

                const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
                    center: {lat: latitude, lng: longitude},
                    zoom: 18
                });

                console.log(map);

                const marker = new google.maps.Marker({
                    map: map,
                    position: {lat: latitude, lng: longitude},
                    title: "Click to zoom",
                    draggable: true
                });

                marker.setVisible(isEdit);

                const autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.key = fieldKey;
                autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
            }

            for (let i = 0; i < autocompletes.length; i++) {
                const input = autocompletes[i].input;
                const autocomplete = autocompletes[i].autocomplete;
                const map = autocompletes[i].map;
                const marker = autocompletes[i].marker;

                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                    marker.setVisible(false);
                    const place = autocomplete.getPlace();

                    geocoder.geocode({'placeId': place.place_id}, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            const lat = results[0].geometry.location.lat();
                            const lng = results[0].geometry.location.lng();
                            setLocationCoordinates(autocomplete.key, lat, lng);
                        }
                    });

                    if (!place.geometry) {
                        window.alert("No details available for input: '" + place.name + "'");
                        input.value = "";
                        return;
                    }

                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);
                    }
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                });

                google.maps.event.addListener(marker, 'dragend', function() {
                    geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                $('#address').val(results[0].formatted_address);
                                $('#lat').val(marker.getPosition().lat());
                                $('#lng').val(marker.getPosition().lng());
                                console.log(marker.getPosition().lng());
                                console.log(marker.getPosition().lat());
                            }
                        }
                    });
                });

            }

        });
    }

        function setLocationCoordinates(key, lat, lng) {
            const latitudeField = document.getElementById(key + "-" + "latitude");
            const longitudeField = document.getElementById(key + "-" + "longitude");
            latitudeField.value = lat;
            longitudeField.value = lng;
        }

        @if (\Session::has('success'))
        toastr.success('{!! \Session::get('success') !!}');
        @endif

        function getStates(id,clas) {
            $.ajax({
                type: 'GET',
                url: "{{route('getStates')}}",
                data: {'id': id},
                success: function (data) {
                    var html='';
                    html += "<option value='' selected disabled>Choose State</option>";
                    $.each(data.states,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#'+clas).empty().append(html);
                    $('#'+clas).selectpicker('refresh');
                }
            })

        };
        function getCities(id,clas) {
            $.ajax({
                type: 'GET',
                url: "{{route('getCities')}}",
                data: {'id': id},
                success: function (data) {
                    var html='';
                    html += "<option value='' selected disabled>Choose City</option>";
                    $.each(data.cities,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#'+clas).empty().append(html);
                    $('#'+clas).selectpicker('refresh');
                }
            })
        };
        function getArea(id,clas) {
            $.ajax({
                type: 'GET',
                url: "{{route('getArea')}}",
                data: {'id': id},
                success: function (data) {
                    var html='';
                    html += "<option value='' selected disabled>Choose Area</option>";
                    $.each(data.cities,function (key,value) {
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#'+clas).empty().append(html);
                    $('#'+clas).selectpicker('refresh');
                }
            })

        }

        function updatestatus(id){
            var status=0;
            if($('#type_status'+id).prop("checked") == true) {
                status = 1;
            }
            var url = '{{route('address.status.update')}}'
            $.ajax({
                type: "get",
                url: url,
                data: {'id':id,'status':status},
                success: function( msg ) {
                    toastr.success( msg.success);
                    $('.chk').removeAttr("checked");
                    $('#type_status'+id).attr("checked")

                }
            });
        }




    </script>
@stop

