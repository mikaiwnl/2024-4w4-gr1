<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du groupe 1</title>
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>

    <?php get_header(); ?>
    <div id="entete" class="global">
        <header class="entete__header">
            
            <h1> <?php echo get_bloginfo("name") ?> </h1>
            <h2><?php   echo get_bloginfo("description") ?></h2>
            <h3>TIM-College de Maisonneuve</h3>
            <button><a href="https://www.freecodecamp.org/">Évenements</a></button>
        </header>
        <?php get_template_part('gabarits/vague') ?>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil</h2>
            <div class="destination">
                        <!-- Séparation des composants du sigle, titre du cours et durée -->
            <?php
            $args = array(
                'category_name' => 'Populaire', // replace with your category slug
                'posts_per_page' => 100, // adjuster si
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="carte">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
                        <?php the_category(); ?>
                        <a href="<?php the_permalink() ?>">Suite</a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); // reset the query 
                ?>
            <?php endif; ?>
        </div>
        </section>
    </div>
    
    <div id="evenement" class="global diagonal">
    <section>
        <h2>evenement</h2>


    </section>
           
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>les destination par categorie</h2>
            <article>
            <?php 
            $categories = get_categories();
            foreach ($categories as $elm_categorie) {
                $nom= $elm_categorie->name;
                $description = wp_trim_words($elm_categorie->description ,10 );
                $nombre_destination = $elm_categorie->count;
                $categorie_url = get_category_link($elm_categorie->term_id);           
            ?>
     
            <div class="carte">
           <h3><?php echo $nom ?></h3>
            <p><?php echo $description ?></p>
           <p>nombre de destination : <?php echo $nombre_destination ?></p>
           <a href="<?php echo $categorie_url ?>">Voir la destination...</a>
                 </div>
            <?php } ?>
            </article>
        </section>
        <?php get_template_part('gabarits/vague') ?>
    </div>

    <?php get_footer();?>

    