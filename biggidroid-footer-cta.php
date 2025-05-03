<?php

/**
 * Plugin Name: Biggidroid Footer CTA
 * Plugin URI:  https://biggidroid.com
 * Author:      Biggidroid
 * Author URI:  https://adeleyeayodeji.com
 * Description: This plugin helps you to add a whatsapp cta to your website.
 * Version:     1.0.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: biggidroid-footer-cta
 */

//check for security
if (! defined('ABSPATH')) {
    exit("You are not allowed to access this file directly.");
}

//plugin path
define("BIGGIDROID_CTA_PATH", plugin_dir_path(__FILE__));

//include the core plugin file
require_once BIGGIDROID_CTA_PATH . 'includes/biggidroid-cta-class.php';
