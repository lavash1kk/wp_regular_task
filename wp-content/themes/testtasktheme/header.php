<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title('|',true,'right');?></title>
    <?php wp_head();?>
</head>
<body>

<header class="header">
    <nav class="nav">
        <div class="logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Site Logo" ></a>
            <?php
            }
            ?>
        </div>
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-list',
                'container'      => false,
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ));
        }
        ?>
    </nav>
</header>