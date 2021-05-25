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

            <h2 class="nosaukums"><?php echo get_the_title();?></h2>

            <div class="saturs">
                <?php the_content();?>
            </div>

            <hr>

            <?php if (types_render_field('statuss', array('output'=>'raw'))!='izsludinats') {?>

            <div class="ligumcena">
                Paredzamā līgumcena: <b><?php echo number_format(types_render_field('ligumcena'), 0, ',', ' ');?> EUR
                </b>

            </div>
            <div class="datums">
                Plānotais izsludināšanas laiks: <b><?php echo types_render_field('pdatums');?></b>
            </div>

            <?php } else { ?>

            <div class="ligumcena">
                Līgumcena: <b><?php echo number_format(types_render_field('ligumcena'), 0, ',', ' ');?> EUR
                </b>

            </div>
            <div class="datums">
                Izsludināts: <b><?php echo types_render_field('pdatums');?></b>
            </div>

            <div class="datums">
                Piedāvājumu iesniegšana līdz: <b><?php echo types_render_field('iesniegsana');?></b> plkst.
                <b><?php echo types_render_field('iesniegsanas-laiks');?></b>
            </div>

            <div class="datums">
                Iepirkuma identifikācijas Nr.: <b><?php echo types_render_field('iepirkuma-numurs');?></b>
            </div>

            <?php }  ?>

            <div class="pasutitajs">
                Pasūtītājs: <b><?php echo types_render_field('pasutitajs');?></b>
            </div>

        </div>

        <?php }  ?>

    </div>

</div>

<?php get_footer() ?>