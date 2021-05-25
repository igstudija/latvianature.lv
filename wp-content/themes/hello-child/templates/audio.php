<?php if (types_render_field('mp3')){?>

<?php //echo types_render_field('mp3');?>

<audio controls>

  <source src="<?php echo types_render_field('mp3',array('output' => 'raw' ));?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

<?php } ?>
