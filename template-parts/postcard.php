<div class="bg-gray-200 p-4 rounded-lg hover:shadow-xl hover:bg-white transition-all duration-300">
    <?php
        the_post_thumbnail( 'medium', array(
            'class' => 'mb-3 rounded-md w-full',
        ) );
    ?>
    <div class="flex items-center gap-3 capitalize text-gray-600">
        <div class="flex gap-1 items-center">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <?php echo get_the_author_link(); ?>
        </div>
        /
        <div class="">
            <?php echo get_the_date(); ?>
        </div>
    </div>
    <h4 class="py-3">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h4> 
    <div class="gap-2 flex flex-wrap">
        <?php
        $count = 0;
        $cats = get_the_category();
        foreach( $cats as $cat ){
            $count++;
            ?>
                <a href="<?php echo get_category_link( $cat->term_id ); ?>" class="border border-solid border-slate-600 rounded-full text-sm px-3 py-1 hover:bg-violet-600 hover:text-white hover:border-transparent transition-all">
                    <?php echo $cat->name; ?>
                </a>
            <?php
            if( $count == 2 ){
                break;
            }
        }
        ?>
    </div>
</div>