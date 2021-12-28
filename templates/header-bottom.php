<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Lawyer
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

$headerimg          = get_header_image();
?>

<section class="hero-banner zigzag_bg_2 d-flex align-items-center" <?php echo lawyer_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="text-center">
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'lawyer') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'lawyer') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'lawyer' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'lawyer' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'lawyer' );

                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</section>