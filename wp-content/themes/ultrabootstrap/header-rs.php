<?php
/**
 * Theme Header Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
/**
 * This hook is important for wordpress plugins and other many things
 */
wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?php $header_text_color = get_header_textcolor();?>

<header>	
<section class="logo-menu">
		<div class="container realsynch-header">
					<!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only"><?php _e('Toggle navigation' , 'ultrabootstrap' ); ?></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				      	</button>
				      	<div class="logo-tag">
				      		<img src="<?php echo get_bloginfo('template_url'); ?>/images/realsynch-logo.png">
      					</div>
				    </div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<form  class="navbar-right" role="search">
							<ul class="nav pull-right">
								<div class="main-search">
									<!-- Button trigger modal -->
									<button type="button" class="btn header-trybutton btn-lg" data-toggle="modal" data-target="#formModal">
										TRY IT NOW
									</button>
									<button type="button" class="btn header-signbutton btn-lg" data-toggle="modal" data-target="#formModal">
										SIGN IN
									</button>
								</div>
							</ul>
						</form>
						<?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 8,
				                'container'         => 'div',
				                'menu_class'        => 'nav navbar-nav navbar-right',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new ultrabootsrap_wp_bootstrap_navwalker())
				            );
				        ?>
				    </div> <!-- /.end of collaspe navbar-collaspe -->
	</div> <!-- /.end of container -->
</section> <!-- /.end of section -->
</header>