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

    <?php $child_posts = toolset_get_related_posts( $post->ID, 'aktivitate-rezultats', array( 'query_by_role' => 'parent', 'return' => 'post_object' ) );
     if (!empty($child_posts)) {?>
    <h2><?php _e('Planned results','daba');?></h2>


<h3><?php _e('Coordinating partner','daba');?>: <?php echo types_render_field('atbildigais');?> </h3>



    <?php  foreach ($child_posts as $child_post) { ?>

      <div class="card mb-3">
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
//var_dump(toolset_get_related_posts(get_the_ID(),array( 'aktivitates', 'rezultati' ));
  //echo get_the_ID();


    // START dienas
    // $tag = get_the_title($post->ID);
    // global $post;
    $rezultati = toolset_get_related_posts(
        get_the_ID(), // get posts related to this one
        'aktivitate-rezultats', //array( 'writer', 'book' ), // relationship between the posts
        'child', // get posts where $writer is the parent in given relationship
        10000,
        0
    );
    //$piedavajumi = get_posts($args);
    if (!empty($rezultati)) {
        ?>

        <div class="celojuma-programma">

            <h2>Rezultāti</h2>

            <?php foreach ($rezultati as $post) : setup_postdata($post); ?>
                <hr>
                <div class="print-holder">
                    <div class="row">

                        <div class="col-12">
                            <h4><?php the_title(); ?></h4>
                            <h3><?php //echo types_render_field('apaksvirsraksts'); ?></h3>

                        </div>
                    </div>



                </div>
            <?php
        endforeach;
        wp_reset_postdata();
        ?>

        </div>



    <?php }
    // END dienas
    ?>



</div>

<?php get_footer() ?>
