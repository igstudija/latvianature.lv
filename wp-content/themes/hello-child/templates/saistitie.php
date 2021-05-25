<?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    $tag_array[] = $tag->name;
  }
}

//print_r($tag_array);
?>

<?php

    $args = array(

        'post_type' => $veids,
        'order' => 'ASC',
        'tax_query' => array(
        array(
            'taxonomy' => 'post_tag',
            'field'    => 'slug',
            'terms'    => $tag_array
        )
    )
    );
    $datumi = new WP_Query($args);?>

<ul class="saistitie">



<?php while($datumi->have_posts()) { $datumi->the_post();  ?>
<li>

<a href="<?php echo  types_render_field('fails', array('output'=>'raw')); ?>" target="_blank"><?php the_title();?></a>
</li>
<?php }  ?>

</ul>
