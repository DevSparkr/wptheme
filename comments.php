<h2 class="comments-title">
        <?php
            $comments_num = get_comments_number();
            if ( 1 == $comments_num ) {
                echo esc_html__( "1 Comment", "wptheme" );
            } else {
                echo $comments_num . " " . esc_html__( "Comments", "newsportal" );
            }
        ?>
    </h2>
<?php 

comment_form();
wp_list_comments( );
the_comments_pagination(array(
    'prev_text' => '<',
    'next_text' => '>'
));

?>
