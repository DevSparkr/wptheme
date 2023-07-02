<?php
/**
 * category template
 * 
 * @package wptheme
 */

 get_header();
?>

<div class="bg-slate-50 py-20">
    <div class="container">
        <div class="border-b-2 mb-8 pb-3 max-w-2xl">
            <h3>
                <?php single_cat_title(); ?>
            </h3>
            <p class="font-bold">
                <?php echo current_category_posts() . " Posts"; ?>
            </p>
            <p>
                <?php echo category_description(); ?>
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">
            <?php
                while( have_posts() ){
                    the_post();

                    get_template_part( "template-parts/postcard" );

                }
            ?>
        </div>
        <?php the_posts_pagination( array(
            'prev_text'     => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"     stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round"   stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
            'next_text'     => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>'
        ) ); ?>
    </div>
</div>

<?php get_footer(); ?>