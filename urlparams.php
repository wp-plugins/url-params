<?php
/*
Plugin Name: URL Params
Plugin URI: http://jeremyshapiro.com/blog/wordpress-plugins/urlparams/
Description: Short Code to grab any URL Paramater
Version: 0.2
Author: Jeremy Shapiro
Author URI: http://www.jeremyshapiro.com/   
*/

/*
URL Params (Wordpress Plugin)
Copyright (C) 2011 Jeremy Shapiro

*/

//tell wordpress to register the demolistposts shortcode
add_shortcode("urlparam", "urlparam");

function urlparam($atts) {
  $atts = shortcode_atts(array(
        'param'           => '',
        'default'        => '' 
        ), $atts);
         
  return ($_REQUEST[$atts['param']]) ? $_REQUEST[$atts['param']] : $atts['default'];
}

?>
