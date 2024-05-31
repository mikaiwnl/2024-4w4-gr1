<?php 
/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>

<div id="accueil" class="global">
    <section class="accueil__section">
    <h2>Résultat de la recherche</h2>
    <div class="flexbox">  
    
  <?php if (have_posts()):
        while(have_posts()): the_post(); 
        ?>
        <div class="carte">
            <h5><?php the_title() ?></h5> 
            <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
        </div>
       <?php endwhile; ?>
       <?php else: ?>
        <?php get_template_part( '404' ); ?>
    <?php endif; ?>
  </div>
</div>

<!-- /////////////////////////////////////// footer -->
<?php get_footer() ?>