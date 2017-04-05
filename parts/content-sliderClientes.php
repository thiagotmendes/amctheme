<?php
$mypost = get_page_by_title('clientes');
remove_filter( 'the_content', 'wpautop' );
echo str_replace("<div>",'',$mypost->post_content);
