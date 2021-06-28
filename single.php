    <?php get_header();?>

    <?php while ( have_posts() ) : the_post(); ?>

    <main class="container single">

        <div class="single-img-container">
            <?php the_post_thumbnail(); ?>
        </div>

        <article class="single-content-container">
            <div class="single-title-container">
                <h1>
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
            <p class="single-date-container">
                Published <?php echo get_the_date( 'M j Y' ); ?>
            </p>
            <hr class="single-hr">
            <div class="single-body-container">
                <?php echo get_the_content(); ?>
            </div>
            
            <?php 
                // for multi-page posts
                $wplinkpages = array(
                    'before'            => '<br/><div class="single-post-nav">' . __( '', 'jasmine-theme' ),
                    'after'             => '</div><br/>',
                    'link_before'       => '<span class="page-link">',
                    'link_after'        => '</span>',
                    'next_or_number'    => 'next',
                    'separator'         => ' | ',
                    'nextpagelink'      => __( 'Next page &raquo', 'jasmine-theme' ),
                    'previouspagelink'  => __( '&laquo Previous page', 'jasmine-theme' ),
                );

                wp_link_pages($wplinkpages);
            ?>

            <hr class="single-hr">
            <p class="single-author">
                By: <?php echo get_the_author(); ?>
            </p>
            <hr class="single-hr">

            <?php
                echo get_the_post_navigation(
                    array(
                        'next_text' => '<div class="single-post-nav">' . 'Next Post: <div>%title</div>' . '</div>',
                        'prev_text' => '<div class="single-post-nav">' . 'Previous Post: <div>%title</div>' . '</div>',
                        'screen_reader_text' => ' ',
                        'class' => 'row',
                    )
                );
            ?>
        
        </article>

    </main>
    <?php endwhile ?>

</div>

<?php get_footer();?>