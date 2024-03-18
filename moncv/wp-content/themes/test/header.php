<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <title><?php wp_title('|') ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <?php
                wp_nav_menu([
                    'theme_location' => 'header', 
                    'menu_class' => 'test-menu'
                ]);
            ?>
        </nav>
    </header>
    <main>

    </main>
