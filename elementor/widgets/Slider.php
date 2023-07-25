<?php
namespace WPC\Widgets;

use Elementor\WP_Query;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
if( ! defined( 'ABSPATH' ) ){
    exit;
}


class Slider extends \Elementor\Widget_Base{

    public function get_name() {
		return 'slider';
	}

    public function get_title() {
		return esc_html__( 'WPTheme Slider', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-post-slider';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'slider', 'hero', 'banner', 'wptheme' ];
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
            'slider',
            [
                'label' => esc_html__( 'Slider', 'wptheme' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields'    => [
                    [
                        'name'      => 'slide_title',
                        'label'      => esc_html__( 'Slide Title', 'wptheme' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default'   => esc_html__( 'Slide Title', 'wptheme' )
                    ],
                    [
                        'name'      => 'slide_content',
                        'label'      => esc_html__( 'Slide Content', 'wptheme' ),
                        'type' => \Elementor\Controls_Manager::WYSIWYG
                    ],
                    [
                        'name'      => 'btn_text',
                        'label'      => esc_html__( 'Button Text', 'wptheme' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default'   => esc_html__( 'Explore us', 'wptheme' )
                    ],
                    [
                        'name'      => 'btn_link',
                        'label'      => esc_html__( 'Button Link', 'wptheme' ),
                        'type' => \Elementor\Controls_Manager::URL
                    ],
                    [
                        'name'      => 'bg_image',
                        'label'      => esc_html__( 'Background Image', 'wptheme' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                ],
                'default'   => [
                    [
                        'slide_title'      => esc_html__( 'Slide title one', 'wptheme' ),
                        'slide_content'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien.', 'wptheme' ),
                        'btn_text'      => esc_html__( 'Explore us', 'wptheme' ),
                        'btn_url'      => esc_html__( '#', 'wptheme' ),
                    ],
                    [
                        'slide_title'      => esc_html__( 'Slide title two', 'wptheme' ),
                        'slide_content'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien.', 'wptheme' ),
                        'btn_text'      => esc_html__( 'Explore us', 'wptheme' ),
                        'btn_url'      => esc_html__( '#', 'wptheme' ),
                    ]
                ],
                'title_field'   => '{{{slide_title}}}'
            ]
        );
        
        
        
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        
        if( $settings['slider'] ){
            ?>
            <div class="hero-slider">
            <?php
            foreach( $settings['slider'] as $slide ){
        ?>
            <div class="relative py-32 z-10">
                <?php 
                    $id = $slide['bg_image']['id'];
                    $url = $slide['bg_image']['url'];
                    if( $id ){
                        echo wp_get_attachment_image( $id, 'full', false, array( 'class' => 'absolute left-0 top-0 w-full !h-full -z-10 object-cover' ) );
                    }else{
                        echo '<img class="absolute left-0 top-0 w-full !h-full -z-20 object-cover" src="'.$url.'">';
                    }
                ?>
                <div class="bg-black/50 top-0 left-0 w-full h-full -z-10 absolute"></div>
                <div class="container">
                    <div class="max-w-3xl mx-auto text-center">
                        <h1 class="text-white mb-8"><?php echo $slide['slide_title']; ?></h1>
                        <div class="text-white"><?php echo $slide['slide_content']; ?></div>

                        <?php if( $slide['btn_text'] ){ ?>
                        <div class="">
                            <a class="btn btn-primary mt-5" href="<?php echo $slide['btn_url']; ?>">
                                <?php echo $slide['btn_text']; ?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            
        <?php
            }
            ?>
            </div>

            <script>
                jQuery(document).ready(function($){
                    $('.hero-slider').slick({
                        arrows: false
                    });
                });
            </script>

            <?php
        }
    }

}