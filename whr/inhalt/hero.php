<div class="hero" style="background-image:url(<?php echo $block['placeholder'];?>)">
<div style='background-image:url(<?php echo get_field('logo_big','option')?>)' class='logo'></div>
    <div class="content">
        <div class="headline"><?php echo $block['headline'];?></div>
        <div class="text"><?php echo $block['subline'];?></div>
       
    </div>
    <?php if($block['circle']['circle_aktiv']) {?>
        <a href="<?php echo $block['circle']['circle_link']['url'];?>" target="<?php echo $block['circle']['circle_link']['target'];?>" class="circle">
        <div class="inner">
            <?php echo $block['circle']['circle_content'];?>
    </div>
        </a>
    <?php } ?> 
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
        <a class="hero-aktion" href="<?php echo $hero['link'];?>"><img src="<?php echo $hero['bild'];?>" alt="Aktion" /></a>
        <?php } ?>
</div>
<style>
    .hero .circle {
        background-color: #a8925e;
        color: #FFF;
        height:200px;
        width:200px;
        border-radius:50%;
        position:absolute;
        z-index:99;
        text-align:center;
        display:flex;
        justify-content:center;
        align-items:center;
        left:10vw;
        bottom:15vh;
        transform:rotate(-15deg);
        font-size:12px;
    }
    @media(max-width:800px) {
        .hero .circle {
            border-radius:0px;
            transform:none;
            bottom:0;
            height:auto;
            padding:1rem 1rem;
        }
    }
    .hero .circle:hover {
        background: #383838;
    }
    .hero .circle * {
        margin:0;
    }

    .hero-aktion {
        color: #FFF;
        height:145px;
        width:145px;
        position:absolute;
        z-index:99;
        text-align:center;
        display:flex;
        justify-content:center;
        align-items:center;
        left:25px;
        bottom:25px;
    }

    @media(max-width:800px) {
      
    }
</style>
<script>
jQuery(document).ready(function ($) {
        ScrollReveal().reveal(".hero .content", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
                reset: true,
                duration:900
	});
})
</script>
