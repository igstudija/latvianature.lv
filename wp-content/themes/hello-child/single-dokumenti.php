<?php get_header() ?>

<div class="container">
<br>
    <?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
    <div class="content">
        <?php the_content(); ?>
    </div>

    <?php  }  } ?>

</div>

<?php get_footer() ?>
