<div class="bg-gray-200 py-10">
    <div class="container">
        <div class="grid grid-cols-4 gap-7">
            <div class="">
                <?php dynamic_sidebar( 'footer_widget1' ); ?>
            </div>
            <div class="">
                <?php dynamic_sidebar( 'footer_widget2' ); ?>
            </div>
            <div class="">
                <?php dynamic_sidebar( 'footer_widget3' ); ?>
            </div>
            <div class="">
                <?php dynamic_sidebar( 'footer_widget4' ); ?>
            </div>
        </div>
    </div>
</div>

<div class="py-4 bg-indigo-950 text-white">
    <div class="container">
        <div class="flex justify-between">
            <p>&copy; All rights reserved 2023. Developed by FairThemes.</p>
            <?php
                wp_nav_menu(array(	
                    'theme_location'	=> 'footer_menu',
                    'menu_class'		=> 'flex flex-wrap gap-x-5'
                ));
            ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>