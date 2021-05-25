<?php get_header() ?>

<div class="container">

    <div class="fazes">
        <div class="sakums">
            <?php _e('Projekta sākums','daba');?>
        </div>

        <?php
$fazes = get_terms( array(
    'taxonomy' => 'fazes',
    'hide_empty' => false
) );
?>

        <?php foreach ( $fazes as $faze ) { ?>
        <div class="faze <?php echo $faze->slug; ?>" id="<?php echo $faze->slug; ?>">
            <h2><?php echo $faze->name; ?>
                <small><?php echo $faze->description; ?></small>
            </h2>

            <?php

            $args = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'fazes',
                        'field' => 'slug',
                        'terms' => $faze->slug
                    ),
                ),
                'post_type' => 'rezultati',
                'meta_key'  => 'wpcf-datums',
                'orderby' => 'meta_value',
                'order' => 'ASC'
            );
            $datumi = new WP_Query($args);?>

            <?php while($datumi->have_posts()) {
            $datumi->the_post();
        $rezultata_datums[$faze->slug][] = types_render_field('datums', array('output'=>'raw'));
        } ?>

            <?php $results = array_unique($rezultata_datums[$faze->slug]);

        ?>

            <?php foreach ( $results as $result ) { ?>

            <div class="rezultata-rinda">

                <div class="datums">
                    <?php  echo date_i18n('d. F, Y', $result); ?>
                </div>
                <?php

$args = array(
    'tax_query' => array(
        array(
            'taxonomy' => 'fazes',
            'field' => 'slug',
            'terms' => $faze->slug
        ),
    ),
    'post_type' => 'rezultati',
    'meta_key'  => 'wpcf-datums',
    'meta_value' => $result,
    'orderby' => 'meta_value',
    'order' => 'ASC'
);
$rezultati = new WP_Query($args);?>

                <?php while($rezultati->have_posts()) { $rezultati->the_post();?>


<?php

$rezult_id =get_the_ID();

if(types_render_field('neradit', array('id'=>$rezult_id))==''){ ?>

                <div class="rinda-saturs">

<?php if(types_render_field('izpildits', array('id'=>$rezult_id))){ ?>



  <?php $aktivitates = toolset_get_related_posts($rezult_id, 'aktivitate-rezultats', array( 'query_by_role' => 'child', 'return' => 'post_object' ) );?>
  <?php if (!empty($aktivitates)) {?>

  <?php  foreach ($aktivitates as $aktivitate) { ?>

  <?php $aktivitate_url = get_permalink($aktivitate->ID); ?>

  <?php }} ?>





      <a class="nosaukums" href="<?php echo $aktivitate_url;?>"><?php echo get_the_title();?>
      <span class="badge bg-success"><?php _e('Done','daba')?></span>
      </a>
<?php } else { ?>
<?php echo get_the_title();?>

  <?php } ?>


                </div>

                  <?php } ?>

                <?php } ?>

            </div>

            <?php }  ?>

        </div>

        <?php }  ?>

        <div class="beigas">
            <?php _e('Projekta beigas','daba');?>
        </div>

    </div>

</div>

<?php get_footer() ?>
