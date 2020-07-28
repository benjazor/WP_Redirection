<?php

/**
 * If the url contains the link, redirects the user to the url, otherwise continue.
 */
function wp_redirection( $link, $url ) {
    
    global $wp;

    if (strpos($_SERVER['REQUEST_URI'], $link)) {
        wp_redirect($url);
        exit();
    }

}

# EXAMPLE
# wp_redirection( "www.my-website.com/youtube" , "https://youtube.com/myYoutubePage" );

