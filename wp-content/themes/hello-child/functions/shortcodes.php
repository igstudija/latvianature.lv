<?php

function get_saistitie($atts) {

  extract(shortcode_atts(array(
      'veids' => '',
   ), $atts));


    ob_start();
    //get_template_part('widget-gallery', null, $atts);
    include(locate_template('templates/saistitie.php'));

    return ob_get_clean();


  }
  add_shortcode('saistitie', 'get_saistitie');




  function get_audio($atts) {




      ob_start();
      //get_template_part('widget-gallery', null, $atts);
      include(locate_template('templates/audio.php'));

      return ob_get_clean();

  
    }
    add_shortcode('audio', 'get_audio');
