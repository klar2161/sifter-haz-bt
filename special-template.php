<?php

/* Template Name: Special Layout
*/
get_header(); ?>
<div class="space-between"></div>
<h2 class="title-pages"><?php the_title();?></h2>

<?php if   (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section class="content-special"></section>
    <article class="post page">
           
            <?php the_content();?> 
    </article>

    <?php endwhile; ?>

   <?php else : 
            echo '<p>No content found</p>';

    endif; ?>

 <div class="footer-section">
         <?php if(get_field('footer_image')): ?>
        <div class='special-footer-image' style= 'background-image: url("<?php the_field('footer_image') ?>");'>
<?php endif; ?>

</div>

<?php get_footer(); ?>

