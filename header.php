<! DOCTYPE html>
<html <?php language_attributes();?>>
        <head>
                <meta charset="<?php bloginfo('charset'); ?>">
                <meta name="viewport" content="width=device-width">
                <title><?php bloginfo('name');?></title>
                <?php wp_head(); ?>
        </head>

<body <?php body_class(); ?>>

<?php if(get_field('image')): ?>
        <div class='responsive' style= 'background-image: url("<?php the_field('image') ?>");'>
<?php endif; ?>


<div class="container">
            <!-- site-header-->
            <header class="site-header">
                 
                    <nav class="site-nav">

                        <?php 
                        $args = array(
                            'theme_location' => 'primary'
                        );
                        ?>

                       <?php wp_nav_menu(  $args  ); ?>
                      <!-- <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1> -->
                    
                    </nav>
        
        </header>
        </div>
        