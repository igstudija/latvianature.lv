<?php get_header() ?>

<div class="container">
  <br>

    <div class="dokumenti">

        <?php

            $args = array(

                'post_type' => 'infografikas',
                'order' => 'ASC'
            );
            $datumi = new WP_Query($args);?>

        <?php while($datumi->have_posts()) { $datumi->the_post();  ?>

        <div class="dokuments">

            <div class="row">

                <div class="col-md-3">

                  <div class="card">


  <a href="<?PHP echo types_render_field('jpg-datne',array('output'=>'raw'));?>"  class="card-img-top text-center"
 data-caption="<?php echo get_the_title();?>" data-fancybox data-small-btn="false"  data-width="auto"
    >
  <img src="<?PHP echo types_render_field('jpg-datne',array('output'=>'raw'));?>" style="height:200px; width:auto; margin-top:15px"/>
  </a>
  <div class="card-body">
    <h5 class="card-title"><?php echo get_the_title();?></h5>

  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><a href="<?PHP echo types_render_field('pdf-datne',array('output' => 'raw' ));?>" download>Lejupielādēt PDF</a></li>

  </ul>

</div>







                </div>

            </div>

        </div>

        <?php }  ?>

    </div>

</div>

<?php get_footer() ?>
