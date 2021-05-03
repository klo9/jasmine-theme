    <?php get_header();?>

    <main class="container single">
        <div class="single-post-img-container">
            <?php the_post_thumbnail(); ?>
        </div>
        <article class="single-post-content-container">
            <div class="single-post-title-container">
                <?php the_title(); ?>
            </div>
            <div class="single-post-body-container">
                <?php the_content(); ?>
            </div>
        </article>

    </main>

</div>

<?php get_footer();?>