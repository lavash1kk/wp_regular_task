
<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Site Logo">
                <?php
            }
            ?>
        </div>
        <nav class="footer-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'footer-nav-list',
                'container'      => false,
                'depth'          => 1,
            ));
            ?>
        </nav>
        <div class="footer-copyright">
            <p>Copyright © 2021 All rights reserved</p>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/scripts.js"></script>
<?php wp_footer(); ?>
</body>
</html>
<?php get_template_directory_uri(); ?>