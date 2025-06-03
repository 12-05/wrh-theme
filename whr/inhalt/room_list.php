<?php 
$rooms = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'		=> 'room'
));
$types=get_field_object('field_6098fca180deb');

?>

<div class='row-small room-list'>
<?php foreach( $types['choices'] as $key => $value){?>
<h1><?php echo $value?></h1>
  <div class='room-list-page'>
  <?php foreach($rooms as $room){
        if($key==get_field('type',$room)){
    ?>
    <a href='<?php echo the_permalink($room->ID)?>' class='room-container'>
      <div class='room-image' >
        <img src='<?php  echo get_field('image',$room)?>'  alt='<?php  echo get_field('post_content',$room)?>'/>
      </div>
      <div class='room-info'>
        <h3><?php echo get_field('title',$room)?></h3>
        <div class='excerpt'><?php echo get_field('excerpt',$room)?></div>
        <div style='display:flex;justify-content:space-between;margin-top: 36px;'>
          <p class='price'><?php echo 'ab € '.get_field('price',$room).',00 pro Zimmer'?></p>
          <div class='more'>WEITERLESEN</div>
        </div>
      </div>
    </a>
  <?php } }?>
  </div>
  <?php }?>
</div>

<script>
jQuery(document).ready(function ($) {
        ScrollReveal().reveal(".room-list h1", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
	});
        ScrollReveal().reveal('.room-container', { origin: "bottom",distance: "20px",delay: 200,interval: 200 });
})
</script>