<?php

function template_part_shortcode() {
    ob_start();
    get_template_part('laika-linija');
    return ob_get_clean();
  }
  add_shortcode('rezultati', 'template_part_shortcode');