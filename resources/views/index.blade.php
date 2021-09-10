      <!-- Header style 1 -->
      @include('front_layout.front_header')
      <!-- / Header style 1 -->

      <!-- Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 2 -->
      <div class="custom-slider kl-slideshow iosslider-slideshow uh_light_gray maskcontainer--shadow_ud iosslider--custom-height scrollme kl-slider-loaded">
      <!-- Loader -->
      <div class="kl-loader">
      <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve"><path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946 s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634 c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"></path><path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0 C22.32,8.481,24.301,9.057,26.013,10.047z" transform="rotate(98.3774 20 20)"><animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite"></animateTransform></path></svg>
      </div>
      <!-- Loader -->
      <div class="bgback">
      </div>
      <!-- Animated Sparkles -->
      <div class="th-sparkles">
      </div>
      <!--/ Animated Sparkles -->
      <!-- iOS Slider wrapper with animateme scroll efect -->
      <div class="iosSlider kl-slideshow-inner animateme" data-trans="6000" data-autoplay="0" data-infinite="true" data-when="span" data-from="0" data-to="0.75" data-translatey="300" data-easing="linear" style="position: relative; top: 0px; left: 0px; overflow: hidden; z-index: 1; perspective: 1000px; backface-visibility: hidden; width: 1583px; height: 336px;">
      <!-- Slides -->
      <div class="kl-iosslider hideControls" style="position: relative; cursor: -webkit-grab; backface-visibility: hidden; transform: matrix(1, 0, 0, 1, -3166, 0); width: 3166px;">
      <!-- Slide 1 -->
          @isset($sliders)
           @foreach($sliders as $slider)
               @if(isset($slider->image))
                  <div class="item iosslider__item " style="overflow: hidden; position: absolute; transform: matrix(1, 0, 0, 1, 3166, 0); backface-visibility: hidden; width: 1583px;">

                  <!-- Image -->
          <!-- <div class="slide-item-bg" style="background-image:url(./front/images/_niches/cargo/bg01.jpg);"> -->
          <div class="slide-item-bg" style="background-image:url({{asset("/setting/sliders")."/".$slider->image}});">
          </div><!-- cargo2.jpg -->
          <!--/ Image -->
          <!-- Gradient overlay -->
          <div class="kl-slide-overlay" style="background:rgba(32,55,152,0.4); background: -moz-linear-gradient(left, rgba(32,55,152,0.4) 0%, rgba(17,93,131,0.25) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(32,55,152,0.4)), color-stop(100%,rgba(17,93,131,0.25))); background: -webkit-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: -o-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: -ms-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: linear-gradient(to right, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); ">
          </div>
          <!--/ Gradient overlay -->
          <!-- Captions container -->
              <div class="container kl-iosslide-caption kl-ioscaption--style4 s4ext fromleft klios-alignleft kl-caption-posv-middle">
              <!-- Captions animateme wrapper -->
                      <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1" data-easing="linear">
                  <!-- Main Big Title -->
                  <h2 class="main_title has_titlebig text-center">
                  <!-- <span><strong>FAST</strong>, SAFE & ACCURATE</span> -->
                  <span class="text-center">
                  {{ $slider->title }}
                  </span>
                  </h2>
                  <!--/ Main Big Title -->
                  <!-- Big Title -->
                  <p class="title_big text-center">
                  <!-- ANYWHERE<strong> IN THIS WORLD</strong> -->
                      {{ $slider->description }}
                  </p>
                  <!--/ Big Title -->
                  <!-- Link more button -->

                  <div class="button_more text-center">
                          <a href="{{ url ('/login') }}" class="more btn-gradient btn-gradient-blue"> Join US </a>

                      </div>

                      {{-- <div class="button_more text-center">
                          @if($slider->button1_link )
                            <a href="{{ $slider->button1_link }}" target="_self" class="more btn-gradient btn-gradient-orange">  <!-- http://ebilty.com/en/about -->
                                {{ $slider->button1_title }}
                            </a>
                          @endif
                          @if($slider->button2_link )
                              <a href="{{ $slider->button2_link }}" target="_self" class="more btn-gradient btn-gradient-blue">  <!-- http://ebilty.com/en/about -->
                                  {{ $slider->button2_title }}
                              </a>
                          @endif

                      </div> --}}
                  <!--/ Link more button -->
                  </div>
              <!--/ Captions animateme wrapper -->
              </div>
          <!--/ Captions container -->
          </div>

             @endif
                  @endforeach
            @endisset
      <!--/ Slide 1 -->

      </div>
      <!--/ Slides -->
      <!-- Navigation Controls - Prev -->
      <div class="kl-iosslider-prev" style="cursor: pointer;">
      <!-- Arrow -->
      <span class="thin-arrows ta__prev"></span>
      <!--/ Arrow -->
      <!-- Label - prev -->
      <div class="btn-label">
      PREV
      </div>
      <!--/ Label - prev -->
      </div>
      <!--/ Navigation Controls - Prev -->
      <!-- Navigation Controls - Next -->
      <div class="kl-iosslider-next" style="cursor: pointer;">
      <!-- Arrow -->
      <span class="thin-arrows ta__next"></span>
      <!--/ Arrow -->
      <!-- Label - next -->
      <div class="btn-label">
      NEXT
      </div>
      <!--/ Label - next -->
      </div>
      <!--/ Navigation Controls - Prev -->
      </div>
      <!--/ iOS Slider wrapper with animateme scroll efect -->
      <!-- Bullets -->
      <div class="kl-ios-selectors-block bullets2">
      <div class="selectors">
      <!-- Item #1 -->
      <div class="item iosslider__bull-item first selected" style="cursor: pointer;">
      </div>
      <!--/ Item #1 -->
      <!-- Item #2 -->
      <div class="item iosslider__bull-item" style="cursor: pointer;">
      </div>
      <!--/ Item #2 -->
      </div>
      <!--/ .selectors -->
      </div>
      <!--/ Bullets -->
      <div class="scrollbarContainer">
      </div>
      <!-- Bottom mask style 2 -->
      <div class="kl-bottommask kl-bottommask--shadow_ud">
      </div>
      <!--/ Bottom mask style 2 -->
      </div>
      <!--/ Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 2 -->
      <!-- Title element - section with custom paddings -->
      <section id="faq"  class="hg_section bg-white pt-100 pb-100">
      <div  class="container">
      <div class="row">
      <div class="col-12">
      <!-- Title element wit custom paddings -->
      <div class="kl-title-block text-center tbk-symbol--line pb-0">
      <!-- Sub-title with custom color -->
      <h6 class="gray">WELCOME TO</h6>
      <!-- Title with custom size, weight and color -->
        <img src="{{ asset('uploads/logos/company-logo.png') }}" class="img-fluid aboutUsLogo" >
      <!--/ Title -->
      <!-- Detail -->
      <p class="pt-30 pb-30  mx-auto px-3 px-lg-5 text_lmobile text-justify">eBilty Connects all range of Road Freight Transport Vehicles to all types of Goods “senders / receivers”. Instant next bookings especially for return vehicles after completing first service covering Ports, Factories, Warehouses, Markets, Shops, Offices, Household shifting, Individuals, Your simple click on eBilty app by describing Goods nature and load / volume with Pick up & Drop off locations within country, relevant vehicles will respond you instantly with most favorable rates on your smart phones & on web with live tracking facility. Digitalize road logistics’ solution on simple clicks with ease to access, track, and record keeping for both users and transporters who can monitor their drivers on eBilty free.</p>
      <!--/ Detail -->
      </div>
      <!--/ Title element wit custom paddings -->
      </div>
      </div>
      </div>
      <div  class="container">
      <div class="row">
      <div class="col-md-12">
      <div class="row gutter-md services-row">
      <!-- Icon box float left -->
      @isset($cards)
          @foreach($cards as $card)
                  <div class="col-sm-12 col-md-6 col-lg-3">
                  <div class="kl-iconbox kl-iconbox--fleft text-left pt-20 pb-20 pl-25 pr-25">
                      <div class="kl-iconbox__inner mt-25">
                          <!-- Icon with custom sizes -->
                          <div class="kl-iconbox__icon-wrapper w-30 w-md-30 w-sm-20 w-xs-20 text-white">
                              <img src="{{ asset($card->icon) }}" class="kl-iconbox__icon" alt="" title="">
                          </div>
                          <!--/ Icon -->
                      <!-- /.kl-iconbox__icon-wrapper -->
                          <div class="kl-iconbox__content-wrapper">
                              <!-- Title with csutom size, weight and color -->
                              <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper pt-15 pb-15">
                                  <h3 class="kl-iconbox__title fs-s fw-extrabold text-white w-50 text-uppercase">
                                      {{ $card->title }}
                                  </h3>
                              </div>
                              <!--/ Title -->
                                <!-- Description -->
                              <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper mb-0">
                              <p class="kl-iconbox__desc fs-14 text-white">
                                  {{$card->description}}
                              </p>
                              </div>
                          <!--/ Description -->
                          </div>
                          <!-- /.kl-iconbox__content-wrapper -->
                      </div>
                  <!--/ kl-iconbox__inner -->
                  </div>
                </div>
          @endforeach
      @endisset
      <!--/ Icon box float left -->
      </div>
{{--      <!--/ col-sm-12 col-md-6 col-lg-3 -->--}}
{{--      <div class="col-sm-12 col-md-6 col-lg-3">--}}
{{--      <!-- Icon box float left -->--}}
{{--      <div class="kl-iconbox kl-iconbox--fleft text-left pt-20 pb-20 pl-25 pr-25">--}}
{{--      <div class="kl-iconbox__inner mt-25">--}}
{{--      <!-- Icon with custom sizes -->--}}
{{--      <div class="kl-iconbox__icon-wrapper w-30 w-md-30 w-sm-20 w-xs-20 text-white">--}}
{{--      <img src="http://ebilty.com/storage/app/uploads/public/605/de0/325/605de03255abc636681567.png" class="kl-iconbox__icon" alt="" title="">--}}
{{--      </div>--}}
{{--      <!--/ Icon -->--}}
{{--      <!-- /.kl-iconbox__icon-wrapper -->--}}
{{--      <div class="kl-iconbox__content-wrapper">--}}
{{--      <!-- Title with csutom size, weight and color -->--}}
{{--      <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper pt-15 pb-15">--}}
{{--      <h3 class="kl-iconbox__title fs-s fw-extrabold text-white w-50 text-uppercase">--}}
{{--      Collect Money--}}
{{--      </h3>--}}
{{--      </div>--}}
{{--      <!--/ Title -->--}}
{{--      <!-- Description -->--}}
{{--      <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper mb-0">--}}
{{--      <p class="kl-iconbox__desc fs-14 text-white">--}}
{{--      The ability to collect money from the consignee and ship it to the correspondent again in complete security and privacy--}}
{{--      </p>--}}
{{--      </div>--}}
{{--      <!--/ Description -->--}}
{{--      </div>--}}
{{--      <!-- /.kl-iconbox__content-wrapper -->--}}
{{--      </div>--}}
{{--      <!--/ kl-iconbox__inner -->--}}
{{--      </div>--}}
{{--      <!--/ Icon box float left -->--}}
{{--      </div>--}}
{{--      <!--/ col-sm-12 col-md-6 col-lg-3 -->--}}
{{--      <div class="col-sm-12 col-md-6 col-lg-3">--}}
{{--      <!-- Icon box float left -->--}}
{{--      <div class="kl-iconbox kl-iconbox--fleft text-left pt-20 pb-20 pl-25 pr-25">--}}
{{--      <div class="kl-iconbox__inner mt-25">--}}
{{--      <!-- Icon with custom sizes -->--}}
{{--      <div class="kl-iconbox__icon-wrapper w-30 w-md-30 w-sm-20 w-xs-20 text-white">--}}
{{--      <img src="http://ebilty.com/storage/app/uploads/public/605/de0/329/605de0329b660113266214.png" class="kl-iconbox__icon" alt="" title="">--}}
{{--      </div>--}}
{{--      <!--/ Icon -->--}}
{{--      <!-- /.kl-iconbox__icon-wrapper -->--}}
{{--      <div class="kl-iconbox__content-wrapper">--}}
{{--      <!-- Title with csutom size, weight and color -->--}}
{{--      <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper pt-15 pb-15">--}}
{{--      <h3 class="kl-iconbox__title fs-s fw-extrabold text-white w-50 text-uppercase">--}}
{{--      Local Shipping--}}
{{--      </h3>--}}
{{--      </div>--}}
{{--      <!--/ Title -->--}}
{{--      <!-- Description -->--}}
{{--      <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper mb-0">--}}
{{--      <p class="kl-iconbox__desc fs-14 text-white">--}}
{{--      Shipping to and from all provinces and cities Enjoy now shipping your goods door to door and special prices for heavyweights.--}}
{{--      </p>--}}
{{--      </div>--}}
{{--      <!--/ Description -->--}}
{{--      </div>--}}
{{--      <!-- /.kl-iconbox__content-wrapper -->--}}
{{--      </div>--}}
{{--      <!--/ kl-iconbox__inner -->--}}
{{--      </div>--}}
{{--      <!--/ Icon box float left -->--}}
{{--      </div>--}}
{{--      <!--/ col-sm-12 col-md-6 col-lg-3 -->--}}
{{--      <div class="col-sm-12 col-md-6 col-lg-3">--}}
{{--      <!-- Icon box float left -->--}}
{{--      <div class="kl-iconbox kl-iconbox--fleft text-left pt-20 pb-20 pl-25 pr-25">--}}
{{--      <div class="kl-iconbox__inner mt-25">--}}
{{--      <!-- Icon with custom sizes -->--}}
{{--      <div class="kl-iconbox__icon-wrapper w-30 w-md-30 w-sm-20 w-xs-20 text-white">--}}
{{--      <img src="http://ebilty.com/storage/app/uploads/public/605/de0/32c/605de032ce90a702491670.png" class="kl-iconbox__icon" alt="" title="">--}}
{{--      </div>--}}
{{--      <!--/ Icon -->--}}
{{--      <!-- /.kl-iconbox__icon-wrapper -->--}}
{{--      <div class="kl-iconbox__content-wrapper">--}}
{{--      <!-- Title with csutom size, weight and color -->--}}
{{--      <div class="kl-iconbox__el-wrapper kl-iconbox__title-wrapper pt-15 pb-15">--}}
{{--      <h3 class="kl-iconbox__title fs-s fw-extrabold text-white w-50 text-uppercase">--}}
{{--      International Shipping--}}
{{--      </h3>--}}
{{--      </div>--}}
{{--      <!--/ Title -->--}}
{{--      <!-- Description -->--}}
{{--      <div class=" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper mb-0">--}}
{{--      <p class="kl-iconbox__desc fs-14 text-white">--}}
{{--      Shipping from and to all countries of the world Enjoy shipping your goods door to door and special prices for heavyweights after 50 kg--}}
{{--      </p>--}}
{{--      </div>--}}
{{--      <!--/ Description -->--}}
{{--      </div>--}}
{{--      <!-- /.kl-iconbox__content-wrapper -->--}}
{{--      </div>--}}
{{--      <!--/ kl-iconbox__inner -->--}}
{{--      </div>--}}
{{--      <!--/ Icon box float left -->--}}
      </div>
      <!--/ col-sm-12 col-md-6 col-lg-3 -->
      <!-- <img src="./front/images/_niches/cargo/sailing-boat.svg" class="kl-iconbox__icon" alt="" title="" />
         <img src="./front/images/_niches/cargo/transportation.svg" class="kl-iconbox__icon"  alt="" title="" />
         <img src="./front/images/_niches/cargo/airplane.svg" class="kl-iconbox__icon" alt="" title="" /> -->
      </div>
      <!--/ row gutter-md -->
      </div>

      </section>
      <!--/ Title element - section with custom paddings -->

      <section class="boxes_signup">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="section_title">
                <div class="section_title_heaf">
                  <h1>CARRIERS</h1>
                </div>
                <div class="section_content">
                  <h2>Call your own shots, <br>
                      chart your own route.</h2>
                      <h3>Pick the best loads for you.</h3>
                      <a href="{{ url ('/login') }}" class="btn btn-primary">Sign Up</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="section_image">
                <img src="{{ asset ('assets/img/im2.png') }}" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="boxes_signup change_positions">
        <div class="container">
          <div class="row">
            <div class="col-md-6 order-2 order-lg-1">
              <div class="section_image text-left">
                <img src="{{ asset ('assets/img/img1.png') }}" class="img-fluid">
              </div>
            </div>
            <div class="col-md-6 order-1 order-lg-2">
              <div class="section_title">
                <div class="section_title_heaf">
                  <h1>CARRIERS</h1>
                </div>
                <div class="section_content">
                  <h2>Call your own shots, <br>
                      chart your own route.</h2>
                      <h3>Pick the best loads for you.</h3>
                      <a href="{{ url ('/login') }}" class="btn btn-primary">Sign Up</a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>


      <!-- Carousel	-->
      <section  class="hg_section range-section pt-100 pb-100">
      <div class="container">
      <div class="row">
      <div class="col-12">
      <div class="">
      <div class="kl-title-block text-center text-white tbk-symbol--line">
      <!-- Sub-title with custom color -->
      <h6 class="">DELIVERY</h6>
      <!-- Title with custom size, weight and color -->
      <h3 class="tbk__title fs-xl fw-extrabold">
      RANGE
      </h3>
      <!--/ Title -->
      </div>
      </div>
      </div>
          <div class="section-padding">
             {{-- <div class="screenshot_slider owl-carousel">
               <div class="item">
                 <img src="{{ asset ('assets/img/asset 17.svg') }}" alt="" title="">
                 <div class="multi_slider_captions">
                   <h4>20ft close container</h4>
                 </div>
               </div>
               <div class="item">
                 <img src="{{ asset ('assets/img/asset 18.svg') }}" alt="" title="">
                 <div class="multi_slider_captions">
                   <h4>20ft open top</h4>
                 </div>
               </div>
               <div class="item">
                 <img src="{{ asset ('assets/img/asset 19.svg') }}" alt="" title="">
                 <div class="multi_slider_captions">
                   <h4>20ft flat bed</h4>
                 </div>
               </div>
               <div class="item">
                 <img src="{{ asset ('assets/img/asset 20.svg') }}" alt="" title="">
                 <div class="multi_slider_captions">
                   <h4>40ft flat bed</h4>
                 </div>
               </div>
               <div class="item">
                 <img src="{{ asset ('assets/img/asset 21.svg') }}" alt="" title="">
                 <div class="multi_slider_captions">
                   <h4>Mazda open top</h4>
                 </div>
               </div>
               <div class="item">
                 <img src="{{ asset ('assets/img/asset 22.svg') }}" alt="" title="">
                 <div class="multi_slider_captions">
                   <h4>Shazoor</h4>
                 </div>
               </div>
               <div class="item">
                 <img src="{{ asset ('assets/img/asset 23.svg') }}" alt="" title="">
                 <div class="multi_slider_captions">
                   <h4>40ft close container</h4>
                 </div>
               </div>
               <div class="item">
                 <img src="{{ asset ('assets/img/asset 24.svg') }}" alt="" title="">
                 <div class="multi_slider_captions">
                   <h4>Shazoor close body</h4>
                 </div>
               </div>
            </div> --}}
            <div class="swiper-container">
              <div class="swiper-wrapper">
                 <div class="swiper-slide">
                    <div class="swiper-slide-container">
                       <img src="{{ asset ('assets/img/asset 17.svg') }}" alt="" title="">
                       <div class="multi_slider_captions">
                          <h4>20ft close container</h4>
                       </div>
                    </div>
                 </div>
                 <div class="swiper-slide">
                    <div class="swiper-slide-container">
                       <img src="{{ asset ('assets/img/asset 18.svg') }}" alt="" title="">
                       <div class="multi_slider_captions">
                          <h4>20ft open top</h4>
                       </div>
                    </div>
                 </div>
                 <div class="swiper-slide">
                    <div class="swiper-slide-container">
                       <img src="{{ asset ('assets/img/asset 19.svg') }}" alt="" title="">
                       <div class="multi_slider_captions">
                          <h4>20ft flat bed</h4>
                       </div>
                    </div>
                 </div>
                 <div class="swiper-slide">
                    <div class="swiper-slide-container">
                       <img src="{{ asset ('assets/img/asset 20.svg') }}" alt="" title="">
                       <div class="multi_slider_captions">
                          <h4>40ft flat bed</h4>
                       </div>
                    </div>
                 </div>
                 <div class="swiper-slide">
                    <div class="swiper-slide-container">
                       <img src="{{ asset ('assets/img/asset 21.svg') }}" alt="" title="">
                       <div class="multi_slider_captions">
                          <h4>Mazda open top</h4>
                       </div>
                    </div>
                 </div>
                 <div class="swiper-slide">
                    <div class="swiper-slide-container">
                       <img src="{{ asset ('assets/img/asset 22.svg') }}" alt="" title="">
                       <div class="multi_slider_captions">
                         <h4>Shazoor</h4>
                       </div>
                    </div>
                 </div>
                 <div class="swiper-slide">
                    <div class="swiper-slide-container">
                       <img src="{{ asset ('assets/img/asset 23.svg') }}" alt="" title="">
                       <div class="multi_slider_captions">
                         <h4>40ft close container</h4>
                       </div>
                    </div>
                 </div>
                 <div class="swiper-slide">
                    <div class="swiper-slide-container">
                       <img src="{{ asset ('assets/img/asset 24.svg') }}" alt="" title="">
                       <div class="multi_slider_captions">
                         <h4>Shazoor close body</h4>
                       </div>
                    </div>
                 </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
      </div>
      </div>
      </div>
      </section>
      <!-- Get In Touch	-->
      <section class="hg_section contact-section bg-white pt-0 pb-0" id="contact">
      <div class="container-fluid">
      <div class="row">
      <div class="col-12 col-lg-6 order-last order-lg-first form-col">
      <div class="row">
      <div class="col-12 col-lg-7 offset-lg-5">
      <div class="pt-100 pb-100">
      <div class="kl-title-block text-center text-white text-lg-left tbk-symbol--line">
      <!-- Sub-title with custom color -->
      <h6 class="">GET IN</h6>
      <!-- Title with custom size, weight and color -->
      <h3 class="tbk__title fs-xl fw-extrabold">
      TOUCH
      </h3>
      <!--/ Title -->
      <!-- Detail -->
     {{--  <p class="pt-30 pb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, animi assumenda deserunt ea earum excepturi fuga hic, laborum libero magnam nesciunt numquam pariatur perspiciatis porro sit sunt suscipit unde vero.</p> --}}
      <!--/ Detail -->
      </div>
      <div id="contect">
      <form class="contact-form" id="contact-form" action="{{ route('get-in-touch') }}" method=""POST">
      <div class="form-group">
      <label for="userName">Name</label>
      <input type="text" class="form-control" required="" id="userName" name="name" placeholder="Your Name">
      </div>
      <div class="form-group">
      <label for="userEmail">Email</label>
      <input type="email" class="form-control" required="" id="userEmail" name="email" placeholder="Email Address">
      </div>
      <div class="form-group">
      <label for="userMessage">Message</label>
      <textarea class="form-control" required="" id="userMessage" name="message" placeholder="Write message" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-gradient btn-gradient-orange text-center ">Submit</button>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      <div class="col-12 col-lg-6 order-first order-lg-last img-col p-lg-0 pl-md-0">
        <video controls class="main_video_contact">
          <source src="{{ asset('assets/video/video.mp4') }}" type="video/mp4">
        </video>
      </div>
      </div>
      </div>
      </section>
      <!-- Title with Call to Action Button section with custom paddings -->
      <!--<section class="hg_section bg-white pt-40 pb-40">-->
      <!--	<div class="container">-->
      <!--		<div class="row">-->
      <!--			<div class="col-sm-12 col-md-9 mb-sm-30">-->
      <!--				&lt;!&ndash; Title with alternative font and custom weight and default color &ndash;&gt;-->
      <!--				<h3 class="tbk__title kl-font-alt fw-semibold tcolor">-->
      <!--					WORK WITH US-->
      <!--				</h3>-->
      <!--				&lt;!&ndash;/ Title with alternative font and custom weight and default color &ndash;&gt;-->
      <!--				&lt;!&ndash; Sub-Title &ndash;&gt;-->
      <!--				<h4 class="tbk__subtitle fw-thin">-->
      <!--					We'll do everything we can to make you a satisfied customer!-->
      <!--				</h4>-->
      <!--				&lt;!&ndash;/ Sub-Title &ndash;&gt;-->
      <!--			</div>-->
      <!--			&lt;!&ndash;/ col-md-9 col-sm-9 &ndash;&gt;-->
      <!--			<div class="col-sm-12 col-md-3 align-self-center">-->
      <!--				&lt;!&ndash; Button lined style &ndash;&gt;-->
      <!--				<a href="http://ebilty.com/contact" class="btn btn-lined lined-custom btn-md btn-block" >-->
      <!--					<span>Contact us</span>-->
      <!--				</a>-->
      <!--				&lt;!&ndash;/ Button lined style &ndash;&gt;-->
      <!--			</div>-->
      <!--			&lt;!&ndash;/ col-md-12 col-sm-3 &ndash;&gt;-->
      <!--		</div>-->
      <!--		&lt;!&ndash;/ row &ndash;&gt;-->
      <!--	</div>-->
      <!--	&lt;!&ndash;/ container &ndash;&gt;-->
      <!--</section>-->
      <!--/ Title with Call to Action Button section with custom paddings -->
<style>
      .swiper-container {
        width: 100%;
        height: 225px;
        padding: 20px auto;
    }
.swiper-slide-container {
  text-align: center;
        font-size: 18px;
/*        background: #fff;
  height:100%;*/
        max-width: 600px;
  margin:auto;
        /* Center slide text vertically */
        display: block;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
}
.swiper-pagination-bullet-active {
  background: #fff;
}
.swiper-wrapper {
  align-items: baseline;
}
.section-padding {
  width: 95%;
    overflow: hidden;
}
.swiper-slide.swiper-slide-active img {
    filter: drop-shadow(2px 4px 6px black);
    transform: scale(1.2);
}
.swiper-slide.swiper-slide-active .multi_slider_captions {
  display: block;
}
</style>
      <script>
        var swiper = new Swiper('.swiper-container', {
  pagination: '.swiper-pagination',
  slidesPerView: 4,
  centeredSlides: true,
  paginationClickable: true,
  loop: true,
  spaceBetween: 30,
  slideToClickedSlide: true,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
});
      </script>

@include('front_layout.front_footer')
