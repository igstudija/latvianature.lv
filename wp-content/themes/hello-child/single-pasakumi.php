<?php get_header() ?>

<div class="container">

    <div class="row">

        <div class="col"><br>
            <div class="datums"><i class="far fa-calendar-alt"></i>
                <?php echo types_render_field('pdatums');?>

                <?php 
                    if (types_render_field('pdatums-lidz')){
                        echo " līdz ";
                    echo types_render_field('pdatums-lidz');
                    }
                    ?>

            </div>

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

    <hr>

    <?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
    <div class="content">
        <?php the_content(); ?>
    </div>

    <?php    } // end while
} // end if
?>

</div>

<?php get_footer() ?>