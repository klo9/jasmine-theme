    <?php get_header();?>

    <div class="container">
        <?php
            $post_query = new WP_Query( array('posts_per_page' => 3) );

            if( $post_query->have_posts() ){
                echo '<ul>';
                while( $post_query->have_posts() ) {
                    $post_query->the_post();
                    echo '<li>' . get_the_title() . '</li>';
                }
                echo '</ul>';
            } else {
                echo 'No posts found!';
            }
            wp_reset_postdata();
        ?>
    </div>
</main>

<?php get_footer();?>