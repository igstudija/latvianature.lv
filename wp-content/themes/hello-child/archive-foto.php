<?php get_header() ?>

<div class="container foto-galerija">
    <br>
    <div class="row">

        <?php while ( have_posts() ) : the_post(); // standard WordPress loop. ?>

        <div class="col-md-3">

            <a href=" <?php the_permalink();?>" class="galerija">

                <div class="thumbnail">
                    <?php the_post_thumbnail( 'large' )?>
                </div>

                <h3>
                    <?php the_title();?>
                </h3>

            </a>

        </div>

        <?php endwhile; // end of the loop. ?>

    </div>

</div>
<?php get_footer() ?>