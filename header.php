<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <garbage></garbage>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
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
           <nav class="main-navigation">
            <?php wp_nav_menu(); //Main navigation ?>
            </nav>
        </div>
    </div>
