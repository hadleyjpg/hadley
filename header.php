<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hadley
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hadley' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$hadley_description = get_bloginfo( 'description', 'display' );
			if ( $hadley_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $hadley_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<svg xmlns="http://www.w3.org/2000/svg" width="35.533" height="18" viewBox="0 0 35.533 18">
				<g id="Mobile_Menu_Icon" data-name="Mobile Menu Icon" transform="translate(1 1)" style="isolation: isolate">
					<g id="Group_4" data-name="Group 4" transform="translate(-1282.5 -608.362)">
					<line id="Line_1" data-name="Line 1" x2="33.533" transform="translate(1282.5 616.362)" fill="none" stroke="#383838" stroke-linecap="round" stroke-width="2"/>
					</g>
					<g id="Group_7" data-name="Group 7" transform="translate(-1282.5 -616.362)">
					<line id="Line_1-2" data-name="Line 1" x2="33.533" transform="translate(1282.5 616.362)" fill="none" stroke="#383838" stroke-linecap="round" stroke-width="2"/>
					</g>
					<g id="Group_8" data-name="Group 8" transform="translate(-1268.557 -600.362)">
					<line id="Line_1-3" data-name="Line 1" x2="19.59" transform="translate(1282.5 616.362)" fill="none" stroke="#383838" stroke-linecap="round" stroke-width="2"/>
					</g>
				</g>
				</svg>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
