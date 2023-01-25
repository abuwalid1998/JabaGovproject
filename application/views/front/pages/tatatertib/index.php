<!--================Home Banner Area =================-->
<div class="jumbotron banner_area jumbotron-fluid" style="background-image: url(<?= base_url('img/banner_area/br3.jpg') ?>); ">
	<div class="container">
		<h1 class="display-4 my-auto text-light text-center">الشكاوي والأقتراحات</h1>
	</div>
</div>
<!--================End Home Banner Area =================-->

<!-- Content -->
<div class="content mt-5 mb-5 pb-5 pt-5">
	<div class="container text-center">
	<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">تواصل معنا</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">لتقديم الشكاوي والأقتراحات الرجاء ملئ الرابط النموذج التالي</p>

<div class="row">

	<!--Grid column-->
	<div class="col-md-9 mb-md-0 mb-5">
		<form id="contact-form" name="contact-form" action="<?= base_url()?>mail.php" method="POST">

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-md-6">
					<div class="md-form mb-0">
						<input type="text" id="name" name="name" class="form-control">
						<label for="name" class="">الأسم الرباعي</label>
					</div>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-md-6">
					<div class="md-form mb-0">
						<input type="text" id="email" name="email" class="form-control">
						<label for="email" class=""> رقم الهاتف </label>
					</div>
				</div>
				<!--Grid column-->
			</div>
			<!--Grid row-->
			<!--Grid row-->
			<div class="row">
				<div class="col-md-12">
					<div class="md-form mb-0">
						<input type="text" id="subject" name="subject" class="form-control">
						<label for="subject" class="">الموضوع</label>
					</div>
				</div>
			</div>
			<!--Grid row-->

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-md-12">

					<div class="md-form">
						<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
						<label for="message">رسالتك لنا</label>
					</div>

				</div>
			</div>
			<!--Grid row-->

		</form>

		<div class="text-center text-md-left">
			<a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">أرسال</a>
		</div>
		<div class="status"></div>
	</div>
	<!--Grid column-->

	<!--Grid column-->
	<div class="col-md-3 text-center">
		<ul class="list-unstyled mb-0">
			<li><i class="fas fa-map-marker-alt fa-2x"></i>
				<p>جبع-جنين-شارع البلدية</p>
			</li>

			<li><i class="fas fa-phone mt-4 fa-2x"></i>
				<p>02450455</p>
			</li>

			<li><i class="fas fa-envelope mt-4 fa-2x"></i>
				<p>jaba222m@yahoo.com</p>
			</li>
		</ul>
	</div>
	<!--Grid column-->

</div>

</section>
	</div>
</div>
<!-- End of Content -->
