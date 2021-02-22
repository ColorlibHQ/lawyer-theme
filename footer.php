<?php 
/**
 * @Packge     : Lawyer
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook lawyer_footer
         *
         * @Hooked  lawyer_footer_area 
         *
         */

		do_action( 'lawyer_footer' );

	wp_footer(); 
 ?>
</body>
</html>