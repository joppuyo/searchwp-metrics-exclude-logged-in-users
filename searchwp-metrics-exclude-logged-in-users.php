<?php

/*
 * Plugin name: SearchWP exclude logged in users from metrics
 * Description: Prevent SearchWP from logging searches when logged in eg. in the admin area
 * Author: Johannes Siipola, Jon Christopher
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Version: 1.0.0
 */

function my_searchwp_skip_logged_in_log(
    $log,
    $engine,
    $search_terms,
    $number_of_results
) {
    return !is_user_logged_in();
}

add_filter('searchwp_log_search', 'my_searchwp_skip_logged_in_log', 10, 4);
