 <!-- Header style 1 -->
	@include('front_layout.front_header')
<!-- / Header style 1 -->

<section class="main_top_box_section">
	<div class="carriers">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="main_titles_car">
						<div class="head_car">
							<h1>Join Us</h1>
						</div>
						<div class="subhead_car">
							 <h2>Be a part of eBilty's team to enhance this journey and provide the  best to our customer</h2>
						</div>
						{{-- <div class="listing_car">
							<ul>
								<li>
									<p><i class="fa fa-check"></i> Load marketplace.</p>
								</li>
								<li>
									<p><i class="fa fa-check"></i> Guided trip experience.</p>
								</li>
								<li>
									<p><i class="fa fa-check"></i> Driver management and tracking.</p>
								</li>
							</ul>
						</div> --}}
						<div class="signup_btn_car">
							<a href="{{ url ('/login') }}">Sign Up</a>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="image_carrier">
						<img src="{{ asset ('assets/img/im2.png') }}">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="fields_car">
	<div class="container">
		<div class="listing_fields contact-section">
			<div class="titkles_fields">
				<h4>Please submit below details to reach us</h4>
			</div>
			<form class="contact-form" action="{{route('save.carrier.form')}}" enctype="multipart/form-data" method="POST">
                @csrf
				<div class="row">
					<div class="col-md-6">
						<div class="field_car">
							<div class="form-group">
						      <label for="name">Full Name</label>
						      <input type="text" class="form-control" required="" id="name" name="name" >
					      	</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="field_car">
							<div class="form-group">
						      <label for="userEmail">Email</label>
						      <input type="email" class="form-control" required="" id="userEmail" name="email">
					      	</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="field_car">
							<div class="form-group">
						      <label for="phone">Phone</label>
						      <input type="number" class="form-control" required="" id="phone" name="phone">
					      	</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="field_car">
							<div class="form-group">
						      <label for="userEmail">CV</label>
						      <input type="file" class="form-control" accept="application/pdf" required="" id="file" name="cv"  placeholder="">
                                <span id="error" class="text-danger"></span>
					      	</div>
						</div>
					</div>
				</div>
				<div class="submti_car_btn">
					<button class="btn" id="submit_button"> Submit </button>
				</div>
			</form>

		</div>
	</div>
</section>
 <script>
     $('#file').change(function(e){
         var file = $(this).val();
         var ext = file.split('.').pop();
         console.log(ext)
         if(ext != "pdf"){
             console.log('not pdf')
             $('#submit_button').prop('disabled', true);
             $('#error').text('Please select pdf format file only')
         }else{
             console.log('pdf')
             $('#submit_button').attr("disabled", false);
         }
     });
 </script>


@include('front_layout.front_footer')
