<div class="">
    <div class="relative">
        <div class="absolute h-1/2 bottom-0 left-0 w-full z-10 bg-gradient-to-t from-black/70 to-transparent"></div>
        <?php 
            the_post_thumbnail( 'postcard' );
        ?>
        <div class="z-10 p-4 w-full absolute bottom-0 left-0 flex justify-between items-center">
            <div class="flex gap-2 items-end">
                <img class="border-2 border-white w-12 h-12 rounded-full" src="https://sample.realhomes.io/demo05/wp-content/uploads/sites/9/2020/05/agent-male-1-1-210x210.jpg" alt="">
                <div class="text-white">
                    <h6>Nathan James</h6>
                    <p class="leading-zero">James Estate Agents</p>
                </div>
            </div>
            <?php
                $cats = get_the_terms( $post->ID, 'property-type' );
                foreach( $cats as $cat ){
                    ?>
                    <div class="px-3 py-0.5 rounded bg-primary text-white text-sm">
                        <?php echo "For " .$cat->name; ?>
                    </div>
                    <?php
                }
            ?>
            
        </div>
    </div>
    <div class="p-4 bg-gray-100">
        <h4 class="mb-2">
            <a href="<?php the_permalink( ); ?>">
                <?php the_title(); ?>
            </a>
        </h4>
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
        <div class="mb-2 date text-sm">
            Added: <?php echo get_the_date(); ?>
        </div>
        <div class="flex items-center justify-between">
            <div class="price text-3xl font-semibold text-primary">
                $<?php the_field( 'porperty_price' ); ?>
            </div>
            <div class="pc-featured">
                <?php get_template_part( 'template-parts/porperty-features' ); ?>
            </div>
        </div>
    </div>
</div>