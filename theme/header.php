<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="navbar contenedor">
            <?php
            the_custom_logo();
            if (!has_custom_logo()) {
                echo '<a href="' . home_url() . '"><img class="custom-logo" src="https://dummyimage.com/128x64/000/fff" alt="logo"></a>';
            }
            ?>
            <?php wp_nav_menu() ?>
        </div>
    </header>