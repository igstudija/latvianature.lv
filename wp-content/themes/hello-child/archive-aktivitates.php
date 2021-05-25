<?php get_header() ?>

<div class="container">
    <br>
    <div class="accordion aktivitates" id="accordion">

        <?php
$grupas = get_terms( 'aktivitasu-grupas' );
?>

        <?php foreach ( $grupas as $grupa ) { ?>

        <div class="accordion-item">

            <h2 class="haktivitate accordion-header collapsed" id="heading_<?php echo $grupa->slug; ?>"
                data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $grupa->slug; ?>" aria-expanded="true"
                aria-controls="collapse_<?php echo $grupa->slug; ?>">
                <?php echo $grupa->name; ?>

            </h2>

            <div id="collapse_<?php echo $grupa->slug; ?>" class="accordion-collapse collapse"
                aria-labelledby="heading_<?php echo $grupa->slug; ?>" data-bs-parent="#accordion">
                <div class="accordion-body">

                    <?php

                    $args = array(
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'aktivitasu-grupas',
                                'field' => 'slug',
                                'terms' => $grupa->slug
                            ),
                        ),
                        'post_type' => 'aktivitates',
                        'meta_query' => array(
                            array(
                              'key' => 'wpcf-virsaktivitate',
                              'compare' => 'NOT EXISTS'
                              )
                            ),
                       // 'meta_key'  => 'wpcf-virsaktivitate',
                        //'meta_value'  => '',
                        //'orderby' => 'meta_value',
                        'order' => 'ASC',
                        'suppress_filters' => true,
                    );
                    $aktivitates = new WP_Query($args);?>

                    <?php while($aktivitates->have_posts()) { $aktivitates->the_post();?>

                    <div class="aktivitate ">
                        <div class="laiks"><?php echo types_render_field('no');?> -
                            <?php echo types_render_field('lidz');?>
                        </div>
                        <div class="atbildigais" data-bs-toggle="tooltip" data-bs-placement="left" title="<?php echo types_render_field('atbildigais');?>"><?php echo types_render_field('atbildigais',array('output'=>'raw'));?></div>
                        <a class="nosaukums" href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a>

                        <?php $virsaktivitate = get_the_ID(); ?>


                        <?php $child_posts = toolset_get_related_posts( $virsaktivitate, 'aktivitate-rezultats', array( 'query_by_role' => 'parent', 'return' => 'post_object' ) );
                         if (!empty($child_posts)) {?>
                        <h3 class="mb-3"><?php _e('Planned results','daba');?>:</h3>
                        <?php  foreach ($child_posts as $child_post) { ?>

                          <div class="card mt-3 bg-light">
                            <div class="card-body">


                              <span class="badge bg-secondary"><?php echo types_render_field('datums', array('id'=>$child_post->ID))?></span>
                              <?php if(types_render_field('izpildits', array('id'=>$child_post->ID))){ ?>
                              <span class="badge bg-success"><?php _e('Done','daba')?></span>
                              <?php } ?>
                              <h3><?php echo $child_post->post_title; ?></h3>

                            <?php $pielikumi = toolset_get_related_posts($child_post->ID, 'result-materials', array( 'query_by_role' => 'parent', 'return' => 'post_object' ) );
                             if (!empty($pielikumi)) {?>
                            <div class="">
                              <b><?php _e('Attachments','daba');?>:</b>
                            </div>
                            <?php  foreach ($pielikumi as $pielikums) { ?>

                            <a href="<?php echo types_render_field('fails', array('id'=>$pielikums->ID, 'output'=>'raw'))?>"><?php echo $pielikums->post_title; ?></a>

                            <?php }} ?>



                            </div>
                          </div>



                        <?php }} ?>




                        <?php
                        $args = array(

                            'post_type' => 'aktivitates',
                            'meta_query' => array(
                                array(
                                  'key' => 'wpcf-virsaktivitate',
                                  'value'=> apply_filters( 'wpml_object_id', $virsaktivitate, 'post',true, 'lv'   ),
                                  'compare' => '='
                                  )
                                ),

                           // 'meta_key'  => 'wpcf-virsaktivitate',
                           // 'meta_value'  => $virsaktivitate,
                            //'orderby' => 'meta_value',
                            'order' => 'ASC',
                            'suppress_filters' => false,
                        );
                        $paktivitates = new WP_Query($args);
                        //var_dump($paktivitates);
                        ?>

                        <?php if($paktivitates->have_posts()){?>
                        <div class="paktivitates">
                            <?php while($paktivitates->have_posts()) { $paktivitates->the_post();?>

                            <div class="paktivitate">
                                <div class="laiks"><?php echo types_render_field('no');?> -
                                    <?php echo types_render_field('lidz');?>
                                </div>
                                <div class="atbildigais" data-bs-toggle="tooltip" data-bs-placement="left" title="<?php echo types_render_field('atbildigais');?>"><?php echo types_render_field('atbildigais',array('output'=>'raw'));?></div>
                                <a class="nosaukums"
                                    href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a>



                                    <?php $child_posts = toolset_get_related_posts( get_the_ID(), 'aktivitate-rezultats', array( 'query_by_role' => 'parent', 'return' => 'post_object' ) );
                                     if (!empty($child_posts)) {?>
                                    <h3 class="mt-3"><?php _e('Planned results','daba');?>:</h3>
                                    <?php  foreach ($child_posts as $child_post) { ?>

                                      <div class="card mb-3 bg-light">
                                        <div class="card-body">


                                          <span class="badge bg-secondary"><?php echo types_render_field('datums', array('id'=>$child_post->ID))?></span>
                                          <?php if(types_render_field('izpildits', array('id'=>$child_post->ID))){ ?>
                                          <span class="badge bg-success"><?php _e('Done','daba')?></span>
                                          <?php } ?>
                                          <h3><?php echo $child_post->post_title; ?></h3>

                                        <?php $pielikumi = toolset_get_related_posts($child_post->ID, 'result-materials', array( 'query_by_role' => 'parent', 'return' => 'post_object' ) );
                                         if (!empty($pielikumi)) {?>
                                        <div class="">
                                          <b><?php _e('Attachments','daba');?>:</b>
                                        </div>
                                        <?php  foreach ($pielikumi as $pielikums) { ?>

                                        <a href="<?php echo types_render_field('fails', array('id'=>$pielikums->ID, 'output'=>'raw'))?>"><?php echo $pielikums->post_title; ?></a>

                                        <?php }} ?>



                                        </div>
                                      </div>



                                    <?php }} ?>



                            </div>

                            <?php } ?>
                        </div>

                        <?php } ?>
                    </div>

                    <?php } ?>

                </div>
            </div>

        </div><!-- accordion-item -->

        <?php }  ?>

    </div><!-- accordion -->

</div>
<?php get_footer() ?>
