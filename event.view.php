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
            <div href="#"  class="whr-button more more-button"  style="background:#333;font-size:1rem">
                Weitere Infos
            </div>
            <div  href="#"  class="whr-button more less-button"  style="background:#CCC;display:none;font-size:1rem">
                weniger Infos
            </div>
            <?php if (! empty($event['event_link']) && ! empty($event['event_link']['url'])): ?>
                <a href="<?php echo esc_url($event['event_link']['url']); ?>" class="whr-button" style="font-size:1rem">
                    Website öffnen
                </a>
            <?php endif; ?>

            <?php if (! empty($event['book_link']) && ! empty($event['book_link']['url'])): ?>
                <a href="<?php echo esc_url($event['book_link']['url']); ?>" class="whr-button black" style="font-size:1rem">
                    <?php echo esc_html($event['book_link']['title']); ?>
                </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
    const event<?php echo esc_attr($event['id']); ?> = document.getElementById('event-<?php echo esc_attr($event['id']); ?>');
    event<?php echo esc_attr($event['id']); ?>.addEventListener('click', function (e) {
        if (e.target.classList.contains('more')) {
                    e.preventDefault();

            if(event<?php echo esc_attr($event['id']); ?>.classList.contains('expanded')) {
                event<?php echo esc_attr($event['id']); ?>.classList.remove('expanded');
            } else {
                event<?php echo esc_attr($event['id']); ?>.classList.add('expanded');
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