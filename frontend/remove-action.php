<?php


add_action( 'init', 'ac_remove_yoast' );

function ac_remove_yoast()
{

    if (isset($_COOKIE['ac_remove_yoast'])) {
        //remove_all_actions('wp_head');
        remove_filters_for_anonymous_class('wp_head', 'Yoast_GA_Universal', 'tracking', 8);
    }
}


