<?php
/*
Plugin Name: URL Params
Plugin URI: http://jeremyshapiro.com/blog/wordpress-plugins/urlparams/
Description: Short Code to grab any URL Paramater
Version: 0.3
Author: Jeremy Shapiro
Author URI: http://www.jeremyshapiro.com/   
*/

/*
URL Params (Wordpress Plugin)
Copyright (C) 2011 Jeremy Shapiro

*/

//tell wordpress to register the shortcode
add_shortcode("urlparam", "urlparam");

function urlparam($atts) {
  $atts = shortcode_atts(array(
        'param'           => '',
        'default'        => '' 
        ), $atts);

  $params = preg_split('/\,\s*/',$atts['param']);

  foreach($params as $param)
  {
     if($_REQUEST[$param])
     {
         return $_REQUEST[$param];
     }
  }
          
  return $atts['default'];
}

?>
