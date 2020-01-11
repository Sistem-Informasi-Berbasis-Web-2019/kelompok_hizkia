
	<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids py-4">
			<div class="container py-xl-5 py-lg-3">
				<div class="row border-top mt-4 pt-lg-4 pt-3 text-lg-left text-center">
					<!-- copyright -->
					<p class="col-lg-8 copy-right-grids mt-lg-1">© <?php echo date('Y')?>. All Rights Reserved | Design by
						<a href="https://w3layouts.com/" target="_blank">W3layouts</a>
					</p>
					<!-- //copyright -->
					<!-- social icons -->
					<!-- <div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
						<ul>
							<li>
								<a href="#" class="rounded-circle">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="px-2">
								<a href="#" class="rounded-circle">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
							<li>
								<a href="#" class="rounded-circle">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li class="pl-2">
								<a href="#" class="rounded-circle">
									<i class="fab fa-dribbble"></i>
								</a>
							</li>
						</ul>
					</div> -->
					<!-- //social icons -->
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="<?php echo base_url()?>assets/js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- scripts required  for particle effect -->
	<script src='<?php echo base_url()?>assets/js/particles.min.js'></script>
	<script src="<?php echo base_url()?>assets/js/particles.js"></script>
	<!-- //scripts required for particle effect -->

	<!-- chart -->
	<script src='<?php echo base_url()?>assets/js/amcharts.js'></script>
	<script src='<?php echo base_url()?>assets/js/chart.js'></script>
	<!-- //chart -->
	<!-- //gallery-js -->

	<!-- stats -->
	<script src="<?php echo base_url()?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="<?php echo base_url()?>assets/js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- animation js -->
	<script src='<?php echo base_url()?>assets/js/aos.js'></script>
	<script>
		AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

    </script>
	<!-- //animation js -->

	<script src="<?php echo base_url()?>assets/css/sweetalert/sweetalert.min.js"></script>

	<!-- smooth scrolling -->
	<script src="<?php echo base_url()?>assets/js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="<?php echo base_url()?>assets/js/move-top.js"></script>
	<!-- easing -->
	<script src="<?php echo base_url()?>assets/js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="<?php echo base_url()?>assets/js/online-resume.js"></script>

	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- gallery -->
	<script src="<?php echo base_url()?>assets/js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/chocolat.css" type="text/css" media="screen">
	<!-- light-box -->
	<script>
		$(function () {
			$('.gallery a').Chocolat();
		});
	</script>
	<!-- //light-box -->
	<!-- //gallery -->
	<!-- //Js files -->

</body>

</html>