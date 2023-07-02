<div class="wptheme-gallery">
    <?php 
        $gallery = get_field( 'property_gallery' );
        foreach( $gallery as $image ){
    ?>
        <div class="item">
            <?php 
            echo wp_get_attachment_image( $image['id'], 'postcard', false, array(
                'class' => 'w-full'
            ) );
            ?>
        </div>
    <?php 
        }
    ?>
</div>
<div class="wptheme-gallery-nav">
    <?php 
        foreach( $gallery as $image ){
    ?>
        <div class="item">
            <?php 
            echo wp_get_attachment_image( $image['id'], 'thumbnail', false, array(
                'class' => 'w-full'
            ) );
            ?>
        </div>
    <?php 
        }
    ?>
</div>