<?php
/**
 * Plugin Name:       Show Project
 * Plugin URI:        https://project-showcase.tech/
 * Description:       Display project showcase
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rasel Mahmud
 * Author URI:        https://rasel-portfolio.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       show-project
 * Domain Path:       /languages
 */

// Theme Options
require_once __DIR__ . '/admin-options.php';

// Project
require_once __DIR__ . '/post-types/projects.php';

require_once __DIR__ . '/meta-box.php';

require_once __DIR__ . '/taxonomy/projects.php';

require_once __DIR__ . '/functions.php';
