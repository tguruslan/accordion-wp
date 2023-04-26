<?php

/*
Plugin Name: accordion by ruslan
Plugin URI: https://github.com/tguruslan
Description: [accordion_gr][accordion name="Заголовок елементу акордіону" class="Додаткові класи"]Контент елемента акордіону[/accordion][/accordion_gr]
Version: 1.0
Author: Ruslan IOC
Author URI: https://github.com/tguruslan
*/

add_shortcode( 'accordion_gr', function( $atts, $content="" ){
  wp_enqueue_style('accordion_gr', plugins_url('style.css',__FILE__ ));
  wp_enqueue_script('accordion_gr', plugins_url('script.js',__FILE__ ), array( 'jquery' ), null );
  return '<div class="panel-group">'.do_shortcode($content).'</div>';
});

add_shortcode("accordion", function($atts, $content=""){
  extract(shortcode_atts(array("name" => '',"class" => ''), $atts));
  return '<div class="panel '.$class.'">'.
    '<div class="panel-heading">'.
        '<a>'.$name.'</a>'.
        '<i class="fa fa-chevron-down"></i>'.
    '</div>'.
    '<div class="panel-collapse collapse">'.
      '<div>'.do_shortcode($content).'</div>'.
    '</div>'.
  '</div>';
});

