<?php
/**
 * Theme Functions
 *
 * @author Jegstudio
 * @package vorfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'VORFOLIO_VERSION' ) || define( 'VORFOLIO_VERSION', '1.1.0' );
defined( 'VORFOLIO_DIR' ) || define( 'VORFOLIO_DIR', trailingslashit( get_template_directory() ) );

defined( 'GUTENVERSE_COMPANION_REQUIRED_VERSION' ) || define( 'GUTENVERSE_COMPANION_REQUIRED_VERSION', '2.4.0' );
defined( 'GUTENVERSE_LIBRARY_SERVER' ) || define( 'GUTENVERSE_LIBRARY_SERVER', 'https://gutenverse.com' );

require get_parent_theme_file_path( 'inc/autoload.php' );

Vorfolio\Init::instance();
