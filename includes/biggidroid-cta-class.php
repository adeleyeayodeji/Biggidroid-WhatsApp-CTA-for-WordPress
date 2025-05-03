<?php

//check for security
if (! defined('ABSPATH')) {
    exit("You are not allowed to access this file directly.");
}

/**
 * BiggidroidCTA
 * 
 */
class BiggidroidCTA
{

    /**
     * Init
     * 
     */
    static function init()
    {
        //add wp footer
        add_action("wp_footer", [self::class, 'displayWhatsappCTA']);
        //add admin menu action hook
        add_action("admin_menu", [self::class, 'whatsappCTAAdmin']);
        //admin init hook
        add_action("admin_init", [self::class, 'registerWhatsAppCTASettings']);
    }

    /**
     * registerWhatsAppCTASettings
     * 
     * 
     */
    static function registerWhatsAppCTASettings()
    {
        //register option fields and also getting the input fields
        register_setting('wcta-settings-group', 'wcta_phone_number', [
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        register_setting('wcta-settings-group', 'wcta_button_color', [
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        register_setting('wcta-settings-group', 'wcta_button_position', [
            'sanitize_callback' => 'sanitize_text_field',
        ]);
    }


    /**
     * whatsappCTAAdmin
     * 
     */
    static function whatsappCTAAdmin()
    {
        add_menu_page(
            'WhatsApp CTA Settings',
            'WhatsApp CTA',
            'manage_options',
            'wcta-settings',
            [self::class, 'whatsappCTAAdminTemplate'],
            'dashicons-whatsapp',
            5
        );
    }

    /**
     * whatsappCTAAdminTemplate
     * 
     */
    static function whatsappCTAAdminTemplate()
    {
        ob_start();
        require_once BIGGIDROID_CTA_PATH . 'templates/admin-page.php';
        echo ob_get_clean();
    }


    /**
     * displayWhatsappCTA
     * 
     */
    static function displayWhatsappCTA()
    {
        ob_start();
        //require the template
        require_once BIGGIDROID_CTA_PATH . 'templates/cta.php';
        //display template content
        echo ob_get_clean();
    }
}

//init 
BiggidroidCTA::init();
