    <?php
// Template for displaying posts in index, archive, and search
?>
       
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        
        <p><?php the_time('jS \of F Y'); ?><p>
        <p>By <?php the_author_posts_link(); ?></p>
        
        <?php the_post_thumbnail('thumbnail'); ?>
        
        <?php the_content(); ?>
        </article>
        
    <?php endwhile; else : ?>
    
	<p>Sorry, no posts matched your criteria.</p>
	
    <?php endif; ?>
        <p><?php //Simpler alternative to posts_link navigation.
            //posts_nav_link('::::::', "Older", "Newer"); ?></p>
        <div class="alignleft">
            <?php previous_posts_link("Older Posts");?>
        </div>
        <div class="alignright">
            <?php next_posts_link("Newer Posts"); ?>
        </div>
 