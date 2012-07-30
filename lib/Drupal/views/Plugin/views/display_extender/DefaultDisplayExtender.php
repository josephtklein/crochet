<?php

namespace Drupal\views\Plugin\views\display_extender\DefaultDisplayExtender;

use Drupal\Core\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 * @Plugin(
 *   plugin_id = "default",
 *   title = @Translation("Empty display extender"),
 *   help = @Translation("Default settings for this view."),
 *   enabled = FALSE,
 *   no_ui = TRUE
 * )
 */
class DefaultDisplayExtender extends DisplayExtenderPluginBase {
}
