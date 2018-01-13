<?php
/**
 * The front page template file.
 *
 * @package Abacus
 * @since Abacus 1.0
 */

get_header(); ?>

	<?php 
	if ( abacus_sanitize_checkbox( get_theme_mod( 'abc_slider_display' ) ) && defined( 'ABC_SLIDER' ) && function_exists( 'abc_display_slider' ) && is_front_page() ) {
		abc_display_slider();
	} else if ( has_header_image() && is_front_page() ) : 
		?>
		<div class="parallax">
			<div class="header-img"></div>
			<?php if ( is_active_sidebar( 'jumbo-headline' ) ) { ?>
			<div class="container">
				<div class="row">
					<div class="home-top">
						<?php dynamic_sidebar( 'jumbo-headline' ); ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php 
	endif; 
	?>

	<div class="home-container main-bg">
		<div class="container page-bg">
			<div class="row">
				<div id="primary" class="cols">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content' );
						endwhile;

						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div><!-- #primary -->

				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>