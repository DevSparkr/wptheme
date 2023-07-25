<?php

class PopularPost extends WP_Widget{

public function __construct(){
    parent::__construct(
        'popularpost',
        __("Popular Post", 'wptheme')
    );
}

public function widget( $args, $instance ) {


    echo $args['before_widget'];
        echo $args['before_title'];
            echo $instance['title'];
        echo $args['after_title'];
            
        $pp = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page'    => $instance['number'],
            'meta_key' => 'wpb_post_views_count',
            'category_name' => $instance['cat'],
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        ));
        while( $pp->have_posts(  ) ){
            $pp->the_post();
            ?>
            <div class="">
                <?php the_post_thumbnail( 'thumbnail' ); ?>
                <h5>
                    <a href=""><?php the_title(); ?></a>
                </h5>
            </div>
            
            <?php
        }

    echo $args['after_widget'];
}

public function form( $instance ) {

    $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'wptheme' );
    $number = ! empty( $instance['number'] ) ? $instance['number'] : esc_html__( '3', 'wptheme' );
    $cat = ! empty( $instance['cat'] ) ? $instance['cat'] : '';

    ?>
    <p>
        <label for="title">
            Title
        </label>
        <input value="<?php echo $title; ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" placeholder="Enter widget title" id="<?php echo $this->get_field_id( 'title' ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'number' ); ?>">
            Number of posts to display
        </label>
        <input value="<?php echo $number; ?>" name="<?php echo $this->get_field_name('number'); ?>" type="number" placeholder="Enter widget title" id="<?php echo $this->get_field_id( 'number' ); ?>" min="3" max="10">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'number' ); ?>">
            Display/Filter by category, use comma to seperate multiple categories.
        </label>
        <input value="<?php echo $cat; ?>" name="<?php echo $this->get_field_name('cat'); ?>" type="text" placeholder="Enter widget title" id="<?php echo $this->get_field_id( 'cat' ); ?>">
    </p>
    <?php
}

public function update( $new_instance, $old_instance ){
    $instance = array();

    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['number'] = ( ! empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';
    $instance['cat'] = ( ! empty( $new_instance['cat'] ) ) ? strip_tags( $new_instance['cat'] ) : '';

    return $instance;
}


}
add_action( 'widgets_init', function() {
    register_widget( 'PopularPost' );
});








function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');
