<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>

</head>

<body class="jasmine-body" <?php body_class(); ?> >

<main class="jasmine-main">
    <header class="container side-header">
        <?php
            if ( function_exists('the_custom_logo') ) {
                the_custom_logo();
            }
        ?>
        <nav class="df-nav" id="df-nav">

            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container_class' => 'df-nav',
                ));
            ?>

            <a href="javascript:void(0);" class="icon" onclick="hamburger()">
                <img class="hamburger" alt="Menu">
            </a>
        </nav>
    </header>