<?php
/**
 * The main template file.
 */
get_header();

if ( have_posts() ) :

	while ( have_posts() ) : the_post();

		get_template_part( 'components/content' );

	endwhile;

	the_posts_pagination( [ 'type' => 'list' ] );

else:

	get_template_part( 'components/content', 'none' );

endif;

get_footer();
