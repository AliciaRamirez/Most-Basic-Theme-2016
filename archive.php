<?php get_header(); ?>

<div class="row">
    <div class="cute-8-tablet">
        <h1>Archive.php</h1>
        
        <?php if (is_category()):?>
        <h1>Browsing category: <?php single_cat_title(); ?></h1>
        <?php else: // default title for archive?>
        <h1><?php the_archive_title(); ?></h1>
        <?php endif; ?>

<?php 
        //Load loop.php here
        get_template_part('loop');
?>
    </div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>