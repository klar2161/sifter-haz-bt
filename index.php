<?php get_header(); ?>




<div class="info-news-title">
            <h1 class="info-news-title">The latest news 
and what is happening 
in Sifter ház bt.</h1>                  
                              
</div>

        <div class="white–space-container">
                 
        </div>
<style> #menu-primary-menu-links
{
    background-color: white;
    
}
.a:link, a:visited {
    color: black ;
}

</style>

<div class="posts-container">
<div class="line"></div>

       
        </div>
                <?php

        if   (have_posts()) :
        while (have_posts()) : the_post(); ?>

        <section class="post page">
       
                
                <div class="post-container">
                        <div class=title-news><?php the_title(); ?></div>
                        <!-- column-container -->
                        <div class="column-container clearfix">
                                <div class="container-box">
                                <!-- title-column -->
                                <div class="title-column">
                                        
                                </div><!-- /title-column -->
                                
                                <!-- text-column -->
                                <div class="background-news">
                                <div class="text-column">
                                        <?php the_content(); ?>
                                </div></div><!-- /text-column -->
                                </div>
                        </div><!-- /column-container -->
                </div>
		
        </section>
        <!-- <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                <p class="post-info"><?php the_time('d/m/y');?></p>

                <?php the_content('Continue reading &raquo;');?> 
        </article> -->

    <?php endwhile;

    else :
            echo '<p>No content found</p>';

    endif;
        ?>
</div>

<?php get_footer()?>




