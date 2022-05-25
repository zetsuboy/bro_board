<?php
/**
 * Simple Templating function
 *
 * @param $file   - Path to the PHP file that acts as a template.
 * @param $args   - Associative array of variables to pass to the template file.
 * @return string - Output of the template file. Likely HTML.
 */
function template( $file, $args ){
    if ( !file_exists( $file ) ) {
        return '';
    }
    if ( is_array( $args ) ){
        extract( $args );
    }
    ob_start();
    include $file;
    return ob_get_clean();
}