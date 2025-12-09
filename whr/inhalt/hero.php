<div class="hero" style="max-height:70vh;background-image:url(<?php echo $block['placeholder']; ?>)">
<div style='background-image:url(<?php echo get_field('logo_big', 'option') ?>)' class='logo'></div>
    <div class="content">
        <div class="headline"><?php echo $block['headline']; ?></div>
        <div class="text"><?php echo $block['subline']; ?></div>

    </div>

    <?php if ($block['video']) {?>
       <video autoplay loop muted playsinline src="<?php echo $block['video']; ?>">
       </video>
    <?php }?>
    <?php if ($block['sidebar']) {?>
      <div class='hero-sidebar'>
         <?php foreach ($block['sidebar'] as $icon) {?>
             <a style='background-color:<?php if ($icon['background'] == 'gold') {echo '#84724A';} else {echo '#111';}?>' href='<?php echo $icon['link']['url'] ?>' class='hero-sidebar-box'>
               <img alt="<?php echo $icon['link']['title'] ?> Link" src='<?php echo $icon['icon'] ?>'> </img>
               <div><?php echo $icon['link']['title'] ?></div>
             </a>
         <?php }?>
        </div>



    <?php }?>

</div>
<div class="highlights">
<?php $highlights = $block['highlights'];
if ($highlights): foreach ($highlights as $highlight): ?>
								<a target="_blank" class="highlight" href="<?php echo $highlight['link'] ? $highlight['link']['url'] : '' ?>">
								    <img src="<?php echo $highlight['image'] ?>" alt="<?php echo $highlight['title'] ?>">
			                        <div class="highlight-content">
									<div class="title"><?php echo $highlight['title'] ?></div>
							        <div class="text"><?php echo $highlight['text'] ?></div>
			</div>
								</a>

										<?php endforeach;endif; ?>
</div

<iframe title="Trust You" style="z-Index:999999999;position:absolute;right:2rem;bottom:2rem;border:0px" class="ty-widget" src="https://api.trustyou.com/hotels/2750b1b3-7381-4f7e-bd37-44f73d0bed78/trust_score.html?key=2f30665d-e868-4f32-8244-02b6dc8e9640&size=xl&scale=5" scrolling="no" height="144" width="170" style="border:none"></iframe>
<script async src="https://cdn.trustyou.com/v2/hotel/widget-ui/trustscore/trustscore.umd.js"></script>
<style>
	@media(max-width:768px) {
		.ty-widget {
			display:none!important;
		}
	}

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
