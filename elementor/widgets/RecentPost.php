<?php
namespace WPC\Widgets;

use Elementor\WP_Query;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
if( ! defined( 'ABSPATH' ) ){
    exit;
}


class RecentPost extends \Elementor\Widget_Base{

    public function get_name() {
		return 'recent-post';
	}

    public function get_title() {
		return esc_html__( 'Recent Posts', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-flip-box';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'post', 'wptheme' ];
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
			'number',
			[
				'label' => esc_html__( 'Number of posts to display', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 3,
				'max' => 9,
				'step' => 3,
				'default' => 3,
			]
		);
        $this->add_control(
			'all_post_link',
			[
				'label' => esc_html__( 'See all post link', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::URL,
				'label_block' => true,
			]
		);
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $property = new \WP_Query(array(
            'post_type' => 'post',
            'posts_per_page'    => $settings['number'],
        ));

        ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">
                <?php
                    while( $property->have_posts(  ) ){
                        $property->the_post();
                        get_template_part( "template-parts/postcard" );
                    }
                ?>
            </div>
            <?php
            if ( ! empty( $settings['all_post_link']['url'] ) ) {
            ?>
            <div class="mt-10 text-center">
                <a href="<?php echo $settings['all_post_link']['url']; ?>" class="btn btn-primary">
                    <?php echo esc_html( 'See all posts', 'wptheme' ); ?>
                </a>
            </div>
            <?php } ?>
        <?php

    }

}