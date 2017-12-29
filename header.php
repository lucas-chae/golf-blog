<!DOCTYPE html>

<html <?php language_attributes();?> >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Land of Lincoln Golf. Your complete guide to golf courses in Illinois">
		<meta name="author" conent="Kiel Chirstianson">
        
        
        
        <title><?php bloginfo('title');?> </title>
		<?php wp_head(); ?>
        
        
		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600|Raleway:200,300,400,500" rel="stylesheet">

		
		
	</head>
    
    <body <?php body_class();?>>
        
        <div class="container-fluid">
            <div class="row navigation">
                <nav class="site-nav">
                    <?php
                    
                    $args = array(
                        'theme_location' => 'primary'
                    );
                    ?>                    
                    
                    <?php wp_nav_menu( $args ); ?>
                </nav>
            </div>
            
            <div class="row padding-top">
                <header class="site-header">
                    <div class="container">
                        <div class="row">
                            <?php if(! is_front_page()) : ?>
                            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                            <h5><?php bloginfo('description'); ?></h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </header>
            </div>