<?php

$start = '2020-08-01';
$today = date('Y-m-d');




$delta = (int)abs((strtotime($start) - strtotime($today))/(60*60*24*30));
$current = $delta / 101 * 100;
?>

<div class="htimeline">

    <div class="today" style="left:<?php echo $current; ?>%">
        <?php _e('Šodiena','daba');?>
    </div>

    <?php
//$fazes = get_terms( 'fazes' );


$fazes = get_terms( array(
    'taxonomy' => 'fazes',
    'hide_empty' => false
) );


?>

    <?php foreach ( $fazes as $faze ) { ?>
    <a class="faze <?php echo $faze->slug; ?>" href="<?php _e('/rezultati','daba');?>#<?php echo $faze->slug; ?>">
        <div class="faze-content">

            <h3><?php echo $faze->name; ?></h3>
            <div><?php echo $faze->description; ?></div>
        </div>
    </a>

    <?php } ?>

</div>