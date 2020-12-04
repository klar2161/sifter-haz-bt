<?php get_header(); ?>


<div class="posts-container">


        <section class="about-info">

                <?php if(have_posts()): ?>
                
                                        <?php while(have_posts()) : the_post() ?>
                                        <h1 class="title-about"><?php the_title() ?></h1>
                                                <div class="post">
                                                
                                                <p><?php the_content() ?></p>
                                                </div>

                                        <?php endwhile; ?>
                                        <?php endif; ?> 

        </section>
 </div>
 

<?php get_footer()?>