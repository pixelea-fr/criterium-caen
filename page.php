<?php
	// Add specific CSS class for "Le programme" page.
	if ( is_page( 'Le programme' ) ) {
		add_filter( 'body_class', function( $classes ) {
			return array_merge( $classes, array( 'programme' ) );
		} );
	}

	get_header();
?>
<div class="entry-content">
	<?php the_content(); ?>
</div>
<?php get_footer(); ?>