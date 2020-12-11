<?php

/*
 * Plugin name: SearchWP Exclude Logged in Users From Metrics
 * Description: Prevent SearchWP from logging searches when logged in eg. in the admin area
 * Author: Johannes Siipola, Jon Christopher
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Version: 1.1.0
 */

function searchwp_skip_logged_in_log(
    $log,
    $engine,
    $search_terms = null,
    $number_of_results = null
) {
    return !is_user_logged_in();
}

// SearchWP 3
add_filter('searchwp_log_search', 'searchwp_skip_logged_in_log', 10, 4);

// SearchWP 4
add_filter('searchwp\statistics\log', 'searchwp_skip_logged_in_log', 10, 2);
