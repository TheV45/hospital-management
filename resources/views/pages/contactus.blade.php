@extends('layouts.app2')

@section('content')
<!-- banner -->
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!-- //banner -->

<!-- contact -->
<section class="mail pt-lg-5 pt-4">
	<div class="container pt-lg-5">
		<h2 class="heading text-center mb-sm-5 mb-4">Contact Us </h2>
		<div class="row agileinfo_mail_grids">
			<div class="col-lg-8 agileinfo_mail_grid_right">
				<form action="#" method="post">
					<div class="row">
						<div class="col-md-6 wthree_contact_left_grid pr-md-0">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="">
							</div>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<div class="form-group">
								<input type="text" name="phone number" class="form-control" placeholder="Phone Number" required="">
							</div>
							<div class="form-group">
								<input type="text" name="subject" class="form-control" placeholder="Subject" required="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" placeholder="Message" class="form-control" required=""></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="submit-buttons">
								<button type="submit" class="btn">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4 contact-info">
				<h4 class="mb-4">Address Information</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>64d canal street TT 3356 <span>Newyork, NY.</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span>Phone : +1 123 456 789 </p>
				<p><span class="fa mr-2 fa-envelope"></span>Email : <a href="mailto:info@example.com">info@example.com</a></p>
				
				<h4 class="my-4">Book Your Appointment</h4>
				<p class="phone"><span class="fa mr-2 fa-phone"></span>Call us at +1 123 456 789 </p>
			</div>
		</div>
	</div>
	<div class="map mt-5">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50996.31320435244!2d-122.06676498187694!3d36.97949802442312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e441b7c36d549%3A0x52ca104b2ad7f985!2sSanta+Cruz%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1469096018666"
			style="border:0"></iframe>
	</div>
</section>
<!-- //contact -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-sm-3">
		<div class="row footer-grids">
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-sm-4 mb-3"><span class="fa fa-stethoscope"></span> Dental Health</h4>
				<p class="mb-3">Onec Consequat sapien ut cursus rhoncus. Nullam dui mi, vulputate ac metus semper quis luctus sed.</p>
				<h5>Trusted by <span>500+ People</span> </h5>
			</div>
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-sm-4 mb-3">Address Info</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>64d canal street TT 3356 <span>Newyork, NY.</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span> +1(12) 123 456 789 </p>
				<p><span class="fa mr-2 fa-envelope"></span><a href="mailto:info@example.com">info@example.com</a></p>
			</div>
			<div class="col-lg-2 col-sm-6 mb-sm-0 mb-4">
				<h4 class="mb-sm-4 mb-3">Quick Links</h4>
				<ul>
					<li><a href="#">Terms & Conditions</a></li>
					<li class="my-2"><a href="#">Support Helpline</a></li>
					<li><a href="#">Healthy Tips</a></li>
					<li class="mt-2"><a href="#">Privacy Ploicy</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-sm-6">
				<h4 class="mb-sm-4 mb-3">Subscribe Us</h4>
				<p class="mb-3">Subscribe to our newsletter</p>
				<form action="#" method="post" class="d-flex">
					<input type="email" id="email" name="EMAIL" placeholder="Enter your email here" required="">
					<button type="submit" class="btn">Subscribe</button>
				</form>
				<div class="icon-social mt-3">
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-facebook"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-twitter"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-dribbble"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-pinterest"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-google-plus"></span>
					</a>

				</div>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright">
	<div class="container py-4">
		<div class=" text-center">
			<p>© 2019 Dental Health. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</div>
</div>
<!-- //copyright -->
		
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->


@endsection