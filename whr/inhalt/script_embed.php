<?php
if (!empty($block['script_tag'])) {
    $script = $block['script_tag'];

    if (function_exists('weglot_get_current_language')) {
        $lang = weglot_get_current_language();
        $script = str_replace('-en.', '-' . $lang . '.', $script);
    }

    echo $script;
}
