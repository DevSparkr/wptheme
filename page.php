<?php
/**
 * Page template
 * 
 * @package wptheme
 */
get_header();
?>

<div class="bg-slate-50 py-20">
    <div class="container">
        <?php 
            while( have_posts() ){
                the_post();
                ?>
                    <h1 class="mb-4">
                        <?php the_title(); ?>
                    </h1>
                    <div class="prose max-w-full">
                        <?php the_content(); ?>
                    </div>
                <?php
            }
        ?>
    </div>
</div>


<?php get_footer(); ?>