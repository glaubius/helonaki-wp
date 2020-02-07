<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="container-fluid">

		<div class="row p-4">

			<div class="col-md-4">
				<!-- empty for spacing -->
			</div><!--col end -->
			<div class="col-md-4 text-center">
				<a href="https://helonaki.com"><i class="fas fa-home"></i></a>
			</div>

		</div><!-- row end -->

	</div><!-- container end -->
	<div class="<?php echo get_attr( $container ); ?> ">
		<div class="container-fluid">
			<div class="row p-4">
				<div class="col-md-3">
					<a href="https://helonaki.com">ADD HELONAKI LOGO HERE</a>
					<p>Copyright 2020 The Helonaki <br>All rights reserved. </p>
				</div>
				<div class="col-md-3">
					<h4 class="headline headline--small">Resources</h4>
					<nav>
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'footerMenu1',
								// 'container_class' => 'nav flex-column',
								'menu_class'      => 'nav flex-column',
								'fallback_cb'     => '',
								'menu_id'         => 'footerMenu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
					</nav>
				</div>
				<div class="col-md-3">
					<h4 class="headline headline--small">Resources</h4>
					<nav>
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'footerMenu2',
								// 'container_class' => 'nav flex-column',
								'menu_class'      => 'nav flex-column',
								'fallback_cb'     => '',
								'menu_id'         => 'footerMenu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
					</nav>
				</div>
				<div class="col-md-2">
					<h4 class="headline headline--small text-center">Connect with The Helonaki</h4>
					<nav>
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'socialMediaMenu',
								// 'container_class' => 'nav flex-column',
								'menu_class'      => 'nav flex-column',
								'fallback_cb'     => '',
								'menu_id'         => 'footerMenu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
          </nav>
				</div>
			</div>
		</div>
	</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
