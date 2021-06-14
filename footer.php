<footer class="df-footer">
    <?php
        wp_nav_menu( array(
            'theme_location' => 'footer',
            'container_class' => 'container',
        ));
        echo '<div class="container"> © ' . esc_html(get_bloginfo('name')) . ' ' . date('Y') . '</div>';
    ?>
</footer>

<?php wp_footer();?>

</body>
</html>