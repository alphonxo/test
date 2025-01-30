<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        <a href="/booking" class="btn">Book Now</a>
        <a href="/track-repair" class="btn">Track Repair</a>
    </nav>