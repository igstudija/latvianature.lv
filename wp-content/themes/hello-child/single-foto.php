<?php get_header() ?>

<div class="container foto-galerija">

    <div class="row">

        <?php



$args = array(
    'post_parent' => get_the_ID(),
    'post_type' => 'attachment',
    'numberposts' => -1,
    'post_status' => 'any',
    'order' => 'asc',
    'orderby'=>"menu_order",
    //'exclude' => $ppp,
        //'suppress_filters' => 'false'
);
$files = get_posts($args);
?>

        <?php if ($files) { ?>

        <?php foreach ($files as $attachment_id => $attachment) { ?>
        <div class="col-md-3 item">
            <?php
                    $file_url = wp_get_attachment_url($attachment_id);
                    $filetype = wp_check_filetype($file_url);
                    $file_size = filesize(get_attached_file($attachment_id));

                    // echo the_attachment_link($attachment->ID, false);
                    ?>

            <a href="<?php echo wp_get_attachment_url($attachment->ID); ?>" data-fancybox="group_<?php echo $gid; ?>"
                data-caption="<?php echo get_the_title($attachment->ID);?>" class="galerija">

                <div class="thumbnail">
                    <?php echo wp_get_attachment_image($attachment->ID, 'large'); ?>
                </div>

                <h3>
                    <?php echo get_the_title($attachment->ID);?>
                </h3>

            </a>
        </div>
        <?php }  ?>

        <?php }   ?>

    </div>

</div>

<?php get_footer() ?>