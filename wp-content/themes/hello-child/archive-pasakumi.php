<?php get_header() ?>

<div class="container">

    <div class="pasakumi">

      <div class="row">

        <div class="col-md-8">

          <?php
$today = time();
$args = array(

'post_type' => 'pasakumi',
'meta_query' => array(
array(
  'key' => 'wpcf-pdatums',
  'value' => $today,
  'compare' => '<'
)
),
'orderby' => 'meta_value',
'order' => 'DESC'
);
$datumi = new WP_Query($args);?>

          <?php while($datumi->have_posts()) { $datumi->the_post();  ?>

          <a class="pasakums" href="<?php echo get_permalink();?>">
              <div class="row">
                  <div class="col-md-3">
                      <div class="datums"><i class="far fa-calendar-alt"></i>
                          <?php echo types_render_field('pdatums');?>
                      </div>
                  </div>
                  <div class="col">
                      <div class="nosaukums"><?php echo get_the_title();?></div>

                      <?php
                      if (types_render_field('laiks')){ ?>

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
<?php if (has_post_thumbnail()){?>
<div class="col-md-4">

  <div class="thumbnail">
      <?php the_post_thumbnail( 'medium' )?>
  </div>

</div>
<?php } ?>


              </div>

          </a>

          <?php }  ?>

        </div>

        <div class="col">
          <h2>Drīzumā</h2>

          <?php

$args = array(

'post_type' => 'pasakumi',
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
                  <div class="col-md-3">
                      <div class="datums"><i class="far fa-calendar-alt"></i>
                          <?php echo types_render_field('pdatums');?>
                      </div>
                  </div>
                  <div class="col">
                      <div class="nosaukums"><?php echo get_the_title();?></div>
                      <div class="laiks">
                          <i class="far fa-clock"></i> <?php echo types_render_field('laiks');?>

                          <?php
  if (types_render_field('laiks-lidz')){
      echo " līdz ";
  echo types_render_field('laiks-lidz');
  }
  ?>

                      </div>
                  </div>
              </div>

          </a>

          <?php }  ?>

        </div>

      </div>




    </div>

</div>

<?php get_footer() ?>
