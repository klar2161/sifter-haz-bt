<?php get_header(); ?>



<div class="single-image">
    <a id=news href="news">NEWS</a>

</div>

<?php if   (have_posts()) :

    while (have_posts()) : the_post(); ?>

<style>

.a:link, a:visited {
color: black ;
}
</style>

   <section class="content-single">
            
            <h2><?php the_title();?></h2>
            <?php the_content();?> 
</section>

    <?php endwhile;

    else :
            echo '<p>No content found</p>';

    endif; ?>

<?php get_footer(); ?>