<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>			

			<div id="contact" style="position: relative; top: -90px;"></div>

			<footer class="footer mt-4 px-3 px-md-0" id="footer" style="background-image : url('<?php echo get_template_directory_uri(); ?>/src/images/botnoi_footer-wave.png')">

				<div class="container">

					<div class="row text-white justify-content-center">
						<h2 class="mb-5 pb-4">
							Get In Touch
						</h2>
					</div>

					<div class="row justify-content-around text-center text-md-left">
						
						<div class="col-12 col-md-6 my-5 mt-5 mb-md-0 order-2 order-md-1">

							<h3 class="mb-4"><strong>Address</strong></h3>
							<address>
								Botnoi Consulting Co., Ltd.<br>
								253 Asok Montri Rd., 16th Floor<br>
								Klongtoey Nue, Wattana, Bangkok 10110<br>
								<br>
								<span class="text-gradient-blue"><i class="phone-cell"></i>&nbsp;&nbsp;061-820-1998, 085-516-9295,<br>081-375-3733</span>
							</address>

							<br>
							<br>

							<span>
								<a href="https://fb.com/botnoigroup" target="_blank" class="footer_social"><img src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_social-fb.png" alt=""></a>
								<a href="#" class="footer_social d-none"><img src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_social-line.png" alt=""></a>
								<a href="#" class="footer_social d-none"><img src="<?php echo get_template_directory_uri(); ?>/src/images/botnoi_social-youtube.png" alt=""></a>
							</span>
													
						</div>
						<div class="col-12 col-md-6 order-1 order-md-2 mb-5">
							<?php echo do_shortcode( '[ninja_form id=2]' ); ?>
							<form class="d-none">

								<div class="form-group pb-3">
									<input type="text" class="form-control" placeholder="NAME">
									<small class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group pb-3">
									<input type="text" class="form-control" placeholder="PHONE">
									<small class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group pb-3">
									<input type="email" class="form-control" placeholder="EMAIL">
									<small class="form-text text-muted d-none">We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group pb-3">
									<textarea class="form-control" rows="5" placeholder="DESCRIPTION"></textarea>
								</div>

								<a class="btn btn-primary text-dark" href="#" role="button">Send</a>

							</form>

						</div>

					</div>

					<div class="row justify-content-center py-5 scroll-up-contain">
						<div class="col-12 text-center mb-3">
							<a href="#" class="btn btn-danger go-top text-white">⌃</a>
						</div>
						<div class="col-12 text-center">
							<small>BOTNOI CONSULTING</small>
						</div>
					</div>

				</div>

			</footer>

			<?php 
			wp_footer(); 
			?>

		</div><!-- warper -->

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/src/smooth-scroll.js"></script>
		<script>

			$(window).scroll(function() {

				var scroll = $(window).scrollTop();
				//>=, not <=
				if (scroll >= 60) {
					//clearHeader, not clearheader - caps H
					$(".navbar").addClass("navbar-onscroll");
				} else {
					$(".navbar").removeClass("navbar-onscroll");
				}

			});

			$('.go-top').click(function(){

				$("html, body").animate({ scrollTop: 0 }, 800);
				return false;
				
			});

		</script>

	</body>
</html>
