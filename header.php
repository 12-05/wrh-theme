<?php
    if (get_field('title')) {
        $title = get_field('title') . ' – ' . get_bloginfo('name');
    } else {
        $title = get_the_title() . ' – ' . get_bloginfo('name');
    }
?>
<!doctype html>
<html                                         <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php echo $title; ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.ico" rel="shortcut icon">
		<link href="/wp-content/uploads/2021/05/richtershof-small.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php the_field('description')?>" />

		<?php wp_head(); ?>

<script src='https://www.thehotelsnetwork.com/js/loader.js?property_id=1155784&account_key=393ECD2FD5784E9E14D71640C378C8AE' async></script>
	</head>
	<body	     	     	     	     	     	     	     	      <?php body_class(); ?>>
		<style>
			@media(max-width:700px) {
				body > iframe {
					display:none!important;
				}
			}

		</style>
		<!--
		<script>
(function(h,o,t,e,l,g,s){h[l]=h[l]||function(){
    (h[l].q=h[l].q||[]).push(arguments)},h[l].l=1*new Date();g=o.createElement(t),
    s=o.getElementsByTagName(t)[0];g.async=1;g.src=e;s.parentNode.insertBefore(g,s)
})(window,document,'script','https://api.greensign.de/widget/greensign.js','gs');

gs("GS00407",{ position : "center-left" });
</script>-->


		<!-- wrapper -->
		<div class="wrapper">
      <?php $icons = get_field('iconsbar', 'option');
      $logo              = get_field('hotellogo', 'option')?>
			<!-- header -->
			<header id='header' class="header clear top" role="banner">

          <div class='icon-bar'>
			            <div class='icon-bar-small'>
						<?php
                            if ($icons) {
                            foreach ($icons as $index => $icon) {?>
									<a href='<?php echo $icon['link']['url']; ?>'>
										<img alt="Sozial Media										                       <?php echo $index + 1; ?>" src='<?php echo $icon['icon']; ?>'/>
									</a>
									<?php
                                        }
                                        }
                                    ?>
						</div>
						<div class='icon-bar-big'>
						<?php if ($logo) {?>
							  <a target='_blank' href='<?php echo get_field('hotellink', 'option')['url'] ?>'><img alt="Weinromantikhotel Logo" src='<?php echo $logo ?>'/></a>
						  <?php }?>
						</div>
					</div>
					<a href="/"  class='icon'>
                          <img src='<?php echo the_field('logo_small', 'option') ?>'/>
					</a>
				  <div class='header-menu-bar' >
					  <?php
                          $booklink = get_field('buchen', 'option');
                          if (function_exists('weglot_get_current_language')) {
                              $booklink = str_replace('/de/', '/' . weglot_get_current_language() . '/', $booklink);
                          }
                      ?>
				  		<a href='/sonderangebote'>ANGEBOTE</a>
						<a href='/zimmer'>ZIMMER</a>
						<a href='/tagen-und-feiern'>FEIERN & TAGEN</a>
						<a href='<?php echo $booklink; ?>'>BUCHEN</a>
						<div id="weglot_here"></div>
						<div style="width:2rem"></div>
						<div id='header-burger'></div>
					</div>

			</header>
			<div id="menu">
			   <div id='header-burger-close'></div>
         		<?php wp_nav_menu(['menu' => 'whr-menu']); ?>
      </div>
			<!-- /header -->


<div class='booking-bar'>
	<?php
        $lang = "de";
        if (function_exists('weglot_get_current_language')) {
            $lang = weglot_get_current_language();
        }
    ?>
	<input type="hidden" id="lang" value="<?php echo $lang; ?>" />

   <div class='booking-calendar'>
         <input type="text" id="start-text-calendar" class="calendar" ></input>
         <div class='start-date-container'>
			<label style="color: white;" for="start-text-calendar" class='label'>Ankunft</label>
			<div id='start-date'></div>
         </div>
         <div>
			<label style="color: white;" for="end-date" class='label'>Abreise</label>
			<div id='end-date'></div>
        </div>
   </div>
   <div class='booking'>
      <label style="color: white;" for="gast" class='gast'>Gäste</label>
	  <select name="gast" id="gast" style="background: #333">
    <?php for ($i = 1; $i < 10; $i++) {?>
        <option<?php if ($i == 2) {echo ' selected="selected"';}?> value="<?php echo $i ?>"><?php echo $i ?></option>
    <?php }?>
</select>
  </div>
  <div class='button-group'>
     <button for="start-text-calendar" class='whr-button' id='find-room'>ZIMMER FINDEN</button>
  </div>
</div>
