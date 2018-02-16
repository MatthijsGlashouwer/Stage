<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       matthijsglashouwer@hotmail.com
 * @since      1.0.0
 *
 * @package    Matthijs_Zwf
 * @subpackage Matthijs_Zwf/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="cleanup_options" action="options.php">

        <!-- remove some meta and generators from the <head> -->
        <fieldset>
            <legend class="screen-reader-text"><span>Put logo in footer</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-cleanup">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-cleanup" name="<?php echo $this->plugin_name; ?> [cleanup]" value="1"/>
                <span><?php esc_attr_e('Put logo at the right side', $this->plugin_name); ?></span>
            </label>
        </fieldset>

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>