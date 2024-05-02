<?php 
/**
 *  Le modèle single.php
 * 
 */
?>
    <?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <h2>Accueil</h2>
            <div class="cours">
                <?php

                if (have_posts()) : the_post(); ?>


                    <div class="carte">

                        <h2><?php the_title() ?></h2>
                        <p><?php the_content(); ?></p>
                        <a href="<?php the_permalink();?>" >Lire la suite  </a>
                        <p>Temperature minimum: <?php the_field('temperature_minimum') ?></p>
                        <p>Temperature maximum: <?php the_field('temperature_maximum') ?></p>
                        <p>Ville Avoisinante: <?php the_field('ville_avoisinante') ?></p>
                        <?php  ?>
                    </div>

                <?php endif; ?>
            </div>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Gallerie(h2)</h2>

            
        </section>
        <?php get_template_part('gabarits/vague') ?>
    </div>
<?php get_footer(); ?>
</body>


</html>