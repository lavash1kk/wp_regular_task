<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title('|',true,'right');?></title>
    <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/css/styles.css">
    <?php wp_head();?>
</head>
<body>

<header class="header">
    <nav class="nav">
        <div class="logo">
            <img src="<?php get_template_directory_uri(); ?>/images/logo.svg" alt="Site Logo">
        </div>
        <ul class="nav-list">
            <li><a href="#" class="nav-item active">Home</a></li>
            <li><a href="#" class="nav-item">About</a></li>
            <li><a href="#" class="nav-item">Products</a></li>
            <li><a href="#" class="nav-item">Testimonials</a></li>
            <li><a href="#" class="nav-item">Contact</a></li>
        </ul>
    </nav>
</header>