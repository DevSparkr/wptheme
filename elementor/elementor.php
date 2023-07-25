<?php
namespace WPC;

class ElementorLoader {

    private static $_instance = null;

    public static function instance() {
        if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
    }

    public function register_widgets( $widgets_manager ) {

        $widgets = array( 'SecTitle', 'Property', 'RecentPost', 'Slider' );

        foreach( $widgets as $widget ){
            require_once( __DIR__ . "/widgets/$widget.php" );
            $classname = "\\WPC\\Widgets\\$widget";
            \Elementor\Plugin::instance()->widgets_manager->register( new $classname() );
        }

    }


    public function __construct() {
        add_action( 'elementor/init', [ $this, 'init' ] );
        add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );
    }

    public function init( $elements_manager ) {

        \Elementor\Plugin::instance()->elements_manager->add_category(
            'wptheme_element',
            [
                'title'     => esc_html__( "WPTheme's Element", "wptheme" )
            ]
        );

    }

}
ElementorLoader::instance();