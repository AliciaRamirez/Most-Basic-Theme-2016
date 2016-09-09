<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>

</head>
<body>
   <div class="row">
        <div class="cute-4-tablet">
            <img src="<?php echo get_stylesheet_directory_uri()."/images/placeholder.gif";?>" alt="<?php bloginfo('name'); ?>">
        </div>

        <div class="cute-8-tablet">
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <h2><?php bloginfo('description'); ?></h2>
        </div>
    </div>
    
    <div class="row">
        <div class="cute-12-tablet">
            <?php wp_nav_menu(); //Main navigation ?>
        </div>
    </div>
