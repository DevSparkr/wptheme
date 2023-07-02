<?php
/**
 * Single page template
 * 
 * @package wptheme
 */
get_header(); ?>

<div class="py-20">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php
            if( has_post_thumbnail( ) ){
                ?>
                <div class="mt-8">
                    <?php the_post_thumbnail( 'post-thumbnail' ); ?>
                </div>
                <?php
            }
        ?>
        <div class="max-w-4xl mx-auto prose w-full mt-8">
            <?php the_content(); ?>
            <?php the_tags( 'Tags:- ', ' / ' ); ?>
            <?php
                if( ! post_password_required() ){
                    comments_template();
                }
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>