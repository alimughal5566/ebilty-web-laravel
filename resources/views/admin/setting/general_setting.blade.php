@extends('admin.layout.app')
@section('title', 'Settings')

@section('content')

    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid  ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title"><button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle" style="display: block;"><span></span></button>Settings</h3>
                <span class="kt-subheader__desc">System Configuration</span>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="{{route('admin.setting.general_setting')}}" class="kt-subheader__breadcrumbs-home">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>
                    </a>
                    <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Settings</span>
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
        @include('admin.setting.aside_setting')
        <!-- end:: Aside -->
            <!--End::Aside-->
            <!--Begin:: Inbox List-->
            <div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown" id="kt_inbox_list" id="form_data">

                <div class="kt-portlet__body kt-portlet__body--fit-x">
                    <div class="col-lg-12">
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
                                background-color: #2196F3;
                            }

                            input:focus + .slider {
                                box-shadow: 0 0 1px #2196F3;
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
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Home Page Setting(s)</h3>
                            </div>
                        </div>
                        <div id="save_msg" style="margin-top: 5px !important; background-color: #c2ffcc !important; display: none; color: #08751a !important; border: 1px solid; border-radius: 8px !important; border-color: green !important; padding: 5px!important; text-align: center; font-size: 25px !important;"></div>
                        <div class="kt-portlet__body kt-portlet__body--fit-x">
                            <div class="col-lg-12">
                                <table class="table" id="payment_type_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Page Name</th>
                                        <th scope="col">Section</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Content</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count = 1; @endphp
                                    @forelse($settings as $setting)
                                        <tr>
                                            <td class="count">{{ $count++ }}</td>
                                            <td class="name">{{$setting->page_name}}</td>
                                            <td > {{$setting->section_name}} </td>
                                            <td >
                                                <label class="switch">
                                                    <input type="checkbox" class="text-warning" id="type_status{{$setting->id}}" {{ $setting->status == 1 ? 'checked' : '' }} onchange="update_status({{$setting->id}})">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                            <td>
                                                @if($setting->id < 5)
                                                    <a data-toggle="modal" onclick="show_data_modal({{$setting->content}}, {{$setting->id}})" class="text-warning"> <i class="fas fa-edit"></i>  </a>
                                                @else
                                                    <a data-toggle="modal" data-target="#id_{{$setting->id}}" class="text-warning"> <i class="fas fa-edit"></i>  </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" style="text-align: center">There is no record in table</td>
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
    <div class="modal fade" id="homepage_slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Home page slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post" action="{{route('admin.setting.save_homepage_slider')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                    <table class="table">
{{--                                                        <thead>--}}
{{--                                                        <tr>--}}
{{--                                                            <th scope="col">Title</th>--}}
{{--                                                            <th scope="col">Description</th>--}}
{{--                                                            <th scope="col">Image</th>--}}
{{--                                                            <th scope="col">Buttons</th>--}}
{{--                                                        </tr>--}}
{{--                                                        </thead>--}}
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <label>Title</label>
                                                                <input type="text" name="title"  placeholder="Title"  id="title" class="form-control">
                                                                <input type="hidden" name="id" id="id" class="form-control">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><label>Description</label>
                                                           <textarea class="form-control" rows="5" name="descrip" id="descrip"></textarea>
                                                            <td>
                                                        </tr>
                                                        <tr><td>
                                                                <label>Backgound Image</label>
                                                                <input type="file" name="image" class="form-control"><br>
                                                                <span class="float-right pb-1"><img src="" id="image" alt="" width="100px" height="100px"></span></td>
                                                        </tr>
                                                          <tr><td>
                                                                <label>Button name</label>
                                                                <input type="text" name="button1" id="button1" placeholder="Enter Button 1 Name" class="form-control"><br>
                                                                  <label>Button url</label>
                                                                <input type="text" name="button2" id="button2" placeholder="Enter Button 1 link" class="form-control"><br>
                                                                  <label>Button 2 name</label>
                                                                <input type="text" name="button3" id="button3" placeholder="Enter Button 2 Name" class="form-control"><br>
                                                                  <label>Button 2 url</label>
                                                                <input type="text" name="button4" id="button4" placeholder="Enter Button 2 link" class="form-control">
                                                            </td>
                                                          </tr>

                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Slider 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post" action="{{route('admin.setting.save_homepage_slider2')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Buttons</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="text" name="title2" class="form-control"></td>
                                                        <td><textarea name="descrip2" ></textarea></td>
                                                        <td><input type="file" name="image2" class="form-control"></td>
                                                        <td>
                                                            <input type="text" name="button1" placeholder="Enter Button 1 Name" class="form-control"><br>
                                                            <input type="text" name="button2" placeholder="Enter Button 1 link" class="form-control"><br>
                                                            <input type="text" name="button3" placeholder="Enter Button 2 Name" class="form-control"><br>
                                                            <input type="text" name="button4" placeholder="Enter Button 2 link" class="form-control">
                                                        </td>
                                                        <td><input type="checkbox" name="status2"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Slider 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post" action="{{route('admin.setting.save_homepage_slider3')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Buttons</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="text" name="title3" class="form-control"></td>
                                                        <td><textarea name="descrip3" ></textarea></td>
                                                        <td><input type="file" name="image3" class="form-control"></td>
                                                        <td>
                                                            <input type="text" name="button1" placeholder="Enter Button 1 Name" class="form-control"><br>
                                                            <input type="text" name="button2" placeholder="Enter Button 1 link" class="form-control"><br>
                                                            <input type="text" name="button3" placeholder="Enter Button 2 Name" class="form-control"><br>
                                                            <input type="text" name="button4" placeholder="Enter Button 2 link" class="form-control">
                                                        </td>
                                                        <td><input type="checkbox" name="status3"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-warning btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Slider 4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post" action="{{route('admin.setting.save_homepage_slider4')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Buttons</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="text" name="title4" class="form-control"></td>
                                                        <td><textarea name="descrip4" ></textarea></td>
                                                        <td><input type="file" name="image4" class="form-control"></td>
                                                        <td>
                                                            <input type="text" name="button1" placeholder="Enter Button 1 Name" class="form-control"><br>
                                                            <input type="text" name="button2" placeholder="Enter Button 1 link" class="form-control"><br>
                                                            <input type="text" name="button3" placeholder="Enter Button 2 Name" class="form-control"><br>
                                                            <input type="text" name="button4" placeholder="Enter Button 2 link" class="form-control">
                                                        </td>
                                                        <td><input type="checkbox" name="status4"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">About us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post"  action="{{route('admin.setting.save_about_us_banner')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Tagline</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Banner Image</th>
{{--                                                        <th scope="col">Body Image</th>--}}
{{--                                                        <th scope="col">Status</th>--}}
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="text" name="title"   placeholder="Title"  class="form-control"></td>
                                                        <td><input type="text" name="tagline" class="form-control"></td>
                                                        <td>
                                                            <input type="file" name="body_image" class="form-control">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Home page Card 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post"  action="{{route('admin.setting.save_homepage_card1')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Icon</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="file" name="icon" class="form-control"></td>
                                                        <td><input type="text" name="title"   placeholder="Title"  class="form-control"></td>
                                                        <td><textarea name="description" class="form-control" ></textarea></td>
                                                        <td><input type="checkbox" name="status"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Home page Card 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post"  action="{{route('admin.setting.save_homepage_card2')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Icon</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="file" name="icon" class="form-control"></td>
                                                        <td><input type="text" name="title"  placeholder="Title"  class="form-control"></td>
                                                        <td><textarea name="description" class="form-control"></textarea></td>
                                                        <td><input type="checkbox" name="status"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Home page Card 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post"  action="{{route('admin.setting.save_homepage_card3')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Icon</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="file" name="icon" class="form-control"></td>
                                                        <td><input type="text" name="title"   placeholder="Title"  class="form-control"></td>
                                                        <td><textarea name="description" class="form-control"></textarea></td>
                                                        <td><input type="checkbox" name="status"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Home page Card 4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post"  action="{{route('admin.setting.save_homepage_card4')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Icon</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="file" name="icon" class="form-control"></td>
                                                        <td><input type="text" name="title"   placeholder="Title"  class="form-control"></td>
                                                        <td><textarea name="description"  class="form-control"></textarea></td>
                                                        <td><input type="checkbox" name="status"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">About Us (Body)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post"  action="{{route('admin.setting.save_about_us_body')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Details</th>
                                                        <th scope="col">Description</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="text" placeholder="Title" name="title" class="form-control"></td>
                                                        <td><textarea name="details" ></textarea></td>
                                                        <td><input type="file" name="body_image" class="form-control"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="id_11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="    width: 1000px;
    margin-left: -200px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">F.A.Q.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="post"  action="{{route('admin.setting.save_faq_banner')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12">

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Tagline</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Image</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="text" name="title"   placeholder="Title" class="form-control"></td>
                                                        <td><input name="details" class="form-control" ></td>
                                                        <td><input type="file" name="image" class="form-control"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="form-group">
                                    <button type="submit" id="add_" class="btn btn-primary btn-lg w-50">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>


    <script>
        @if (\Session::has('success'))
            toastr.success('{!! \Session::get('success') !!}');
        @endif
        function show_data_modal(content, id){
            if(id < 5){
                $('#homepage_slider').modal('show');
                $('#title').val(content.title)
                $('#descrip').val(content.description)
                $('#button1').val(content.button1_title)
                $('#button2').val(content.button1_link)
                $('#button3').val(content.button2_title)
                $('#button4').val(content.button2_link)
                $('#id').val(id)
                var path = '{{asset('setting/sliders')}}'+'/'+content.image
                $("#image").attr("src",path);
            }
        }
        $('#edit_payment_form').on('submit', function(e) {
            e.preventDefault();
            var url = '{{route('admin.setting.update_package_type')}}';
            var token = $('#_token').val();
            var name = $('#edit_name').val();
            var status = $('#edit_status').val();
            var payment_type_id = $('#payment_type_id').val();
            $.ajax({
                type: "get",
                url: url,
                data: {id:payment_type_id, name:name, status:status},
                success: function( msg ) {
                    $("#save_msg").html()
                    $('#edit_package_modal').modal('hide');
                    $('#save_msg').css('display','block');
                    $("#save_msg").append(msg.msg);
                    var toggle_button = '';
                    // var number = $('#payment_type_table tr:last').attr('id');
                    var item = $(this).closest("tr").find(".count").text();
                    //for verification purposes
                    console.log(item);
                    if(msg.row.status == 0){
                        toggle_button = '<label class="switch"><input type="checkbox"><span class="slider round"></span></label>'
                    }else{
                        toggle_button = '<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>'
                    }
                    markup = '<tr><td>  </td><td>'+ msg.row.name + '</td>><td>'+ toggle_button +'</td><td> <a onclick="delete_payment_type('+ msg.row.id +')" class="btn btn-primary btn-lg w-50"> <i class="fas fa-edit"></i>  </a> <a onclick="edit_package_type('+ msg.row.id +')" class="btn btn-danger btn-sm"> <i class="far fa-trash-alt"></i>  </a></td></tr>';
                    tableBody = $("#payment_type_table tbody");
                    // tableBody.append(markup);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        });
        function edit_package_type(id) {
            var url = '{{route('admin.setting.edit_package_type')}}'
            $.ajax({
                type: "get",
                url: url,
                data: {id:id},
                success: function( msg ) {
                    $("#save_msg").html()
                    console.log(msg)
                    $('#edit_package_modal').modal('show');
                    $('#edit_name').val(msg.name);
                    $('#payment_type_id').val(msg.id);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        }
        function delete_payment_type(id) {
            $(this).parents('tr').first().remove();
            var url = '{{route('admin.setting.delete_package_type')}}'
            $.ajax({
                type: "get",
                url: url,
                data: {id:id},
                success: function( msg ) {
                    $("#save_msg").html()
                    $('#save_msg').css('display','block');
                    $('#save_msg').css('background-color','#c2ffcc');
                    var whichtr = $(this).closest("tr");
                    // alert('worked'); // Alert does not work
                    whichtr.remove();
                    $("#save_msg").append(msg.msg);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        }
        function update_status(id){

            var url = '{{route('admin.setting.homepage_update_status')}}'
            var status = 0;
            if($('#type_status'+id).is(':checked')){
                status = 1;
            }
            $.ajax({
                type: "get",
                url: url,
                data: {id:id, status: status},
                success: function( msg ) {
                    toastr.success('Status has been updated')
                }
            });
        }
        function make_status_inactive(id){
            $(this).parents('tr').first().remove();
            var url = '{{route('admin.setting.make_status_inactive_setting')}}'
            $.ajax({
                type: "get",
                url: url,
                data: {id:id},
                success: function( msg ) {
                    $("#save_msg").html()
                    $('#save_msg').css('display','block');
                    $('#save_msg').css('background-color','#c2ffcc');

                    $("#save_msg").append(msg.msg);
                    setTimeout(function(){ $("#save_msg").remove(); }, 3000);
                }
            });
        }
    </script>
@stop

