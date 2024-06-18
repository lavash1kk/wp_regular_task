<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<?php
$main_banner = get_field('main_banner');
if ($main_banner) {
    ?>
    <div class="main-content">
        <div class="left-content">
            <div class="text-content">
                <h1><?php echo $main_banner['name']; ?></h1>
                <p><?php echo $main_banner['description']; ?></p>
            </div>
            <button onclick="location.href='<?php echo $main_banner['url_button']['url']; ?>'" type="button">
                <?php echo $main_banner['text_button']; ?></button>
        </div>
        <div class="right-content">
            <div class="imgage-content">
                <img src="<?php echo $main_banner['image']; ?>" alt="John Doe">
            </div>
        </div>
    </div>
    <?php
}
?>

<?php
$additional_banner = get_field('additional_banner');
if ($additional_banner) {
    ?>
    <div class="body-content">
        <div class="banner-content">
            <div class="banner-left-content">
                <h2 class="bannet-title"><?php echo $additional_banner['title']; ?></h2>
                <p><?php echo $additional_banner['text']; ?></p>
            </div>
            <div class="banner-right-content">
                <img src="<?php echo $additional_banner['background_image']; ?>" alt="Devices">
            </div>
        </div>
    </div>
    <?php
}
?>

<?php
$title_comments_slider = get_field('title_comments_slider');
if ($title_comments_slider) {
    $args = array(
        'post_type' => 'custom_comment',
        'posts_per_page' => -1,
        'post_status' => 'any', // Отримуємо записи з будь-яким статусом
    );
    $comments_query = new WP_Query($args);

    if ($comments_query->have_posts()) :
        ?>
        <div class="comments-block">
            <div class="slider-block">
                <div class="top-content">
                    <?php
                    $words = explode(' ', $title_comments_slider);
                    $middle_index = ceil(count($words) / 2);
                    $first_part = implode(' ', array_slice($words, 0, $middle_index));
                    $second_part = implode(' ', array_slice($words, $middle_index));
                    ?>
                    <div class="slider-title">
                        <h2><?php echo $first_part; ?> <span><?php echo $second_part; ?></span></h2>
                    </div>

                    <div class="navigation-arrows">
                        <button class="slider-nav prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
                                <path
                                    d="M19.7709 9.94711C19.7706 9.94687 19.7704 9.9466 19.7702 9.94636L15.688 5.88387C15.3821 5.57953 14.8875 5.58067 14.5831 5.88653C14.2787 6.19235 14.2799 6.68699 14.5857 6.99137L17.3265 9.71886H0.78125C0.349766 9.71886 0 10.0686 0 10.5001C0 10.9316 0.349766 11.2814 0.78125 11.2814H17.3264L14.5857 14.0089C14.2799 14.3132 14.2788 14.8079 14.5831 15.1137C14.8875 15.4196 15.3822 15.4207 15.688 15.1164L19.7702 11.0539C19.7704 11.0536 19.7706 11.0534 19.7709 11.0531C20.0769 10.7477 20.0759 10.2515 19.7709 9.94711Z"/>
                            </svg>
                        </button>

                        <button class="slider-nav next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
                                <path
                                    d="M19.7709 9.94711C19.7706 9.94687 19.7704 9.9466 19.7702 9.94636L15.688 5.88387C15.3821 5.57953 14.8875 5.58067 14.5831 5.88653C14.2787 6.19235 14.2799 6.68699 14.5857 6.99137L17.3265 9.71886H0.78125C0.349766 9.71886 0 10.0686 0 10.5001C0 10.9316 0.349766 11.2814 0.78125 11.2814H17.3264L14.5857 14.0089C14.2799 14.3132 14.2788 14.8079 14.5831 15.1137C14.8875 15.4196 15.3822 15.4207 15.688 15.1164L19.7702 11.0539C19.7704 11.0536 19.7706 11.0534 19.7709 11.0531C20.0769 10.7477 20.0759 10.2515 19.7709 9.94711Z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="slider-container">
                    <div class="slider-wrapper">
                        <?php
                        while ($comments_query->have_posts()) : $comments_query->the_post();
                            ?>

                            <div class="slide">
                                <div class="image-slide">
                                    <img src="<?php echo get_field('image'); ?>" alt="Comments">
                                </div>

                                <div class="text-slide">
                                    <p class="comment text_italic_large">
                                        “<?php echo get_field('comment'); ?>“</p>
                                    <p class="name-commentator"><?php echo get_field('author'); ?></p>
                                    <p class="job-title"><?php echo get_field('job_title'); ?></p>
                                </div>
                            </div>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="bottom-content">
                    <div class="slider-dots">
                        <?php
                        $post_count = $comments_query->found_posts;
                        for ($i = 1; $i <= $post_count; $i++):?>
                            <span class="dot" data-slide="<?php echo $i; ?>"></span>
                        <?php endfor; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php
    else :
        echo 'No custom comments found.';
    endif;
    ?>
<?php } ?>

<?php
$feedback_place = get_field('feedback_place');
if ($feedback_place) {
    ?>
    <div class="contact-section">
        <div class="contact-section-block">
            <div class="contact-info">
                <h2 class=contact-info-title><?php echo $feedback_place['title']; ?></h2>
                <div class="space"></div>
                <p class="contact-email"><a
                        href="mailto:<?php echo $feedback_place['email']; ?>"><?php echo $feedback_place['email']; ?></a>
                </p>
                <p class="contact-address"><?php echo $feedback_place['address']; ?></p>
            </div>


            <div class="contact-form">
                <form action="<?php echo get_template_directory_uri(); ?>/contact_form.php" method="post"
                      id="contact-form">
                    <label><input type="text" name="name" placeholder="<?php _e('Name', 'testtasktheme'); ?>" required></label>
                    <label><input type="email" name="email" placeholder="<?php _e('Email', 'testtasktheme'); ?>"
                                  required></label>
                    <input type="hidden" name="to_email" value="<?php echo get_option('admin_email') ?>">
                    <label><textarea name="message" placeholder="<?php _e('Write something...', 'testtasktheme'); ?>"
                                     required></textarea></label>
                    <button type="submit" class="submit-button">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.818176 1.85267L8.39603 8.58854C8.74047 8.89472 9.25952 8.89472 9.60396 8.58854L17.1818 1.85267V12.4545C17.1818 12.9566 16.7748 13.3636 16.2727 13.3636H1.72727C1.22519 13.3636 0.818176 12.9566 0.818176 12.4545V1.85267ZM2.1865 0.636353H15.8134L8.99995 6.69276L2.1865 0.636353Z"
                                  fill="white"/>
                        </svg>
                        <?php _e('Submit Message', 'testtasktheme'); ?>
                    </button>
                </form>
                <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                    <div class="message success"><?php _e('Your message has been sent.', 'testtasktheme'); ?></div>
                <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                    <div
                        class="message error"><?php _e('There was a problem sending your message. Please try again.', 'testtasktheme'); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>