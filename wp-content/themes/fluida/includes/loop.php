<?php
/**
 * Functions used in the main loop
 *
 * @package Fluida
 */

/**
 * Sets the post excerpt length to the number of words set in the theme settings
 */
function fluida_excerpt_length_words( $length ) {
	return absint( cryout_get_option( 'fluida_excerptlength' ) );
}
add_filter( 'excerpt_length', 'fluida_excerpt_length_words' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 */
function fluida_custom_excerpt_more() {
	if ( ! is_attachment() ) {
		 echo wp_kses_post( fluida_continue_reading_link() );
	}
}
add_action( 'cryout_post_excerpt_hook', 'fluida_custom_excerpt_more', 10 );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function fluida_continue_reading_link() {
	$fluida_excerptcont = cryout_get_option( 'fluida_excerptcont' );
	return '<a class="continue-reading-link" href="'. esc_url( get_permalink() ) . '"><span>' . wp_kses_post( $fluida_excerptcont ). '</span><i class="icon-angle-right"></i></a>';
}
add_filter( 'the_content_more_link', 'fluida_continue_reading_link' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and fluida_continue_reading_link().
 */
function fluida_auto_excerpt_more( $more ) {
	return cryout_get_option( 'fluida_excerptdots' );
}
add_filter( 'excerpt_more', 'fluida_auto_excerpt_more' );

/**
 * Adds a "Continue Reading" link to post excerpts created using the <!--more--> tag.
 */
function fluida_more_link( $more_link, $more_link_text ) {
	$fluida_excerptcont = cryout_get_option( 'fluida_excerptcont' );
	$new_link_text = $fluida_excerptcont;
	if ( preg_match( "/custom=(.*)/", $more_link_text, $m ) ) {
		$new_link_text = $m[1];
	}
	$more_link = str_replace( $more_link_text, $new_link_text, $more_link );
	$more_link = str_replace( 'more-link', 'continue-reading-link', $more_link );
	return $more_link;
}
add_filter( 'the_content_more_link', 'fluida_more_link', 10, 2 );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 * Galleries are styled by the theme in style.css.
 */
function fluida_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'fluida_remove_gallery_css' );

/**
 * Posted in category
 */
if ( ! function_exists( 'fluida_posted_category' ) ) :
function fluida_posted_category() {
	$fluida_meta_category = cryout_get_option( 'fluida_meta_category' );

	if ( $fluida_meta_category && get_the_category_list() ) {
		echo '<div class="entry-meta">
				<span class="bl_categ"' . cryout_schema_microdata( 'category', 0 ) . '>
					<i class="icon-folder-open icon-metas" title="' . __( "Categories", "fluida" ) . '"></i>'
					. get_the_category_list( ', ' ) .
				'</span>
			  </div>';
	}
} // fluida_posted_category()
endif;

/**
 * Posted by author
 */
if ( ! function_exists( 'fluida_posted_author' )) :
function fluida_posted_author() {
	$fluida_meta_author = cryout_get_option( 'fluida_meta_author' );

	if ( $fluida_meta_author ) {
		echo sprintf(
			'<span class="author vcard"' . cryout_schema_microdata( 'author', 0 ) . '>
				<em>' . __( 'By', 'fluida' ) . '</em>
				<a class="url fn n" rel="author" href="%1$s" title="%2$s"' . cryout_schema_microdata( 'author-url', 0 ) . '>
					<em' .  cryout_schema_microdata( 'author-name', 0 ) . '>%3$s</em>
				</a>
			</span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'fluida' ), get_the_author() ),
			get_the_author()
		);
	}
} // fluida_posted_author
endif;

/**
 * Posted date/time
 */
if ( ! function_exists( 'fluida_posted_date' ) ) :
function fluida_posted_date() {
	$fluida_meta_date = cryout_get_option( 'fluida_meta_date' );
	$fluida_meta_time = cryout_get_option( 'fluida_meta_time' );

	// Post date/time
	if ( $fluida_meta_date || $fluida_meta_time ) {
		$date = ''; $time = '';
		if ( $fluida_meta_date ) { $date = get_the_date(); }
		if ( $fluida_meta_time ) { $time = esc_attr( get_the_time() ); }
		?>

		<span class="onDate date">
			<i class="icon-time icon-metas" title="<?php _e( "Date", "fluida" ) ?>"></i>
			<time class="published" datetime="<?php echo get_the_time( 'c' ) ?>" <?php cryout_schema_microdata( 'time' ) ?>><?php echo $date . ( ( $fluida_meta_date && $fluida_meta_time ) ? ', ' : '' ) . $time ?></time>
			<time class="updated" datetime="<?php echo get_the_modified_time( 'c' )  ?>" <?php cryout_schema_microdata( 'time-modified' ) ?>><?php echo get_the_modified_date();?></time>
		</span>
		<?php
	}

}; // fluida_posted_date()
endif;

/**
 * Posted tags
 */
if ( ! function_exists( 'fluida_posted_tags' ) ) :
function fluida_posted_tags() {
	$fluida_meta_tag  = cryout_get_option( 'fluida_meta_tag' );

	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $fluida_meta_tag && $tag_list ) { ?>
		<span class="footer-tags" <?php cryout_schema_microdata( 'tags' ) ?>>
				<i class="icon-tag icon-metas" title="<?php _e( 'Tagged', 'fluida' ) ?>"></i>&nbsp;<?php echo $tag_list ?>
		</span>
		<?php
	}
}; // fluida_posted_tags()
endif;

/**
 * Post edit link for editors
 */
if ( ! function_exists( 'fluida_posted_edit' ) ) :
function fluida_posted_edit() {
	edit_post_link( __( 'Edit', 'fluida' ), '<span class="edit-link icon-metas"><i class="icon-edit icon-metas"></i> ', '</span>' );
	cryout_post_footer_hook(); /* ?!? */

}; // fluida_posted_edit()
endif;

/**
 * Post format meta
 */
if ( ! function_exists( 'fluida_meta_format' ) ) :
function fluida_meta_format() {
	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format"><a href="%1$s"><i class="icon-%2$s" title="%3$s"></i></a></span>',
			esc_url( get_post_format_link( $format ) ),
			$format,
			get_post_format_string( $format )
		);
	}
} //fluida_meta_format()
endif;

/**
 * Post format info
 */
function fluida_meta_infos() {

	add_action( 'cryout_post_meta_hook', 	'fluida_posted_edit', 30 );
	add_action( 'cryout_post_meta_hook', 	'fluida_comments_on', 50 );

	if ( 'post' !== get_post_type() ) return;

	add_action( 'cryout_post_title_hook',	'fluida_posted_category' );
	add_action( 'cryout_post_meta_hook',	'fluida_posted_author', 10 );
	add_action( 'cryout_post_meta_hook',	'fluida_posted_date', 15 );
	add_action( 'cryout_post_meta_hook',	'fluida_posted_tags', 20 );
	add_action( 'cryout_meta_format_hook', 	'fluida_meta_format' );
} //fluida_meta_infos()
add_action( 'wp_head', 'fluida_meta_infos' );


/* Remove category from rel in category tags */
function fluida_remove_category_tag( $text ) {
	$text = str_replace( 'rel="category tag"', 'rel="tag"', $text );
	return $text;
} //fluida_remove_category_tag()
//add_filter( 'the_category', 'fluida_remove_category_tag' );
//add_filter( 'get_the_category_list', 'fluida_remove_category_tag' );

/**
 * Backup navigation
 */
if ( ! function_exists( 'fluida_content_nav' ) ) :
function fluida_content_nav( $nav_id ) {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) : ?>

		<nav id="<?php echo $nav_id; ?>" class="navigation">

			<span class="nav-previous">
				 <?php next_posts_link( '<i class="icon-angle-left"></i>' . __( 'Older posts', 'fluida' ) ); ?>
			</span>

			<span class="nav-next">
				<?php previous_posts_link( __( 'Newer posts', 'fluida' ) . '<i class="icon-angle-right"></i>' ); ?>
			</span>

		</nav><!-- #<?php echo $nav_id; ?> -->

	<?php endif;
}; // fluida_content_nav()
endif;

/**
 * Adds a post thumbnail and if one doesn't exist the first post image is returned
 * @uses cryout_get_first_image( $postID )
 */
if ( ! function_exists( 'fluida_set_featured_thumb' ) ) :
function fluida_set_featured_thumb() {

	global $post;
	$fluids = cryout_get_option( array( 'fluida_fpost', 'fluida_fauto', 'fluida_falign', 'fluida_magazinelayout', 'fluida_landingpage' ) );

	switch ($fluids['fluida_magazinelayout']) {
		case 3: $featured = 'fluida-featured-third'; break;
		case 2: $featured = 'fluida-featured-half'; break;
		case 1: default: $featured = 'fluida-featured'; break;		
	};
	
	// filter to disable srcset if so desired
	$use_srcset = apply_filters( 'fluida_featured_srcset', true );

	if ( function_exists('has_post_thumbnail') && has_post_thumbnail() && $fluids['fluida_fpost']) {
		// has featured image
		$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $featured );
	} elseif ( $fluids['fluida_fpost'] && $fluids['fluida_fauto'] && empty($featured_image) ) {
		// get the first image from post
		$featured_image = cryout_post_first_image( $post->ID, $featured );
	} else {
		// featured image not enabled or not obtainable
		$featured_image = '';
	};
	
	if ( ! empty( $featured_image[0] ) ):
		$featured_image_url = esc_url( $featured_image[0] );
		$featured_image_w = $featured_image[1];
		$featured_image_h = $featured_image[2]; ?>
		<div class="post-thumbnail-container"  <?php cryout_schema_microdata( 'image' ); ?>>

			<a href="<?php echo esc_url( get_permalink( $post->ID ) ) ?>" title="<?php echo esc_attr( get_post_field( 'post_title', $post->ID ) ) ?>"
				<?php cryout_echo_bgimage( $featured_image_url, 'post-featured-image' ) ?>>

			</a>
			<a class="responsive-featured-image" href="<?php echo esc_url( get_permalink( $post->ID ) ) ?>" title="<?php echo esc_attr( get_post_field( 'post_title', $post->ID ) ) ?>">
				<img class="post-featured-image" alt="<?php the_title_attribute();?>" <?php cryout_schema_microdata( 'url' ); ?>
				src="<?php echo $featured_image_url; ?>" srcset="<?php if ($use_srcset) echo cryout_get_featured_srcset(
					get_post_thumbnail_id( $post->ID ),
					array( 	'fluida-featured',
							'fluida-featured-full',
							'fluida-featured-half',
							'fluida-featured-third' )
				) ?>" sizes="<?php if ($use_srcset) echo cryout_gen_featured_sizes( fluida_featured_width(), $fluids['fluida_magazinelayout'], $fluids['fluida_landingpage'] ) ?>"/>
			</a>
			<meta itemprop="width" content="<?php echo $featured_image_w; ?>">
			<meta itemprop="height" content="<?php echo $featured_image_h; ?>">

		</div>
	<?php
	endif;
} // fluida_set_featured_thumb()
endif;
if ( cryout_get_option( 'fluida_fpost' ) ) add_action( 'cryout_featured_hook', 'fluida_set_featured_thumb' );

/* FIN */
