<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>
            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'testtasktheme'),
                    'after' => '</div>',
                ));
                ?>
            </div>
        </article>
    <?php
    endwhile;
else :
    ?>
    <p><?php esc_html_e('404', 'testtasktheme'); ?></p>
<?php
endif;

get_footer();
?>

