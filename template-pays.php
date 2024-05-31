<?php

/**
 * Template name: Les plus beau pays
 */
?>
<div class="header">
<?php get_template_part('gabarits/vague') ?>
<?php get_header(); ?>

</div>
<div class="mainPage global">
    
    <h1><?= get_the_title(); ?></h1>
    <?php
    if (have_posts()) : the_post();
    endif;
    ?>
</div>

<div class="contenuPage">
    <?php the_content(); ?>
</div>

<div id="evenement" class="global diagonal">
    
<?php get_template_part('gabarits/vague') ?>
    <section>
        <h2>évenement</h2>
        <?php echo do_shortcode('[mikaiwnl_destination]') ?>
        <div class="carte">
            <?php
            // permet d'afficher l'image de l'article qui a été mis en avant 
            the_post_thumbnail('thumbnail'); ?>
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_content(), 10); ?> </p>
            <?php the_category(); ?>
            <!-- ajoute un lien vers l'article   -->
         
            <a href="<?php the_permalink(); ?>">Suite</a>
        </div>
        
    </section>
</div>

<?php get_footer() ?>