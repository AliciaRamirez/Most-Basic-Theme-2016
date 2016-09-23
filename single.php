<?php get_header(); ?>
<div class="row">
    <div class="cute-8-tablet">
        <h1>Single.php</h1>
        
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        
        <p><?php the_time('jS \of F Y'); ?><p>
        <p>By <?php the_author_posts_link(); ?></p>
        
        <?php the_post_thumbnail('thumbnail'); ?>
        
        <?php the_content(); ?>
        
        <hr>
        
        <p>Categories: <?php the_category(', '); ?></p>
         
         <?php comments_template(); ?>
        </article>
        
    <?php endwhile; else : ?>
    
	<p>Sorry, no posts matched your criteria.</p>
	
    <?php endif; ?>
        <p><?php posts_nav_link('::::::', "Older", "Newer"); ?></p>
        <div class="alignleft">
            <?php previous_posts_link("Older Posts");?>
        </div>
        <div class="alignright">
            <?php next_posts_link("Newer Posts"); ?>
        </div>
    </div>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>