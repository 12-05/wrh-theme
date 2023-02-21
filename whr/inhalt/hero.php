<div class="hero" style="background-image:url(<?php echo $block['placeholder'];?>)">
<div style='background-image:url(<?php echo get_field('logo_big','option')?>)' class='logo'></div>
    <div class="content">
        <div class="headline"><?php echo $block['headline'];?></div>
        <div class="text"><?php echo $block['subline'];?></div>
        <?php if($block['circle']['circle_aktiv']) {?>
        <a href="<?php echo $block['circle']['circle_link']['url'];?>" target="<?php echo $block['circle']['circle_link']['target'];?>" class="circle <?php echo $block['circle']['circle_type'];?> <?php echo $block['circle']['circle_position'];?>" style="background-color:<?php echo $block['circle']['circle_color'];?>">
        <?php if($block['circle']['circle_type']==="star") {?>
            <div class="star-inner">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.201 29.676"><polygon points="15.602,0 19.325,11.279 31.2,11.332 21.624,18.36 25.243,29.676 15.602,22.738 5.96,29.676 9.577,18.36 0,11.332 11.878,11.279" fill="<?php echo $block['circle']['circle_color'];?>" /></svg>
            </div>
        <?php } ?>
        <div class="inner">
            <?php echo $block['circle']['circle_content'];?>
    </div>
        </a>
    <?php } ?> 
    </div>
 
    <?php if($block['video']){?>
       <video autoplay loop muted playsinline src="<?php echo $block['video'];?>">
       </video>
    <?php } ?>
    <?php if($block['sidebar']){?>
      <div class='hero-sidebar'>
         <?php foreach($block['sidebar'] as $icon){ ?>
             <a style='background-color:<?php if($icon['background']=='gold'){ echo '#a8925e'; }else{echo 'transparent';}?>' href='<?php echo $icon['link']['url']?>' class='hero-sidebar-box'>
               <img src='<?php echo $icon['icon'] ?>'> </img>
               <div><?php echo $icon['link']['title']?></div>
             </a>
         <?php } ?>
        </div>



    <?php }?>
    <img class="baum-siegel" src="/wp-content/uploads/2021/12/Libertas_Baumsiegel.png">
    <?php 
        $hero = $block['hero_aktion'];
        if($hero['aktiv']) {?>
        <a <?php if($hero['size']){?>style="width:<?php echo $hero['size'];?>px;height:<?php echo $hero['size'];?>px"<?php } ?> class="hero-aktion" href="<?php echo $hero['link'];?>"><img src="<?php echo $hero['bild'];?>" alt="Aktion" /></a>
        <?php } ?>
</div>
<style>
 

</style>
<script>
jQuery(document).ready(function ($) {
        ScrollReveal().reveal(".hero .headline", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
                reset: true,
                duration:900
	});

    ScrollReveal().reveal(".hero .text", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
                reset: true,
                duration:900
	});
})
</script>
