
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
            <ul class="footer-nav-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
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