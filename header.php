<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet"> 
    

    <?php wp_head();?>

</head>

<body class="col" <?php body_class(); ?> >

<?php wp_body_open(); ?>

<div class="jj-header-page container" id="jj-header-page">
    <header class="jj-header" id="jj-header">
        <?php
            // if ( function_exists('the_custom_logo') ) {
            //     the_custom_logo();
            // } else {
                // echo '<h1 class="header-title">' . esc_html(get_bloginfo('name')) . '</h1>';
            // }
        ?>
        <div>
            <h1 id="header-title">
                <?php echo esc_html(get_bloginfo('name')); ?>
            </h1>
        </div>
        <nav class="jj-nav" id="jj-nav">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    // 'container_class' => 'df-nav',
                ));
            ?>

            <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                    <?php dynamic_sidebar( 'home_right_1' ); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>

            <a href="javascript:void(0);" class="icon" onclick="hamburger()">
                <img class="hamburger" alt="Menu">
            </a>
        </nav>
    </header>