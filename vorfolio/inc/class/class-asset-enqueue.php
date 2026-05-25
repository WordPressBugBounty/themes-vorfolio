<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package vorfolio
 */
namespace Vorfolio;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package vorfolio
 */
class Asset_Enqueue {
	/**
	 * Class constructor.
	 */
	public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 20 );
		add_action( 'enqueue_block_assets', array( $this, 'enqueue_scripts' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ), 20 );
	}

    /**
	 * Enqueue scripts and styles.
	 */
	public function enqueue_scripts() {
		wp_register_style(
			'vorfolio-style',
			get_stylesheet_uri(),
			array(),
			VORFOLIO_VERSION
		);

		wp_style_add_data( 'vorfolio-style', 'path', VORFOLIO_DIR );
		
		wp_enqueue_style( 'vorfolio-style' );

				wp_register_style( 'vorfolio-preset-styling', trailingslashit( get_template_directory_uri() ) . 'assets/css/vorfolio-preset-styling.css', array(), VORFOLIO_VERSION );
		if ( file_exists( trailingslashit( get_template_directory() ) . 'assets/css/vorfolio-preset-styling.css' ) && filesize( trailingslashit( get_template_directory() ) . 'assets/css/vorfolio-preset-styling.css' ) < 51200 ) {
			wp_style_add_data( 'vorfolio-preset-styling', 'path', trailingslashit( get_template_directory() ) . 'assets/css/vorfolio-preset-styling.css' );
		}
		wp_enqueue_style( 'vorfolio-preset-styling' );
		wp_register_script( 'animation-script', trailingslashit( get_template_directory_uri() ) . 'assets/js/animation-script.js', array(), VORFOLIO_VERSION, true );
		wp_enqueue_script( 'animation-script' );
		wp_register_style( 'backend-style', trailingslashit( get_template_directory_uri() ) . 'assets/css/backend-style.css', array(), VORFOLIO_VERSION );
		if ( file_exists( trailingslashit( get_template_directory() ) . 'assets/css/backend-style.css' ) && filesize( trailingslashit( get_template_directory() ) . 'assets/css/backend-style.css' ) < 51200 ) {
			wp_style_add_data( 'backend-style', 'path', trailingslashit( get_template_directory() ) . 'assets/css/backend-style.css' );
		}
		wp_enqueue_style( 'backend-style' );
		wp_register_style( 'custom-styling', trailingslashit( get_template_directory_uri() ) . 'assets/css/custom-styling.css', array(), VORFOLIO_VERSION );
		if ( file_exists( trailingslashit( get_template_directory() ) . 'assets/css/custom-styling.css' ) && filesize( trailingslashit( get_template_directory() ) . 'assets/css/custom-styling.css' ) < 51200 ) {
			wp_style_add_data( 'custom-styling', 'path', trailingslashit( get_template_directory() ) . 'assets/css/custom-styling.css' );
		}
		wp_enqueue_style( 'custom-styling' );


        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
    }

	/**
	 * Enqueue admin scripts and styles.
	 */
	public function admin_scripts() {
		
    }
}
