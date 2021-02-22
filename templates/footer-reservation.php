<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Lawyer
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$lawyer_reservation_title     = !empty( lawyer_opt( 'lawyer_reservation_title' ) ) ? lawyer_opt( 'lawyer_reservation_title' ) : '';
	$lawyer_reservation_sub_title = !empty( lawyer_opt( 'lawyer_reservation_sub_title' ) ) ? lawyer_opt( 'lawyer_reservation_sub_title' ) : '';
	$lawyer_reservation_btn_text  = !empty( lawyer_opt( 'lawyer_reservation_btn_text' ) ) ? lawyer_opt( 'lawyer_reservation_btn_text' ) : '';
	$lawyer_reservation_btn_url	  = !empty( lawyer_opt( 'lawyer_reservation_btn_url' ) ) ? lawyer_opt( 'lawyer_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $lawyer_reservation_title )?></h3>
			<p><?php echo esc_html( $lawyer_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $lawyer_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $lawyer_reservation_btn_text )?></a>
		</div>
	</div>