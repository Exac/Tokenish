<?php
//remove inline image width & height attributes
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );

?>