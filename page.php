<?php
/**
 * The page templates.
 */
get_header();

if ( have_posts() ) :

	while ( have_posts() ) : the_post();

		get_template_part( 'components/content', 'page' );

	endwhile;

else:

	get_template_part( 'components/content', 'none' );

endif;

get_footer();
