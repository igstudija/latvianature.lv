<?php get_header() ?>

<div class="container">

    <div class="dokumenti">

        <?php

            $args = array(

                'post_type' => 'dokumenti',
                'order' => 'ASC'
            );
            $datumi = new WP_Query($args);?>

        <?php while($datumi->have_posts()) { $datumi->the_post();  ?>

        <div class="dokuments">

            <div class="row">

                <div class="col">
                    <h2 class="nosaukums">
                        <a href=" <?php echo get_the_permalink();?>">
                            <?php echo get_the_title();?>
                        </a>
                    </h2>

                    <div class="ievads">
                      <?php the_excerpt();?>
                    </div>

                </div>

            </div>

        </div>

        <?php }  ?>

    </div>

</div>

<?php get_footer() ?>
