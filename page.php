    <?php 

    get_header();

    while ( have_posts() ): the_post();

    ?>

    <main class="container page">
        
        <div>
            <div class="page-title-container">
                <h1>
                    <?php echo get_the_title(); ?>
                </h1>
            </div>

            <article class="page-content-container">

                <div class="page-body-container">
                    <?php echo get_the_content(); ?>
                </div>

            </article>
        </div>

    </main>

    <?php endwhile ?>

</div>

<?php get_footer(); ?>