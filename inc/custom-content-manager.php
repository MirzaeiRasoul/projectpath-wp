<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function get_custom_content($template_name)
{ ?>

    <div id="primary" <?php astra_primary_class(); ?>>

        <?php astra_primary_content_top(); ?>

        <?php switch ($template_name) {

            case 'single':
                if (is_single()) {
                    get_template_part('template-parts/content', $template_name);
                }
                break;

            default:
                get_template_part('template-parts/content', $template_name);
                break;

        } ?>

        <?php astra_primary_content_bottom(); ?>

    </div> <!-- #primary -->

<?php } ?>