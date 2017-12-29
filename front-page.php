<!-- Header includes a top horizontal navigation bar-->
<?php get_header(); ?>

	<!--___________________________________________-->
	<!-- Implement a recent post image slider here -->
	<!--___________________________________________-->


	<!-- How to post different posts to specific pages -->
<?php

if(have_posts()):
    while (have_posts()) : the_post(); ?>

    <article class="post alignTop">
        
        <?php the_content(); ?>
    </article>

    <?php endwhile; ?>
    
    <?php else: echo '<h2> We have nothing here yet </h2>'; ?> 
        

<?php endif; ?>


<div class="row" id="titleRibbon">
<h1><?php bloginfo('name'); ?> </h1>
        <h4><?php bloginfo('description'); ?> </h4>
    </div>





<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=contact' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
    



    






<?php get_footer(); ?>
