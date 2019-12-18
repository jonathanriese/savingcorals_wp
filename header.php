<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins
 *
 * @package saving corals
 * @subpackage Template
 */
?>

<html>

    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title><?php bloginfo('title'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php wp_head(); ?>

    </head>

    <body>
        <nav>
            <a href="<?php echo home_url('/'); ?>" class="logo">saving corals</a>
            <div class="menu-icon">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            </div>
        </nav>
        <div class="menu-overlay">
            <?php wp_nav_menu(); ?>
            <div class="overlay-footer">
                <div>2019</div>
                <div>created by <a href="http://www.jonathanriese.com">Jonathan Riese</a></div>
            </div>
        </div>