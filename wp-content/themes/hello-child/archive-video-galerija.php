<?php get_header() ?>

<div class="container video-galerija">
    <br>
    <div class="row">

        <?php while ( have_posts() ) : the_post(); // standard WordPress loop. ?>

        <div class="col-md-3">

            <div class="thumbnail">
                <a data-fancybox href="https://www.youtube.com/watch?v=<?php echo types_render_field('youtube-id')?>">
                    <img src="https://img.youtube.com/vi/<?php echo types_render_field('youtube-id')?>/hqdefault.jpg">
                </a>
            </div>

            <a data-fancybox href="https://www.youtube.com/watch?v=<?php echo types_render_field('youtube-id')?>">
                <h3> <?php the_title();?></h3>
            </a>

        </div>

        <?php endwhile; // end of the loop. ?>

    </div>

</div>
<?php get_footer() ?>