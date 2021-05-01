<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>

</head>

<body class="col" <?php body_class(); ?> >

<div class="jj-header-page container">
    <header class="jj-header">
        <?php
            if ( function_exists('the_custom_logo') ) {
                the_custom_logo();
            }
        ?>
        <nav class="jj-nav" id="jj-nav">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    // 'container_class' => 'df-nav',
                ));
            ?>

            <a href="javascript:void(0);" class="icon" onclick="hamburger()">
                <img class="hamburger" alt="Menu">
            </a>
        </nav>
    </header>