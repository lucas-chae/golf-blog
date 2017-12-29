<footer>
     <nav class="site-nav">
                    <?php
                    
                    $args = array(
                        'theme_location' => 'footer'
                    );
                    ?>                    
                    
                    <?php wp_nav_menu( $args ); ?>
                </nav>
    
	<p> this is my footer </p>
</footer>

<?php wp_footer(); ?>

</body>

</footer>