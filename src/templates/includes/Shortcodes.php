<?php
function pageTitleFn(){
	return get_the_title();;
}
add_shortcode( 'pageTitle', 'pageTitleFn' );
