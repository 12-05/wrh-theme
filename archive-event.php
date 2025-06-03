<div class='pageheader' style='background-image:url("https://www.weinromantikhotel.com/wp-content/uploads/2023/05/RH_von-oben_20210728_P4P_0039_4000px-scaled.jpg")'>
  <div class='pageheader-content'>
    <h1>Veranstaltungen</h1>
  </div>
</div>
<div  style="max-width:800px;margin:0 auto;padding-top:100px;padding-bottom:100px;">

<?php
    get_header();
    $eventData = [];
    $date_now  = date('Y-m-d H:i:s');
    $time_now  = strtotime($date_now);

    $events = get_posts([
        'post_type'      => 'event',
        'posts_per_page' => -1,
        'orderby'        => 'meta_value_num',
        'meta_key'       => 'start',
        'order'          => 'ASC',
        'meta_query'     => [
            'relation' => 'OR',
            [
                // Events with end date that hasn't passed yet
                'relation' => 'AND',
                [
                    'key'     => 'end',
                    'compare' => 'EXISTS',
                ],
                [
                    'key'     => 'end',
                    'compare' => '!=',
                    'value'   => '',
                ],
                [
                    'key'     => 'end',
                    'compare' => '>=',
                    'value'   => $time_now,
                ],
            ],
            [
                // Events without end date but start date in future
                'relation' => 'AND',
                [
                    'key'     => 'start',
                    'compare' => '>=',
                    'value'   => $time_now,
                ],
                [
                    'relation' => 'OR',
                    [
                        'key'     => 'end',
                        'compare' => 'NOT EXISTS',
                    ],
                    [
                        'key'     => 'end',
                        'compare' => '=',
                        'value'   => '',
                    ],
                ],
            ],
        ],
    ]);

    foreach ($events as $event) {
        $year                       = date('Y', $event->start);
        $month                      = date('m', $event->start);
        $eventData[$year][$month][] = WHREvent::load($event->ID);
    }

    $monthLabels = [
        "01" => 'Januar',
        "02" => 'Februar',
        "03" => 'März',
        "04" => 'April',
        "05" => 'Mai',
        "06" => 'Juni',
        "07" => 'Juli',
        "08" => 'August',
        "09" => 'September',
        "10" => 'Oktober',
        "11" => 'November',
        "12" => 'Dezember',
    ];

    // Sort years and months properly
    ksort($eventData); // Sort years ascending
    foreach ($eventData as $year => $months) {
        ksort($eventData[$year]); // Sort months ascending within each year
    }

    foreach ($eventData as $year => $months) {
        foreach ($months as $month => $events) {
            echo '<h3>' . $monthLabels[$month] . ' / ' . $year . '</h3>';
            foreach ($events as $event) {
                include 'event.view.php';
            }
        }
    }
?>
</div>
</div>
<style>
    .event {
        display:grid;
        grid-template-columns: 1fr 2fr;
        grid-gap:2rem;
        background: #EBEBEB;
        margin-bottom:1rem;
        padding:2rem;
    }

    .event-image {
        width:100%;
        height:1px;
        object-fit:cover;
        height:300px;
    }

    .event-title {
        font-size:1.7rem;
        font-weight:bold;
        margin:0;
        line-height:1.3;
    }

    .event-actions {
        display:flex;
        gap: 1rem;
    }

    .event-actions a {
        font-size:1rem;
    }

    .whr-button.black {
        background: #333;
        color:white;
    }

    .event-content p {
        margin-bottom:1rem;
    }

</style>
<?php
get_footer();