<?php
/**
 * Template name: Les plus beau pays
 */
?>

<?php get_header(); ?>

<main class="pagePays">
    
<?php

if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>les meilleur destination</p>
</main><!-- #main -->
<div>
<?php endif;?>

<?php get_template_part('gabarits/vague') ?>

</div>
<?php
get_footer();