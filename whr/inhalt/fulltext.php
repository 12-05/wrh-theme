<div class='row fulltext'>
  <h1><?php echo $block['headline'] ?></h1>
  <p><?php echo do_shortcode($block['text']); ?></p>
  <?php if ($block['link']) {?>
  <a class='link' href='<?php echo $block['link']['url'] ?>'><?php echo $block['link']['title'] ?></a>
  <?php }?>
</div>