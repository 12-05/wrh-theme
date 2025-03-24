<?php

class WHREvent
{
    public function __construct()
    {
        add_action('init', [$this, 'register_post_type']);
        add_action('acf/init', [$this, 'register_fields']);
        add_filter('use_block_editor_for_post_type', [$this, 'disable_gutenberg'], 10, 2);
        add_action('init', function () {
            add_theme_support('post-thumbnails');
        });

    }

    public function register_post_type()
    {
        register_post_type('event', [
            'labels'       => [
                'name'               => __('Events'),
                'singular_name'      => __('Event'),
                'add_new'            => __('Add New'),
                'add_new_item'       => __('Add New Event'),
                'edit_item'          => __('Edit Event'),
                'new_item'           => __('New Event'),
                'view_item'          => __('View Event'),
                'search_items'       => __('Search Events'),
                'not_found'          => __('No events found'),
                'not_found_in_trash' => __('No events found in Trash'),
                'parent_item_colon'  => '',
            ],
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => ['slug' => 'veranstaltungen'],
            'supports'     => ['title', 'editor', 'thumbnail'],
            'menu_icon'    => 'dashicons-calendar-alt',
            'show_in_rest' => true,
            'rest_base'    => 'events',
        ]);
    }

    public function register_fields()
    {
        acf_add_local_field_group([
            'key'                   => 'group_5f6d7a5ssssb4d0a7',
            'title'                 => 'Einstellungen',
            'fields'                => [
                [
                    'key'               => 'field_5f6d7a5b4d0ssdd',
                    'label'             => 'Startdatum',
                    'name'              => 'start',
                    'type'              => 'date_time_picker',
                    'instructions'      => '',
                    'display_format'    => 'd.m.Y H:i',
                    'return_format'     => 'd.m.Y H:i',

                    'required'          => 1,
                    'conditional_logic' => 0,
                    'wrapper'           => [
                        'width' => '50%',
                        'class' => '',
                        'id'    => '',
                    ],
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ],
                [
                    'key'               => 'field_5f6d7a5b4d0ssdd222',
                    'label'             => 'Enddatum',
                    'name'              => 'end',
                    'type'              => 'date_time_picker',
                    'return_format'     => 'd.m.Y H:i',
                    'instructions'      => '',
                    'conditional_logic' => 0,
                    'display_format'    => 'd.m.Y H:i',
                    'wrapper'           => [
                        'width' => '50%',
                        'class' => '',
                        'id'    => '',
                    ],
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => '',
                ],
                [
                    'key'               => 'field_609e1231238f9c4fc8a',
                    'label'             => 'Link',
                    'name'              => 'event_link',
                    'type'              => 'link',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => [
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ],
                ],
                [
                    'key'               => 'field_609e123238123f9c4fc8axxx',
                    'label'             => 'Buchungslink',
                    'name'              => 'book_link',
                    'type'              => 'link',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => [
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ],
                    'return_format'     => 'url',
                    'preview_size'      => 'medium',
                    'library'           => 'all',
                    'min_width'         => '',
                    'min_height'        => '',
                    'min_size'          => '',
                    'max_width'         => '',
                    'max_height'        => '',
                    'max_size'          => '',
                    'mime_types'        => '',
                ],
            ],
            'location'              => [
                [
                    [
                        'param'    => 'post_type',
                        'operator' => '==',
                        'value'    => 'event',
                    ],
                ],
            ],
            'menu_order'            => 0,
            'position'              => 'normal',
            'style'                 => 'default',
            'label_placement'       => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen'        => '',
            'active'                => true,
            'description'           => '',
        ]);
    }

    public function disable_gutenberg($use, $post_type)
    {
        if ($post_type === 'event') {
            return false;
        }

        return $use;
    }

    public static function load($id)
    {
        return [
            'id'          => $id,
            'title'       => get_the_title($id),
            'description' => wpautop(get_the_content(null, false, $id)),
            'start'       => get_field('start', $id),
            'end'         => get_field('end', $id),
            'thumbnail'   => get_the_post_thumbnail_url($id, 'full'),
            'book_link'   => get_field('book_link', $id),
            'event_link'  => get_field('event_link', $id),
        ];
    }
}

$init = new WHREvent();
