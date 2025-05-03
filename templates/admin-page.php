<?php

//check for security
if (! defined('ABSPATH')) {
    exit("You are not allowed to access this file directly.");
}
?>
<div class="wrap">
    <h2>WhatsApp CTA Settings</h2>
    <form method="post" action="options.php">
        <?php
        settings_fields('wcta-settings-group');
        ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Phone Number</th>
                <td><input type="text" name="wcta_phone_number" value="<?php echo esc_attr(get_option('wcta_phone_number', "")); ?>" placeholder="e.g. 2348012345678" style="width: 300px;" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">Button Color</th>
                <td><input type="color" name="wcta_button_color" value="<?php echo esc_attr(get_option('wcta_button_color', '#25D366')); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">Position</th>
                <td>
                    <select name="wcta_button_position">
                        <option value="right" <?php selected(get_option('wcta_button_position'), 'right'); ?>>Right</option>
                        <option value="left" <?php selected(get_option('wcta_button_position'), 'left'); ?>>Left</option>
                    </select>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>