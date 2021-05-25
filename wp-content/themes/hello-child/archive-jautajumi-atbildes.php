<?php get_header() ?>

<div class="container jautajumi-atbildes">
    <br>
    <div class="accordion aktivitates" id="accordion">

        <?php 
        
        $the_query = new WP_Query([
            'order'=>'ASC',           
            'post_type' =>'jautajumi-atbildes'
        ]);
        
        
        while ( $the_query->have_posts() ) : $the_query->the_post(); // standard WordPress loop. ?>

        <div class="accordion-item">

            <h3 class="haktivitate accordion-header collapsed" id="heading_<?php the_ID(); ?>" data-bs-toggle="collapse"
                data-bs-target="#collapse_<?php the_ID(); ?>" aria-expanded="true"
                aria-controls="collapse_<?php the_ID(); ?>">
                <?php the_title();?>

            </h3>

            <div id="collapse_<?php the_ID(); ?>" class="accordion-collapse collapse"
                aria-labelledby="heading_<?php the_ID(); ?>" data-bs-parent="#accordion">
                <div class="accordion-body">

                    <?php the_content();?>

                </div>
            </div>

        </div><!-- accordion-item -->

        <?php endwhile; // end of the loop. ?>

    </div><!-- accordion -->

</div>
<?php get_footer() ?>