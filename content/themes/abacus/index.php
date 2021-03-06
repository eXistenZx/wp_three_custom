<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Abacus
 * @since Abacus 1.0
 */
 
get_header(); ?>

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

<?php get_footer(); ?>