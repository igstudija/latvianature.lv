<?php

function get_kalendars($atts) {

  
    ob_start();
    //get_template_part('widget-gallery', null, $atts);
    include(locate_template('widget-kalendars.php'));
    
    return ob_get_clean();
    
    
  }
  add_shortcode('kalendars', 'get_kalendars');