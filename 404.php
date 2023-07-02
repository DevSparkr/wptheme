<?php
/**
 * Error template
 * 
 * @package wptheme
 */
get_header();
?>

<div class="py-16">
    <div class="container">
        
        <div class="grid gap-3 text-center">
            <h3>
                <?php echo esc_html__( 'Oops! Error', 'wptheme' ); ?>
            </h3>
            
            
            <h1 class="text-7xl">
                <?php echo esc_html( '404' ); ?>
            </h1>
            <p>
                <?php echo esc_html__( 'Sorry page not found on the server', 'wptheme' ); ?>
            </p>
            <div class="">
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-primary">
                    <?php echo esc_html__( 'Back home', 'wptheme' ); ?>
                </a>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>