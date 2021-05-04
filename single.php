    <?php get_header();?>

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
                <?php echo get_the_date( 'M j Y' ); ?>
            </p>
            <hr class="single-hr">
            <div class="single-body-container">
                <?php echo get_the_content(); ?>
            </div>
            <p>
                <?php echo get_the_author(); ?>
            </p>
        </article>

    </main>

</div>

<?php get_footer();?>