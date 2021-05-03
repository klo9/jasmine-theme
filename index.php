    <?php get_header();?>

    <main class="container">
        <?php 
            $post_query = $wp_query;
            $wp_query = new WP_Query( array(
                'posts_per_page' => 3,
                'paged' => $paged
            ) );
        ?>
            
        <?php if( $wp_query->have_posts() ) : ?>

        <ul class="post-ul">

            <?php while( $wp_query->have_posts() ) : $wp_query->the_post() ?>
                <li>
                    <div class="post-thumbnail"> <?php the_post_thumbnail() ?> </div>
                    <div class="post-title"> <?php the_title() ?></div>
                    <div class="post-excerpt"> <?php the_excerpt() ?></div>
                    <div class="post-link-container">
                        <div class="post-link"> 
                            <a href="<?php the_permalink() ?>">
                                Read More
                            </a> 
                        </div>
                    </div>
                </li>
            <?php endwhile ?>
        
        </ul>
        
        <div class="post-nav row">

            <span class="prev-post"><?php echo get_previous_posts_link(__('Previous', 'textdomain')); ?></span>
            <span class="next-post"><?php echo get_next_posts_link(__('Next', 'textdomain')) ;?></span>

        </div>

        <?php else : ?>

            <div> No posts found! </div>

        <?php endif ?>
    
        <?php 

            wp_reset_postdata();
            $wp_query = $post_query; 

        ?>

    </main>
</div>

<?php get_footer();?>