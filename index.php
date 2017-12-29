<!-- Header includes a top horizontal navigation bar-->
<?php get_header(); ?>

	<!--___________________________________________-->
	<!-- Implement a recent post image slider here -->
	<!--___________________________________________-->


	<!-- How to post different posts to specific pages -->
<?php

if(have_posts()):
    while (have_posts()) : the_post(); ?>

    <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php echo get_the_excerpt(); ?></p>
        <a href="<?php the_permalink();?>">Read more &raquo;</a>
    </article>

    <?php endwhile; ?>
    
    <?php else: echo '<h2> We have nothing here yet </h2>'; ?> 
        

<?php endif; ?>

    






<?php get_footer(); ?>
