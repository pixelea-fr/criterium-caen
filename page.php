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
	<?php
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
		if ( $featured_img_url ) { ?>
			<div class="page-title" style="background-image: url(<?php echo $featured_img_url; ?>);">
				<div class="clip-path-parent">
					<div class="title-wrapper">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		<?php
		}

		the_content();
	?>
</div>
<?php get_footer(); ?>