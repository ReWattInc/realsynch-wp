<?php
/**
 * home.php for our theme.
 * Template Name: Homepage Realsynch
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */

get_header('rs'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<div class="container">
		<div class="row realsynch-home-slider">
			<div class="col-lg-2">
				<span class="realsynch-slider-left">WE FIGURE OUT
					<br>THE HARD PARTS
					<br>OF INTEGRATION
				</span>
			</div>
			<div class="col-lg-6">
				<h1 class="realsynch-slider-center">SO YOU 
					<br>DON’T HAVE TO
				</h1>
			</div>
			<div class="col-lg-4">
				<span class="realsynch-slider-right">LET US DO THIS AND THAT BECAUSE THIS IS FILLER COPY FOR NOW BUT CAN MAKE THIS MORE COMPELLING AND INVITING AND ACTIONABLE.</span>
			</div>
		</div>
		<div class="row realsynch-home-section1">
			<div class="col-lg-2 section1-content">
				<span>SOME OF OUR<br>PARTNERS</span>
			</div>
			<div class="col-lg-10">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 realsynch-partner-logo">
						<div>
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/prorequest.png">
						</div>
						<span>Proquest technologies</span>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 realsynch-partner-logo">
						<div>
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/boomtown.png">
						</div>
						<span>BoomTown!</span>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 realsynch-partner-logo">
						<div>
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/brivity.png">
						</div>
						<span>Brivity</span>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 realsynch-partner-logo">
						<div>
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/contactually.png">
						</div>
						<span>Contactually</span>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 realsynch-partner-logo">
						<div>
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/firepoint.png">
						</div>
						<span>Firepoint</span>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 realsynch-partner-logo">
						<div>
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/blueroof.png">
						</div>
						<span>Blueroof360</span>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 realsynch-partner-logo">
						<div>
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/sidx.png">
						</div>
						<span>SiDx</span>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 realsynch-partner-logo">
						<div>
							<img src="<?php echo get_bloginfo('template_url'); ?>/images/realgeeks.png">
						</div>
						<span>Real Geeks</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row realsynch-home-section2">
			<div class="col-lg-3 realsynch-home-section2-left"></div>
			<div class="col-lg-2 realsynch-home-sections-h2">
				<span>MEESAGING POINT ONE</span>
			</div>
			<div class="col-lg-7 realsynch-home-section2-right">
				<span class="realsynch-home-sections-span">In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. Integer et elit eget elit facilisis tristique. Nam vel iaculis mauris. Sed ullamcorper tellus erat, non ultrices sem tincidunt euismod. Fusce rhoncus porttitor velit, eu bibendum nibh aliquet vel. Fusce lorem leo, vehicula at nibh quis, facilisis accumsan turpis.</span>
			</div>
		</div>
		<div class="row realsynch-home-section3">
			<div class="col-lg-6 realsynch-home-section3-left"></div>
			<div class="col-lg-6">
				<span class="realsynch-home-sections-h2">MEESAGING POINT TWO</span><br>
				<span class="realsynch-home-sections-span">In hac habitasse platea dictumst. Vivamus adipiscing fermentum quam volutpat aliquam. Integer et elit eget elit facilisis tristique. Nam vel iaculis mauris. Sed ullamcorper tellus erat, non ultrices sem tincidunt euismod. Fusce rhoncus porttitor velit, eu bibendum nibh aliquet vel. Fusce lorem leo, vehicula at nibh quis, facilisis accumsan turpis.</span>
			</div>
		</div>
		<div class="row realsynch-home-section4">
			<div class="col-lg-12">
				<span class="realsynch-home-sections-h2">MEESAGING POINT THREE</span>
			</div>
			<div class="col-lg-3 realsynch-home-section4-box">
				<div class="realsynch-home-section4-box-content"></div>
			</div>
			<div class="col-lg-3 realsynch-home-section4-box">
				<div class="realsynch-home-section4-box-content"></div>
			</div>
			<div class="col-lg-3 realsynch-home-section4-box">
				<div class="realsynch-home-section4-box-content"></div>
			</div>
			<div class="col-lg-3 realsynch-home-section4-box">
				<div class="realsynch-home-section4-box-content"></div>
			</div>
		</div>
	</div>
	</main><!-- #main -->

	<!-- Modal -->
	<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
					<?php gravity_form( 1, false, false); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	

<?php get_footer('rs'); ?>
