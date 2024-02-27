<?php
/**
 * Plugin Name: Yoast SEO - Duplicate Meta Description Remove
 * Plugin URI: https://www.freelancer.com/u/csehabiburr183
 * Description: This plugin removes the Yoast SEO meta description tag. Install & Enjoy.
 * Version: 1.2.0
 * Requires at least: 5.3
 * Requires PHP:      7.2
 * Author: Adnan Habib
 * Author URI: https://www.youtube.com/@adnanhabib
 * License: GPL2
 * Text Domain: YseoMetaRemover
 */

// Remove Yoast SEO meta description tag.
function remove_yoast_seo_meta_description($str) {
    return '';
}
add_filter('wpseo_metadesc', 'remove_yoast_seo_meta_description', 10, 1);


// Hire me
function add_custom_plugin_action_link($actions, $plugin_file) {
    if ('yoast-meta-remover/yoast-dup-meta-desc-remover.php' === $plugin_file) {
        $custom_link = '<a href="https://www.freelancer.com/u/csehabiburr183" target="_blank">Hire Plugin Developer</a>';

        $actions = array_merge(array('hire_developer' => $custom_link), $actions);
    }
    return $actions;
}
add_filter('plugin_action_links_yoast-meta-remover/yoast-dup-meta-desc-remover.php', 'add_custom_plugin_action_link', 10, 2);