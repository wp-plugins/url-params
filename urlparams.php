<?php
/*
Plugin Name: URL Params
Plugin URI: http://asandia.com/wordpress-plugins/urlparams/
Description: Short Code to grab any URL Parameter
Version: 1.5
Author: Jeremy B. Shapiro
Author URI: http://www.asandia.com/
*/

/*
URL Params (Wordpress Plugin)
Copyright (C) 2011-2013 Jeremy Shapiro

*/

//tell wordpress to register the shortcodes
add_shortcode("urlparam", "urlparam");
add_shortcode("ifurlparam", "ifurlparam");

function urlparam($atts) {
    $atts = shortcode_atts(array(
        'param'           => '',
        'default'        => '',
        'dateformat'	=> ''
    ), $atts);

    $params = preg_split('/\,\s*/',$atts['param']);

    foreach($params as $param)
    {
        if($_REQUEST[$param])
        {
            if(($atts['dateformat'] != '') && strtotime($_REQUEST[$param]))
            {
                return date($atts['dateformat'], strtotime($_REQUEST[$param]));
            } else {
                return $_REQUEST[$param];
            }
        }
    }

    return $atts['default'];
}

/*
 * If 'param' is found and 'is' is set, compare the two and display the contact if they match
 * If 'param' is found and 'is' isn't set, display the content between the tags
 * If 'param' is not found and 'empty' is set, display the content between the tags
 *
 */
function ifurlparam($atts, $content) {
    $atts = shortcode_atts(array(
        'param'           => '',
        'empty'          => false,
        'is'            => false,
    ), $atts);

    $params = preg_split('/\,\s*/',$atts['param']);

    foreach($params as $param)
    {
        if($_REQUEST[$param])
        {
            if($atts['empty'])
            {
                return '';
            } elseif(!$atts['is'] or ($_REQUEST[$param] == $atts['is'])) {
                return do_shortcode($content);
            }
        }
    }

    if ($atts['empty'])
    {
        return do_shortcode($content);
    }

    return '';
}

?>
