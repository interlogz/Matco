<?php 
/*
Plugin Name: Shorcode
Author: vijendiran
Version:1.0
Description: Add shortcode using this plugin
*/
function web_add_shortcode(){

$content='<h2>vijendiran</h2>';
$content.='<img src="http://localhost/matco/wp-content/uploads/2021/04/abt.png" width="100px" height="100px">';
$content.='<p>test</p>';
return $content;
}
add_shortcode('myshortcode','web_add_shortcode');

 ?>