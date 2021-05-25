<div class="kalendars-widget">

    <?php
$today = time();
$args = array(
  
    'post_type' => 'pasakumu-kalendars',
    'meta_query' => array(
    array(
      'key' => 'wpcf-pdatums',
      'value' => $today,
      'compare' => '>='
    )
  ),	

    'orderby' => 'meta_value',
    'order' => 'ASC'
);
$datumi = new WP_Query($args);?>

    <?php while($datumi->have_posts()) { $datumi->the_post();  ?>

    <a class="pasakums" href="<?php echo get_permalink();?>">
        <div class="row">

            <div class="col">
                <div class="datums"><i class="far fa-calendar-alt"></i>
                    <?php echo types_render_field('pdatums');?>

                    <?php 
                    if (types_render_field('pdatums-lidz')){
                        echo " līdz ";
                    echo types_render_field('pdatums-lidz');
                    }
                    ?>

                </div>
                <div class="nosaukums"><?php echo get_the_title();?></div>

                <?php 
                 if (types_render_field('laiks')){?>

                <div class="laiks">
                    <i class="far fa-clock"></i> <?php echo types_render_field('laiks');?>

                    <?php 
                    if (types_render_field('laiks-lidz')){
                        echo " līdz ";
                    echo types_render_field('laiks-lidz');
                    }
                    ?>

                </div>
                <?php } ?>

            </div>
        </div>

    </a>

    <?php }  ?>

</div>