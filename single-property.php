<?php
/**
 * Single page template
 * 
 * @package wptheme
 */
get_header(); ?>

<div class="py-14">
    <div class="container">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <div class="overflow-hidden">

                <?php get_template_part( 'template-parts/property-gallery' ); ?>

            </div>

            <div class="">
                <h2 class="mb-3">
                    <?php the_title(); ?>
                </h2>
                <?php 
                if( get_field( 'location_name' ) ){
                ?>
                <a target="_blank" href="<?php the_field( 'location_link' ) ?>" class="mb-2 flex items-center gap-2 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                    </svg>
                    <span class="underline">
                        <?php the_field( 'location_name' ); ?>
                    </span>
                </a>
                <?php } ?>
                
                <?php get_template_part( 'template-parts/porperty-features' ); ?>

                <?php 
                if( get_field( 'porperty_price' ) ){
                ?>
                <div class="my-4 price text-3xl font-semibold">
                    Price: <span class="text-primary">
                        $<?php the_field( 'porperty_price' ); ?>
                    </span>
                </div>
                <?php 
                        }
                    ?>
                <div class="">
                    <?php the_content(); ?>
                </div>
                <div class="mt-10">
                    <?php get_template_part( 'template-parts/property-info-table' ); ?>
                </div>
            </div>

        </div>
    </div>
</div>



<?php get_footer(); ?>