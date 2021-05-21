
<?php 
get_header();?>

<div class='pageheader' style='background-image:url(<?php echo get_field('image')?>)'>
  <div class='pageheader-content'>
    <h1><?php echo get_field('title')?></h1>
    <p class='content-text'><?php echo get_field('subline')?></p>
  </div>
</div>

<div class='halfblock room-block'>
  <?php if(get_field('image_aligement')=='right'){?>
    <div class='block-content'>
      <?php echo get_field('text')?>
      <div class='ausstattung-title'> AUSSTATTUNG</div>
      <div class='ausstattung-list'>
          <?php
             foreach(get_field('ausstattung') as $ausstattung){
             ?>
               <div class='<?php echo $ausstattung?>'></div>
             <?php }?>    
      </div>
      <?php if(get_field('link')){?>
         <a href='<?php echo get_field('link')['url']?>'><?php echo get_field('link')['title']?></a>
      <?php }?>
    </div>
    <div class='room-slicker'>
     <?php foreach(get_field('imagelist') as $image){?>
         <div class='block-image' style='background-image:url(<?php echo $image['image']?>)'></div>
     <?php }?>
   </div>s
  <?php }else{?>
        <div class='room-slicker'>
     <?php foreach(get_field('imagelist') as $image){?>
         <div class='block-image' style='background-image:url(<?php echo $image['image']?>)'></div>
     <?php }?>
     </div>
    <div class='block-content'>
      <?php echo get_field('text')?>
      <div class='ausstattung-title'>AUSSTATTUNG</div>
      <div class='ausstattung-list'>
          <?php
             foreach(get_field('ausstattung') as $ausstattung){
             ?>
               <div class='<?php echo $ausstattung?>'></div>
             <?php }?>    
      </div>
      <?php if(get_field('link')){?>
         <a href='<?php echo get_field('link')['url']?>'><?php echo get_field('link')['title']?></a>
      <?php }?>
    </div>
  <?php } ?>
</div>


<?php get_footer();?>