<?php
namespace WPC\Widgets;
use Elementor\WP_Query;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
if( ! defined( 'ABSPATH' ) ){
    exit;
}

class SecTitle extends \Elementor\Widget_Base{

    public function get_name() {
		return 'sec-title';
	}

    public function get_title() {
		return esc_html__( 'Section Title', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-heading';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'heading', 'sec-title', 'wptheme', 'title' ];
	}

    protected function register_controls() {
        $this->start_controls_section(
			'content',
			[
				'label' => esc_html__( 'Content', 'wptheme' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				]
			]
		);
        $this->add_control(
			'sec_title',
			[
				'label' => esc_html__( 'Title', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Awesome title', 'wptheme' ),
				'placeholder' => esc_html__( 'Type your title here', 'wptheme' ),
			]
		);
        $this->add_control(
            'sec_desc',
            [
                'label' => esc_html__( 'Description', 'wptheme' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>
            <div class="">
                <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <h3><?php echo $settings['sec_title']; ?></h3>
                <p><?php echo $settings['sec_desc']; ?></p>
            </div>
        <?php

    }

}