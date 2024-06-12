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
        $page = get_page_by_path('home');
        if ($page) {
        $page_id = $page->ID;
        $copyright = get_field('copyright', $page_id);
        if ($copyright) {
        ?>
        <div class="footer-copyright">
            <p><?php echo $copyright ?></p>
        </div>
    </div>

    <?php }
    } ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
<?php get_template_directory_uri(); ?>