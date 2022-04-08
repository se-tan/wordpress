<?php

/* フロントページのタイトルタグをカスタマイズ */
function custom_the_site_logo_tag( $tag ) {

	if ( is_front_page() && preg_match( '/logo-header/', $tag ) ) {
		$tag = preg_replace( '/div/', 'h1', $tag );
	}

	echo $tag;

}
add_action( 'the_site_logo_tag', 'custom_the_site_logo_tag', 10, 1 );

?>
