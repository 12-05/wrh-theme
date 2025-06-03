<div class='halfblock <?php if($block['padded']){echo 'row-small';}?>'>
  <?php if($block['image_aligement']=='right'){?>
    <div class='block-content'>
      <?php echo $block["image"]["text"]?>
      <?php if($block["image"]["link"]){?>
         <a class='link' href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
      <?php }?>
    </div>
    <div class='block-image' style='background-image:url(<?php echo $block["image"]["url"]?>)' alt="<?php echo $block["image"]["alt"] ?>"></div>
  <?php }else{?>
    <div class='block-image' style='background-image:url(<?php echo $block["image"]["url"]?>)' alt="<?php echo $block["image"]["alt"] ?>"></div>
    <div class='block-content'>
      <?php echo $block["text"]?>
      <?php if($block["text"]){?>
         <a class='link' href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
      <?php }?>
    </div>
  <?php } ?>
</div>