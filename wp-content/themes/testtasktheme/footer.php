<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Site Logo"></a>
                <?php
            }
            ?>
        </div>
        <nav class="footer-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'footer-nav-list',
                'container' => false,
                'depth' => 1,
            ));
            ?>
        </nav>

        <?php
        $copyright = get_option('footer_copyright_text');
        if ($copyright && $copyright != '') {
            echo '<div class="footer-copyright"><p>' . esc_html($copyright) . '</p></div>';
        } else {
            $current_year = date('Y');
            echo '<div class="footer-copyright"><p>' . sprintf(__('Copyright © %d All rights reserved.', 'testtasktheme'), $current_year) . '</p></div>';
        } ?>


</footer>
<?php wp_footer(); ?>
</body>
</html>
<?php get_template_directory_uri(); ?>