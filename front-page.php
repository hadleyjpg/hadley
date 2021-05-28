<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hadley
 */
?>
	<section id="home" class="full"> 
		<div class="home__text">
			<?php the_custom_logo(); ?>
			<h1>Hey, I'm Hadley</h1>
			<h4>Developer, designer & professional plant killer</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			<p>Scroll down to learn more.</p>
		</div>
		<div class="home__caro">
			<div class="caro">
				<div class="caro__item">
					<div class="caro__content">
						<h2>Web Development</h2>
						<p>Skilled in HTML, CSS, Javascript & PHP.</p>
						<button class="elementor-button">View Work</button>
					</div>
				</div>
				<div class="caro__item">
					<div class="caro__content">
						<h2>Web Design</h2>
						<p>Skilled in HTML, CSS, Javascript & PHP.</p>
						<button class="elementor-button">View Work</button>
					</div>
				</div>
				<div class="caro__item">
					<div class="caro__content">
						<h2>Graphic Design</h2>
						<p>Skilled in HTML, CSS, Javascript & PHP.</p>
						<button class="elementor-button">View Work</button>
					</div>
				</div>
			</div>
		</div>
    </section>

	<?php get_header(); ?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php


get_sidebar();
get_footer();
