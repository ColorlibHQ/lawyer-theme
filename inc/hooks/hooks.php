<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'lawyer_preloader', 'lawyer_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'lawyer_header', 'lawyer_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'lawyer_footer', 'lawyer_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'lawyer_wrp_start', 'lawyer_wrp_start_cb', 10 );
	add_action( 'lawyer_wrp_end', 'lawyer_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'lawyer_blog_col_start', 'lawyer_blog_col_start_cb', 10 );
	add_action( 'lawyer_blog_col_end', 'lawyer_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'lawyer_blog_posts_thumb', 'lawyer_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'lawyer_blog_details_wrap_start', 'lawyer_blog_details_wrap_start_cb', 10 );
	add_action( 'lawyer_blog_details_wrap_end', 'lawyer_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'lawyer_blog_posts_title', 'lawyer_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'lawyer_blog_posts_meta', 'lawyer_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'lawyer_blog_posts_excerpt', 'lawyer_blog_posts_excerpt_cb', 10 );
	// add_action( 'lawyer_blog_posts_excerpt', 'lawyer_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'lawyer_blog_posts_info_link', 'lawyer_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'lawyer_blog_posts_content', 'lawyer_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'lawyer_blog_posts_share', 'lawyer_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'lawyer_blog_sidebar', 'lawyer_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'lawyer_blog_single_meta', 'lawyer_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'lawyer_page_content', 'lawyer_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'lawyer_fof', 'lawyer_fof_cb', 10 );

	

?>