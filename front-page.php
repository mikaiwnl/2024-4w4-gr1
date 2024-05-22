

    <?php get_header(); ?>
    <div id="entete" class="global">
        <header class="entete__header">
            
            <h1> <?php echo get_bloginfo("name") ?> </h1>
            <h2><?php   echo get_bloginfo("description") ?></h2>
            <h3>TIM-College de Maisonneuve</h3>
            <button class="button">évenement</button>
        </header>
        <?php get_template_part('gabarits/vague') ?>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Destination Populaire</h2>
            <div class="destination">
                        <!-- Séparation des composants du sigle, titre du cours et durée -->
                        <?php if (have_posts()):
                while(have_posts()): the_post(); ?>
                <?php
                $ma_carte = "carte"; 
                if (in_category('galerie')) {
                    $ma_carte = "galerie";
                }
                get_template_part("gabarits/categorie", $ma_carte); ?>

               <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </section>
    </div>
    
    <div id="evenement" class="global diagonal">
    <section>
        <h2>évenement</h2>
        <?php echo do_shortcode('[em_destination]') ?> 


        
    </section>
           
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>les destination par categorie</h2>
            <article class="flexbos">
            <?php 
            $categories = get_categories();
            foreach ($categories as $elm_categorie) {
                $nom= $elm_categorie->name;
                $description = wp_trim_words($elm_categorie->description ,10 );
                $nombre_destination = $elm_categorie->count;
                $categorie_url = get_category_link($elm_categorie->term_id);           
            ?>
     
            <div class="carte">
            <?php the_post_thumbnail('thumbnail'); ?>
                    <h3><?php echo $nom; ?></h3>
                    <p><?php echo $description; ?></p>
                    <p>Nombre de destination : <?php echo  $nombre_destination; ?></p>
                    <a href="<?php echo  $categorie_url ?>"> Voir la destination ... </a>
                    </div>
                <?php } ?>
            </article>
        </section>
        <?php get_template_part('gabarits/vague') ?>
    </div>
    <?php get_footer();?>

    