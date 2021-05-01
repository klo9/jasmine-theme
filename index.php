    <?php get_header();?>

    <main class="container">
        <?php
            $post_query = new WP_Query( array('posts_per_page' => 3) );

            if( $post_query->have_posts() ){
                echo '<ul>';
                while( $post_query->have_posts() ) {
                    $post_query->the_post();
                    echo '<li>';
                    echo '<div class="post-thumbnail">' . get_the_post_thumbnail() . '</div>';
                    echo '<div class="post-title">' . get_the_title() . '</div>';
                    echo '<div class="post-excerpt">' . get_the_excerpt() . '</div>'; 
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo 'No posts found!';
            }
            wp_reset_postdata();
        ?>
    </main>
</div>

<?php get_footer();?>