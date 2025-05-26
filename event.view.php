<div class="event" id="event-<?php echo esc_attr($event['id']); ?>">
<div class="event-image-container">

    <?php if (! empty($event['thumbnail'])): ?>
        <img class="event-image" src="<?php echo esc_url($event['thumbnail']); ?>" alt="<?php echo esc_attr($event['title']); ?>" />
    <?php endif; ?>
    </div>


    <div class="event-content">
        <h2 class="event-title"><?php echo esc_html($event['title']); ?></h2>
        <?php if (! empty($event['start'])): ?>
        <div class="event-dates" style="opacity:0.5;margin-bottom:1rem">
            <span class="event-date"><?php echo esc_html($event['start']); ?></span>
            <?php if (! empty($event['end'])): ?>
                <span class="event-date-separator"> - </span>
                <span class="event-date"><?php echo esc_html($event['end']); ?></span>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if (! empty($event['description'])): ?>
        <div class="event-description" style="display:none"><?php echo wp_kses_post($event['description'],"post"); ?></div>
        <?php endif; ?>

        <?php if (! empty($event['event_link']) || ! empty($event['book_link'])): ?>
        <div class="event-actions">
            <div href="#"  class="whr-button more more-button"  style="background:#333">
                Weitere Infos
            </div>
            <div  href="#"  class="whr-button more less-button"  style="background:#CCC;display:none">
                weniger Infos
            </div>
            <?php if (! empty($event['event_link']) && ! empty($event['event_link']['url'])): ?>
                <a href="<?php echo esc_url($event['event_link']['url']); ?>" class="whr-button">
                    <?php echo esc_html($event['event_link']['title']); ?>
                </a>
            <?php endif; ?>

            <?php if (! empty($event['book_link']) && ! empty($event['book_link']['url'])): ?>
                <a href="<?php echo esc_url($event['book_link']['url']); ?>" class="whr-button black">
                    <?php echo esc_html($event['book_link']['title']); ?>
                </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
    const event = document.getElementById('event-<?php echo esc_attr($event['id']); ?>');
    event.addEventListener('click', function (e) {
        e.preventDefault();
        if (e.target.classList.contains('more')) {
            if(event.classList.contains('expanded')) {
                event.classList.remove('expanded');
            } else {
                event.classList.add('expanded');
            }
        } 
    });

</script>

<style>

    .event.expanded .event-description {
        display:block!important;
    }

    .event.expanded .more-button {
        display:none!important;
    }

     .event.expanded .less-button {
        display:block!important;
    }



   
</style>