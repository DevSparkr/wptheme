<?php
/**
 * Index template
 * 
 * @package wptheme
 */

 get_header();
?>

<div class="bg-slate-50 py-20">
    <div class="container">

        <div class="mb-10 text-center">
            <h1>
                <?php echo esc_html__( "WPTheme Blog", "wptheme" ); ?>
            </h1>
            <p>Stay up to date with our most recent news and updates</p>
            <div class="">
                <?php get_search_form(); ?>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-7">
            <!-- <form method="GET" action="<?php echo esc_url(home_url('/blog/')); ?>">
                <select name="orderby" id="orderby">
                    <option value="DESC"
                        <?php
                            if( isset( $_GET['orderby'] ) ){
                                echo selected($_GET['orderby'], 'DESC'); 
                            }
                        ?> >
                        Newest First
                    </option>
                    <option value="ASC"
                        <?php 
                            if( isset( $_GET['orderby'] ) ){
                                echo selected($_GET['orderby'], 'ASC');
                            }
                        ?> >
                        Oldest First
                    </option>
                    <option value="title"
                        <?php
                            if( isset( $_GET['orderby'] ) ){
                                echo selected($_GET['orderby'], 'title'); 
                            }
                        ?> >
                        Alphabetical
                    </option>
                </select>

                <h4>Categories</h4>
                <?php
                $categories = get_categories(); // Retrieve all categories
                foreach ($categories as $category) {
                    ?>
                    <label>
                        <input type="checkbox" name="category[]" value="<?php echo esc_attr($category->term_id); ?>"
                        <?php checked(
                        (isset($_GET['category']) && in_array($category->term_id, $_GET['category']))
                        ) ?>
                        >
                        <?php echo esc_html($category->name) . '('. $category->count .')'; ?>
                    </label>
                    <br>
                    <?php
                }
                ?>                
                <input type="submit" value="Filter" class="btn btn-primary mt-10">
            </form> -->
            <div class="col-span-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-7">
                    <?php
                    $args = array(
                        'post_type'     => 'post',
                        'posts_per_page'=> -1
                    );
                    // if( isset( $_GET['category'] ) ){
                    //     $cats = $_GET['category'];
                    //     $args['category__in'] = $cats;
                    // }
                    // if( isset( $_GET['orderby'] ) ){
                    //     $args['orderby'] = "date";
                    //     $args['order'] = $_GET['orderby'];
                    // }
                    $loop = new WP_Query( $args );
                        while( $loop -> have_posts() ){
                            $loop -> the_post();

                            get_template_part( "template-parts/postcard" );

                        }
                    ?>
                </div>
                <?php the_posts_pagination( array(
                    'prev_text'     => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"     stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round"   stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
                    'next_text'     => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>'
                ) ); ?>                
            </div>
            <div class="">
                <?php 
                    dynamic_sidebar( 'blog_sidebar' );
                ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>