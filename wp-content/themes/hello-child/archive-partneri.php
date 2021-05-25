<?php get_header() ?>

<div class="container">

    <div class="iepirkumi">

        <?php

            $args = array(
              
                'post_type' => 'iepirkumi',
               'meta_key'  => 'wpcf-pdatums',
                'orderby' => 'meta_value',
                'order' => 'ASC'
            );
            $datumi = new WP_Query($args);?>

        <?php while($datumi->have_posts()) { $datumi->the_post();  ?>

        <div class="iepirkums">

            <a class="nosaukums" href="<?php echo get_permalink();?>">
                <?php echo get_the_title();?>
            </a>
            <?php echo types_render_field('pdatums');?> | <?php echo types_render_field('pasutitajs');?> |
            <?php echo types_render_field('ligumcena');?> EUR

        </div>

        <?php }  ?>

    </div>

</div>

<?php get_footer() ?>