<?php get_header() ?>

<div class="container">

    <div class="publikacijas">

        <?php

            $args = array(
              
                'post_type' => 'publikacijas-medijos',
                'order' => 'ASC'
            );
            $datumi = new WP_Query($args);?>

        <?php while($datumi->have_posts()) { $datumi->the_post();  ?>

        <div class="publikacija">

            <div class="row">
                <div class="col-md-1">
                    <a href=" <?php echo types_render_field('saite-uz-mediju', array('output'=>'raw'));?>"
                        target="_blank">
                        <?php the_post_thumbnail( 'medium' );?>
                    </a>
                </div>
                <div class="col">
                    <h2 class="nosaukums">
                        <a href=" <?php echo types_render_field('saite-uz-mediju', array('output'=>'raw'));?>"
                            target="_blank">
                            <?php echo get_the_title();?>
                        </a>
                    </h2>
                    <div class="saturs">
                        <?php echo types_render_field('ievads');?>
                    </div>

                </div>

            </div>

        </div>

        <?php }  ?>

    </div>

</div>

<?php get_footer() ?>