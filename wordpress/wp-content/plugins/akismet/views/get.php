<form name="akismet_activate" action="https://akismet.com/get/" method="POST" target="_blank">
	<input type="hidden" name="passback_url" value="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>"/>
	<input type="hidden" name="blog" value="<?php echo esc_url( get_option( 'home' ) ); ?>"/>
	<input type="hidden" name="redirect" value="<?php echo isset( $redirect ) ? $redirect : 'plugin-signup'; ?>"/>
<<<<<<< HEAD
	<input type="submit" class="<?php echo isset( $classes ) && count( $classes ) > 0 ? implode( ' ', $classes ) : 'akismet-button akismet-is-primary';?>" value="<?php echo esc_attr( $text ); ?>"/>
=======
	<input type="submit" class="<?php echo isset( $classes ) && count( $classes ) > 0 ? implode( ' ', $classes ) : 'akismet-button';?>" value="<?php echo esc_attr( $text ); ?>"/>
>>>>>>> 4f56162f325834984e19aec854956e5e56e62651
</form>