<?php 
/**
 * Template Name: Homepage
 */
get_header();
?>

<div class="relative text-center">
    <img src="<?php header_image(); ?>" alt="image" class="absolute top-0 left-0 w-full h-full object-cover">
    <div class="bg-slate-800/60 relative py-40 z-10 text-white">
        <div class="container">
            <h1 class="mb-10">
                <?php bloginfo( 'title' ); ?>
            </h1>
            <p class="text-xl"><?php bloginfo( 'description' ); ?></p>
            <a href="<?php echo home_url('/about-us'); ?>" class="btn btn-primary mt-10">
                Explore our servics
            </a>
        </div>
    </div>
</div>

<div class="bg-slate-50 pt-20">
    <div class="container">
        <h2 class="mb-5">
            <?php echo esc_html__( 'Popular Categories', 'wptheme' ); ?>
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-5">
            <?php 
                $cats = get_categories([
                    'orderby'   => 'count',
                    'order'     => 'DESC'
                ]);
                foreach( $cats as $cat ){
                    ?>
                        <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                            class="text-xl text-white bg-slate-700 px-5 py-10 text-center rounded-xl font-bold">
                            <span class="block font-normal text-sm">
                                <?php 
                                    echo $cat->count;
                                    echo esc_html__( " Posts", 'wptheme' );
                                ?>
                            </span>
                            <?php echo $cat->name; ?>
                        </a>
                    <?php
                }
            ?>
        </div>
    </div>
</div>

<div class="bg-slate-50 py-20">
    <div class="container">
        <h2 class="mb-5">
            <?php echo esc_html__( 'Our Propertis', 'wptheme' ); ?>
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">
            <?php
                $properties = new WP_Query(array(
                    'post_type'     => 'property',
                    'posts_per_page'=> 3
                ));
                
                while( $properties->have_posts() ){
                    $properties->the_post();

                    get_template_part( 'template-parts/property-card' );

                }
                wp_reset_postdata();
            ?>
        </div>
        <div class="mt-10 text-center">
            <a href="<?php echo home_url('/poerperties'); ?>" class="btn btn-primary">
                <?php echo esc_html__( 'See all porperties', 'wptheme' ); ?>
            </a>
        </div>
    </div>
</div>

<div class="bg-slate-50 py-20">
    <div class="container">
        <h2 class="mb-5">
            <?php echo esc_html__( 'Latest Posts', 'wptheme' ); ?>
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">
            <?php
                $recent_post = new WP_Query(array(
                    'post_type'     => 'post',
                    'posts_per_page'=> 3
                ));
                
                while( $recent_post->have_posts() ){
                    $recent_post->the_post();

                    get_template_part( "template-parts/postcard" );

                }
                wp_reset_postdata();
            ?>
        </div>
        <div class="mt-10 text-center">
            <a href="<?php echo home_url('/'); ?>blog" class="btn btn-primary">
                <?php echo esc_html__( 'See all posts', 'wptheme' ); ?>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>