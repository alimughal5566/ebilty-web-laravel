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
							<h1>Carry with Trella</h1>
						</div>
						<div class="subhead_car">
							 <h2>Trella provides carriers with easy access to loads with the areas, times, and commodities they prefer.</h2>
						</div>
						<div class="listing_car">
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
						</div>
						<div class="signup_btn_car">
							<button type="button" class="btn">Sign Up</button>
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
		<div class="main_title">
			<h3>Independent Operator Form</h3>
		</div>
		<div class="listing_fields contact-section">
			<div class="titkles_fields">
				<h4>This form is for carriers with only one truck.</h4>
			</div>
			<form class="contact-form ">
				<div class="row">
					<div class="col-md-6">
						<div class="field_car">
							<div class="form-group">
						      <label for="name">Full Name</label>
						      <input type="text" class="form-control" required="" id="name"  placeholder="Full Name">
					      	</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="field_car">
							<div class="form-group">
						      <label for="userEmail">Email</label>
						      <input type="email" class="form-control" required="" id="userEmail"  placeholder="Email Address">
					      	</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="field_car">
							<div class="form-group">
						      <label for="phone">Phone</label>
						      <input type="number" class="form-control" required="" id="phone"  placeholder="Phone">
					      	</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="field_car">
							<div class="form-group">
						      <label for="userEmail">CV</label>
						      <input type="file" class="form-control" required="" id="userEmail"  placeholder="">
					      	</div>
						</div>
					</div>
				</div>
				<div class="submti_car_btn">
					<button class="btn"> Submit </button>
				</div>
			</form>
			
		</div>
	</div>
</section>


@include('front_layout.front_footer')