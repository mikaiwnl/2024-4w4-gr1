<?php
/**
 * Template name: Les plus beau pays
 */
?>

<?php get_header(); ?>

<div class="mainPage" class="global">
<h1><?= get_the_title(); ?></h1>
<?php
if ( have_posts() ) : the_post(); ?>
</div>

<div class="contenuPage">
<?php the_content();?>


<!-- Gallery -->
<div class="galerie">
   
</div>

<?php get_template_part('gabarits/vague') ?>

<!-- REST API Section -->
<div class="rest-api">
    <select id="country-select">
        <!-- Options will be populated with JavaScript -->
    </select>
    <div id="destinations">
        <!-- Destinations will be populated with JavaScript -->
    </div>
</div>

<?php get_template_part('gabarits/vague') ?>

<?php endif;?>
</div>
<?php get_footer(); ?>